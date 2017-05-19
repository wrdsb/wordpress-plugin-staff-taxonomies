<?php
class WRDSB_Staff_Taxonomies_Privacy_Levels_CTax {

	protected $labels = array(
		'name'                       => 'Privacy Levels',
		'singular_name'              => 'Privacy Level',
		'menu_name'                  => 'Privacy Levels',
		'all_items'                  => 'All Privacy Levels',
		'parent_item'                => 'Parent Privacy Level',
		'parent_item_colon'          => 'Parent Privacy Level:',
		'new_item_name'              => 'New Privacy Level Name',
		'add_new_item'               => 'Add New Privacy Level',
		'edit_item'                  => 'Edit Privacy Level',
		'update_item'                => 'Update Privacy Level',
		'view_item'                  => 'View Privacy Level',
		'separate_items_with_commas' => 'Separate Privacy Levels with commas',
		'add_or_remove_items'        => 'Add or remove Privacy Levels',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Privacy Levels',
		'search_items'               => 'Search Privacy Levels',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Privacy Levels',
		'items_list'                 => 'Privacy Levels list',
		'items_list_navigation'      => 'Privacy Levels list navigation',
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
		register_taxonomy( 'privacy_levels', array( 'post', 'page' ), $ctax_args );
	}
}
