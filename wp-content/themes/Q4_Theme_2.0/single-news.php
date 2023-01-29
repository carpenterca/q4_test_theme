<?php get_header(); ?>
<?php
$title = get_the_title();
$background_type = get_field('news_hero_background');
$hero_image = get_field('news_main_image');
$background_color = get_field('news_banner_background');
$text = get_field('news_text');
// News Archive Taxonomy Name and Term ID to set Default Image / Default Background Color if no color/image is set on single post
// These are set under News Menu -> Archive Page Options
$taxonomy = 'news_archive_options';
$term_id = '10';
$taxonomy_and_id = $taxonomy . '_' . $term_id;
$default_background_color = get_field('default_single_background_color', $taxonomy_and_id);
$default_hero_image = get_field('default_single_hero_image', $taxonomy_and_id);
$default_preview_image = get_field('default_preview_image', $taxonomy_and_id); // For Additional News Image
?>
<div id="news-single">
  <!-- Hero image / bg color -->
  <div class="news-single-banner" style="background-image: radial-gradient(90% 90%,<?php if($background_color){ echo $background_color; } elseif(empty($background_color)){ echo $default_background_color; }?>, #333 100%) ">
     <?php if($hero_image) {?>
      <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
    <?php } elseif(empty($hero_image) && $default_hero_image) { //If no hero image and default hero image is added?>
      <img src="<?php echo $default_hero_image['url']; ?>" alt="<?php echo $default_hero_image['alt']; ?>">
    <?php } elseif (empty($hero_image) && empty($default_hero_image) && empty($background_color) && empty($default_background_color)){echo "<h3>Please Add a Hero Image or Background Color to this Post</h3>";} // If no images or bg colors entered show error message?>
    <div class="container">
      <h2>News</h2>
      <h1><?php echo $title; ?></h1>
    </div>
  </div>
  <!-- Post Body -->
  <div class="post-body">
    <div class="container">
      <?php
      // Social Share Links
      get_template_part('inc/social-share-links');
      ?>
      <div class="text">
        <?php echo $text ?>
      </div>
    </div>
  </div>

  </div>
</div>
<?php get_footer(); ?>
