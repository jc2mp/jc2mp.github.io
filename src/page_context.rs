use std::path::PathBuf;

pub struct PageContext {
    /// The path to the input file
    pub input_path: PathBuf,
    /// The title of the page
    pub title: String,
    /// The route path of the page
    #[allow(unused)]
    pub route_path: paxhtml::RoutePath,
    /// The last part of the title of the page, without the extension
    pub sub_page_name: String,
}
impl std::fmt::Display for PageContext {
    fn fmt(&self, f: &mut std::fmt::Formatter<'_>) -> std::fmt::Result {
        write!(f, "{} (from {})", self.title, self.input_path.display())
    }
}
