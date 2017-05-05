<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.wrdsb.ca
 * @since      1.0.0
 *
 * @package    Wrdsb_Staff_Taxonomies
 * @subpackage Wrdsb_Staff_Taxonomies/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wrdsb_Staff_Taxonomies
 * @subpackage Wrdsb_Staff_Taxonomies/includes
 * @author     WRDSB <website@wrdsb.on.ca>
 */
class Wrdsb_Staff_Taxonomies_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wrdsb-staff-taxonomies',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
