<?php
/**
 * Avalon: Block Patterns
 *
 * @since Avalon 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Avalon 1.0
 */
function avalon_register_block_patterns() {
	$block_pattern_categories = array(
		'avalon-header'			=> array( 'label' => __( 'Header', 'avalon' ) ),
		'avalon-footer'			=> array( 'label' => __( 'Footer', 'avalon' ) ),
		'avalon-hero'				=> array( 'label' => __( 'Hero', 'avalon' ) ),
		'avalon-about'			=> array( 'label' => __( 'About', 'avalon' ) ),
		'avalon-team'				=> array( 'label' => __( 'Team', 'avalon' ) ),
		'avalon-testimonials'		=> array( 'label' => __( 'Testimonials', 'avalon' ) ),
		'avalon-faq'				=> array( 'label' => __( 'FAQ', 'avalon' ) ),
		'avalon-pricing'			=> array( 'label' => __( 'Pricing Table', 'avalon' ) ),
		'avalon-contact'			=> array( 'label' => __( 'Contact', 'avalon' ) ),
		'avalon-ecommerce'		=> array( 'label' => __( 'eCommerce', 'avalon' ) ),
		'avalon-pages'			=> array( 'label' => __( 'Pages', 'avalon' ) ),
		'avalon-query'			=> array( 'label' => __( 'Blog Layout', 'avalon' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Avalon 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *	 An associative array of block pattern categories, keyed by category name.
	 *
	 *	 @type array[] $properties {
	 *		 An array of block category properties.
	 *
	 *		 @type string $label A human-readable label for the pattern category.
	 *	 }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'avalon_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'header/header-1',
		'header/header-2',
		'header/header-3',
		'header/header-4',
		'header/header-5',
		'header/header-6',
		'header/header-7',
		'header/header-8',
		'header/header-9',
		'footer/footer-1',
		'footer/footer-2',
		'footer/footer-3',
		'footer/footer-4',
		'footer/footer-5',
		'footer/scroll-to-top',
		'general/hero-1',
		'general/hero-2',
		'general/hero-3',
		'general/hero-4',
		'general/hero-5',
		'general/hero-6',
		'general/hero-7',
		'general/hero-8',
		'general/hero-9',
		'general/about-1',
		'general/about-2',
		'general/about-3',
		'general/about-4',
		'general/team-1',
		'general/team-2',
		'general/team-3',
		'general/testimonials-1',
		'general/testimonials-2',
		'general/testimonials-3',
		'general/faq-1',
		'general/faq-2',
		'general/contact-1',
		'general/contact-2',
		'ecommerce/ecommerce-1',
		'ecommerce/ecommerce-2',
		'ecommerce/ecommerce-3',
		'ecommerce/ecommerce-4',
		'ecommerce/ecommerce-5',
		'ecommerce/ecommerce-6',
		'ecommerce/ecommerce-7',
		'ecommerce/ecommerce-8',
		'ecommerce/ecommerce-9',
		'pages/home',
		'pages/home-1',
		'pages/home-2',
		'pages/home-3',
		'pages/home-4',
		'pages/about',
		'pages/shop',
		'pages/shop-1',
		'pages/shop-2',
		'query/query-1',
		'query/query-2',
		'query/query-3',
		'query/query-4',
		'query/query-5',
		'query/query-6',
		'query/query-7',
		'query/query-8',
		'query/query-9',
		'hidden/hidden-404',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Avalon 1.0
	 *
	 * @param $block_patterns array List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'avalon_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'avalon/' . $block_pattern,
			require __DIR__ . '/patterns/' . $block_pattern . '.php'
		);
	}
}
add_action( 'init', 'avalon_register_block_patterns', 9 );
