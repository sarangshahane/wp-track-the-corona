<?php

/**
 *
 * @link              sarangshahane.in
 * @since             1.0.0
 * @package           Ttc
 *
 * Plugin Name:       Track the Corona
 * Plugin URI:        sarangshahane.in
 * Description:       Show the Covid-19 Virus wordwide data on your website using user firendly shortcodes.
 * Version:           1.0.0
 * Author:            Sarang Shahane
 * Author URI:        sarangshahane.in
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ttc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Set constants.
 */
define( 'TTC_FILE', __FILE__ );

/**
 * Loader
 */
require_once 'includes/class-ttc-loader.php';