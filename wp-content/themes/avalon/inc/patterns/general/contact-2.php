<?php
/**
 * Contact 2 block pattern
 */
return array(
	'title'	  => __( 'Contact 2', 'avalon' ),
	'categories' => array( 'avalon-contact' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"30px"}}},"gradient":"diagonal-secondary-to-foreground","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-diagonal-secondary-to-foreground-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:30px;padding-bottom:var(--wp--preset--spacing--50);padding-left:30px"><!-- wp:heading {"level":1,"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<h1 class="alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">' . esc_html__( 'Get in Touch', 'avalon' ) . '</h1>
	<!-- /wp:heading -->
	
	<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"spacing":{"padding":{"right":"10%"}}}} -->
	<div class="wp-block-column is-vertically-aligned-top" style="padding-right:10%;flex-basis:50%"><!-- wp:paragraph {"fontSize":"medium"} -->
	<p class="has-medium-font-size">' . esc_html__( 'We are here to help you with any inquiry. Call us or visit us.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'If you have any questions or would like to get in touch, please feel free to contact us at info@example.com or fill out the form below and we will get back to you as soon as possible.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size">' . esc_html__( 'Store', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'London Street 123', 'avalon' ) . '<br>' . esc_html__( 'Street Name, 78', 'avalon' ) . '<br>' . esc_html__( '12345 London', 'avalon' ) . '<br>' . esc_html__( '+987 123 456', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size">' . esc_html__( 'Office', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'London Street 123', 'avalon' ) . '<br>' . esc_html__( 'Street Name, 78', 'avalon' ) . '<br>' . esc_html__( '12345 London', 'avalon' ) . '<br>' . esc_html__( '+987 123 456', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:image {"align":"full","sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image alignfull size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/hero-1.jpg" alt="' . esc_attr__( 'Image', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group -->',
);
