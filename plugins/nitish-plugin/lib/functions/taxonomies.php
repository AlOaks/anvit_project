<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...



// Register Custom Taxonomy Team types
// // Register Custom Taxonomy
// Register Custom Taxonomy
function photography_tax() {

	$labels = array(
		'name'                       => _x( 'Photo Categories', 'Taxonomy General Name', 'portfolio_nitish' ),
		'singular_name'              => _x( 'Photo Category', 'Taxonomy Singular Name', 'portfolio_nitish' ),
		'menu_name'                  => __( 'Photo Categories', 'portfolio_nitish' ),
		'all_items'                  => __( 'All Photo Categories', 'portfolio_nitish' ),
		'parent_item'                => __( 'Parent Item', 'portfolio_nitish' ),
		'parent_item_colon'          => __( 'Parent Item:', 'portfolio_nitish' ),
		'new_item_name'              => __( 'New Category Name', 'portfolio_nitish' ),
		'add_new_item'               => __( 'Add New Category', 'portfolio_nitish' ),
		'edit_item'                  => __( 'Edit Category', 'portfolio_nitish' ),
		'update_item'                => __( 'Update Category', 'portfolio_nitish' ),
		'view_item'                  => __( 'View Item', 'portfolio_nitish' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'portfolio_nitish' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'portfolio_nitish' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'portfolio_nitish' ),
		'popular_items'              => __( 'Popular Categories', 'portfolio_nitish' ),
		'search_items'               => __( 'Search Items', 'portfolio_nitish' ),
		'not_found'                  => __( 'Not Found', 'portfolio_nitish' ),
		'no_terms'                   => __( 'No items', 'portfolio_nitish' ),
		'items_list'                 => __( 'Items list', 'portfolio_nitish' ),
		'items_list_navigation'      => __( 'Items list navigation', 'portfolio_nitish' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'photo_types', array( 'photography' ), $args );

}
add_action( 'init', 'photography_tax', 0 );