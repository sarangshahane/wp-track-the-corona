<?php

/**
 * Fired during plugin deactivation
 *
 * @link       sarangshahane.in
 * @since      1.0.0
 *
 * @package    Ttc
 * @subpackage Ttc/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Ttc
 * @subpackage Ttc/includes
 * @author     Sarang Shahane <sarangshahane321@gmail.com>
 */
class Ttc_Functions {

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

	}

}

Ttc_Functions::get_instance();