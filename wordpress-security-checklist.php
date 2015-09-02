<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/rafaelfunchal/wordpress-security-checklist-plugin
 * @since             1.0.0
 * @package           Wordpress_Security_Checklist
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Security Checklist
 * Plugin URI:        https://github.com/rafaelfunchal/wordpress-security-checklist-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Rafael Funchal, Valerio Souza, Leo Baiano
 * Author URI:        https://github.com/rafaelfunchal/wordpress-security-checklist-plugin
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wordpress-security-checklist
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wordpress-security-checklist-activator.php
 */
function activate_wordpress_security_checklist() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-security-checklist-activator.php';
	Wordpress_Security_Checklist_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wordpress-security-checklist-deactivator.php
 */
function deactivate_wordpress_security_checklist() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-security-checklist-deactivator.php';
	Wordpress_Security_Checklist_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wordpress_security_checklist' );
register_deactivation_hook( __FILE__, 'deactivate_wordpress_security_checklist' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-security-checklist.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wordpress_security_checklist() {

	$plugin = new Wordpress_Security_Checklist();
	$plugin->run();

}
run_wordpress_security_checklist();
