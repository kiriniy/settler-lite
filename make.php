
<?php $page_id      = '';
      $page_ver     = '';
      $page_type    = '';
      $page_class   = '';
      $page_level   = './';
      $page_path    = '';

      $page_lang    = 'en';
      $page_title   = 'Static Site Generator';
      $page_desc    = '';

      require $page_level . 'site.php';

      $page_csp        = '';
      $page_robots     = '';
      $page_autoformat = '';
      $page_canonical  = '';
      $page_head_attr  = '';
      $page_body_attr  = '';

   // Static Site Generator
   // ------------------------------------
   // By default at 'dev' environment only

      if ($base_env == 'dev') {

   // Provide local server full URL (with slash)

      $localhost_url = 'http://localhost:8888/project_settler-lite/';
      
   // Provide list of php-pages of choice

      $files = [
        'extras/blank.php',
        'path/if-any/index.php',
        'and/so/on/index.php'
      ];

   // This script takes a list of PHP files, fetches their content from a local server,
   // and saves them as static HTML files in the same directory with the same filenames
   // but with an .html extension instead of .php. It then generates a list of successfully
   // converted pages and displays it as a list.

   // The script uses the function copy() to fetch and save the content. If any errors occur,
   // they are silently ignored due to the usage of the error control operator '@'.

   // Just run this file after each site update.

      $successfulCopies = [];

      function copyPage($localhost_url, $sourceFile) {
        $sourceUrl = $localhost_url . $sourceFile;
        $targetFile = str_replace('.php', '.html', $sourceFile);
        return @copy($sourceUrl, $targetFile);
      }

      foreach ($files as $file) {
        if (copyPage($localhost_url, $file)) {
            $fullUrl = $localhost_url . str_replace('.php', '', $file) . '.html';
            $successfulCopies[] = $fullUrl;
        }
      }

      $result = !empty($successfulCopies) ? '<ul><li>' . implode('</li><li>', $successfulCopies) . '</li></ul>' : '';

      } ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>

    <?php include $assets . 'inc/pages_head-meta.php';
          include $assets . 'inc/pages_head-resources.php';
          include $assets . 'inc/pages_head-noscript.php'; ?>

  </head>

  <body <?php echo $page_body_attr; ?>>

    <!-- PAGE CONTENT START -->

    <h1>Static site generator</h1>
    <p>This page creates static html copies next to php files of your choice <u>with all 'include' and results of all those dynamic stuff</u>, so you can use php-less hosting or GitHub Pages. Simply open and edit <strong>make.php</strong> at project root directory and run it again after each site update.</p>

    <?php if ($base_env == 'dev'): ?>

    <h2>List of processed pages:</h2>
  
    <?php echo $result; ?>
    
    <p>Total files provided: <strong><?php echo count($files); ?></strong></p>
    <p>Total files converted: <strong><?php echo count($successfulCopies); ?></strong></p>

    <?php elseif ($base_env != 'dev'): ?>

    <p>Hold on! We aren't on [dev] environment! Oh, we are? In this case open and edit <strong>site.php</strong> at project root directory first.</p>

    <?php endif; ?>

    <!-- PAGE CONTENT END -->

    <?php include $assets . 'inc/pages_body-scripts.php'; ?>

  </body>
</html>
