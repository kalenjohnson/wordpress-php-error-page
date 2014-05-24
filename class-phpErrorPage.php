<?php

/**
 * Pretty PHP Error Messages
 *
 * Utilizes Whoops! <http://filp.github.io/whoops/> Error Pages to show better error screens
 *
 * @package   Pretty PHP Error Pages
 * @author    Kalen Johnson <info@kalenjohnson.com>
 * @license   GPL-2.0+
 * @link      http://kalenjohnson.com
 * @copyright 2014 Kalen Johnson
 *
 * Plugin Name: Pretty PHP Error Pages
 * Plugin URI: http://kalenjohnson.com
 * Description: Utilizes Whoops! <http://filp.github.io/whoops/> Error Pages to show better error screens
 * Version: 1.0
 * Author: Kalen Johnson
 * Author URI: http://kalenjohnson.com
 * License: GPL2
 * @wordpress-plugin
 * Text Domain:       pretty-php-error
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/<owner>/<repo>
 * WordPress-Plugin-Boilerplate: v2.6.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once plugin_dir_path(__FILE__) . '/vendor/autoload.php';


/**
 * Set up the error page as early as possible.
 * muplugins_loaded did not seem to work correctly
 */

add_action( 'registered_taxonomy', 'kj_php_error_page', 0 );
function kj_php_error_page() {

	/**
	 * Only load the error page if WP_DEBUG is on
	 */
	if ( WP_DEBUG !== true ) return false;

	/**
	 * Set up and run Whoops!
	 */
	$run     = new Whoops\Run;
	$handler = new Whoops\Handler\PrettyPageHandler;

	$handler->setPageTitle("Wordpress (or you) made a booboo");
	$run->pushHandler($handler);
	$run->register();

}