<?php
class WRDSB_Staff_Taxonomies_Lifecycle_Phases_CTax {

	protected $labels = array(
		'name'                       => 'Lifecycle Phases',
		'singular_name'              => 'Lifecycle Phase',
		'menu_name'                  => 'Lifecycle Phases',
		'all_items'                  => 'All Lifecycle Phases',
		'parent_item'                => 'Parent Lifecycle Phase',
		'parent_item_colon'          => 'Parent Lifecycle Phase:',
		'new_item_name'              => 'New Lifecycle Phase Name',
		'add_new_item'               => 'Add New Lifecycle Phase',
		'edit_item'                  => 'Edit Lifecycle Phase',
		'update_item'                => 'Update Lifecycle Phase',
		'view_item'                  => 'View Lifecycle Phase',
		'separate_items_with_commas' => 'Separate Lifecycle Phases with commas',
		'add_or_remove_items'        => 'Add or remove Lifecycle Phases',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Lifecycle Phases',
		'search_items'               => 'Search Lifecycle Phases',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Lifecycle Phases',
		'items_list'                 => 'Lifecycle Phases list',
		'items_list_navigation'      => 'Lifecycle Phases list navigation',
	);

	protected $args = array(
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'show_in_rest'               => false,
		'rest_base'                  => 'wrdsb',
	);

	// Register Custom Taxonomy
	function register_ctax() {
		$ctax_args = $this->args;
		$ctax_args['labels'] = $this->labels;
		register_taxonomy( 'lifecycle_phases', array( 'post', 'page' ), $ctax_args );
	}
}
