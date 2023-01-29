<?php
function q4development_nav() {
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}
function footer_nav_col_1() {
	wp_nav_menu(
	array(
		'theme_location'  => 'footer-menu-column-1',
		'menu'            => '',
		// 'container'       => 'div',
		// 'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu-container',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}
function footer_nav_col_2() {
	wp_nav_menu(
	array(
		'theme_location'  => 'footer-menu-column-2',
		'menu'            => '',
		// 'container'       => 'div',
		// 'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu-container',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}
function footer_nav_col_3() {
	wp_nav_menu(
	array(
		'theme_location'  => 'footer-menu-column-3',
		'menu'            => '',
		// 'container'       => 'div',
		// 'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu-container',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}
function footer_nav_col_4() {
	wp_nav_menu(
	array(
		'theme_location'  => 'footer-menu-column-4',
		'menu'            => '',
		// 'container'       => 'div',
		// 'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu-container',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function register_q4development_menu() {
  register_nav_menus(array( // Using array to specify more menus if needed
    'header-menu' => __('Header Menu', 'q4development'), // Main Navigation
    'footer-menu-column-1' => __('Footer Menu Column 1', 'q4development'), // Footer Menu Column 1
    'footer-menu-column-2' => __('Footer Menu Column 2', 'q4development'), // Footer Menu Column 2
    'footer-menu-column-3' => __('Footer Menu Column 3', 'q4development'), // Footer Menu Column 3
    'footer-menu-column-4' => __('Footer Menu Column 4', 'q4development'), // Footer Menu Column 4
  ));
}

add_action('init', 'register_q4development_menu');

// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
