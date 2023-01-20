<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Gutenberg_Blocks
 * @subpackage Gutenberg_Blocks/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Gutenberg_Blocks
 * @subpackage Gutenberg_Blocks/admin
 * @author     Your Name <email@example.com>
 */
class Gutenberg_Blocks_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $gutenberg_blocks    The ID of this plugin.
	 */
	private $gutenberg_blocks;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $gutenberg_blocks       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $gutenberg_blocks, $version ) {

		$this->gutenberg_blocks = $gutenberg_blocks;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gutenberg_Blocks_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gutenberg_Blocks_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->gutenberg_blocks, plugin_dir_url( __FILE__ ) . 'css/gutenberg-blocks-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gutenberg_Blocks_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gutenberg_Blocks_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->gutenberg_blocks, plugin_dir_url( __FILE__ ) . 'js/gutenberg-blocks-admin.js', array( 'jquery' ), $this->version, false );

	}

}
