<?php
/**
 * Contact 1 block pattern
 */
return array(
	'title'	  => __( 'Contact 1', 'avalon' ),
	'categories' => array( 'avalon-contact' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|50","right":"30px","left":"30px"}}},"layout":{"contentSize":"","type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:30px;padding-bottom:var(--wp--preset--spacing--50);padding-left:30px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0%","right":"0%","bottom":"0%","left":"0%"}},"border":{"radius":"0px"}},"backgroundColor":"foreground"} -->
	<div class="wp-block-group alignwide has-foreground-background-color has-background" style="border-radius:0px;padding-top:0%;padding-right:0%;padding-bottom:0%;padding-left:0%"><!-- wp:group {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"10%","right":"10%","bottom":"10%","left":"10%"}}},"backgroundColor":"secondary","className":"left-bottom"} -->
	<div class="wp-block-group left-bottom has-secondary-background-color has-background" style="border-radius:0px;padding-top:10%;padding-right:10%;padding-bottom:10%;padding-left:10%"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"80%"} -->
	<div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"textColor":"black","fontSize":"gigantic"} -->
	<h2 class="has-black-color has-text-color has-gigantic-font-size" id="ready-to-grow-your-online-business"><strong>' . esc_html__( 'Contact us', 'avalon' ) . ' </strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'If you have any questions or would like to get in touch, please feel free to contact us at info@example.com or fill out the form below and we will get back to you as soon as possible.', 'avalon' ) . ' </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
	<h3 class="has-text-align-left has-large-font-size" id="tel" style="font-style:normal;font-weight:600">' . esc_html__( 'Tel:', 'avalon' ) . ' </h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"left"} -->
	<p class="has-text-align-left">' . esc_html__( '+1-123-456-789', 'avalon' ) . ' </p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
	<h3 class="has-text-align-left has-large-font-size" id="tel" style="font-style:normal;font-weight:600">' . esc_html__( 'Address:', 'avalon' ) . ' </h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"left"} -->
	<p class="has-text-align-left">' . esc_html__( 'Address Line 1', 'avalon' ) . ' </p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
	<h3 class="has-text-align-left has-large-font-size" id="tel" style="font-style:normal;font-weight:600">' . esc_html__( 'Address:', 'avalon' ) . ' </h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"left"} -->
	<p class="has-text-align-left">' . esc_html__( 'info@example.com', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:spacer {"height":"30px","className":"ext-my-0"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer ext-my-0"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"20%"} -->
	<div class="wp-block-column" style="flex-basis:20%"></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"100%"} -->
	<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/hero-1.jpg" alt="' . esc_attr__( 'Image', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
