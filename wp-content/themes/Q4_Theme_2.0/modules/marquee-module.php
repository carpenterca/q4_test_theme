<?php
$marquee_module = $args;
$marquee_items = $marquee_module['settings_marquee'];
$slide_duration = $marquee_module['marquee_slide_duration'];
$highlighted_text_color = $marquee_module['marquee_highlight_text_color'];
$non_highlighted_text_color = $marquee_module['marquee_non_highlight_text_color'];
?>
<div id="marquee-module">
  <div class="marquee-container">
    <div class="marquee-content">
    <?php foreach ($marquee_items as $item) {
      $icon = $item['marquee_icon'];
      $highlighted_text = $item['marquee_highlighted_text'];
      $main_text = $item['marquee_main_text'];?>

      <div class="text-and-icon-wrapper">
        <div class="message">
         <h5 class="highlighted-text" style="color: <?php echo $highlighted_text_color; ?>"><?php echo $highlighted_text; ?></h5>
         <h5 class="main-text" style="color: <?php echo $non_highlighted_text_color; ?>"><?php echo $main_text; ?></h5>
       </div>
       <div class="icon-wrapper">
         <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
       </div>
      </div>
    <?php }?>
    </div>
  </div>
<?php
//if color has a value add the endcap elements
$color = $marquee_module['marquee_add_fade_color_end_caps'];
if ($color != ""){?>
  <div class="fade-overlay right"></div>
  <div class="fade-overlay left"></div>
<?php }?>
</div>

<?php
//if color has a value add the endcap css...Added here in order to add $color
if ($color != ""){ ?>
  <style>
  .fade-overlay.right{
    background: -moz-linear-gradient(left, <?php echo $color ?>00 0%, <?php echo $color ?>FF 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, <?php echo $color ?>00 0%,<?php echo $color ?>FF 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, <?php echo $color ?>00 0%,<?php echo $color ?>FF 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $color ?>00', endColorstr='<?php echo $color ?>FF',GradientType=1 );
    right:0;
  }
  .fade-overlay.left{
    background: -moz-linear-gradient(left, <?php echo $color ?>FF 0%, <?php echo $color ?>00 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, <?php echo $color ?>FF 0%,<?php echo $color ?>00 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, <?php echo $color ?>FF 0%,<?php echo $color ?>00 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $color ?>FF', endColorstr='<?php echo $color ?>00',GradientType=1 );
    left:0;
  }
  </style>
<?php } //if color ?>

<!-- Added here in order to add $slide_duration -->
<script type="text/javascript">
$(document).ready(function(){
  var marquee_width   = $('.marquee-container').outerWidth();
  var marquee_content = parseInt(marquee_width);
  $('.marquee-content').css('width', marquee_content);
  $('.marquee-content').marquee({
    duration: <?php echo $slide_duration; ?>,
    gap: 0,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true,
    pauseOnHover: true,
    startVisible: true
  });
});
</script>
