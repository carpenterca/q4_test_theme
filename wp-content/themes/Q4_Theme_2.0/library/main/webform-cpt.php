<?php
# DASHICONS https://developer.wordpress.org/resource/dashicons/#controls-skipback

# Web Form Email
add_action( 'init', function() {
    // global $name_of_post_type, $append_plural_chars, $dash_icon, $taxonomy_names;
    $name_of_post_type = "Web Form Email";
    $append_plural_chars = "s";
    $dash_icon = 'dashicons-text';

    //TODO: Broken this will show the taxonomy_names on the wp admin but they don't act correctly
    // temporarly adding empty array to bypass normal function...
    // $taxonomy_names = array(
    //     "Status", /* read unread */
    //     "Direction", /* incomming outgoing */
    //     "Sent" /* true false */
    // );
    $taxonomy_names = array(); //blank array()



    new_cpt($name_of_post_type, $taxonomy_names, $append_plural_chars, $dash_icon);
    }, 0 );
################################################################
##### [ below is reusable code to build Custom Post type ] #####
function new_cpt($name_of_post_type_singular,
                 $taxonomy_names,
                 $append_plural_chars = "s",
                 $dash_icon = 'dashicons-star-filled'){
  # build plural string based on the sigular form
  # (i.e. Book and Books -or- Product and Products)
  $name_of_post_type_plural   = $name_of_post_type_singular . $append_plural_chars;

    $labels = array(
      'name'                  => _x( $name_of_post_type_plural, 'Post Type General Name', 'textdomain' ),
      'singular_name'         => _x( $name_of_post_type_singular, 'Post Type Singular Name', 'textdomain' ),
      'menu_name'             => _x( $name_of_post_type_plural, 'Admin Menu text', 'textdomain' ),
      'name_admin_bar'        => _x( $name_of_post_type_plural, 'Add New on Toolbar', 'textdomain' ),
      'archives'              => __( 'Service Archives', 'textdomain' ),
      'attributes'            => __( 'Service Attributes', 'textdomain' ),
      'parent_item_colon'     => __( 'Parent ' .$name_of_post_type_plural, 'textdomain' ),
      'all_items'             => __( 'All ' .$name_of_post_type_plural, 'textdomain' ),
      'add_new_item'          => __( 'Add New ' .$name_of_post_type_plural, 'textdomain' ),
      'add_new'               => __( 'Add New', 'textdomain' ),
      'new_item'              => __( 'New ' . $name_of_post_type_singular, 'textdomain' ),
      'edit_item'             => __( 'Edit ' . $name_of_post_type_singular, 'textdomain' ),
      'update_item'           => __( 'Update ' . $name_of_post_type_singular, 'textdomain' ),
      'view_item'             => __( 'View ' . $name_of_post_type_singular, 'textdomain' ),
      'view_items'            => __( 'View ' .$name_of_post_type_plural, 'textdomain' ),
      'search_items'          => __( 'Search ' .$name_of_post_type_plural, 'textdomain' ),
      'not_found'             => __( 'Not found', 'textdomain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
      'featured_image'        => __( 'Featured Image', 'textdomain' ),
      'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
      'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
      'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
      'insert_into_item'      => __( 'Insert into ' .$name_of_post_type_plural, 'textdomain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this  ' . $name_of_post_type_singular, 'textdomain' ),
      'items_list'            => __( $name_of_post_type_plural . ' list', 'textdomain' ),
      'items_list_navigation' => __( 'Products list navigation', 'textdomain' ),
      'filter_items_list'     => __( 'Filter ' . $name_of_post_type_plural . ' list', 'textdomain' ),
    );
    $args = array(
      'label'                 => __( $name_of_post_type_plural, 'textdomain' ),
      'description'           => __( '', 'textdomain' ),
      'labels'                => $labels,
      'menu_icon'             => $dash_icon,
      'supports'              => array('title', 'revisions'),
      'taxonomies'            => array(),
      'public'                => false,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'hierarchical'          => false,
      'exclude_from_search'   => false,
      'show_in_rest'          => true,
      'publicly_queryable'    => false,
      'capability_type'       => 'post',
    );
    register_post_type($name_of_post_type_plural, $args );
  // echo "<h1>$name_of_post_type_plural</h1>";

    if (count($taxonomy_names) >= 1){
      foreach ($taxonomy_names as $taxonomy_name){
        $taxonomy_name_plural = $taxonomy_name . "s";
        $labels = array(
          'name' => _x( $taxonomy_name, 'taxonomy general name' ),
          'singular_name' => _x( $name_of_post_type_singular . ' ' . $taxonomy_name, 'taxonomy singular name' ),
          'search_items' =>  __( 'Search ' . $name_of_post_type_singular . ' ' . $taxonomy_name ),
          'popular_items' => __( 'Popular ' . $name_of_post_type_singular . ' ' . $taxonomy_name ),
          'all_items' => __( 'All ' . $taxonomy_name . ' terms' ),
          'parent_item' => null,
          'parent_item_colon' => null,
          'edit_item' => __( 'Edit ' . $name_of_post_type_singular . ' ' . $taxonomy_name ),
          'update_item' => __( 'Update ' . $name_of_post_type_singular . ' ' . $taxonomy_name ),
          'add_new_item' => __( 'Add New ' . $name_of_post_type_singular . ' ' . $taxonomy_name ),
          'new_item_name' => __( 'New ' . $name_of_post_type_singular . ' ' . $taxonomy_name . ' Name' ),
          'separate_items_with_commas' => __( 'Separate ' . $name_of_post_type_singular . ' ' . $taxonomy_name_plural . ' with commas' ),
          'add_or_remove_items' => __( 'Add or remove ' . $name_of_post_type_singular . ' ' . $taxonomy_name_plural ),
          'choose_from_most_used' => __( 'Choose from the most used ' . $name_of_post_type_singular . ' ' . $taxonomy_name_plural ),
          'menu_name' => __(  $taxonomy_name ),
        );
        register_taxonomy( $taxonomy_name, strtolower(str_replace(' ', '',$name_of_post_type_plural)),array(
          'hierarchical' => true,
          'labels' => $labels,
          'show_ui' => true,
          'show_in_rest' => true,
          'show_admin_column' => true,
          'update_count_callback' => '_update_post_term_count',
          'query_var' => true,
          'rewrite' => array( 'slug' => $taxonomy_name ),
        ));
      }// foreach ($taxonomy_names [END]
    }
# reset peralinks
if (get_option( 'permalink_structure' ) == "/%postname%/") {return;}
global $wp_rewrite;
// echo "<h1>" . get_option( 'permalink_structure' ) . "</h1>";
//Write the rule
$wp_rewrite->set_permalink_structure('/%postname%/');

//NOTE: When do rewrite rules need to be called?

//Set the option
update_option( "rewrite_rules", FALSE );

//Flush the rules and tell it to write the rules in the htaccess file
$wp_rewrite->flush_rules( true );
}
