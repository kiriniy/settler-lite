<p align="center">
  <a href="https://kiriniy.github.io/settler/">
    <picture>
      <source media="(prefers-color-scheme: dark)" srcset="https://kiriniy.github.io/settler/assets/img/settler-lite-repo-logo_darkmode.png">
      <source media="(prefers-color-scheme: light)" srcset="https://kiriniy.github.io/settler/assets/img/settler-lite-repo-logo.png">
      <img src="https://kiriniy.github.io/settler/assets/img/settler-lite-repo-logo.png" alt="Settler Logotype" width="200" height="200">
    </picture>
  </a>
</p>

# Settler Lite
A fat-free version of a blank PHP based web-project template — when future website are too big and complicated for static HTML, but not dynamic enough for CMS and database.

If you're looking for **full** version: [https://github.com/kiriniy/settler](https://github.com/kiriniy/settler)

## Philosophy
At some point, we were overwhelmed by frameworks, building tools, and dependency trees. However, most websites don't need React, Node.js, Docker, Webpack, or 100 dependencies in json-configs to get the job done. Web development has become overly complicated due to the assumption that everyone needs the same tools as large corporations, even for a simple five-page website.

### For whom?
 - **Novice devs** who wants to learn PHP without getting lost in Laravel.
 - **Old-school devs** who still use `include()` as a design pattern.
 - **Small businesses** that just need a simple website, not a tech stack.
 - **Freelancers** who are looking for a way to quickly build client websites.
 - **Anyone** who wants to control every page and every line on it.

## Requirements
 - Local (MAMP, WAMP, XAMPP etc) or remote HTTP server with PHP.

## Setting Up
 - Download [latest release](https://github.com/kiriniy/settler-lite/releases/latest) and unzip it on your local or remote server.
 - Open 'site.php' at root and edit the default variables.
 - Done! You're ready to write some code...

## Under the hood
 
  - All files of the standard website with examples.
  - Meta tags and markup for the `head` section.
  - Default icons and sharing images include their size or format to see where each is used.
  - CSP (Content Security Policy) ready via `<meta>` tag.  
  - PWA (Progressive Web App) ready via `site.webmanifest` file.
  - The `addTime()` cache-busting function for static files.
  - Static site generation. Deploy your php website to a non-php hosting.

**Template structure:**

  ```text
settler-lite/
├─ assets/
│  ├─ css/             — stylesheets
│  ├─ img/             — images and icons
│  ├─ inc/             — php include files
│  └─ js/              — scripts
├─ extras/
│  ├─ blank.html       — blank html-template
│  └─ blank.php        — blank php-template
│
├─ favicon.ico         - legacy browsers icon
├─ index.php           - main entry point for the website
├─ make.php            - static site generation script
├─ robots.txt          - directives for web crawlers
├─ site.php            - main website config
├─ site.webmanifest    - pwa metadata
└─ sitemap.xml         - website indexing map
  ```

## License

Released by [Kirill Nikitin](https://github.com/kiriniy) under [MIT](https://github.com/kiriniy/settler/blob/master/LICENSE), 2020-2025
