<?php
class WRDSB_Staff_Taxonomies_Audiences_CTax {

	protected $labels = array(
		'name'                       => 'Audiences',
		'singular_name'              => 'Audience',
		'menu_name'                  => 'Audiences',
		'all_items'                  => 'All Audiences',
		'parent_item'                => 'Parent Audience',
		'parent_item_colon'          => 'Parent Audience:',
		'new_item_name'              => 'New Audience Name',
		'add_new_item'               => 'Add New Audience',
		'edit_item'                  => 'Edit Audience',
		'update_item'                => 'Update Audience',
		'view_item'                  => 'View Audience',
		'separate_items_with_commas' => 'Separate Audiences with commas',
		'add_or_remove_items'        => 'Add or remove Audiences',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Audiences',
		'search_items'               => 'Search Audiences',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Audiences',
		'items_list'                 => 'Audiences list',
		'items_list_navigation'      => 'Audiences list navigation',
	);

	protected $args = array(
		'hierarchical'               => true,
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
		register_taxonomy( 'audiences', array( 'post', 'page' ), $ctax_args );
	}
}
