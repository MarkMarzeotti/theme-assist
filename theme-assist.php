<?php
/**
 * A collection of functions I used to include in my base theme but wanted the ability to add/edit/remove easily without forcing the use of a child theme.
 *
 * @link              https://markmarzeotti.com
 * @since             1.0.0
 * @package           Theme_Assist
 *
 * @wordpress-plugin
 * Plugin Name:       Theme Assist
 * Plugin URI:        https://markmarzeotti.com
 * Description:       A WordPress plugin that removes all the unnecessary extras WordPress includes by default and adds some useful features.
 * Version:           1.0.0
 * Author:            Mark Marzeotti
 * Author URI:        https://markmarzeotti.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       theme-assist
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 */
define( 'THEME_ASSIST_VERSION', '1.0.0' );

/**
 * Functions that remove default WP features, functionality, or assets.
 */
require dirname( __FILE__ ) . '/remove.php';

/**
 * Functions that add new useful functionality.
 */
require dirname( __FILE__ ) . '/add.php';
