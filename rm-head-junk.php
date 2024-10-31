<?php
/**
 * Plugin Name:		RM Head Junk
 * Description: 	Remove extra links in HTML head.
 * Author: 				Felipe Paul Martins
 * Version: 			1.0.0
 * Author URI:		https://opusmagnum.ch
 * License:				GPL-2.0+
 * License URI:		http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:		rmhj
 * Domain Path:		/languages
 *
 * RM Head junk is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * RM Head junk is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @package		RM_Head_Junk
 * @author		Felipe Paul Martins <fpm@opusmagnum.ch>
 * @license		GPL-2.0+
 * @link			https://opusmagnum.ch
 */

/* Prevent loading this file directly */
defined( 'ABSPATH' ) || exit;

/**
 * Add default options on plugin activation.
 * @since 1.0.0
 */
function rm_head_junk_activate() {}
register_activation_hook( __FILE__, 'rm_head_junk_activate' );


if ( !class_exists( 'RM_Head_Junk' ) ) {

	/**
	 * Class RM_Head_Junk
	 * @since 1.0.0
	 */
	class RM_Head_Junk {

		/**
		 * The current version of the plugin.
		 *
		 * @since		1.0.0
		 * @access	protected
		 * @var			string	$version	The current version of the plugin.
		 */
		protected $version;

		/**
		 * The directory path of the plugin.
		 *
		 * @since		1.0.0
		 * @access	protected
		 * @var			string	$dir_path	The directory path of the plugin.
		 */
		protected $dir_path;

		/**
		 * The directory URI of the plugin.
		 *
		 * @since		1.0.0
		 * @access	protected
		 * @var			string	$dir_uri	The directory URI of the plugin.
		 */
		protected $dir_uri;

		/**
		 * Class Constructor.
		 *
		 * @since		1.0.0
		 */
		public function __construct() {

			$this->version			= '1.0.0';
			$this->plugin_name	= 'rm-head-junk';
			$this->dir_path			= trailingslashit( plugin_dir_path( __FILE__ ) );
			$this->dir_uri			= trailingslashit( plugin_dir_url(  __FILE__ ) );

			$this->load_dependencies();
		}

		/**
		 * Init the plugin functions
		 *
		 * @since		1.0.0
		 */
		private function load_dependencies() {

			/**
			 * The class responsible for defining all actions that occur in the admin area.
			 */
			require_once $this->dir_path .'public/class-rmhj-actions.php';

			// Create instance of Admin plugin functionnalities
			$plugin_admin = new RMHJ_Actions( $this->get_plugin_name(), $this->get_version() );
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

new RM_Head_Junk();
