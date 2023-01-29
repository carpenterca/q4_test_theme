<?php
$text_box_module = $args;
$text_box        = $text_box_module['text_box'];
$text_color      = $text_box_module['text_box_color'];
$text_position   = $text_box_module['text_box_position'];
$font_tag        = $text_box_module['font_size_select'];
$font_tag        = $font_tag.' style="text-align:'.$text_position.'; color:'.$text_color.';"';
$animation_type  = $text_box_module['animation_type'];
?>
<<?php echo $font_tag ?> class="text-box-text <?php if ($animation_type !== 'none') { echo 'animate '.$animation_type; } ?>"> <?php echo $text_box; ?></<?php echo $font_tag ?>>
