<?php
require 'partials/variables.php';

if ($page == ''){
  $page = 'index';
}

$GLOBALS['page'] = $page; //make the variable available elsewhere on the site. Just call $GLOBALS['page']

//ADD NEW PAGES TO THIS ARRAY THEN ADD THEM IN THE NAVBAR
$pages = array(
    'index',
    'about',
    'contact',
    'ridiculously-named-page'
  );

if (in_array($page, $pages)) {
    require 'layout.php';
} else {
    require '404.php';
}

?>
