
<!DOCTYPE HTML>

<?php require './assets/inc/pages_config.php';

      $page_id       = 'home';
      $page_dir      = '';
      $page_title    = 'Settler Lite';
      $page_desc     = 'A blank PHP based web-project template.';
      $page_cache    = 'no-cache';
      $page_expiry   = '0';

      $net_url       = $base_url;
      $net_title     = $net_title_default;
      $net_desc      = $net_desc_default;
      $net_locale    = $net_locale_default;

      ?>

<html lang="">
  <head>
    <base href="<?php echo $base_url; ?>">

    <?php include $inc_path . 'pages_head-meta.php';
          include $inc_path . 'pages_head-snippets.php';
          include $inc_path . 'pages_head-resources.php';

          ?>

  </head>

  <body class="<?php echo $page_id; ?>" id="page-top">

    <!-- PAGE CONTENT START -->

    <h1>Settler Lite</h1>
    <p>Open and edit main config file at <strong>assets/inc/pages_config.php</strong> to get started.</p>

    <!-- PAGE CONTENT END -->

    <?php include $inc_path . 'pages_body-scripts.php'; ?>

  </body>
</html>
