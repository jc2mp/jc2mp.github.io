# JC2-MP Website

This is the JC2-MP website and wiki, recovered from a 2014 backup and deployed to GitHub Pages.

## About

After [a great big fire](https://www.datacenterdynamics.com/en/analysis/ovhcloud-fire-france-data-center/), the original JC2-MP website went down and never came back up again. As a stop-gap solution, we recovered the original frontpage from backups and the Internet Archive, and built a basic static site from it.

Some time after that, we recovered a 2014 dump of the Wiki, and some time after that, we built a custom Rust-based static site generator to render it. The SSG parses MediaWiki markup, processes templates, and generates a fully static website that contains both the static frontpage and the generated wiki, without any of the overhead of running MediaWiki itself.

Some effort will be made to salvage additional content from Internet Archive as time and effort permit.

## Building the Site

```bash
cargo run
```

This generates the static site in the `output/` directory. This is run by the CI, which will then automatically deploy to GitHub Pages.
