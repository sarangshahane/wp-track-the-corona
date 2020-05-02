<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       sarangshahane.in
 * @since      1.0.0
 *
 * @package    Ttc
 * @subpackage Ttc/includes
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
 * @package    Ttc
 * @subpackage Ttc/includes
 * @author     Sarang Shahane <sarangshahane321@gmail.com>
 */
class Ttc_Prepare_Data {

	/**
	 * The URL request header.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      array    $request_args    The array used to store the URL headers.
	 */
	protected $request_args = array();

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

		$this->$request_args = array(
			'headers' => array(
				'Accept' => 'application/json',
				'origin' => site_url(),
			),
		);

		$this->load_dependencies();
		$this->get_national_level_data();
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		// require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-ttc-public.php';
	}


	public function get_national_level_data() {

		$body = get_transient( 'ttc_national_lavel_data' );

		if ( false === $body ) {
			$response = wp_remote_get( 'https://api.covid19india.org/data.json', $request_args );

			$body = json_decode( $response['body'], true );
			set_transient( 'ttc_national_lavel_data', $body, HOUR_IN_SECONDS );
		}

	}

}
