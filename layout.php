<?php $page = $GLOBALS['page'];?> <!-- call the page variable-->

<!DOCTYPE html>
<html lang="en">

<?php include_once 'head.php'; ?> <!-- get the head section-->

    <body class="<?php echo $page ?>"> <!-- assign the body class based on the URL last section e.g about-->


    <?php include_once 'navbar.php'; ?> <!-- get the navbar-->
    <?php include_once 'header.php'; ?> <!-- get the page header (where the image is) -->

        <div class="row">
          <div class="side">
              <?php
                  //To have a different sidebar on certain pages uncomment this block labelled Multiple sidebars, and comment out the Single sidebar

                  //Multiple sidebars
                  if ($page == 'about'){
                    include_once 'sidebars/sidebar-about.php';
                  } elseif ($page == 'contact') {
                    include_once 'sidebars/sidebar-contact.php';
                  } else {
                    include_once 'sidebars/sidebar.php';
                  }

                  // Single sidebar
                  // include_once 'sidebar.php';
              ?>
          </div>

          <div class="main">
            <?php include_once 'pages/page-' . $page . '.php'; ?>
          </div>


    </div>
    <?php include_once 'footer.php'; ?>
    </body>
    

</html>
