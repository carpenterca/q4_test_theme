<?php
$image_module   = $args;
$images_module  = $image_module['image_module_repeater'];
$animation_type = $image_module['animation_type'];
$delay_count    = 1;
$i=1;
?>
<div class="image-module">
  <?php foreach ($images_module as $image) {
    $image = $image['image_module_image'];
    ?>
    
    <div class="image-wrapper <?php if ($animation_type !== 'none') { echo 'animate '.$animation_type; } ?> delay-<?php echo $delay_count; ?>">
      <img class="image-<?php echo $i; ?>" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
    <?php
  $i++;
  $delay_count++;
  } ?>
</div>
