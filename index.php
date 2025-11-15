
<?php $page_id      = 'home';
      $page_ver     = '?v=' . filemtime(__FILE__);
      $page_type    = 'pages';
      $page_class   = 'main';
      $page_level   = './';
      $page_path    = '';

      $page_lang    = 'en';
      $page_title   = 'Settler Lite';
      $page_desc    = 'A blank php-based template.';

      require $page_level . 'site.php';

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>

    <?php include $assets . 'inc/pages_head-meta.php';
          include $assets . 'inc/pages_head-sharing.php';
          include $assets . 'inc/pages_head-resources.php';
          include $assets . 'inc/pages_head-noscript.php'; ?>

    <!-- JSON Schema Markup Example -->

    <script type="application/ld+json">

    {
      "@context": "https://schema.org",
      "@type": "",
      "name": "",
      "url": "",
      "logo": "",
      "sameAs": ""
    }

    </script>

  </head>

  <body <?php echo $page_body_attr; ?>>

    <!-- PAGE CONTENT START -->

    <h1>A Fresh Start</h1>
    <p>Open and edit <strong>site.php</strong> at project root directory to get started.</p>

    <!-- PAGE CONTENT END -->

    <?php include $assets . 'inc/pages_body-scripts.php'; ?>

  </body>
</html>
