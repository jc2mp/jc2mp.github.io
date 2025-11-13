use std::{
    collections::HashMap,
    path::{Path, PathBuf},
};

use wikitext_simplified::{TemplateParameter, WikitextSimplifiedNode, parse_wiki_text_2};

use crate::page_context::PageContext;

/// Trait for loading wikitext template files
pub trait TemplateLoader {
    fn load(&self, name: &str) -> anyhow::Result<String>;
}

/// File system based template loader
pub struct FileSystemLoader {
    lookup: HashMap<String, PathBuf>,
}

impl FileSystemLoader {
    pub fn new(root: impl Into<PathBuf>) -> anyhow::Result<Self> {
        let root = root.into();
        let mut lookup = HashMap::new();

        fn scan_dir(
            root: &Path,
            path: &Path,
            lookup: &mut HashMap<String, PathBuf>,
        ) -> anyhow::Result<()> {
            for entry in std::fs::read_dir(path)? {
                let entry = entry?;
                let entry_path = entry.path();

                if entry_path.is_dir() {
                    scan_dir(root, &entry_path, lookup)?;
                } else if entry_path.is_file()
                    && entry_path.extension().is_some_and(|e| e == "wikitext")
                {
                    let key = entry_path
                        .strip_prefix(root)?
                        .with_extension("")
                        .as_os_str()
                        .to_string_lossy()
                        .to_lowercase()
                        .replace("\\", "/")
                        .replace(" ", "_");
                    lookup.insert(key, entry_path);
                }
            }
            Ok(())
        }

        scan_dir(&root, &root, &mut lookup)?;

        Ok(Self { lookup })
    }
}

impl TemplateLoader for FileSystemLoader {
    fn load(&self, name: &str) -> anyhow::Result<String> {
        let key = name.to_lowercase().replace(" ", "_");
        let path = self
            .lookup
            .get(&key)
            .ok_or_else(|| anyhow::anyhow!("Template not found: {} -> {}", name, key))?;
        std::fs::read_to_string(path).map_err(|e| {
            anyhow::anyhow!(
                "Failed to load template {} from {}: {}",
                name,
                path.display(),
                e
            )
        })
    }
}

pub struct Templates<'a> {
    pwt_configuration: &'a parse_wiki_text_2::Configuration,
    loader: Box<dyn TemplateLoader + 'a>,
    templates: HashMap<String, WikitextSimplifiedNode>,
}
impl<'a> Templates<'a> {
    pub fn new(
        loader: impl TemplateLoader + 'a,
        pwt_configuration: &'a parse_wiki_text_2::Configuration,
    ) -> anyhow::Result<Self> {
        Ok(Self {
            pwt_configuration,
            loader: Box::new(loader),
            templates: HashMap::new(),
        })
    }

    /// Reparse text content in table cells that contains wikitext markup
    fn reparse_table_cells(
        &mut self,
        node: &mut WikitextSimplifiedNode,
        pwt_configuration: &parse_wiki_text_2::Configuration,
        page_context: &PageContext,
    ) {
        use WikitextSimplifiedNode as WSN;

        match node {
            WSN::Table { rows, .. } => {
                for row in rows {
                    for cell in &mut row.cells {
                        let cell_wikitext = WSN::Fragment {
                            children: cell.content.clone(),
                        }
                        .to_wikitext();

                        // Check if cell content contains wikitext markup or templates
                        let has_markup = cell_wikitext.contains("[[")
                            || cell_wikitext.contains("'''")
                            || cell_wikitext.contains("''")
                            || cell_wikitext.contains("{{");

                        if has_markup
                            && let Ok(parsed) = wikitext_simplified::parse_and_simplify_wikitext(
                                &cell_wikitext,
                                pwt_configuration,
                            )
                            && !parsed.is_empty()
                        {
                            // After reparsing, we may have new templates to instantiate
                            let reparsed = WSN::Fragment { children: parsed };
                            let instantiated = self.instantiate(
                                pwt_configuration,
                                TemplateToInstantiate::Node(reparsed),
                                &[],
                                page_context,
                            );

                            // Extract children from the result
                            match instantiated {
                                WSN::Fragment { children } => {
                                    cell.content = children;
                                }
                                other => {
                                    cell.content = vec![other];
                                }
                            }
                        }
                    }
                }
            }
            WSN::Fragment { children } => {
                for child in children {
                    self.reparse_table_cells(child, pwt_configuration, page_context);
                }
            }
            _ => {}
        }
    }

    fn get(&mut self, name: &str) -> anyhow::Result<&WikitextSimplifiedNode> {
        let key = name.to_lowercase().replace(" ", "_");

        if !self.templates.contains_key(&key) {
            let content = self.loader.load(name)?;
            let simplified =
                wikitext_simplified::parse_and_simplify_wikitext(&content, self.pwt_configuration)
                    .map_err(|e| {
                        anyhow::anyhow!("Failed to parse and simplify template {}: {e:?}", name)
                    })?;
            self.templates.insert(
                key.clone(),
                WikitextSimplifiedNode::Fragment {
                    children: simplified,
                },
            );
        }

        Ok(&self.templates[&key])
    }

    /// Instantiate the template by replacing all template parameter uses with their values,
    /// instantiating nested templates, converting back to wikitext, and then doing this until
    /// no more template parameter uses or nested templates are found.
    ///
    /// God, I love wikitext.
    pub fn instantiate(
        &mut self,
        pwt_configuration: &parse_wiki_text_2::Configuration,
        template: TemplateToInstantiate,
        parameters: &[TemplateParameter],
        page_context: &PageContext,
    ) -> WikitextSimplifiedNode {
        use WikitextSimplifiedNode as WSN;

        let mut template = match template {
            TemplateToInstantiate::Name(name) => {
                if name.eq_ignore_ascii_case("subpagename") {
                    return WSN::Text {
                        text: page_context.sub_page_name.to_string(),
                    };
                }
                self.get(name).unwrap().clone()
            }
            TemplateToInstantiate::Node(node) => node,
        };

        // Check if we're done
        let mut further_instantiation_required = false;
        template.visit(&mut |node| {
            further_instantiation_required |= matches!(
                node,
                WSN::TemplateParameterUse { .. } | WSN::Template { .. }
            );
        });
        if !further_instantiation_required {
            return template;
        }

        // Helper to replace templates and parameters in the AST
        let mut replace_once = |template: &mut WikitextSimplifiedNode| {
            template.visit_and_replace_mut(&mut |node| match node {
                WSN::Template {
                    name,
                    parameters: template_params,
                } => {
                    let result = self.instantiate(
                        pwt_configuration,
                        TemplateToInstantiate::Name(name),
                        template_params,
                        page_context,
                    );
                    // Flatten single-child fragments to avoid nested structures
                    match result {
                        WSN::Fragment { children } if children.len() == 1 => {
                            children.into_iter().next().unwrap()
                        }
                        _ => result,
                    }
                }
                WSN::TemplateParameterUse { name, default } => {
                    let parameter = parameters
                        .iter()
                        .find(|p| p.name == *name)
                        .map(|p| p.value.clone())
                        .or_else(|| {
                            name.eq_ignore_ascii_case("subpagename")
                                .then(|| page_context.sub_page_name.to_string())
                        });
                    if let Some(parameter) = parameter {
                        WSN::Text { text: parameter }
                    } else if let Some(default) = default {
                        WSN::Text {
                            text: WSN::Fragment {
                                children: default.clone(),
                            }
                            .to_wikitext(),
                        }
                    } else {
                        WSN::Text {
                            text: "".to_string(),
                        }
                    }
                }
                _ => node.clone(),
            });
        };

        // Do one round of replacement first
        replace_once(&mut template);

        // NOW check if we have tables - this catches tables that were created by template expansion
        let contains_table = {
            let mut found = false;
            template.visit(&mut |node| {
                if matches!(node, WSN::Table { .. }) {
                    found = true;
                }
            });
            found
        };

        if contains_table {
            // For templates containing tables, recursively replace until no more changes
            loop {
                let before = template.to_wikitext();
                replace_once(&mut template);
                let after = template.to_wikitext();

                if before == after {
                    break;
                }
            }

            // After template expansion, reparse text content in table cells to handle
            // wikitext markup (like [[links]]) that came from template parameter values
            self.reparse_table_cells(&mut template, pwt_configuration, page_context);

            template
        } else {
            // For non-table templates, roundtrip through wikitext (already did one replacement above)
            let template_wikitext = template.to_wikitext();
            let roundtripped_template = wikitext_simplified::parse_and_simplify_wikitext(
                &template_wikitext,
                pwt_configuration,
            )
            .unwrap_or_else(|e| {
                panic!("Failed to parse and simplify template {template_wikitext}: {e:?}")
            });

            self.instantiate(
                pwt_configuration,
                TemplateToInstantiate::Node(WikitextSimplifiedNode::Fragment {
                    children: roundtripped_template,
                }),
                parameters,
                page_context,
            )
        }
    }
}

#[derive(Clone, Debug)]
pub enum TemplateToInstantiate<'a> {
    Name(&'a str),
    Node(WikitextSimplifiedNode),
}

#[cfg(test)]
mod tests {
    use super::*;

    /// In-memory template loader for testing
    struct MockLoader {
        templates: HashMap<String, String>,
    }

    impl MockLoader {
        fn new() -> Self {
            Self {
                templates: HashMap::new(),
            }
        }

        fn add(&mut self, name: &str, content: &str) {
            let key = name.to_lowercase().replace(" ", "_");
            self.templates.insert(key, content.to_string());
        }
    }

    impl TemplateLoader for MockLoader {
        fn load(&self, name: &str) -> anyhow::Result<String> {
            let key = name.to_lowercase().replace(" ", "_");
            self.templates
                .get(&key)
                .cloned()
                .ok_or_else(|| anyhow::anyhow!("Template not found: {}", name))
        }
    }

    #[test]
    fn test_nested_table_template_instantiation() {
        // This test verifies that nested template instantiation preserves table cell structure
        // Regression test for the bug where multiple cells ended up on the same line after
        // wikitext roundtrip conversion, causing pipe characters to appear as literal text

        let mut loader = MockLoader::new();

        // Create a simple cell attribute template
        loader.add("lua/cellalign", r#"align="right""#);

        // Create a table template with nested template in cell attributes
        loader.add(
            "lua/testtable",
            r#"{| class="wikitable"
!Returns
!Prototype
|-
|{{Lua/CellAlign}} | TypeA
|align="left" | FunctionA()
|-
|{{Lua/CellAlign}} | TypeB
|align="left" | FunctionB()
|}"#,
        );

        let pwt_configuration = wikitext_simplified::wikitext_util::wikipedia_pwt_configuration();
        let mut templates = Templates::new(loader, &pwt_configuration).unwrap();

        let page_context = PageContext {
            input_path: PathBuf::from("Test.wikitext"),
            title: "Test".to_string(),
            route_path: paxhtml::RoutePath::new(std::iter::empty(), Some("test.html".to_string())),
            sub_page_name: "Test".to_string(),
        };

        // Instantiate the table template
        let result = templates.instantiate(
            &pwt_configuration,
            TemplateToInstantiate::Name("Lua/TestTable"),
            &[],
            &page_context,
        );

        // Verify the result is a table (possibly wrapped in a Fragment)
        let table_node = match &result {
            WikitextSimplifiedNode::Table { .. } => &result,
            WikitextSimplifiedNode::Fragment { children } => children
                .iter()
                .find(|node| matches!(node, WikitextSimplifiedNode::Table { .. }))
                .expect("Fragment should contain a Table node"),
            _ => panic!(
                "Expected Table or Fragment with Table node, got {:?}",
                result
            ),
        };

        match table_node {
            WikitextSimplifiedNode::Table { rows, .. } => {
                // Should have 2 data rows (plus header row handled separately)
                assert_eq!(
                    rows.len(),
                    3,
                    "Table should have 3 rows (1 header + 2 data)"
                );

                // Check first data row has 2 cells
                assert_eq!(rows[1].cells.len(), 2, "First data row should have 2 cells");

                // Verify the first cell has the correct attribute from the template
                if let Some(attrs) = &rows[1].cells[0].attributes {
                    let attrs_node = WikitextSimplifiedNode::Fragment {
                        children: attrs.clone(),
                    };
                    let attrs_text = attrs_node.to_wikitext();
                    assert!(
                        attrs_text.contains("right"),
                        "First cell should have 'align=right' attribute from template expansion"
                    );
                }

                // Verify the first cell content is just "TypeA", not merged with second cell
                let cell_content = WikitextSimplifiedNode::Fragment {
                    children: rows[1].cells[0].content.clone(),
                }
                .to_wikitext();
                assert!(
                    !cell_content.contains("FunctionA"),
                    "First cell should not contain content from second cell"
                );
                assert!(
                    cell_content.contains("TypeA"),
                    "First cell should contain TypeA"
                );

                // Verify the second cell exists and has correct content
                let cell2_content = WikitextSimplifiedNode::Fragment {
                    children: rows[1].cells[1].content.clone(),
                }
                .to_wikitext();
                assert!(
                    cell2_content.contains("FunctionA"),
                    "Second cell should contain FunctionA"
                );
            }
            _ => panic!("Expected Table node, got {:?}", result),
        }
    }

    #[test]
    fn test_non_table_template_uses_roundtrip() {
        // Verify that non-table templates still use the wikitext roundtrip
        // This is important for templates that expand to wikitext markup like '''bold'''

        let mut loader = MockLoader::new();

        // Create a template that expands to bold text
        loader.add("boldtext", "'''important'''");

        let pwt_configuration = wikitext_simplified::wikitext_util::wikipedia_pwt_configuration();
        let mut templates = Templates::new(loader, &pwt_configuration).unwrap();

        let page_context = PageContext {
            input_path: PathBuf::from("Test.wikitext"),
            title: "Test".to_string(),
            route_path: paxhtml::RoutePath::new(std::iter::empty(), Some("test.html".to_string())),
            sub_page_name: "Test".to_string(),
        };

        // Instantiate the template
        let result = templates.instantiate(
            &pwt_configuration,
            TemplateToInstantiate::Name("BoldText"),
            &[],
            &page_context,
        );

        // The result should be a Fragment containing a Bold node (due to roundtrip parsing)
        match result {
            WikitextSimplifiedNode::Fragment { children } => {
                assert!(
                    children
                        .iter()
                        .any(|node| matches!(node, WikitextSimplifiedNode::Bold { .. })),
                    "Template should be reparsed into Bold node through wikitext roundtrip"
                );
            }
            WikitextSimplifiedNode::Bold { .. } => {
                // Direct Bold node is also acceptable
            }
            _ => panic!("Expected Bold or Fragment with Bold node, got {:?}", result),
        }
    }
}
