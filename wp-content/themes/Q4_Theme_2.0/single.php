<?php get_header(); ?>
<?php
$header_option = get_field('header_option');
$hero_img = get_field('blog_header_image');
$hero_bg_color = get_field('background_color');
$date = get_field('date');
$title = get_the_title();
$narrative = get_field('narrative');
?>
<div id="single-post">
<?php if ($header_option == 'hero-img') {?>
  <div class="hero-with-image">
    <img src="<?php echo $hero_img['url'] ?>" alt="<?php echo $hero_img['alt']; ?>">
<?php } elseif ($header_option == 'bg-color') {?>
   <div class="hero-with-bg-color" style="background: <?php echo $hero_bg_color; ?>">
<?php }?>
  </div><!-- end of hero-with-bg-color or hero-with-image -->
  <div class="content-wrapper">
    <p><?php echo $date; ?></p>
    <h2><?php echo $title; ?></h2>
    <p><?php echo $narrative; ?></p>
  </div>
  <div class="related-articles-wrapper">
    <h3>Related Articles</h3>
    <div class="related-articles-inner-wrapper">
      <?php include('acf-modules/cpt/related-articles.php') ?>
    </div>
  </div>
</div>
