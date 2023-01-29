<?php // SEO and Social share images ?>
<meta name="description" content="<?php the_field('seo_description'); ?>">
<meta name="keywords" content="<?php the_field('seo_keywords'); ?>">

<?php
$image_seo = get_field('seo_share_image');
$image_company_info = get_field('logo_default_share_image', 'option');

if (is_array($image_seo)){ $share_image = $image_seo; }
elseif (is_array($image_company_info)){ $share_image = $image_company_info; }
?>

<meta property="og:url" content="<?php global $wp; echo home_url( $wp->request );?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo get_bloginfo( 'name' );?> | <?php the_field('seo_title');?>" />
<meta property="og:description" content="<?php the_field('seo_description');?>" />
<?php if(isset($share_image)){?>
  <meta property="og:image" content="<?php echo $share_image['url'];?>" />
  <meta property="og:image:secure_url" content="<?php echo $share_image['url'];?>" />
  <meta property="og:image:width" content="<?php echo $share_image['sizes']['large-width'];?>" />
  <meta property="og:image:height" content="<?php echo $share_image['sizes']['large-height'];?>" />
<?php }?>


<!-- twitter card -->
<meta name="twitter:card" content="summary_large_image">
<?php if (get_field('twitter_name', 'option')){?>
<meta name="twitter:site" content="<?php echo get_field('twitter_name', 'option') ?>" />
<meta name="twitter:creator" content="<?php echo get_field('twitter_name', 'option') ?>" />
<?php }?>
<meta name="twitter:title" content="<?php echo get_bloginfo( 'name' );?> | <?php the_field('seo_title'); ?>" />
<meta name="twitter:description" content="<?php the_field('seo_description'); ?>" />
<?php if(isset($share_image)){ ?>
<meta name="twitter:image" content="<?php echo $share_image['url']; ?>" />
<?php }?>
