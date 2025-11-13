use syntect::{
    highlighting::ThemeSet,
    html::{ClassStyle, ClassedHTMLGenerator, css_for_theme_with_class_style},
    parsing::{SyntaxReference, SyntaxSet},
    util::LinesWithEndings,
};

pub struct SyntaxHighlighter {
    pub syntax_set: SyntaxSet,
    pub theme_set: ThemeSet,
}

impl Default for SyntaxHighlighter {
    fn default() -> Self {
        Self {
            syntax_set: SyntaxSet::load_defaults_newlines(),
            theme_set: ThemeSet::load_defaults(),
        }
    }
}

impl SyntaxHighlighter {
    pub fn theme(&self) -> &str {
        "base16-ocean.dark"
    }

    pub fn theme_css(&self) -> String {
        css_for_theme_with_class_style(&self.theme_set.themes[self.theme()], ClassStyle::Spaced)
            .unwrap()
    }

    pub fn lookup_language(&self, language: Option<&str>) -> &SyntaxReference {
        language
            .and_then(|l| self.syntax_set.find_syntax_by_token(l))
            .unwrap_or_else(|| {
                // Default to Lua if no language is specified
                self.syntax_set
                    .find_syntax_by_extension("lua")
                    .unwrap_or_else(|| self.syntax_set.find_syntax_plain_text())
            })
    }

    pub fn highlight_code(
        &self,
        language: Option<&str>,
        code: &str,
    ) -> Result<paxhtml::Element, syntect::Error> {
        let syntax = self.lookup_language(language);
        let mut html_generator = ClassedHTMLGenerator::new_with_class_style(
            syntax,
            &self.syntax_set,
            ClassStyle::Spaced,
        );
        for line in LinesWithEndings::from(code) {
            html_generator.parse_html_for_line_which_includes_newline(line)?;
        }
        Ok(paxhtml::Element::Raw {
            html: html_generator.finalize(),
        })
    }
}
