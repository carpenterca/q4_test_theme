<?php
function q4development_scripts()
{
      // Deregister the jquery version bundled with WordPress.
    	wp_deregister_script( 'jquery' );
      // Enqueue Jquery
      wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.0.js', array(), '3.5.0', false );
      // Enqueue Theme Scripts
      wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), filemtime(get_theme_file_path('/js/scripts.js')), true );
      // Enqueue Nav Scripts
      wp_enqueue_script( 'nav', get_template_directory_uri() . '/js/nav.js', array( 'jquery' ), filemtime(get_theme_file_path('/js/nav.js')), true );
      // Enqueue slick slider Scripts
      wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array( 'jquery' ), filemtime(get_theme_file_path('/js/slick.js')), true );
      // Enqueue Animations Scripts
      wp_enqueue_script( 'animations', get_template_directory_uri() . '/js/animations.js', array( 'jquery' ), filemtime(get_theme_file_path('/js/animations.js')), true );     
      //Marquee included in footer.php from a cdn
      # https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.js
}
if (!is_admin()) {
add_action('init', 'q4development_scripts'); // Add Scripts
}
