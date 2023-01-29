<?php
function news_cpt() {
	$labels = array(
		'name' => _x( 'News', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'News', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'News', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'News', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Service Archives', 'textdomain' ),
		'attributes' => __( 'Service Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent News', 'textdomain' ),
		'all_items' => __( 'All News', 'textdomain' ),
		'add_new_item' => __( 'Add New News', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New News', 'textdomain' ),
		'edit_item' => __( 'Edit News', 'textdomain' ),
		'update_item' => __( 'Update News', 'textdomain' ),
		'view_item' => __( 'View News', 'textdomain' ),
		'view_items' => __( 'View News', 'textdomain' ),
		'search_items' => __( 'Search News', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into News', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this News', 'textdomain' ),
		'items_list' => __( 'News list', 'textdomain' ),
		'items_list_navigation' => __( 'News list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter News list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'News', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-document',
		'supports' => array('title', 'revisions'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'news_cpt', 0 );

// News Categories Taxonomy //
add_action( 'init', 'news_categories_taxonomy', 0 );
function news_categories_taxonomy() {
 $labels = array(
    'name' => _x( 'News Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'News Category Option', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search News Categories' ),
    'all_items' => __( 'All News Categories' ),
    'parent_item' => __( 'Parent News Category Option' ),
    'parent_item_colon' => __( 'Parent News Category Option:' ),
    'edit_item' => __( 'Edit News Category Option' ),
    'update_item' => __( 'Update News Category Option' ),
    'add_new_item' => __( 'Add New News Category Option' ),
    'new_item_name' => __( 'New News Category Option Name' ),
    'menu_name' => __( 'News Categories' ),
  );
  register_taxonomy('news_categories','news', array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
  ));
}

// News Archive Page Options Taxonomy //
add_action( 'init', 'news_archive_options_taxonomy', 0 );
function news_archive_options_taxonomy() {
 $labels = array(
    'name' => _x( 'Archive Page Options', 'taxonomy general name' ),
    'singular_name' => _x( 'Archive Page Option', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Archive Page Options' ),
    'all_items' => __( 'All Archive Page Options' ),
    'parent_item' => __( 'Parent Archive Page Option' ),
    'parent_item_colon' => __( 'Parent Archive Page Option:' ),
    'edit_item' => __( 'Edit Archive Page Option' ),
    'update_item' => __( 'Update Archive Page Option' ),
    'add_new_item' => __( 'Add New Archive Page Option' ),
    'new_item_name' => __( 'New Archive Page Option Name' ),
    'menu_name' => __( 'Archive Page Options' ),
  );
  register_taxonomy('news_archive_options','news', array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
  ));
}



// Events CPT
function events_cpt() {
	$labels = array(
		'name' => _x( 'Events', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Event', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Events', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Events', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Events Archives', 'textdomain' ),
		'attributes' => __( 'Events Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Events', 'textdomain' ),
		'all_items' => __( 'All Events', 'textdomain' ),
		'add_new_item' => __( 'Add New Event', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Event', 'textdomain' ),
		'edit_item' => __( 'Edit Event', 'textdomain' ),
		'update_item' => __( 'Update Event', 'textdomain' ),
		'view_item' => __( 'View Event', 'textdomain' ),
		'view_items' => __( 'View Events', 'textdomain' ),
		'search_items' => __( 'Search Events', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Events', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Events', 'textdomain' ),
		'items_list' => __( 'Events list', 'textdomain' ),
		'items_list_navigation' => __( 'Events list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Events list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Events', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-list-view',
		'supports' => array('title', 'revisions'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'events', $args );
}
add_action( 'init', 'events_cpt', 0 );

// Events Archive Page Options Taxonomy //
add_action( 'init', 'events_archive_options_taxonomy', 0 );
function events_archive_options_taxonomy() {
 $labels = array(
    'name' => _x( 'Archive Page Options', 'taxonomy general name' ),
    'singular_name' => _x( 'Archive Page Option', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Archive Page Options' ),
    'all_items' => __( 'All Archive Page Options' ),
    'parent_item' => __( 'Parent Archive Page Option' ),
    'parent_item_colon' => __( 'Parent Archive Page Option:' ),
    'edit_item' => __( 'Edit Archive Page Option' ),
    'update_item' => __( 'Update Archive Page Option' ),
    'add_new_item' => __( 'Add New Archive Page Option' ),
    'new_item_name' => __( 'New Archive Page Option Name' ),
    'menu_name' => __( 'Archive Page Options' ),
  );
  register_taxonomy('events_archive_options','events', array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
  ));
}


// Events Categories Taxonomy //
add_action( 'init', 'events_categories_taxonomy', 0 );
function events_categories_taxonomy() {
 $labels = array(
    'name' => _x( 'Event Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Event Category Option', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Event Categories' ),
    'all_items' => __( 'All Event Categories' ),
    'parent_item' => __( 'Parent Event Category Option' ),
    'parent_item_colon' => __( 'Parent Event Category Option:' ),
    'edit_item' => __( 'Edit Event Category Option' ),
    'update_item' => __( 'Update Event Category Option' ),
    'add_new_item' => __( 'Add New Event Category Option' ),
    'new_item_name' => __( 'New Event Category Option Name' ),
    'menu_name' => __( 'Event Categories' ),
  );
  register_taxonomy('events_categories','events', array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
  ));
}