<?php
// Register Custom Taxonomy
function wrdsb_legal_references_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Legal References', 'Taxonomy General Name', 'wrdsb_legal' ),
		'singular_name'              => _x( 'Legal Reference', 'Taxonomy Singular Name', 'wrdsb_legal' ),
		'menu_name'                  => __( 'Legal References', 'wrdsb_legal' ),
		'all_items'                  => __( 'All Legal References', 'wrdsb_legal' ),
		'parent_item'                => __( 'Parent Legal Reference', 'wrdsb_legal' ),
		'parent_item_colon'          => __( 'Parent Legal Reference:', 'wrdsb_legal' ),
		'new_item_name'              => __( 'New Legal Reference Name', 'wrdsb_legal' ),
		'add_new_item'               => __( 'Add New Legal Reference', 'wrdsb_legal' ),
		'edit_item'                  => __( 'Edit Legal Reference', 'wrdsb_legal' ),
		'update_item'                => __( 'Update Legal Reference', 'wrdsb_legal' ),
		'view_item'                  => __( 'View Legal Reference', 'wrdsb_legal' ),
		'separate_items_with_commas' => __( 'Separate references with commas', 'wrdsb_legal' ),
		'add_or_remove_items'        => __( 'Add or remove references', 'wrdsb_legal' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wrdsb_legal' ),
		'popular_items'              => __( 'Popular Legal References', 'wrdsb_legal' ),
		'search_items'               => __( 'Search Legal References', 'wrdsb_legal' ),
		'not_found'                  => __( 'Not Found', 'wrdsb_legal' ),
		'no_terms'                   => __( 'No related references', 'wrdsb_legal' ),
		'items_list'                 => __( 'Legal References list', 'wrdsb_legal' ),
		'items_list_navigation'      => __( 'Legal references list navigation', 'wrdsb_legal' ),
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
	register_taxonomy( 'wrdsb_legal_references', array( 'wrdsb_legal' ), $args );

}
add_action( 'init', 'wrdsb_legal_references_custom_taxonomy', 0 );
