<p align="center">
  <a href="https://kiriniy.github.io/settler/">
    <picture>
      <source media="(prefers-color-scheme: dark)" srcset="https://kiriniy.github.io/settler/assets/img/settler-lite-repo-logo_darkmode.png">
      <source media="(prefers-color-scheme: light)" srcset="https://kiriniy.github.io/settler/assets/img/settler-lite-repo-logo.png">
      <img src="https://kiriniy.github.io/settler/assets/img/settler-lite-repo-logo.png" alt="Settler Lite Logotype" width="200" height="200">
    </picture>
  </a>
</p>

<p align="center">
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-success" alt="MIT License"></a>
  <a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-7.0%2B-777BB4?logo=php" alt="PHP 7.0+"></a>
  <img src="https://img.shields.io/badge/No--Packages-555" alt="No Package Manager">
  <img src="https://img.shields.io/badge/Production--Ready-555" alt="Production Ready">
  <img src="https://img.shields.io/badge/Static--Site--Generation-555" alt="Static Site Generation">
</p>

# Settler Lite

A fat-free version of a blank PHP based web-project template — when future website are too big and complicated for static HTML, but not dynamic enough for CMS and database.

If you're looking for **full** version: [https://github.com/kiriniy/settler](https://github.com/kiriniy/settler)

Each [releases](https://github.com/kiriniy/settler-lite/releases) includes a table showing the differences between the versions.

## Philosophy

At some point, we became overwhelmed by frameworks, building tools, and dependency trees. However, most websites don't need React, Node.js, Docker, Webpack, or dozens of dependencies in json-configs to get the job done. Web development has become overly complicated due to the assumption that everyone needs the same tools as large corporations, even for a five-page website or landing page.

### Why PHP?

Settler Lite uses PHP not because it’s the superior language, but due to its wide availability. PHP is compatible with nearly every budget hosting plan globally, allowing anyone to set up a proper website. Just upload and go.

### WordPress then?

WordPress, Joomla, and other content management systems (CMS) are powerful tools, but they can be overkill for many projects. A CMS really shines when you need multiple people to update content regularly or when users must interact with the site, for example, by creating accounts or leaving comments. However, CMS platforms come with added complexity. They rely on databases, plugins, and frequent core updates, all of which demand ongoing maintenance, security monitoring, and performance tuning. If your site does not require user interaction and only one person handles content updates, Settler Lite may be a simpler, faster, and more secure fit.

### What about website builders?

Tools like Webflow, Wix, or Squarespace let you build sites fast without coding. But they lock your content and design into proprietary platforms. Moving elsewhere means rebuilding from scratch. You’re stuck with what they offer and what they charge. Settler Lite gives you plain files you own, full control over design, and the freedom to host anywhere, even on free services like GitHub Pages.

### For whom?

 - **Novice devs** who need a dead-simple way to deploy to php-less hosting as pure HTML.
 - **Old-school devs** who still use `include()` as a design pattern and are fine with it.
 - **Not-quite devs** that just need a simple website, not a tech stack.
 - **Small businesses** that use shared hosting services with Apache and PHP.
 - **Freelancers** who are looking for a way to deliver a working site in hours, not days.
 - **Anyone** who wants to control every page and every line on it.

## Browser Support

Settler Lite works in all modern browsers: Chrome, Firefox, Safari, Edge.
 
## Requirements
 
 - A local or remote web server with **PHP 7.0+** (e.g. MAMP, WAMP, XAMPP, or any shared hosting).
 - A code or text editor (to edit HTML/PHP files — VS Code, Sublime, Nova, etc.).

## Getting started

 - Download [latest release](https://github.com/kiriniy/settler-lite/releases/latest) and unzip it on your local or remote server.
 - Open 'site.php' at root and edit the default variables.
 - Done! You're ready to write some code...

## Features
 
 - All files of the standard website with examples.
 - Meta tags and markup for the `head` section.
 - Auto-generated SEO, sharing metadata, and canonical URL based on page variables.
 - Default icons and sharing images include their size or format to see where each is used.
 - CSP (Content Security Policy) ready via `<meta>` tag.  
 - PWA (Progressive Web App) ready via `site.webmanifest` file.
 - The `addTime()` cache-busting function for static files.
 - Static site generation. Deploy your php website to a non-php hosting.

**Template structure:**

```text
settler-lite/
├─ assets/
│  ├─ css/             - stylesheets
│  ├─ img/             - images and icons
│  ├─ inc/             - php include files
│  └─ js/              - scripts
├─ extras/
│  ├─ blank.html       - blank html-template
│  └─ blank.php        - blank php-template
│
├─ favicon.ico         - legacy browsers icon
├─ index.php           - main entry point for the website
├─ make.php            - static site generation script
├─ robots.txt          - directives for web crawlers
├─ site.php            - main website config
├─ site.webmanifest    - pwa metadata
└─ sitemap.xml         - website indexing map
```

## Versioning

Settler Lite **is not** follows [Semantic Versioning](https://semver.org/) and is only updated alongside major releases of Settler. It does not receive 2.1, 2.2, or bugfix updates. Think of it as a “long-term stable” minimal base.

## Updating

Settler Lite does not require updating on existing projects, but you can update individual elements at will. New versions are recommended for use in new projects.

## Changelog

See [Releases](https://github.com/kiriniy/settler-lite/releases) for the changelog.

## Acknowledgements

**Philosophy**

 - [Resilient Web Design](https://resilientwebdesign.com) by Jeremy Keith. Free web book.
 - [The Great Divide](https://css-tricks.com/the-great-divide/) by Chris Coyier on CSS-Tricks.
 - [Web Development Is Getting Too Complex](https://www.smashingmagazine.com/2024/02/web-development-getting-too-complex/) by Juan Diego Rodríguez on Smashing Magazine.

**Also Philosophy**

 - [This is a motherf*g website](https://motherfuckingwebsite.com/)
 - [This is still a motherf*g website](http://bettermotherfuckingwebsite.com/)
 - [This is the final motherf*g website](https://perfectmotherfuckingwebsite.com/)

**Further Reading**

 - [Site Icons](https://evilmartians.com/chronicles/how-to-favicon-in-2021-six-files-that-fit-most-needs) by Evil Martians
 - [Facebook Card](https://developers.facebook.com/docs/sharing/webmasters)
 - [Twitter Card](https://developer.twitter.com/en/docs/twitter-for-websites/cards/overview/summary)

## Contributing & Security

Contributions are welcome, especially for improving documentation, fixing typos or broken links, translations. If you discover a vulnerability in the provided code, please report it as well. In both cases, please open an Issue first [in the main repository](https://github.com/kiriniy/settler) to discuss your idea or finding, so we can keep Settler focused on simplicity without dependencies or complex features (e.g. form handlers, routers, CMS-like logic).

## License

Released by [Kirill Nikitin](https://github.com/Kiriniy) under [MIT License](https://github.com/kiriniy/settler-lite/blob/master/LICENSE), 2020—2025
