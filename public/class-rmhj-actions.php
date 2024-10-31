<?php
/**
 * The public-specific functionality of the plugin.
 *
 * @link       http://opusmagnum.ch
 * @since      1.0.0
 *
 * @package    RM_Head_Junk
 * @subpackage RM_Head_Junk/public
 */

/* Prevent loading this file directly */
defined( 'ABSPATH' ) || exit;

/**
 * The admin-specific functionality of the plugin.
 *
 * @package    RM_Head_Junk
 * @subpackage RM_Head_Junk/public
 * @author     Felipe Paul Martins <fpm@opusmagnum.ch>
 */
if ( !class_exists( 'RMHJ_Actions' ) ) {

	/**
	 * Class RMHJ_Actions
	 * @since	1.0.0
	 */
	class RMHJ_Actions {

		/**
		 * The ID of this plugin.
		 *
		 * @since		1.0.0
		 * @access	private
		 * @var			string	$plugin_name	The ID of this plugin.
		 */
		private $plugin_name;

		/**
		 * The version of this plugin.
		 *
		 * @since		1.0.0
		 * @access	private
		 * @var			string	$version	The current version of this plugin.
		 */
		private $version;

		/**
		 * Initialize the class and set its properties.
		 *
		 * @since		1.0.0
		 * @param		string	$plugin_name	The name of this plugin.
		 * @param		string	$version			The version of this plugin.
		 */
		public function __construct( $plugin_name, $version ) {
			$this->plugin_name = $plugin_name;
			$this->version = $version;

			$this->remove_actions();
		}

		/**
		 * Remove actions which prints an unessesary link in HTML head
		 *
		 * @since		1.0.0
		 */
		private function remove_actions() {
			remove_action('wp_head', 'rsd_link');
			remove_action('wp_head', 'wp_generator');
			remove_action('wp_head', 'feed_links', 2);
			remove_action('wp_head', 'wlwmanifest_link');
			remove_action('wp_head', 'feed_links_extra', 3);
			remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
			remove_action('wp_head', 'rest_output_link_wp_head', 10, 0);
		}

		/**
		 * Retrieve the name of the plugin
		 *
		 * @since		1.0.0
		 * @return	string	The name of the plugin.
		 */
		public function get_plugin_name() {
			return $this->plugin_name;
		}

		/**
		 * Retrieve the version number of the plugin.
		 *
		 * @since		1.0.0
		 * @return	string	The version number of the plugin.
		 */
		public function get_version() {
			return $this->version;
		}
	}
}
