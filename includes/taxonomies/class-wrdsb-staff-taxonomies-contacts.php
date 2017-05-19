<?php 
class WRDSB_Staff_Taxonomies_Contacts_CTax {

	protected $labels = array(
		'name'                       => 'Contacts',
		'singular_name'              => 'Contact',
		'menu_name'                  => 'Contacts',
		'all_items'                  => 'All Contacts',
		'parent_item'                => 'Parent Contact',
		'parent_item_colon'          => 'Parent Contact:',
		'new_item_name'              => 'New Contact Name',
		'add_new_item'               => 'Add New Contact',
		'edit_item'                  => 'Edit Contact',
		'update_item'                => 'Update Contact',
		'view_item'                  => 'View Contact',
		'separate_items_with_commas' => 'Separate Contacts with commas',
		'add_or_remove_items'        => 'Add or remove Contacts',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Contacts',
		'search_items'               => 'Search Contacts',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Contacts',
		'items_list'                 => 'Contacts list',
		'items_list_navigation'      => 'Contacts list navigation',
	);

	protected $rewrite = array(
		'slug'                       => 'contacts',
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
		$ctax_args['rewrite'] = $this->rewrite;
		register_taxonomy( 'contacts', array( 'post', 'page' ), $ctax_args );
	}
}
