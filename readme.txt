=== Plugin Name ===
Contributors: KalenJohnson
Donate link: http://filp.github.io/whoops/
Tags: php, error
Requires at least: 3.5
Tested up to: 3.9.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Wordpress plugin that utilizes Whoops! Error Page to show better PHP errors.

== Description ==

This plugin utilizies the [Whoops!]<http://filp.github.io/whoops/> PHP Error Page to display better error pages when fatal PHP errors are thrown. Whoops! gives you much more information than what PHP gives you by default, including the code before and after where PHP identified the issue, and displays other information available to PHP that may be helpful.

The minimum PHP version required is 5.3, as this is what is required by Whoops!

*NOTE:* This plugin should only be used in development. It will show sensitive information, like your database credentials that are stored as constants.

Also note that WP_DEBUG is required to be on for this plugin to do anything, further enforcing the point that this plugin should only be used in development, NOT on a live site!

== Installation ==

1. Upload `php-error-page.zip` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Make a PHP fatal error!

== Frequently Asked Questions ==

= I get the plain error message  =

This may happen depending on where the error occurred. Because this is set up as a Wordpress plugin, if for some reason a PHP error happens before this plugin is able to load, the pretty PHP error page will not be displayed.
Also make sure that WP_DEBUG is set to true, or this plugin will do nothing.

= How can I make sure it is always displayed? =

You will need to install [Whoops!]<http://filp.github.io/whoops/> manually. I would suggest setting it up in your wp-config.php file, so that it is loaded and ready to go before Wordpress really get's loaded.

== Screenshots ==


== Changelog ==

= 0.1 =
* Initial release. Just a plain old PHP error page replacement

== Upgrade Notice ==

= 0.1 =
< PHP 5.3 is required for [Whoops!]<http://filp.github.io/whoops/> to function correctly.


