<?php
$title = get_the_title();
$find = array(   " " , "&"   , "#038" , ",");
$replace = array("-" , "and" , ""     , "");
$cleaned = str_replace($find, $replace, $title);
$page_title = strtolower($cleaned);
?>
