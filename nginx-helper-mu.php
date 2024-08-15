<?php
/**
 * Plugin Name:       Nginx Helper
 * Plugin URI:        https://rtcamp.com/nginx-helper/
 * Description:       Cleans nginx's fastcgi/proxy cache or redis-cache whenever a post is edited/published. Also does few more things.
 * Version:           2.2.5
 * Author:            rtCamp
 * Author URI:        https://rtcamp.com
 * Text Domain:       nginx-helper
 * Domain Path:       /languages
 * Requires at least: 3.0
 * Tested up to:      6.4
 *
 * @link              https://rtcamp.com/nginx-helper/
 * @since             2.0.0
 * @package           nginx-helper
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Base URL of plugin
 */
if ( ! defined( 'NGINX_HELPER_BASEURL' ) ) {
	define( 'NGINX_HELPER_BASEURL', plugin_dir_url( __FILE__ ) );
}

/**
 * Base Name of plugin
 */
if ( ! defined( 'NGINX_HELPER_BASENAME' ) ) {
	define( 'NGINX_HELPER_BASENAME', plugin_basename( __FILE__ ) );
}

/**
 * Base PATH of plugin
 */
if ( ! defined( 'NGINX_HELPER_BASEPATH' ) ) {
	define( 'NGINX_HELPER_BASEPATH', plugin_dir_path( __FILE__ ) . 'nginx-helper/' );
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require NGINX_HELPER_BASEPATH . 'includes/class-nginx-helper.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    2.0.0
 */
function run_nginx_helper() {

	global $nginx_helper;

	$nginx_helper = new Nginx_Helper();

	$path = $nginx_helper_admin->functional_asset_path();

	// Since must-use plugin. We never activate so the activate_nginx_helper never gets ran.
	if ( ! is_dir( $path ) ) {
		mkdir( $path );
	}

	$nginx_helper->run();

	// Load WP-CLI command.
	if ( defined( 'WP_CLI' ) && WP_CLI ) {

		require_once NGINX_HELPER_BASEPATH . 'class-nginx-helper-wp-cli-command.php';
		\WP_CLI::add_command( 'nginx-helper', 'Nginx_Helper_WP_CLI_Command' );

	}

}
run_nginx_helper();
