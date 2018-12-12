<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$webroot = 'simplepath-framework';
$GLOBALS['root'] = $root;
$GLOBALS['webroot'] = $webroot;

$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$link);
$page = end($link_array);
$page = str_replace('.php','',$page);
?>
