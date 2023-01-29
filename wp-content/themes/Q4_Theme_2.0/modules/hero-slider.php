<div class="hero-slider">
  <?php
  $hero_slider          = $args;
  $text_highlight_color = $hero_slider['highlight_color'];
  $hero_slider_repeater = $hero_slider['hero_slider_repeater'];
  $animation_type       = $hero_slider['animation_type'];
  $delay_count          = 1;
  foreach ($hero_slider_repeater as $hero_slide) {
    $background_type    = $hero_slide['hero_slider_background'];
    $background_image   = $hero_slide['background_image'];
    $background_video   = $hero_slide['background_video'];
    $background_color   = $hero_slide['background_color'];
    $title_text         = $hero_slide['title_text'];
    $title_color        = $hero_slide['title_color'];
    $subtitle_text      = $hero_slide['sub_title_text'];
    $subtitle_color     = $hero_slide['sub_title_color'];
    ?>

    <div class="hero-slide" <?php echo $background_color; ?>>
      <?php
      if ($background_type == 'image' || $background_type == 'image-w-button') {?><img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['alt']; ?>"><?php }
      elseif ($background_type == 'video' || $background_type == 'video-w-button') {?><video id="hero-background-video" autoplay loop muted><source src="<?php echo $background_video['url']; ?>" type="video/mp4"></video> <?php }?>
      <div class="hero-text-and-buttons-wrapper">
        <h1 class="title <?php if ($animation_type !== 'none') { echo 'animate '.$animation_type; } ?>" style="color: <?php echo $title_color ?>"><?php echo $title_text ?></h1>
        <h2 class="subtitle <?php if ($animation_type !== 'none') { echo 'animate '.$animation_type; } ?> delay-1" style="color: <?php echo $subtitle_color ?>"><?php echo $subtitle_text ?></h2>
        <?php
        // Pulls in clone of buttons module //
        $hero_slider_buttons_module = $hero_slide['buttons_module_repeater'];
        if($hero_slider_buttons_module) {
          include('./wp-content/themes/Q4_Theme_2.0/modules/buttons-module.php');
        }?>
      </div>
    </div>
  <?php }?>
</div>

<?php
$autoplay         = ($hero_slider['auto_scroll'] == "1") ? "true" : "false";
$autoplay_speed   = $hero_slider['auto_scroll_speed'];
$add_dots         = ($hero_slider['add_dots'] == "1") ? "true" : "false";
$add_arrows       = ($hero_slider['add_arrows'] == "1") ? "true" : "false";
$fade_transition  = ($hero_slider['fade_transition'] == "1") ? "true" : "false";
$vertical_scroll  = ($hero_slider['vertical_scroll'] == "1") ? "true" : "false";
$pause_on_hover   = ($hero_slider['pause_on_hover'] == "1") ? "true" : "false";
// Build JS for Slick Slider //
$slick_slider = "<script> \n";
$slick_slider .= "$(document).ready(function(){ \n";
$slick_slider .= "  $('.hero-slider').slick({ \n";
$slick_slider .= "    slidesToShow: 1, \n";
$slick_slider .= "    slidesToScroll: 1, \n";
$slick_slider .= "    pauseOnHover: $pause_on_hover,\n";
$slick_slider .= "    fade: $fade_transition,\n";
$slick_slider .= "    dots: $add_dots,\n";
$slick_slider .= "    arrows:$add_arrows,\n";
$slick_slider .= "    autoplay:$autoplay,\n";
$slick_slider .= "    autoplaySpeed: $autoplay_speed,\n";
$slick_slider .= "    vertical: $vertical_scroll,\n";
$slick_slider .= "  }); \n";
$slick_slider .= "}); \n";
$slick_slider .= "</script> \n";

echo $slick_slider;
?>

<style>
.title span,
.subtitle span {
  color: <?php echo $text_highlight_color; ?> !important;
}
</style>
