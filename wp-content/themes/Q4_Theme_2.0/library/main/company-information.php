<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Company Information',
		'menu_title'	=> 'Company Information',
		'menu_slug' 	=> 'company-information',
		'icon_url'    => 'dashicons-info-outline',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Forms',
		'menu_title'	=> 'Contact Forms',
		'parent_slug'	=> 'company-information',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'General',
		'menu_title'	=> 'General',
		'parent_slug'	=> 'company-information',
	));
}
