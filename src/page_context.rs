use std::collections::HashMap;
use std::path::{Path, PathBuf};
use std::sync::RwLock;

use wikitext_simplified::parse_wiki_text_2::Configuration;
use wikitext_simplified_template_eval::{TemplateContext, TemplateError, async_trait};

pub struct PageContext {
    /// The path to the input file
    pub input_path: PathBuf,
    /// The title of the page
    pub title: String,
    /// The route path of the page
    #[allow(unused)]
    pub route_path: paxhtml::RoutePath,
}

impl std::fmt::Display for PageContext {
    fn fmt(&self, f: &mut std::fmt::Formatter<'_>) -> std::fmt::Result {
        write!(f, "{} (from {})", self.title, self.input_path.display())
    }
}

/// Template context that combines file system loading with page-specific magic variables.
///
/// Scans a directory for `.wikitext` files and provides them as templates.
/// The sub_page_name can be updated using `set_sub_page_name()` between page conversions.
pub struct PageTemplateContext {
    configuration: Configuration,
    lookup: HashMap<String, PathBuf>,
    sub_page_name: RwLock<String>,
}

impl PageTemplateContext {
    /// Create a new page template context by scanning a directory for `.wikitext` files.
    pub fn new(root: impl Into<PathBuf>) -> Result<Self, TemplateError> {
        let root = root.into();
        let mut lookup = HashMap::new();

        fn scan_dir(
            root: &Path,
            path: &Path,
            lookup: &mut HashMap<String, PathBuf>,
        ) -> Result<(), TemplateError> {
            let entries =
                std::fs::read_dir(path).map_err(|e| TemplateError::DirectoryScanFailed {
                    path: path.display().to_string(),
                    source: e,
                })?;

            for entry in entries {
                let entry = entry.map_err(|e| TemplateError::DirectoryScanFailed {
                    path: path.display().to_string(),
                    source: e,
                })?;
                let entry_path = entry.path();

                if entry_path.is_dir() {
                    scan_dir(root, &entry_path, lookup)?;
                } else if entry_path.is_file()
                    && entry_path.extension().is_some_and(|e| e == "wikitext")
                {
                    let key = entry_path
                        .strip_prefix(root)
                        .expect("path should be under root")
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

        Ok(Self {
            configuration: wikitext_simplified::wikitext_util::wikipedia_pwt_configuration(),
            lookup,
            sub_page_name: RwLock::new(String::new()),
        })
    }

    /// Update the sub_page_name for the current page being processed.
    pub fn set_sub_page_name(&self, name: impl Into<String>) {
        *self.sub_page_name.write().unwrap() = name.into();
    }

    /// Load template content by name.
    fn load(&self, name: &str) -> Result<String, TemplateError> {
        let key = name.to_lowercase().replace(" ", "_");
        let path = self
            .lookup
            .get(&key)
            .ok_or_else(|| TemplateError::TemplateNotFound {
                name: name.to_string(),
                key: key.clone(),
            })?;
        std::fs::read_to_string(path).map_err(|e| TemplateError::LoadFailed {
            name: name.to_string(),
            path: path.display().to_string(),
            source: e,
        })
    }
}

#[async_trait]
impl TemplateContext for PageTemplateContext {
    fn configuration(&self) -> &Configuration {
        &self.configuration
    }

    fn resolve_magic_variable(&self, name: &str) -> Option<String> {
        if name.eq_ignore_ascii_case("subpagename") {
            Some(self.sub_page_name.read().unwrap().clone())
        } else {
            None
        }
    }

    async fn load_template(&self, name: &str) -> Result<String, TemplateError> {
        self.load(name)
    }
}
