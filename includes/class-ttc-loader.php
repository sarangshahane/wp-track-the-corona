<?php

/**
 * Register all actions and filters for the plugin
 *
 * @link       sarangshahane.in
 * @since      1.0.0
 *
 * @package    Ttc
 * @subpackage Ttc/includes
 * @author     Sarang Shahane <sarangshahane321@gmail.com>
 */

if ( ! class_exists('Ttc_Loader') ) {

	class Ttc_Loader {

		/**
		 * Member Variable
		 *
		 * @var instance
		 */
		private static $instance = null;

		/**
		 * The plugin Name.
		 *
		 * @since    1.0.0
		 * @access   protected
		 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
		 */
		protected $plugin_name = 'Track the Corona';

		
		/**
		 *  Initiator
		 */
		public static function get_instance() {

			if ( is_null( self::$instance ) ) {

				self::$instance = new self();

				/**
				 * Plugin loaded.
				 *
				 * Executed when the plugin is loaded fully.
				 *
				 * @since 1.0.0
				 */
				do_action( 'ttc_plugin_loaded' );
			}

			return self::$instance;
		}

		/**
		 * Constractor
		 *
		 * @since    1.0.0
		 */
		public function __construct() {

			$this->define_plugin_constants();

			// Activation hook.
			register_activation_hook( TTC_FILE, array( $this, 'activate_plugin' ) );

			// deActivation hook.
			register_deactivation_hook( TTC_FILE, array( $this, 'deactivation_reset' ) );

			add_action( 'plugins_loaded', array( $this, 'load_ttc_plugin' ), 99 );
		}

		/**
		 * Defines all constants
		 *
		 * @since 1.0.0
		 */
		public function define_plugin_constants() {

			define( 'TTC_BASE', plugin_basename( TTC_FILE ) );
			define( 'TTC_DIR', plugin_dir_path( TTC_FILE ) );
			define( 'TTC_URL', plugins_url( '/', TTC_FILE ) );
			define( 'TTC_VER', '1.0.0' );
			define( 'TTC_SLUG', 'ttc' );
		}
		
		/**
		 * Activation Reset
		 */
		public function activate_plugin() {

			include_once TTC_DIR . 'includes\class-ttc-activator.php';
		}

		/**
		 * Deactivation Reset
		 */
		public function deactivation_reset() {

			include_once TTC_DIR . 'includes\class-ttc-deactivator.php';
		}

		/**
		 * Loads plugin files.
		 *
		 * @since 1.0.0
		 *
		 * @return void
		 */
		public function load_ttc_plugin() {

			$this->load_core_functions();
			$this->load_admin_functions();
			$this->load_public_functions();
			
		}

		public function load_core_functions(){

			include_once TTC_DIR . 'includes/class-ttc-i18n.php';
			include_once TTC_DIR . 'includes/class-ttc-functions.php';
		}

		public function load_admin_functions(){

			include_once TTC_DIR . 'admin/class-ttc-admin.php';
		}

		public function load_public_functions(){

			include_once TTC_DIR . 'includes/class-ttc-prepare-data.php';
		}
	}

	/**
	 *  Execute the functions.
	 */
	Ttc_Loader::get_instance();
}