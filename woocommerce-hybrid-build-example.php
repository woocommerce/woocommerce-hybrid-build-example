<?php
/**
* Plugin Name: WooCommerce Hybrid Build Process Example.
* Plugin URI: https://woocommerce.com/
* Description: An example that illustrates how you can use 'wp-scripts' to build modern JavaScript as part of an existing build process based on Grunt.
* Version: 1.0.0
* Author: WooCommerce
*
* Text Domain: woocommerce-hybrid-build-example
* Domain Path: /languages/
*
* Requires PHP: 7.0
*
* Requires at least: 5.9
* Tested up to: 5.9
*
* WC requires at least: 6.3
* WC tested up to: 6.4
*
* License: GNU General Public License v3.0
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$i18n_test = __( 'This is a translatable string in PHP.', 'woocommerce-hybrid-build-example' );
