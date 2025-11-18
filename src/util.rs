use wikitext_simplified::{Span, Spanned};

/// Helper to create a Spanned node with a default (empty) span
pub fn empty_spanned<T>(value: T) -> Spanned<T> {
    Spanned {
        value,
        span: Span { start: 0, end: 0 },
    }
}
