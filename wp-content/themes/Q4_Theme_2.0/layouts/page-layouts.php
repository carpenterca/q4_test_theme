<?php
$page_layouts = get_field('page_layouts');
$json_string = json_encode($page_layouts);
foreach ($page_layouts as $page_section) {
  $section_repeater = $page_section['page_layouts_repeater'];
  $section_label = $page_section['section_label'];
  $section_id = $page_section['section_id'];
  $background_type = $page_section['background_type'];
  $background_color = $page_section['background_color'];
  $background_image = $page_section['background_image'];
  $background_video = $page_section['background_video'];
  $video_player_options = $page_section['video_options'];
  foreach ($section_repeater as $section) {
    $section_width = $page_section['section_width'];
    $section_height = $page_section['section_height'];
    $section_height = 'height:' . $section_height;
    $section_title = $page_section['section_label'];
    $section_title = strtolower($section_title);
    $section_title = ucwords($section_title);
    $columns_repeater = $section['column_repeater'];
    if($video_player_options){
      foreach ($video_player_options as $video_options){
        if ($video_options == 'autoplay') { $autoplay = $video_options; }
        if ($video_options == 'controls') { $controls = $video_options; }
        if ($video_options == 'loop') { $loop = $video_options; }
        if ($video_options == 'muted') { $muted = $video_options; }
      }
    }
    // Background Color
    if ($background_type == 'color' || $background_type == 'none'|| $background_type == 'gradient') {?>
      <section class="row <?php echo $section_width; ?>" id="<?php echo $section_id ?>" style="background: <?php echo $background_color; ?>; <?php echo $section_height ?>;" title="<?php echo $section_title; ?>">
    <?php }
    // Background Image
    if ($background_type == 'image') {?>
      <section class="row image-background <?php echo $section_width; ?>" id="<?php echo $section_id ?>" style="background-image: url(<?php echo $background_image['url'] ?>); <?php echo $section_height ?>;" title="<?php echo $section_title; ?>">
        <div class="filter"></div>
    <?php }
    // Background Video
    if ($background_type == 'video') {?>
      <section class="row video-background <?php echo $section_width; ?>" id="<?php echo $section_id ?>" style="background: <?php echo $background_color; ?>; <?php echo $section_height ?>;" title="<?php echo $section_title; ?>">
        <video <?php echo $autoplay ?> <?php if(isset($controls)){echo $controls; } ?> <?php echo $loop ?> <?php echo $muted ?>>
          <source src="<?php echo $background_video['url']; ?>" type="video/mp4">
        </video>
    <?php }
    if($section_width == 'full-width-with-container') {?><div class="full-width-container"><?php }

    $i=1;
    foreach ($columns_repeater as $columns) {
      $column_width = $columns['column_settings_width'];
      $column_clickable_option = $columns['column_clickable_option'];
      $page_location = $columns['column_clickable_page_location'];
      $link = $columns['column_clickable_link'];
      $link = '<a href="'.$link.'" class="clickable-column-link"></a>';
      $external_link = $columns['column_clickable_external_link'];
      $external_link = '<a href="'.$external_link.'" target="_blank" class="clickable-column-link"></a>';
      $background_type = $columns['background_type'];
      $background_color = $columns['background_color'];
      $background_image = $columns['background_image'];
      $background_video = $columns['background_video'];
      $video_player_options = $columns['video_options'];

      if($video_player_options){
        foreach ($video_player_options as $video_options){
          if ($video_options == 'autoplay') { $autoplay = $video_options; }
          if ($video_options == 'controls') { $controls = $video_options; }
          if ($video_options == 'loop') { $loop = $video_options; }
          if ($video_options == 'muted') { $muted = $video_options; }
        }
      }
      if ($background_type == 'none' && $column_clickable_option == 'yes' ) {?><div class="column no-background column-<?php echo $i++; ?>" style="width: <?php echo $column_width; ?>%"><?php if($page_location == 'internal'){echo $link;} else{ echo $external_link; }}
      if ($background_type == 'none' && $column_clickable_option == 'no' ) {?><div class="column no-background column-<?php echo $i++; ?>" style="width: <?php echo $column_width; ?>%"><?php }
      if ($background_type == 'color' && $column_clickable_option == 'yes' ) {?><div class="column color-background column-<?php echo $i++; ?>" style="background: <?php echo $background_color; ?>; width: <?php echo $column_width; ?>%"><?php if($page_location == 'internal'){echo $link;} else{ echo $external_link; }}
      if ($background_type == 'color' && $column_clickable_option == 'no') {?><div class="column color-background column-<?php echo $i++; ?>" style="background: <?php echo $background_color; ?>; width: <?php echo $column_width; ?>%"><?php }
      if ($background_type == 'image' && $column_clickable_option == 'yes') {?><div class="column image-background column-<?php echo $i++; ?>" style="background: <?php echo $background_color; ?>; width: <?php echo $column_width; ?>%"><?php if($page_location == 'internal'){echo $link;} else{ echo $external_link; }?><div class="filter"></div><img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['alt']; ?>"><?php }
      if ($background_type == 'image' && $column_clickable_option == 'no') {?><div class="column image-background column-<?php echo $i++; ?>" style="background: <?php echo $background_color; ?>; width: <?php echo $column_width; ?>%"><div class="filter"></div><img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['alt']; ?>"><?php }
      if ($background_type == 'video') {?><div class="column video-background column-<?php echo $i++; ?>" style="background: <?php echo $background_color; ?>; width: <?php echo $column_width; ?>%"><video <?php echo $autoplay ?> <?php echo $controls ?> <?php echo $loop ?> <?php echo $muted ?>><source src="<?php echo $background_video['url']; ?>" type="video/mp4"></video><?php }?>
      <?php
      // INCLUDE MODULES //
      $flexible_content = $columns['flex_content'];
      // q4_var_dump($flexible_content);
      if ($flexible_content) {
        foreach ($flexible_content as $content_module) {
          $args = (array) $content_module;
          switch($content_module['acf_fc_layout']) {

            // ACCORDION MODULE
            case "accordion_module_clone":
              $accordion_module = $content_module['accordion_repeater'];
              if ($accordion_module) { get_template_part('modules/accordion-module', null, $args); }
              break;

            // BUTTONS MODULE
            case "buttons_module_clone":
              $buttons_module = $content_module['buttons_module_repeater'];
              if ($buttons_module) { get_template_part('modules/buttons-module', null, $args); }
              break;

            // DIVIDER MODULE
            case "divider_module_clone":
              $divider_module = $content_module['divider_width'];
              if ($divider_module) { get_template_part('modules/divider-module', null, $args); }
              break;

            // HERO SLIDER
            case "hero_slider_clone":
              $hero_slider = $content_module['hero_slider_repeater'];
              if ($hero_slider) { get_template_part('modules/hero-slider', null, $args); }
              break;

            // IMAGE MODULE
            case "image_module_clone":
              $image_module = $content_module['image_module_repeater'];
              if ($image_module) { get_template_part('modules/image-module', null, $args); }
              break;

            // MARQUE /w LINKS
            case "marquee_clone":
              $marquee_module = $content_module['settings_marquee'];
              if ($marquee_module) { get_template_part('modules/marquee-module', null, $args); }
                break;

            // SLICK SLIDER
            case "slick_slider_clone":
              $slick_images = $content_module['slick_slider_images'];
              $slick_videos = $content_module['slick_slider_videos'];
              if ($slick_images || $slick_videos) { get_template_part('modules/slick-slider-module', null, $args); }
                break;

            // TEAM MODULE
            case "team_module_clone":
              $team_module = $content_module['team_module_repeater'];
              if ($team_module) { get_template_part('modules/team-module', null, $args); }
                break;

            // TEXT BOX MODULE
            case "text_box_clone":
              $text_box = $content_module['text_box'];
              if ($text_box) { get_template_part('modules/text-box', null, $args); }
                break;

            // TWO COLOR HEADER
            case 'two_color_header_clone':
            $two_color_header_position = $content_module['two_color_header_header_position'];
            if ($two_color_header_position) { get_template_part('modules/two-color-header', null, $args); }
              break;

            // VIDEO MODULE
            case 'video_module_clone':
            $video_module = $content_module['video_module_mp4'];
            if ($video_module) { get_template_part('modules/video-module', null, $args); }
              break;

            // WEB FORM MODULE
            case "web_form_clone":
              // $args; need the web_form module ([class]-[id]-[submit]-[subject]
              get_template_part('modules/Web_form/web_form', null, $args);
                break;

            // WYSIWYG
            case 'wysiwyg_clone':
            $wysiwyg = $content_module['wysiwyg_module'];
            if ($wysiwyg) { get_template_part('modules/wysiwyg', null, $args); }
              break;

          }
        }
      }?>
    </div> <!-- End of Column -->
    <?php $i++;?>
  <?php }?>
  <?php if($section_width == 'full-width-with-container') {?>
  </div> <!-- End of .full-width-with-container Inner Wrapper -->
  <?php }?>
  </section>
<?php }?>
<?php }?>
