<?php

/*
    Plugin Name: WooCommerce B2B
    Plugin URI: https://woocommerce-b2b.com/
    Description: Transform your WooCommerce into Business-to-Business shop for wholesale.
    Author: Code4Life
    Author URI: https://code4life.it/
    Version: 3.3.9
    Text Domain: woocommerce-b2b
    Domain Path: /i18n/
    License: GPLv3
    License URI: http://www.gnu.org/licenses/gpl-3.0.html

    Requires at least: 5.0
    Tested up to: 6.5

    WC requires at least: 4.0
    WC tested up to: 8.9
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

if ( ! defined( 'WCB2B_PLUGIN_FILE' ) ) {
    define( 'WCB2B_PLUGIN_FILE', __FILE__ );
}
if ( ! defined( 'WCB2B_PLUGIN_URI' ) ) {
    define( 'WCB2B_PLUGIN_URI', plugin_dir_url( __FILE__ ) );
}

// Include the main WooCommerce B2B class
include_once dirname( __FILE__ ) . '/includes/classes/class-wcb2b.php';

/**
 * Returns the main instance of WCB2B
 *
 * @return WooCommerceB2B
 */
function WCB2B() {
    return WooCommerceB2B::instance();
}

// Global for backwards compatibility
$GLOBALS['wcb2b'] = WCB2B();
