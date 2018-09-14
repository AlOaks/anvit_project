<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
// Register Custom Post Type
// Register Custom Post Type
function designs() {

	$labels = array(
		'name'                  => _x( 'Designs', 'Post Type General Name', 'portfolio_nitish' ),
		'singular_name'         => _x( 'Design', 'Post Type Singular Name', 'portfolio_nitish' ),
		'menu_name'             => __( 'Designs', 'portfolio_nitish' ),
		'name_admin_bar'        => __( 'Design', 'portfolio_nitish' ),
		'archives'              => __( 'Design Archives', 'portfolio_nitish' ),
		'attributes'            => __( 'Item Attributes', 'portfolio_nitish' ),
		'parent_item_colon'     => __( 'Parent Item:', 'portfolio_nitish' ),
		'all_items'             => __( 'All Designs', 'portfolio_nitish' ),
		'add_new_item'          => __( 'Add New Design', 'portfolio_nitish' ),
		'add_new'               => __( 'Add New', 'portfolio_nitish' ),
		'new_item'              => __( 'New Design', 'portfolio_nitish' ),
		'edit_item'             => __( 'Edit Design', 'portfolio_nitish' ),
		'update_item'           => __( 'Update Design', 'portfolio_nitish' ),
		'view_item'             => __( 'View Design', 'portfolio_nitish' ),
		'view_items'            => __( 'View Design', 'portfolio_nitish' ),
		'search_items'          => __( 'Search Design', 'portfolio_nitish' ),
		'not_found'             => __( 'Not found', 'portfolio_nitish' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'portfolio_nitish' ),
		'featured_image'        => __( 'Cover Image', 'portfolio_nitish' ),
		'set_featured_image'    => __( 'Set Image', 'portfolio_nitish' ),
		'remove_featured_image' => __( 'Remove image', 'portfolio_nitish' ),
		'use_featured_image'    => __( 'Use as image', 'portfolio_nitish' ),
		'insert_into_item'      => __( 'Insert into Design', 'portfolio_nitish' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'portfolio_nitish' ),
		'items_list'            => __( 'Items list', 'portfolio_nitish' ),
		'items_list_navigation' => __( 'Items list navigation', 'portfolio_nitish' ),
		'filter_items_list'     => __( 'Filter items list', 'portfolio_nitish' ),
	);
	$args = array(
		'label'                 => __( 'Design', 'portfolio_nitish' ),
		'description'           => __( 'The section to upload all your designs', 'portfolio_nitish' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-art',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'designs', $args );

}
add_action( 'init', 'designs', 0 );


// Register Custom Post Type
function photography_post_type() {

	$labels = array(
		'name'                  => _x( 'Photos', 'Post Type General Name', 'portfolio_nitish' ),
		'singular_name'         => _x( 'Photography', 'Post Type Singular Name', 'portfolio_nitish' ),
		'menu_name'             => __( 'Photography', 'portfolio_nitish' ),
		'name_admin_bar'        => __( 'Photography', 'portfolio_nitish' ),
		'archives'              => __( 'Photography Archives', 'portfolio_nitish' ),
		'attributes'            => __( 'Photography Attributes', 'portfolio_nitish' ),
		'parent_item_colon'     => __( 'Parent Item:', 'portfolio_nitish' ),
		'all_items'             => __( 'All Photographies', 'portfolio_nitish' ),
		'add_new_item'          => __( 'Add New Photo', 'portfolio_nitish' ),
		'add_new'               => __( 'Add New', 'portfolio_nitish' ),
		'new_item'              => __( 'New Photo', 'portfolio_nitish' ),
		'edit_item'             => __( 'Edit Post', 'portfolio_nitish' ),
		'update_item'           => __( 'Update Post', 'portfolio_nitish' ),
		'view_item'             => __( 'View Post', 'portfolio_nitish' ),
		'view_items'            => __( 'View Photos', 'portfolio_nitish' ),
		'search_items'          => __( 'Search Photo', 'portfolio_nitish' ),
		'not_found'             => __( 'Not found', 'portfolio_nitish' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'portfolio_nitish' ),
		'featured_image'        => __( 'Photo', 'portfolio_nitish' ),
		'set_featured_image'    => __( 'Set Photo', 'portfolio_nitish' ),
		'remove_featured_image' => __( 'Remove Photo', 'portfolio_nitish' ),
		'use_featured_image'    => __( 'Use as Featured Photo', 'portfolio_nitish' ),
		'insert_into_item'      => __( 'Insert into item', 'portfolio_nitish' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'portfolio_nitish' ),
		'items_list'            => __( 'Photos List', 'portfolio_nitish' ),
		'items_list_navigation' => __( 'Photos List Navigation', 'portfolio_nitish' ),
		'filter_items_list'     => __( 'Filter items list', 'portfolio_nitish' ),
	);
	$args = array(
		'label'                 => __( 'Photograpy', 'portfolio_nitish' ),
		'description'           => __( 'This is the section for the Photography Posts', 'portfolio_nitish' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-camera',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'photography', $args );

}
add_action( 'init', 'photography_post_type', 0 );