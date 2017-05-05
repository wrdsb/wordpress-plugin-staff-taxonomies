<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.wrdsb.ca
 * @since             1.0.0
 * @package           Wrdsb_Staff_Taxonomies
 *
 * @wordpress-plugin
 * Plugin Name:       WRDSB Staff Taxonomies
 * Plugin URI:        https://github.com/wrdsb/wordpress-plugin-staff-taxonomies
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            WRDSB
 * Author URI:        https://www.wrdsb.ca
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wrdsb-staff-taxonomies
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wrdsb-staff-taxonomies-activator.php
 */
function activate_wrdsb_staff_taxonomies() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wrdsb-staff-taxonomies-activator.php';
	Wrdsb_Staff_Taxonomies_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wrdsb-staff-taxonomies-deactivator.php
 */
function deactivate_wrdsb_staff_taxonomies() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wrdsb-staff-taxonomies-deactivator.php';
	Wrdsb_Staff_Taxonomies_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wrdsb_staff_taxonomies' );
register_deactivation_hook( __FILE__, 'deactivate_wrdsb_staff_taxonomies' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wrdsb-staff-taxonomies.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wrdsb_staff_taxonomies() {

	$plugin = new Wrdsb_Staff_Taxonomies();
	$plugin->run();

}
run_wrdsb_staff_taxonomies();
