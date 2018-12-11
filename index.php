<?php

$link = $_SERVER['PHP_SELF'];
$link_array = explode('/',$link);
$page = end($link_array);
$page = str_replace('.php','',$page);

$GLOBALS['page'] = $page; //make the variable available elsewhere on the site. Just call $GLOBALS['page']

//ADD NEW PAGES TO THIS ARRAY THEN ADD THEM IN THE NAVBAR
$pages = array(
    'index',
    'about',
    'contact'
  );

if (in_array($page, $pages)) {
    include_once 'layout.php';
} else {
    include_once '404.php';
}

?>
