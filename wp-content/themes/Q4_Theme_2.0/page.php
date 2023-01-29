<?php get_header(); ?>

<?php
$title = get_the_title();

switch ($title) {
    case "About":
      get_template_part('modules/hero-elements');
      get_template_part('layouts/page-layouts');
      break;
    default:
      get_template_part('layouts/page-layouts');
}?>

<?php get_footer(); ?>
