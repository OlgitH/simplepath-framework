<?php $page = $GLOBALS['page'];?>

<?php if($page == 'index'){ ?>

  <div class="header home-header">
    <h1>Simple Path</h1>
    <p>A Super Simple Framework</p>
  </div>

<?php } else if ($page == 'about') { ?>

  <div class="header about-header">
    <h1>ABOUT</h1>
  </div>

<?php } else { ?>

  <div class="header generic-header">
    <h1>GENERIC HEADER</h1>
  </div>

<?php } ?>
