<?php $page = $GLOBALS['page']; //call the page variable

ob_start(); //get page specific variables at start
require_once 'pages/page-' . $page . '.php';
ob_end_clean();
?>

<!DOCTYPE html>
<html lang="en">

<?php require 'partials/head.php'; ?> <!-- get the head section-->

    <body class="<?php echo $page ?>"> <!-- assign the body class based on the URL last section e.g about-->


    <?php require 'partials/navbar.php'; ?> <!-- get the navbar-->

    <?php if ($noheader != true): require 'partials/header.php'; endif; ?> <!-- get the page header (where the image is) -->

        <div class="row">

              <?php
                  //To have a different sidebar on certain pages uncomment this block labelled Multiple sidebars, and comment out the Single sidebar

                  //Multiple sidebars
                  if ($nosidebar != true) { ?>
                  <div class="side">
                        <?php require 'sidebars/'.$sidebar; ?>
                  </div>
                <?php }

                // Single sidebar
                // require 'sidebar.php';
              ?>
          

          <div class="main">
            <?php require 'pages/page-' . $page . '.php';?>
          </div>


    </div>
    <?php require 'partials/footer.php'; ?>
    </body>


</html>
