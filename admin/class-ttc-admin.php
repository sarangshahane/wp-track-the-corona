<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       sarangshahane.in
 * @since      1.0.0
 *
 * @package    Ttc
 * @subpackage Ttc/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ttc
 * @subpackage Ttc/admin
 * @author     Sarang Shahane <sarangshahane321@gmail.com>
 */
class Ttc_Admin {

	/**
	 * Member Variable
	 *
	 * @var instance
	 */
	private static $instance = null;

	/**
	 *  Initiator
	 */
	public static function get_instance() {

		if ( is_null( self::$instance ) ) {

			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct() {

		if ( ! is_admin() ) {
			return;
		}

		add_action( 'admin_menu', array( $this, 'register_plugin_menu' ) );

		add_action( 'admin_init', array( $this, 'register_admin_scripts' ) );
	}


	public function register_plugin_menu() {

		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		add_menu_page(
			'Track the Corona',
			'Track the Corona',
			'manage_options',
			TTC_SLUG,
			__CLASS__ . '::print_admin_html',
			'data:image/svg+xml;base64,' . base64_encode( file_get_contents( TTC_DIR . 'admin/img/track-the-corona.svg' ) ),
			40.9
		);
	}

	/**
	 * Renders the admin settings.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function print_admin_html() {

		$action = ( isset( $_GET['action'] ) ) ? sanitize_text_field( wp_unslash( $_GET['action'] ) ) : '';

		$action = ( ! empty( $action ) && '' != $action ) ? $action : 'general';

		$action = str_replace( '_', '-', $action );

		// Enable header icon filter below.
		$header_wrapper_class = apply_filters( 'ttc_header_wrapper_class', array( $action ) );

		include_once TTC_DIR . 'admin/partials/ttc-admin-display.php';
	}


	public function register_admin_scripts() {

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts_and_scripts' ) );
	}
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts_and_scripts() {

		// Load Styles.
		wp_enqueue_style( 'ttc-admin-scripts', TTC_URL . 'admin/css/ttc-admin.css', array(), TTC_VER );

		wp_style_add_data( 'ttc-admin-scripts', 'rtl', 'replace' );

		// Load Script.
	}

}

/**
*
* Initilize the class.
*/
Ttc_Admin::get_instance();
