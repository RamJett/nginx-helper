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
 * Base PATH of plugin
 */
if ( ! defined( 'NGINX_HELPER_BASEPATH' ) ) {
	define( 'NGINX_HELPER_BASEPATH', plugin_dir_path( __FILE__ ) . 'nginx-helper/');
}

require NGINX_HELPER_BASEPATH . 'nginx-helper.php';