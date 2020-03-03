<?php
/**
 * Plugin Name: Cool plugin
 * Plugin URI: http://www.nubeseo.es
 * Description: A cool plugin
 * Version: 1.0
 * License: Copyright
 *
 * @author nubeseo
 * @package coolplugin
 * @copyright nubeseo
 */

define( 'COOL_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
require COOL_PLUGIN_PATH . 'includes/class-admincontroller.php';

/**
 * Run plugin installation
 */
add_action( 'admin_menu', 'cool_add_menu' );

/**
 * Run plugin installation
 */
function cool_load_localization() {
	load_plugin_textdomain( 'cool' );
}

add_action( 'plugins_loaded', 'cool_load_localization' );

/**
 * Add WordPress menu
 */
function cool_add_menu() {
	add_menu_page(
		__( 'Cool page', 'textdomain' ),
		__( 'Cool title', 'textdomain' ),
		'manage_options',
		'custompage',
		'cool_options_page_html',
		'dashicons-admin-media'
	);
}

/**
 * Add WordPress page
 */
function cool_options_page_html() {
	new AdminController();
}
