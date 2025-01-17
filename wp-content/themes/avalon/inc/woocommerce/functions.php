<?php
/**
 * Woocommerce functions
 *
 * @package Avalon
 * @since 1.0
 */

add_theme_support( 'woocommerce');

// Register WooCommerce theme features.
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_theme_support('woocommerce', array(
	'thumbnail_image_width' => 600,
	'single_image_width'    => 1400,
	)
);
/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
