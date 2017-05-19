<?php
class WRDSB_Staff_Taxonomies_Organizational_Units_CTax {

	protected $labels = array(
		'name'                       => 'Org. Units',
		'singular_name'              => 'Org. Unit',
		'menu_name'                  => 'Org. Units',
		'all_items'                  => 'All Org. Units',
		'parent_item'                => 'Parent Org. Unit',
		'parent_item_colon'          => 'Parent Org. Unit:',
		'new_item_name'              => 'New Org. Unit Name',
		'add_new_item'               => 'Add New Org. Unit',
		'edit_item'                  => 'Edit Org. Unit',
		'update_item'                => 'Update Org. Unit',
		'view_item'                  => 'View Org. Unit',
		'separate_items_with_commas' => 'Separate Org. Units with commas',
		'add_or_remove_items'        => 'Add or remove Org. Units',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Org. Units',
		'search_items'               => 'Search Org. Units',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Org. Units',
		'items_list'                 => 'Org. Units list',
		'items_list_navigation'      => 'Org. Units list navigation',
	);

	protected $args = array(
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_in_menu'               => false,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'show_in_rest'               => false,
		'rest_base'                  => 'wrdsb',
	);

	// Register Custom Taxonomy
	function register_ctax() {
		$ctax_args = $this->args;
		$ctax_args['labels'] = $this->labels;
		register_taxonomy( 'org_units', array( 'post', 'page' ), $ctax_args );
	}
}
