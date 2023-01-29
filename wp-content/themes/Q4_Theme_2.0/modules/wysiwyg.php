<?php
$wysiwyg_module = $args;
$wysiwyg        = $wysiwyg_module['wysiwyg_module'];
$text_color     = $wysiwyg_module['wysiwyg_text_color'];
$text_position  = $wysiwyg_module['wysiwyg_text_position'];
$text_width     = $wysiwyg_module['wysiwyg_text_width'];
$animation_type = $wysiwyg_module['animation_type'];
?>
<div style="color: <?php echo $text_color; ?>;" class="wysiwyg-module <?php if ($animation_type !== 'none') { echo 'animate '.$animation_type; } ?>">
  <div class="<?php echo $text_position; ?> text-container" style="text-align: <?php echo $text_position; ?>; width: <?php echo $text_width; ?>%; margin: auto;" ><?php echo $wysiwyg; ?></div>
</div>
