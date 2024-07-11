<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Avalon
 * @since 0.1
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function avalon_register_block_styles() {
		// Columns: Shadow.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'avalon-shadow',
				'label' => esc_html__( 'Shadow', 'avalon' ),
			)
		);

		// Column: Shadow.
		register_block_style(
			'core/column',
			array(
				'name'  => 'avalon-shadow',
				'label' => esc_html__( 'Shadow', 'avalon' ),
			)
		);

		// Cover: Shadow.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'avalon-shadow',
				'label' => esc_html__( 'Shadow', 'avalon' ),
			)
		);

		// Cover: Shape 1.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'avalon-shape-one',
				'label' => esc_html__( 'Shape One', 'avalon' ),
			)
		);

		// Cover: Shape 2.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'avalon-shape-two',
				'label' => esc_html__( 'Shape Two', 'avalon' ),
			)
		);

		// Cover: Shape 3.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'avalon-shape-three',
				'label' => esc_html__( 'Shape Three', 'avalon' ),
			)
		);

		// Group: Shadow.
		register_block_style(
			'core/group',
			array(
				'name'  => 'avalon-shadow',
				'label' => esc_html__( 'Shadow', 'avalon' ),
			)
		);

		// Image: Shadow.
		register_block_style(
			'core/image',
			array(
				'name'  => 'avalon-shadow-image',
				'label' => esc_html__( 'Shadow', 'avalon' ),
			)
		);

		// Image: Effect 1.
		register_block_style(
			'core/image',
			array(
				'name'  => 'avalon-effect-1-image',
				'label' => esc_html__( 'Effect 1', 'avalon' ),
			)
		);

		// Image: Effect 2.
		register_block_style(
			'core/image',
			array(
				'name'  => 'avalon-effect-2-image',
				'label' => esc_html__( 'Effect 2', 'avalon' ),
			)
		);

		// Image: Effect 3.
		register_block_style(
			'core/image',
			array(
				'name'  => 'avalon-effect-3-image',
				'label' => esc_html__( 'Effect 3', 'avalon' ),
			)
		);

		// Columns: Border.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'avalon-border',
				'label' => esc_html__( 'Border', 'avalon' ),
			)
		);

		// Cover: Border.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'avalon-border',
				'label' => esc_html__( 'Border', 'avalon' ),
			)
		);

		// Group: Border.
		register_block_style(
			'core/group',
			array(
				'name'  => 'avalon-border',
				'label' => esc_html__( 'Border', 'avalon' ),
			)
		);

		// Image: Border.
		register_block_style(
			'core/image',
			array(
				'name'  => 'avalon-border',
				'label' => esc_html__( 'Border', 'avalon' ),
			)
		);

		// Columns: Hover Shadow.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'avalon-hover-shadow',
				'label' => esc_html__( 'Hover Shadow', 'avalon' ),
			)
		);

		// Column: Hover Shadow.
		register_block_style(
			'core/column',
			array(
				'name'  => 'avalon-hover-shadow',
				'label' => esc_html__( 'Hover Shadow', 'avalon' ),
			)
		);

		// Cover: Hover Shadow.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'avalon-hover-shadow',
				'label' => esc_html__( 'Hover Shadow', 'avalon' ),
			)
		);

		// Group: Hover Shadow.
		register_block_style(
			'core/group',
			array(
				'name'  => 'avalon-hover-shadow',
				'label' => esc_html__( 'Hover Shadow', 'avalon' ),
			)
		);

		// Image: Hover Shadow.
		register_block_style(
			'core/image',
			array(
				'name'  => 'avalon-hover-shadow-image',
				'label' => esc_html__( 'Hover Shadow', 'avalon' ),
			)
		);

		// Button: Shadow.
		register_block_style(
			'core/button',
			array(
				'name'  => 'avalon-button-shadow-outline',
				'label' => esc_html__( 'Outline Shadow', 'avalon' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'avalon-3d-button-light',
				'label' => esc_html__('3d Button Light', 'avalon'),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'avalon-3d-button-dark',
				'label' => esc_html__('3d Button Dark', 'avalon'),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'avalon-button-line-light',
				'label' => esc_html__('Button Line Light', 'avalon'),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'avalon-button-line-dark',
				'label' => esc_html__('Button Line Dark', 'avalon'),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'avalon-button-shadow',
				'label' => esc_html__('Button Shadow', 'avalon'),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'avalon-button-effect-1',
				'label' => esc_html__('Button Effect One', 'avalon'),
			)
		);
		
		register_block_style(
			'core/button',
			array(
				'name'  => 'avalon-button-effect-2',
				'label' => esc_html__('Button Effect Two', 'avalon'),
			)
		);

		// Navigation: Hover.
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'avalon-navigation-line',
				'label' => esc_html__( 'Underline Hover', 'avalon' ),
			)
		);
		
		// Button: Border & Shadow.
		register_block_style(
			'core/post-excerpt',
			array(
				'name'  => 'avalon-post-excerpt-border-shadow',
				'label' => esc_html__( 'Border & Shadow', 'avalon' ),
			)
		);

		// Button: Border
		register_block_style(
			'core/post-excerpt',
			array(
				'name'  => 'avalon-post-excerpt-border',
				'label' => esc_html__( 'Border', 'avalon' ),
			)
		);

		// Post Title: Border
		register_block_style(
			'core/post-title',
			array(
				'name'  => 'avalon-post-title-border',
				'label' => esc_html__( 'Link No Border', 'avalon' ),
			)
		);

		// Post Date: Border
		register_block_style(
			'core/post-date',
			array(
				'name'  => 'avalon-post-date-border',
				'label' => esc_html__( 'Link No Border', 'avalon' ),
			)
		);

		// Post Featured Image: Shadow
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'avalon-post-featured-image-shadow',
				'label' => esc_html__( 'Shadow', 'avalon' ),
			)
		);

		// Post Featured Image: Effect 1
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'avalon-post-featured-image-effect-1',
				'label' => esc_html__( 'Effect 1', 'avalon' ),
			)
		);

		// Post Featured Image: Effect 2
		register_block_style(
			'core/post-featured-image',
			array(
				'name'  => 'avalon-post-featured-image-effect-2',
				'label' => esc_html__( 'Effect 2', 'avalon' ),
			)
		);

		register_block_style(
			'core/navigation-submenu',
			array(
				'name'  => 'mega-menu',
				'label' => esc_html__('Mega Menu', 'avalon'),
			)
		);

		// Heading: Border Top Radius
		register_block_style(
			'core/heading',
			array(
				'name'  => 'avalon-heading-border-radius',
				'label' => esc_html__( 'Border Top Radius', 'avalon' ),
			)
		);

		// Heading: Scrolling Text
		register_block_style(
			'core/heading',
			array(
				'name'  => 'avalon-scroll-text',
				'label' => esc_html__( 'Scroll', 'avalon' ),
			)
		);

		// Paragraph: Scrolling Text
		register_block_style(
			'core/paragraph',
			array(
				'name'  => 'avalon-scroll-text',
				'label' => esc_html__( 'Scroll', 'avalon' ),
			)
		);
	}
	add_action( 'init', 'avalon_register_block_styles' );
}
