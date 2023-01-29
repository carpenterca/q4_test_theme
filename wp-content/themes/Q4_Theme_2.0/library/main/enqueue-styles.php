<?php
function q4development_styles()
{
    wp_register_style('q4development', get_template_directory_uri() . '/style.css', array(), filemtime(get_theme_file_path('/style.css')), 'all');
    wp_enqueue_style('q4development'); // Enqueue it!
}

add_action('wp_enqueue_scripts', 'q4development_styles'); // Add Theme Stylesheet
