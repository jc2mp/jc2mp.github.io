use std::{
    collections::{BTreeMap, BTreeSet},
    fs,
    path::Path,
    sync::OnceLock,
};

use serde::{Deserialize, Serialize};
use template::{TemplateToInstantiate, Templates};
use wikitext_simplified::{Spanned, WikitextSimplifiedNode, wikitext_util::parse_wiki_text_2};

mod page_context;
use page_context::PageContext;

mod syntax;
mod template;
mod util;

use util::empty_spanned;

const WIKI_DIRECTORY: &str = "wiki";

static SYNTAX_HIGHLIGHTER: OnceLock<syntax::SyntaxHighlighter> = OnceLock::new();

#[derive(Debug, Default)]
struct GeneratedPages {
    // Maps directory path (relative to wiki root) to set of page names (without .html)
    pages_by_directory: BTreeMap<String, BTreeSet<String>>,
    // Search index
    search_index: SearchIndex,
}

#[derive(Debug, Default, Serialize, Deserialize)]
struct SearchIndex {
    /// List of all pages
    pages: Vec<PageMetadata>,
    /// Inverted index: word -> list of page indices
    words: BTreeMap<String, Vec<usize>>,
}

#[derive(Debug, Clone, Serialize, Deserialize)]
struct PageMetadata {
    /// Display title of the page
    title: String,
    /// URL path to the page
    url: String,
    /// Section headings in the page
    headings: Vec<String>,
}

fn main() -> anyhow::Result<()> {
    let output_dir = Path::new("output");
    let _ = fs::remove_dir_all(output_dir);
    fs::create_dir_all(output_dir)?;

    // Copy the contents of the `static` folder into the output directory
    copy_files_recursively(Path::new("static"), output_dir)?;

    // Initialize Tailwind and generate CSS
    let tailwind =
        paxhtml_tailwind::Tailwind::download(paxhtml_tailwind::RECOMMENDED_VERSION, true)?;
    let tailwind_css = tailwind.generate_from_file(Path::new("src/tailwind.css"))?;
    fs::create_dir_all(output_dir.join("style"))?;
    fs::write(output_dir.join("style/tailwind.css"), tailwind_css)?;

    // Generate wiki
    generate_wiki(Path::new(WIKI_DIRECTORY), &output_dir.join(WIKI_DIRECTORY))?;

    Ok(())
}

fn copy_files_recursively(src: &Path, dst: &Path) -> std::io::Result<()> {
    for entry in fs::read_dir(src)? {
        let entry = entry?;
        let path = entry.path();
        let new_path = dst.join(path.file_name().unwrap());

        if path.is_dir() {
            fs::create_dir_all(&new_path)?;
            copy_files_recursively(&path, &new_path)?;
        } else {
            fs::copy(&path, &new_path)?;
        }
    }

    Ok(())
}

fn generate_missing_index_pages(dst_root: &Path, generated: &GeneratedPages) -> anyhow::Result<()> {
    // Collect all directory paths that need index pages
    let mut dirs_needing_index = BTreeSet::new();

    // For each directory that has pages, check if its parent has a corresponding page
    for dir_path in generated.pages_by_directory.keys() {
        if dir_path.is_empty() {
            continue;
        }

        // Split the path to get parent and directory name
        let parts: Vec<&str> = dir_path.split('/').collect();
        let dir_name = parts.last().unwrap();
        let parent_path = if parts.len() == 1 {
            String::new()
        } else {
            parts[..parts.len() - 1].join("/")
        };

        // Check if parent directory has a page with this directory's name
        let parent_pages = generated
            .pages_by_directory
            .get(&parent_path)
            .cloned()
            .unwrap_or_default();

        if !parent_pages.contains(*dir_name) {
            // This directory doesn't have a corresponding page in its parent
            dirs_needing_index.insert(dir_path.clone());
        }
    }

    // Generate index pages for all directories that need them
    for dir_path in dirs_needing_index {
        let parts: Vec<&str> = dir_path.split('/').collect();
        let dir_name = parts.last().unwrap();
        let parent_path = if parts.len() == 1 {
            String::new()
        } else {
            parts[..parts.len() - 1].join("/")
        };

        generate_index_page(dst_root, &parent_path, dir_name, generated)?;
    }

    Ok(())
}

fn generate_index_page(
    dst_root: &Path,
    parent_path: &str,
    dir_name: &str,
    generated: &GeneratedPages,
) -> anyhow::Result<()> {
    let full_path = if parent_path.is_empty() {
        dir_name.to_string()
    } else {
        format!("{}/{}", parent_path, dir_name)
    };

    // Get all children (pages and subdirectories) in this directory
    let pages_in_dir = generated
        .pages_by_directory
        .get(&full_path)
        .cloned()
        .unwrap_or_default();

    // Get all subdirectories
    let mut subdirs = BTreeSet::new();
    for other_dir in generated.pages_by_directory.keys() {
        if other_dir.starts_with(&full_path) && other_dir != &full_path {
            let remainder = other_dir
                .strip_prefix(&full_path)
                .and_then(|s| s.strip_prefix('/'))
                .unwrap_or(other_dir);

            if let Some(first_component) = remainder.split('/').next()
                && !first_component.is_empty()
                && !pages_in_dir.contains(first_component)
            {
                subdirs.insert(first_component.to_string());
            }
        }
    }

    // Combine pages and subdirectories, sorted alphabetically
    let mut all_children: BTreeSet<String> = pages_in_dir.clone();
    all_children.extend(subdirs);

    if all_children.is_empty() {
        return Ok(());
    }

    // Generate the HTML content
    let title = full_path.replace('_', " ");
    let mut items = Vec::new();
    for child in all_children {
        let display_name = child.replace('_', " ");
        let link_path = format!("{}/{}", full_path, child);
        items.push(paxhtml::html! {
            <li class="ml-4">
                <a class="text-blue-600 hover:text-blue-800 hover:underline" href={page_title_to_route_path(&link_path).url_path()}>
                    {display_name}
                </a>
            </li>
        });
    }

    let content = paxhtml::html! {
        <ul class="list-disc list-inside">#{items}</ul>
    };

    let document = layout(&title, content);

    // Write the document
    let route_path = page_title_to_route_path(&full_path);
    document.write_to_route(dst_root, route_path.clone())?;

    // Also create a redirect from full_path/index.html to full_path.html
    // This allows both /category and /category/ to work
    let redirect_doc = redirect(&route_path.url_path());
    let redirect_route = paxhtml::RoutePath::new(
        route_path
            .url_path()
            .trim_start_matches('/')
            .trim_end_matches(".html")
            .split('/'),
        Some("index.html".to_string()),
    );
    redirect_doc.write_to_route(dst_root, redirect_route)?;

    Ok(())
}

fn generate_wiki(src: &Path, dst: &Path) -> anyhow::Result<()> {
    fs::create_dir_all(dst)?;

    let pwt_configuration = wikitext_simplified::wikitext_util::wikipedia_pwt_configuration();
    let loader = template::FileSystemLoader::new(src)?;
    let mut templates = Templates::new(loader, &pwt_configuration)?;

    // Initialize syntax highlighter
    let highlighter = SYNTAX_HIGHLIGHTER.get_or_init(syntax::SyntaxHighlighter::default);

    // Generate syntax highlighting CSS
    let syntax_css = highlighter.theme_css();
    let output_dir = dst.parent().unwrap();
    fs::create_dir_all(output_dir.join("style"))?;
    fs::write(output_dir.join("style/syntax.css"), syntax_css)?;

    let mut generated = GeneratedPages::default();
    generate_wiki_folder(
        &mut templates,
        src,
        dst,
        dst,
        &pwt_configuration,
        "",
        &mut generated,
    )?;

    // Generate missing index pages
    generate_missing_index_pages(output_dir, &generated)?;

    // Write search index
    let search_index_json = serde_json::to_string(&generated.search_index)?;
    fs::write(output_dir.join("search-index.json"), search_index_json)?;

    redirect(&page_title_to_route_path("Main_Page").url_path())
        .write_to_route(dst, paxhtml::RoutePath::new([], "index.html".to_string()))?;

    Ok(())
}

fn generate_wiki_folder(
    templates: &mut Templates,
    src: &Path,
    dst_root: &Path,
    dst: &Path,
    pwt_configuration: &parse_wiki_text_2::Configuration,
    relative_path: &str,
    generated: &mut GeneratedPages,
) -> anyhow::Result<()> {
    fs::create_dir_all(dst)?;

    let files = fs::read_dir(src)?;
    for file in files {
        let file = file?;
        let path = file.path();

        if path.is_dir() {
            let dir_name = path.file_name().unwrap().to_str().unwrap();
            let new_relative_path = if relative_path.is_empty() {
                dir_name.to_string()
            } else {
                format!("{}/{}", relative_path, dir_name)
            };
            generate_wiki_folder(
                templates,
                &path,
                dst_root,
                &dst.join(path.file_name().unwrap()),
                pwt_configuration,
                &new_relative_path,
                generated,
            )?;
            continue;
        }
        let content = fs::read_to_string(&path)?;
        let simplified =
            wikitext_simplified::parse_and_simplify_wikitext(&content, pwt_configuration).map_err(
                |e| {
                    anyhow::anyhow!(
                        "Failed to parse and simplify wiki file {}: {e:?}",
                        path.display()
                    )
                },
            )?;

        let output_json = dst.join(path.with_extension("json").file_name().unwrap());
        fs::write(&output_json, serde_json::to_string_pretty(&simplified)?)?;

        let output_html = output_json.with_extension("html");
        let output_html_rel = output_html.strip_prefix(dst_root).unwrap();

        let route_path = paxhtml::RoutePath::new(
            output_html_rel.parent().iter().flat_map(|p| {
                p.components().filter_map(|comp| match comp {
                    std::path::Component::Normal(name) => name.to_str(),
                    _ => None,
                })
            }),
            output_html_rel
                .file_name()
                .and_then(|s| s.to_str())
                .map(|s| s.to_string()),
        );

        let document = if let [node] = simplified.as_slice()
            && let WikitextSimplifiedNode::Redirect { target } = &node.value
        {
            redirect(&page_title_to_route_path(target).url_path())
        } else {
            let sub_page_name = path
                .with_extension("")
                .file_name()
                .unwrap()
                .to_string_lossy()
                .to_string();

            let page_context = PageContext {
                input_path: path.clone(),
                title: output_html_rel
                    .with_extension("")
                    .to_str()
                    .map(|s| s.to_string())
                    .unwrap()
                    .replace("\\", "/")
                    .replace("_", " "),
                route_path: route_path.clone(),
                sub_page_name,
            };

            // Extract search data from the page
            let mut all_text = String::new();
            let mut all_headings = Vec::new();
            for node in &simplified {
                let (text, headings) = extract_search_data(&node.value);
                all_text.push_str(&text);
                all_text.push(' ');
                all_headings.extend(headings);
            }

            // Add to search index
            let page_idx = generated.search_index.pages.len();
            generated.search_index.pages.push(PageMetadata {
                title: page_context.title.clone(),
                url: format!("/{}{}", WIKI_DIRECTORY, route_path.url_path()),
                headings: all_headings,
            });

            // Tokenize and index words
            let words = tokenize_text(&all_text);
            for word in words {
                generated
                    .search_index
                    .words
                    .entry(word)
                    .or_default()
                    .push(page_idx);
            }

            // Also index words from title and headings (with higher weight by duplicating)
            for word in tokenize_text(&page_context.title) {
                let entry = generated.search_index.words.entry(word).or_default();
                // Add title words multiple times for higher ranking
                for _ in 0..3 {
                    entry.push(page_idx);
                }
            }

            layout(
                &page_context.title,
                paxhtml::Element::from_iter(simplified.iter().map(|node| {
                    convert_wikitext_to_html(
                        templates,
                        pwt_configuration,
                        &node.value,
                        &page_context,
                    )
                })),
            )
        };

        document.write_to_route(dst_root, route_path)?;

        // Track this generated page
        let page_name = path
            .with_extension("")
            .file_name()
            .unwrap()
            .to_string_lossy()
            .to_string();
        generated
            .pages_by_directory
            .entry(relative_path.to_string())
            .or_default()
            .insert(page_name);
    }

    Ok(())
}

fn layout(title: &str, inner: paxhtml::Element) -> paxhtml::Document {
    let mut links = vec![(
        "Home",
        paxhtml::RoutePath::new(
            std::iter::once(WIKI_DIRECTORY),
            Some("Main_Page.html".to_string()),
        ),
    )];

    if title != "Main Page" {
        let mut components = vec![];
        for component in title.split('/') {
            let route_path = paxhtml::RoutePath::new(
                std::iter::once(WIKI_DIRECTORY).chain(components.iter().copied()),
                Some(format!("{}.html", component.replace(" ", "_"))),
            );
            links.push((component, route_path));
            components.push(component);
        }
    }

    let mut breadcrumbs = vec![];
    for (idx, (component, route_path)) in links.into_iter().enumerate() {
        if idx > 0 {
            breadcrumbs.push(paxhtml::html! { <span class="text-gray-400">" / "</span> });
        }
        breadcrumbs.push(paxhtml::html! { <a class="text-blue-600 hover:text-blue-800 hover:underline" href={route_path.url_path()}>{component}</a> });
    }

    paxhtml::Document::new([
        paxhtml::builder::doctype(["html".into()]),
        paxhtml::html! {
            <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>{format!("JC2-MP Documentation - {title}")}</title>
                <link href="/style/tailwind.css" rel="stylesheet" />
                <link href="/style/syntax.css" rel="stylesheet" />
            </head>
            <body class="bg-gray-100">
                <nav class="bg-gray-900 text-white mb-4">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex items-center justify-between h-16">
                            <div class="flex items-center">
                                <a class="text-xl font-semibold" href="/wiki">"Just Cause 2: Multiplayer"</a>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="relative">
                                    <input
                                        r#type="text"
                                        id="wiki-search-input"
                                        placeholder="Search documentation..."
                                        class="w-64 px-4 py-2 rounded-lg bg-gray-800 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    />
                                    <div
                                        id="wiki-search-results"
                                        class="hidden absolute top-full mt-2 w-96 bg-white text-gray-900 rounded-lg shadow-xl max-h-96 overflow-y-auto z-50"
                                    ></div>
                                </div>
                                <a class="text-gray-300 hover:text-white px-3 py-2" href="/">"Website"</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <h1 class="text-3xl font-bold border-b-2 border-gray-300 pb-2 mb-6">#{breadcrumbs}</h1>
                        <div class="space-y-4">
                            {inner}
                        </div>
                    </div>
                </div>
                <script src="/js/search.js"></script>
            </body>
            </html>
        },
    ])
}

fn convert_wikitext_to_html(
    templates: &mut Templates,
    pwt_configuration: &parse_wiki_text_2::Configuration,
    node: &WikitextSimplifiedNode,
    page_context: &PageContext,
) -> paxhtml::Element {
    use WikitextSimplifiedNode as WSN;
    use paxhtml::html;

    fn parse_attributes_from_wsn(
        templates: &mut Templates,
        pwt_configuration: &parse_wiki_text_2::Configuration,
        page_context: &PageContext,
        attributes_context: &str,
        attributes: &[WSN],
    ) -> Vec<paxhtml::Attribute> {
        if attributes.is_empty() {
            return vec![];
        }
        // Instantiate the attributes before extracting the text
        let attributes = templates.instantiate(
            pwt_configuration,
            TemplateToInstantiate::Node(WikitextSimplifiedNode::Fragment {
                children: attributes
                    .iter()
                    .map(|n| empty_spanned(n.clone()))
                    .collect(),
            }),
            &[],
            page_context,
        );
        let WSN::Fragment {
            children: attributes,
        } = attributes
        else {
            panic!(
                "Table {attributes_context} attributes was not a fragment after instantiation; got {attributes:?} in {page_context}"
            );
        };

        // Merge all text nodes into a single string
        let merged_text = attributes
            .iter()
            .filter_map(|node| {
                if let WSN::Text { text } = &node.value {
                    Some(text.as_str())
                } else {
                    None
                }
            })
            .collect::<Vec<_>>()
            .join("");

        if merged_text.is_empty() && !attributes.is_empty() {
            panic!(
                "Table {attributes_context} attributes must contain text; got {attributes:?} in {page_context}"
            );
        }

        paxhtml::Attribute::parse_from_str(&merged_text).unwrap()
    }

    fn parse_optional_attributes_from_wsn(
        templates: &mut Templates,
        pwt_configuration: &parse_wiki_text_2::Configuration,
        page_context: &PageContext,
        attributes_context: &str,
        attributes: &Option<Vec<Spanned<WSN>>>,
    ) -> Vec<paxhtml::Attribute> {
        attributes
            .as_ref()
            .map(|attributes| {
                let unwrapped: Vec<WSN> = attributes.iter().map(|s| s.value.clone()).collect();
                parse_attributes_from_wsn(
                    templates,
                    pwt_configuration,
                    page_context,
                    attributes_context,
                    &unwrapped,
                )
            })
            .unwrap_or_default()
    }

    let convert_children =
        |templates: &mut Templates, children: &[Spanned<WikitextSimplifiedNode>]| {
            paxhtml::Element::from_iter(
                children
                    .iter()
                    .skip_while(|node| matches!(node.value, WSN::ParagraphBreak | WSN::Newline))
                    .map(|node| {
                        convert_wikitext_to_html(
                            templates,
                            pwt_configuration,
                            &node.value,
                            page_context,
                        )
                    }),
            )
        };

    match node {
        WSN::Fragment { children } => convert_children(templates, children),
        WSN::Template { name, parameters } => {
            let template = templates.instantiate(
                pwt_configuration,
                TemplateToInstantiate::Name(name),
                parameters,
                page_context,
            );
            convert_wikitext_to_html(templates, pwt_configuration, &template, page_context)
        }
        tpu @ WSN::TemplateParameterUse { .. } => {
            html! { <>{tpu.to_wikitext()}</> }
        }
        WSN::Heading { level, children } => {
            let class = match level {
                2 => "text-2xl font-bold mt-8 mb-4",
                3 => "text-xl font-bold mt-6 mb-3",
                4 => "text-lg font-semibold mt-4 mb-2",
                _ => "font-semibold mt-4 mb-2",
            };
            paxhtml::builder::tag(
                format!("h{level}"),
                paxhtml::Attribute::parse_from_str(&format!("class=\"{}\"", class)).unwrap(),
                false,
            )(convert_children(templates, children))
        }
        WSN::Link { text, title } => {
            html! {
                <a class="text-blue-600 hover:text-blue-800 hover:underline" href={page_title_to_route_path(title).url_path()}>
                    {paxhtml::Element::Raw { html: text.to_string() }}
                </a>
            }
        }
        WSN::ExtLink { link, text } => {
            html! {
                <a class="text-blue-600 hover:text-blue-800 hover:underline" href={link}>
                    {paxhtml::Element::Raw { html: text.as_ref().unwrap_or(link).to_string() }}
                </a>
            }
        }
        WSN::Bold { children } => {
            html! { <strong>{convert_children(templates, children)}</strong> }
        }
        WSN::Italic { children } => {
            html! { <em>{convert_children(templates, children)}</em> }
        }
        WSN::Blockquote { children } => {
            html! { <blockquote class="border-l-4 border-gray-300 pl-4 py-2 my-4 italic text-gray-700">{convert_children(templates, children)}</blockquote> }
        }
        WSN::Superscript { children } => {
            html! { <sup>{convert_children(templates, children)}</sup> }
        }
        WSN::Subscript { children } => {
            html! { <sub>{convert_children(templates, children)}</sub> }
        }
        WSN::Small { children } => {
            html! { <small>{convert_children(templates, children)}</small> }
        }
        WSN::Preformatted { children } => {
            html! { <pre class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto my-4">{convert_children(templates, children)}</pre> }
        }
        WSN::Tag {
            name,
            attributes,
            children,
        } => {
            if name == "syntaxhighlight" {
                // Extract language from attributes string before parsing, defaulting to Lua
                let attrs_str = attributes.as_deref().unwrap_or_default();
                let lang = if attrs_str.contains("lang=") || attrs_str.contains("language=") {
                    // Simple extraction of lang attribute value
                    attrs_str.split_whitespace().find_map(|part| {
                        if let Some(value) = part.strip_prefix("lang=") {
                            Some(value.trim_matches('"').trim_matches('\''))
                        } else if let Some(value) = part.strip_prefix("language=") {
                            Some(value.trim_matches('"').trim_matches('\''))
                        } else {
                            None
                        }
                    })
                } else {
                    None
                };

                // Get the code text
                let code = if let [node] = children.as_slice()
                    && let WSN::Text { text } = &node.value
                {
                    text.trim()
                } else {
                    // If not simple text, fall back to plain rendering
                    let parsed_attributes = paxhtml::Attribute::parse_from_str(attrs_str).unwrap();
                    return html! { <pre {parsed_attributes}><code>{convert_children(templates, children)}</code></pre> };
                };

                // Use syntax highlighter
                if let Some(highlighter) = SYNTAX_HIGHLIGHTER.get() {
                    match highlighter.highlight_code(lang, code) {
                        Ok(highlighted) => {
                            html! { <pre class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto my-4"><code>{highlighted}</code></pre> }
                        }
                        Err(_) => {
                            // Fallback to plain text if highlighting fails
                            let parsed_attributes =
                                paxhtml::Attribute::parse_from_str(attrs_str).unwrap();
                            html! { <pre class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto my-4" {parsed_attributes}><code>{code}</code></pre> }
                        }
                    }
                } else {
                    // Fallback if highlighter not initialized
                    let parsed_attributes = paxhtml::Attribute::parse_from_str(attrs_str).unwrap();
                    html! { <pre class="bg-gray-900 text-gray-100 p-4 rounded-lg overflow-x-auto my-4" {parsed_attributes}><code>{code}</code></pre> }
                }
            } else {
                let parsed_attributes =
                    paxhtml::Attribute::parse_from_str(attributes.as_deref().unwrap_or_default())
                        .unwrap();
                let children = convert_children(templates, children);
                paxhtml::builder::tag(name.to_string(), parsed_attributes, false)(children)
            }
        }
        WSN::Text { text } => paxhtml::Element::Raw {
            html: text.to_string(),
        },
        WSN::Table {
            attributes,
            captions,
            rows,
        } => {
            // Add Bootstrap classes to table attributes
            let mut modified_attributes = attributes.clone();

            // Add Bootstrap table classes if not already present
            let has_class_attr = if !attributes.is_empty() {
                // Check if there's already a class attribute by instantiating and checking text
                let instantiated = templates.instantiate(
                    pwt_configuration,
                    TemplateToInstantiate::Node(WikitextSimplifiedNode::Fragment {
                        children: attributes
                            .iter()
                            .map(|n| empty_spanned(n.value.clone()))
                            .collect(),
                    }),
                    &[],
                    page_context,
                );
                if let WSN::Fragment { children } = instantiated {
                    if let Some(node) = children.first()
                        && let WSN::Text { text } = &node.value
                    {
                        text.contains("class=")
                    } else {
                        false
                    }
                } else {
                    false
                }
            } else {
                false
            };

            if !has_class_attr {
                // Add Tailwind table classes
                modified_attributes.push(empty_spanned(WSN::Text {
                    text: " class=\"min-w-full divide-y divide-gray-200 border border-gray-300\""
                        .to_string(),
                }));
            }

            let unwrapped_attributes: Vec<WSN> = modified_attributes
                .iter()
                .map(|s| s.value.clone())
                .collect();
            let attributes = parse_attributes_from_wsn(
                templates,
                pwt_configuration,
                page_context,
                "main",
                &unwrapped_attributes,
            );
            html! {
                <table {attributes}>
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            #{captions
                                .iter()
                                .map(|caption| {
                                    let attributes = parse_optional_attributes_from_wsn(
                                        templates,
                                        pwt_configuration,
                                        page_context,
                                        "caption",
                                        &caption.attributes,
                                    );
                                    html! {
                                        <th class="px-4 py-2 text-left" {attributes}>
                                            {convert_children(templates, &caption.content)}
                                        </th>
                                    }
                                })
                            }
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        #{rows
                            .iter()
                            .enumerate()
                            .map(|(idx, row)| {
                                let unwrapped_row_attrs: Vec<WSN> = row.attributes.iter().map(|s| s.value.clone()).collect();
                                let attributes = parse_attributes_from_wsn(
                                    templates,
                                    pwt_configuration,
                                    page_context,
                                    "row",
                                    &unwrapped_row_attrs,
                                );
                                let row_class = if idx % 2 == 0 { "bg-white" } else { "bg-gray-50" };
                                html! {
                                    <tr class={format!("{} hover:bg-gray-100", row_class)} {attributes}>
                                        #{row.cells
                                            .iter()
                                            .map(|cell| {
                                                let attributes = parse_optional_attributes_from_wsn(
                                                    templates,
                                                    pwt_configuration,
                                                    page_context,
                                                    "cell",
                                                    &cell.attributes,
                                                );
                                                html! {
                                                    <td class="px-4 py-2" {attributes}>
                                                        {convert_children(templates, &cell.content)}
                                                    </td>
                                                }
                                            })
                                        }
                                    </tr>
                                }
                            })
                        }
                    </tbody>
                </table>
            }
        }
        WSN::OrderedList { items } => {
            html! {
                <ol class="list-decimal list-inside">
                    #{items
                        .iter()
                        .map(|i| {
                            html! { <li class="ml-4">{convert_children(templates, &i.content)}</li> }
                        })
                    }
                </ol>
            }
        }
        WSN::UnorderedList { items } => {
            html! {
                <ul class="list-disc list-inside">
                    #{items
                        .iter()
                        .map(|i| {
                            html! { <li class="ml-4">{convert_children(templates, &i.content)}</li> }
                        })
                    }
                </ul>
            }
        }
        WSN::DefinitionList { items } => {
            use wikitext_simplified::DefinitionListItemType;
            html! {
                <dl>
                    #{items.iter().map(|i| {
                        let children = convert_children(templates, &i.content);
                        match i.type_ {
                            DefinitionListItemType::Term => html! { <dt class="font-semibold mt-2">{children}</dt> },
                            DefinitionListItemType::Details => html! { <dd class="ml-6 text-gray-700">{children}</dd> },
                        }
                    })}
                </dl>
            }
        }
        WSN::Redirect { target } => html! {
            <a class="text-blue-600 hover:text-blue-800 hover:underline" href={page_title_to_route_path(target).url_path()}>
                "REDIRECT: "{target}
            </a>
        },
        WSN::HorizontalDivider => html! { <hr class="my-6 border-t-2 border-gray-300" /> },
        WSN::ParagraphBreak => html! { <br /> },
        WSN::Newline => html! { <br /> },
    }
}

fn page_title_to_route_path(title: &str) -> paxhtml::RoutePath {
    let title_link = title.replace(" ", "_");
    let segments = title_link.split('/').collect::<Vec<_>>();
    let (page_name, directories) = segments.split_last().unwrap();

    paxhtml::RoutePath::new(
        std::iter::once(WIKI_DIRECTORY).chain(directories.iter().copied()),
        Some(format!("{page_name}.html")),
    )
}

fn redirect(to_url: &str) -> paxhtml::Document {
    paxhtml::Document::new([
        paxhtml::builder::doctype(["html".into()]),
        paxhtml::html! {
            <html>
                <head>
                    <title>"Redirecting..."</title>
                    <meta charset="utf-8" />
                    <meta httpEquiv="refresh" content={format!("0; url={to_url}")} />
                    <link href="/style/tailwind.css" rel="stylesheet" />
                </head>
                <body class="bg-gray-100 flex items-center justify-center min-h-screen">
                    <div class="text-center">
                        <p class="text-xl mb-4">"Redirecting..."</p>
                        <p>
                            <a class="text-blue-600 hover:text-blue-800 hover:underline" href={to_url} title="Click here if you are not redirected">
                                "Click here if you are not redirected"
                            </a>
                        </p>
                    </div>
                </body>
            </html>
        },
    ])
}

/// Tokenize text into searchable words
fn tokenize_text(text: &str) -> Vec<String> {
    text.to_lowercase()
        .split(|c: char| !c.is_alphanumeric())
        .filter(|word| word.len() >= 2) // Skip single characters
        .map(|word| word.to_string())
        .collect()
}

/// Extract plain text and headings from wikitext AST for search indexing
fn extract_search_data(node: &WikitextSimplifiedNode) -> (String, Vec<String>) {
    use WikitextSimplifiedNode as WSN;

    let mut text = String::new();
    let mut headings = Vec::new();

    fn extract_recursive(node: &WSN, text: &mut String, headings: &mut Vec<String>) {
        match node {
            WSN::Fragment { children }
            | WSN::Bold { children }
            | WSN::Italic { children }
            | WSN::Blockquote { children }
            | WSN::Superscript { children }
            | WSN::Subscript { children }
            | WSN::Small { children }
            | WSN::Preformatted { children } => {
                for child in children {
                    extract_recursive(&child.value, text, headings);
                }
            }
            WSN::Heading { level: _, children } => {
                let mut heading_text = String::new();
                for child in children {
                    extract_text_only(&child.value, &mut heading_text);
                }
                let heading_trimmed = heading_text.trim().to_string();
                if !heading_trimmed.is_empty() {
                    headings.push(heading_trimmed.clone());
                    text.push_str(&heading_trimmed);
                    text.push(' ');
                }
            }
            WSN::Link {
                text: link_text,
                title: _,
            } => {
                text.push_str(link_text);
                text.push(' ');
            }
            WSN::ExtLink {
                link: _,
                text: link_text,
            } => {
                if let Some(t) = link_text {
                    text.push_str(t);
                    text.push(' ');
                }
            }
            WSN::Text { text: t } => {
                text.push_str(t);
                text.push(' ');
            }
            WSN::Tag { children, .. } => {
                for child in children {
                    extract_recursive(&child.value, text, headings);
                }
            }
            WSN::Table { captions, rows, .. } => {
                // Extract text from table captions
                for caption in captions {
                    for node in &caption.content {
                        extract_recursive(&node.value, text, headings);
                    }
                }
                // Extract text from table cells
                for row in rows {
                    for cell in &row.cells {
                        for node in &cell.content {
                            extract_recursive(&node.value, text, headings);
                        }
                    }
                }
            }
            WSN::OrderedList { items } | WSN::UnorderedList { items } => {
                for item in items {
                    for node in &item.content {
                        extract_recursive(&node.value, text, headings);
                    }
                }
            }
            WSN::DefinitionList { items } => {
                for item in items {
                    for node in &item.content {
                        extract_recursive(&node.value, text, headings);
                    }
                }
            }
            WSN::Template { .. }
            | WSN::TemplateParameterUse { .. }
            | WSN::Redirect { .. }
            | WSN::HorizontalDivider
            | WSN::ParagraphBreak
            | WSN::Newline => {
                // Skip templates, parameters, and formatting elements
            }
        }
    }

    fn extract_text_only(node: &WSN, text: &mut String) {
        match node {
            WSN::Text { text: t } => {
                text.push_str(t);
            }
            WSN::Fragment { children }
            | WSN::Bold { children }
            | WSN::Italic { children }
            | WSN::Heading { children, .. } => {
                for child in children {
                    extract_text_only(&child.value, text);
                }
            }
            _ => {}
        }
    }

    extract_recursive(node, &mut text, &mut headings);

    // Normalize whitespace
    let normalized = text.split_whitespace().collect::<Vec<_>>().join(" ");

    (normalized, headings)
}
