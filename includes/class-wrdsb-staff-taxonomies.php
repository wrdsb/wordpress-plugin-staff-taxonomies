<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://www.wrdsb.ca
 * @since      1.0.0
 *
 * @package    Wrdsb_Staff_Taxonomies
 * @subpackage Wrdsb_Staff_Taxonomies/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Wrdsb_Staff_Taxonomies
 * @subpackage Wrdsb_Staff_Taxonomies/includes
 * @author     WRDSB <website@wrdsb.on.ca>
 */
class Wrdsb_Staff_Taxonomies {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Wrdsb_Staff_Taxonomies_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = 'wrdsb-staff-taxonomies';
		$this->version = '1.0.0';

		$this->load_dependencies();
		$this->define_plugin_hooks();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Wrdsb_Staff_Taxonomies_Loader. Orchestrates the hooks of the plugin.
	 * - Wrdsb_Staff_Taxonomies_i18n. Defines internationalization functionality.
	 * - Wrdsb_Staff_Taxonomies_Admin. Defines all hooks for the admin area.
	 * - Wrdsb_Staff_Taxonomies_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wrdsb-staff-taxonomies-loader.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wrdsb-staff-taxonomies-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-wrdsb-staff-taxonomies-public.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/taxonomies/class-wrdsb-staff-taxonomies-audiences.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/taxonomies/class-wrdsb-staff-taxonomies-categories.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/taxonomies/class-wrdsb-staff-taxonomies-contacts.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/taxonomies/class-wrdsb-staff-taxonomies-lifecycle-phases.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/taxonomies/class-wrdsb-staff-taxonomies-organizational-units.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/taxonomies/class-wrdsb-staff-taxonomies-owners.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/taxonomies/class-wrdsb-staff-taxonomies-privacy-levels.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/taxonomies/class-wrdsb-staff-taxonomies-tags.php';

		$this->loader = new Wrdsb_Staff_Taxonomies_Loader();

	}

	/**
	 * Register all of the hooks enabling base functionality for the plugin,
	 * such as custom post types, taxonomies, etc.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_plugin_hooks() {

		$staff_categories_ctax = new WRDSB_Staff_Taxonomies_Categories_CTax();
		$staff_tags_ctax = new WRDSB_Staff_Taxonomies_Tags_CTax();

		$staff_owners_ctax = new WRDSB_Staff_Taxonomies_Owners_CTax();
		$staff_contacts_ctax = new WRDSB_Staff_Taxonomies_Contacts_CTax();
		$staff_org_units_ctax = new WRDSB_Staff_Taxonomies_Organizational_Units_CTax();
		$staff_privacy_levels_ctax = new WRDSB_Staff_Taxonomies_Privacy_Levels_CTax();
		$staff_lifecycle_phases_ctax = new WRDSB_Staff_Taxonomies_Lifecycle_Phases_CTax();
		$staff_audiences_ctax = new WRDSB_Staff_Taxonomies_Audiences_CTax();

		$this->loader->add_action( 'init', $staff_categories_ctax, 'register_ctax', 0);
		$this->loader->add_action( 'init', $staff_tags_ctax, 'register_ctax', 0);

		$this->loader->add_action( 'init', $staff_owners_ctax, 'register_ctax', 0);
		$this->loader->add_action( 'init', $staff_contacts_ctax, 'register_ctax', 0);
		$this->loader->add_action( 'init', $staff_org_units_ctax, 'register_ctax', 0);
		$this->loader->add_action( 'init', $staff_privacy_levels_ctax, 'register_ctax', 0);
		$this->loader->add_action( 'init', $staff_lifecycle_phases_ctax, 'register_ctax', 0);
		$this->loader->add_action( 'init', $staff_audiences_ctax, 'register_ctax', 0);

	}


	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Wrdsb_Staff_Taxonomies_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Wrdsb_Staff_Taxonomies_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Wrdsb_Staff_Taxonomies_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
