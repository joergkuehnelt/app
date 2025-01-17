<?php
/**
 * About 4 block pattern
 */
return array(
	'title'	  => __( 'About 4', 'avalon' ),
	'categories' => array( 'avalon-about' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","right":"30px","left":"30px"}},"border":{"top":{"color":"var:preset|color|septenary","width":"1px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--septenary);border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:30px;padding-bottom:var(--wp--preset--spacing--30);padding-left:30px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-1.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"90%"} -->
	<div class="wp-block-column" style="flex-basis:90%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
	<h3 class="has-medium-font-size">' . esc_html__( 'Free Shipping', 'avalon' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( 'Free Shipping for orders over $110', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-2.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"90%"} -->
	<div class="wp-block-column" style="flex-basis:90%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
	<h3 class="has-medium-font-size">' . esc_html__( 'Money Guarantee', 'avalon' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( 'Within 30 days for an exchange.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-3.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"90%"} -->
	<div class="wp-block-column" style="flex-basis:90%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
	<h3 class="has-medium-font-size">' . esc_html__( 'Online Support', 'avalon' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( '24 hours a day, 7 days a week', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-4.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"90%"} -->
	<div class="wp-block-column" style="flex-basis:90%"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
	<h3 class="has-medium-font-size">' . esc_html__( 'Flexible Payment', 'avalon' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( 'Pay with Multiple Credit Cards', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
