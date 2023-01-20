<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://jbyte.ir
 * @since             1.0.0
 * @package           Gutenberg_Blocks
 *
 * @wordpress-plugin
 * Plugin Name:       Gutenberg Blocks
 * Plugin URI:        https://jbyte.ir
 * Description:       This is a plugin for creating custom Gutenberg blocks.
 * Version:           1.0.0
 * Author:            JByte
 * Author URI:        https://jbyte.ir
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gutenberg-blocks
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
*/
define( 'GUTENBERG_BLOCKS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gutenberg-blocks-activator.php
 */
function activate_gutenberg_blocks() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gutenberg-blocks-activator.php';
	Gutenberg_Blocks_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gutenberg-blocks-deactivator.php
 */
function deactivate_gutenberg_blocks() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gutenberg-blocks-deactivator.php';
	Gutenberg_Blocks_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gutenberg_blocks' );
register_deactivation_hook( __FILE__, 'deactivate_gutenberg_blocks' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gutenberg-blocks.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gutenberg_blocks() {

	$plugin = new Gutenberg_Blocks();
	$plugin->run();

}
run_gutenberg_blocks();
