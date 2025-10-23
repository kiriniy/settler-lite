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
Fat-free version of a blank PHP based web-project template — when future website are too big and complicated for static HTML, but not dynamic enough for CMS and database.

If you're looking for full version: [https://github.com/kiriniy/settler](https://github.com/kiriniy/settler)

## Requirements
 - Local (MAMP, WAMP etc.) or remote HTTP server with PHP.

## Setting Up
 - Download and unzip on local or remote server.
 - Go to '/assets/inc/pages_config.php' and setup "base_url" variable.
 - Done! You're ready to write some code...

**Template structure:**

  ```text
settler-lite/
├─ assets/
│  ├─ css/           — stylesheets files
│  ├─ img/           — images and icons
│  ├─ inc/           — php includes
│  └─ js/            — javascript files
├─ extras/
│  ├─ blank.html     — blank html-template
│  └─ blank.php      — blank php-template
│
├─ favicon.ico       - legacy browsers icon
├─ index.php         - main site page
├─ make.php          - static site generator
├─ robots.txt        - example config file for crawlers
├─ site.php          - main config file for site
├─ site.webmanifest  - example config for pwa
└─ sitemap.xml       - example sitemap 
  ```

## License

Released by [Kirill Nikitin](https://github.com/kiriniy) under [MIT](https://github.com/kiriniy/settler/blob/master/LICENSE), 2020-2025
