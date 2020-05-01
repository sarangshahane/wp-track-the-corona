<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       sarangshahane.in
 * @since      1.0.0
 *
 * @package    Ttc
 * @subpackage Ttc/includes
 * @author     Sarang Shahane <sarangshahane321@gmail.com>
 */

class Ttc_i18n {

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
	 * Constractor
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );
	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		// Default languages directory for Track the Corona.
		$lang_dir = TTC_DIR . 'languages/';

		/**
		 * Filters the languages directory path to use for Track the Corona.
		 *
		 * @param string $lang_dir The languages directory path.
		 */
		$lang_dir = apply_filters( 'track_the_corona_languages_directory', $lang_dir );

		// Traditional WordPress plugin locale filter.
		global $wp_version;

		$get_locale = get_locale();

		if ( $wp_version >= 4.7 ) {
			$get_locale = get_user_locale();
		}

		/**
		 * Language Locale for Track the Corona
		 *
		 * @var $get_locale The locale to use.
		 * Uses get_user_locale()` in WordPress 4.7 or greater,
		 * otherwise uses `get_locale()`.
		 */
		$locale = apply_filters( 'plugin_locale', $get_locale, 'ttc' );
		$mofile = sprintf( '%1$s-%2$s.mo', 'ttc', $locale );

		// Setup paths to current locale file.
		$mofile_local  = $lang_dir . $mofile;
		$mofile_global = WP_LANG_DIR . '/plugins/' . $mofile;

		if ( file_exists( $mofile_global ) ) {
			// Look in global /wp-content/languages/ttc/ folder.
			load_textdomain( 'ttc', $mofile_global );
		} elseif ( file_exists( $mofile_local ) ) {
			// Look in local /wp-content/plugins/ttc/languages/ folder.
			load_textdomain( 'ttc', $mofile_local );
		} else {
			// Load the default language files.
			load_plugin_textdomain( 'ttc', false, $lang_dir );
		}

	}

}
