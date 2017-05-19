<?php 
class WRDSB_Staff_Taxonomies_Owners_CTax {

	protected $labels = array(
		'name'                       => 'Owners',
		'singular_name'              => 'Owner',
		'menu_name'                  => 'Owners',
		'all_items'                  => 'All Owners',
		'parent_item'                => 'Parent Owner',
		'parent_item_colon'          => 'Parent Owner:',
		'new_item_name'              => 'New Owner Name',
		'add_new_item'               => 'Add New Owner',
		'edit_item'                  => 'Edit Owner',
		'update_item'                => 'Update Owner',
		'view_item'                  => 'View Owner',
		'separate_items_with_commas' => 'Separate Owners with commas',
		'add_or_remove_items'        => 'Add or remove Owners',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Owners',
		'search_items'               => 'Search Owners',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Owners',
		'items_list'                 => 'Owners list',
		'items_list_navigation'      => 'Owners list navigation',
	);

	protected $rewrite = array(
		'slug'                       => 'owners',
		'with_front'                 => true,
		'hierarchical'               => false,
	);

	protected $args = array(
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_in_menu'               => false,
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
		//$ctax_args['rewrite'] = $this->rewrite;
		register_taxonomy( 'owners', array( 'post', 'page' ), $ctax_args );
	}
}
