<?php
class WRDSB_Staff_Taxonomies_Categories_CTax {

	protected $labels = array(
		'name'                       => 'Governance Categories',
		'singular_name'              => 'Governance Category',
		'menu_name'                  => 'Governance Categories',
		'all_items'                  => 'All Governance Categories',
		'parent_item'                => 'Parent Governance Category',
		'parent_item_colon'          => 'Parent Governance Category:',
		'new_item_name'              => 'New Governance Category Name',
		'add_new_item'               => 'Add New Governance Category',
		'edit_item'                  => 'Edit Governance Category',
		'update_item'                => 'Update Governance Category',
		'view_item'                  => 'View Governance Category',
		'separate_items_with_commas' => 'Separate Governance Categories with commas',
		'add_or_remove_items'        => 'Add or remove Governance Categories',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Governance Categories',
		'search_items'               => 'Search Governance Categories',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Governance Categories',
		'items_list'                 => 'Governance Categories list',
		'items_list_navigation'      => 'Governance Categories list navigation',
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
		register_taxonomy( 'governance_categories', array( 'post', 'page' ), $ctax_args );
	}
}

