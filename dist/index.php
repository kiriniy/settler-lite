
<?php $page_id      = 'home';
      $page_ver     = '';
      $page_path    = '';
      $page_type    = 'pages';
      $page_class   = 'main';

      $page_title   = 'Settler Lite';
      $page_desc    = 'A blank php-based template.';

      require './assets/inc/pages_config.php';
      
      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>
    <base <?php echo $page_base_attr; ?>>

    <?php include $inc_path . 'pages_head-meta.php';
          include $inc_path . 'pages_head-snippets.php';
          include $inc_path . 'pages_head-resources.php';
          include $inc_path . 'pages_head-noscript.php';

          ?>

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

    <h1>Settler Lite</h1>
    <p>Open and edit main config file at <strong>assets/inc/pages_config.php</strong> to get started.</p>

    <!-- PAGE CONTENT END -->

    <?php include $inc_path . 'pages_body-scripts.php'; ?>

  </body>
</html>
