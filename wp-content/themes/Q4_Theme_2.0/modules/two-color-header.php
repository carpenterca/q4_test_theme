<?php
$two_color_header  = $args;
$left_text         = $two_color_header['two_color_header_left_side_text'];
$left_font_weight  = $two_color_header['two_color_header_left_side_font_weight'];
$left_text_color   = $two_color_header['two_color_header_left_side_text_color'];
$right_text        = $two_color_header['two_color_header_right_side_text'];
$right_font_weight = $two_color_header['two_color_header_right_side_font_weight'];
$right_text_color  = $two_color_header['two_color_header_right_side_text_color'];
$header_position   = $two_color_header['two_color_header_header_position'];
$animation_type    = $two_color_header['animation_type'];
?>

<div class="two-color-header <?php echo $header_position ?> <?php if ($animation_type !== 'none') { echo 'animate '.$animation_type; } ?>" >
  <div class="left-text">
    <h2 style="color: <?php echo $left_text_color ?>; font-weight: <?php echo $left_font_weight ?>"><?php echo $left_text; ?></h2>
  </div>
  <div class="right-text">
    <h2 style="color: <?php echo $right_text_color ?>; font-weight: <?php echo $right_font_weight ?>"><?php echo $right_text; ?></h2>
  </div>
</div>
