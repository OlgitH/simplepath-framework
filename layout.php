<?php $page = $GLOBALS['page'];?> <!-- call the page variable-->

<!DOCTYPE html>
<html lang="en">

<?php require 'head.php'; ?> <!-- get the head section-->

    <body class="<?php echo $page ?>"> <!-- assign the body class based on the URL last section e.g about-->


    <?php require 'navbar.php'; ?> <!-- get the navbar-->
    <?php require 'header.php'; ?> <!-- get the page header (where the image is) -->

        <div class="row">
          <div class="side">
              <?php
                  //To have a different sidebar on certain pages uncomment this block labelled Multiple sidebars, and comment out the Single sidebar

                  //Multiple sidebars
                  if ($page == 'about'){
                    require 'sidebars/sidebar-about.php';
                  } elseif ($page == 'contact') {
                    require 'sidebars/sidebar-contact.php';
                  } else {
                    require 'sidebars/sidebar.php';
                  }

                  // Single sidebar
                  // require 'sidebar.php';
              ?>
          </div>

          <div class="main">
            <?php require 'pages/page-' . $page . '.php'; ?>
          </div>


    </div>
    <?php require 'footer.php'; ?>
    </body>


</html>
