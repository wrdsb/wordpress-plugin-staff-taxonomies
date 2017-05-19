<?php
class WRDSB_Staff_Taxonomies_Tags_CTax {

	protected $labels = array(
		'name'                       => 'Governance Tags',
		'singular_name'              => 'Governance Tag',
		'menu_name'                  => 'Governance Tags',
		'all_items'                  => 'All Governance Tags',
		'parent_item'                => 'Parent Governance Tag',
		'parent_item_colon'          => 'Parent Governance Tag:',
		'new_item_name'              => 'New Governance Tag Name',
		'add_new_item'               => 'Add New Governance Tag',
		'edit_item'                  => 'Edit Governance Tag',
		'update_item'                => 'Update Governance Tag',
		'view_item'                  => 'View Governance Tag',
		'separate_items_with_commas' => 'Separate Governance Tags with commas',
		'add_or_remove_items'        => 'Add or remove Governance Tags',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Governance Tags',
		'search_items'               => 'Search Governance Tags',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Governance Tags',
		'items_list'                 => 'Governance Tags list',
		'items_list_navigation'      => 'Governance Tags list navigation',
	);

	protected $args = array(
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => false,
		'rest_base'                  => 'wrdsb',
	);

	// Register Custom Taxonomy
	function register_ctax() {
		$ctax_args = $this->args;
		$ctax_args['labels'] = $this->labels;
		register_taxonomy( 'governance_tags', array( 'post', 'page' ), $ctax_args );
	}
}

