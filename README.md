# JC2-MP Wiki

This is the JC2-MP wiki, recovered from a 2014 backup and deployed to GitHub Pages.

## About

After recovering the wiki content from a 2014 wikitext dump, we built a custom Rust-based static site generator to render it. The SSG parses MediaWiki markup, processes templates, and generates a fully static website that mirrors the original wiki, without any of the overhead of running MediaWiki itself.

Some effort will be made to salvage additional content from Internet Archive as time and effort permit.

## Building the Site

```bash
cargo run
```

This generates the static site in the `output/` directory. This is run by the CI, which will then automatically deploy to GitHub Pages.
