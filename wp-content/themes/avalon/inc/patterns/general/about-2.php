<?php
/**
 * About 2 block pattern
 */
return array(
	'title'	  => __( 'About 2', 'avalon' ),
	'categories' => array( 'avalon-about' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"28px","left":"30px"}}},"className":"what-we-do","layout":{"contentSize":"","type":"constrained"}} -->
	<div class="wp-block-group alignfull what-we-do" style="padding-top:var(--wp--preset--spacing--60);padding-right:28px;padding-bottom:var(--wp--preset--spacing--60);padding-left:30px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"43.33%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:43.33%"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontStyle":"normal","fontWeight":"400"}},"className":"tagline","fontSize":"tiny"} -->
	<p class="has-text-align-left tagline has-tiny-font-size" style="font-style:normal;font-weight:400;letter-spacing:3px;text-transform:uppercase">' . esc_html__( 'about us', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1","fontSize":"2.15rem"}}} -->
	<p style="font-size:2.15rem;font-style:normal;font-weight:300;line-height:1"><strong>' . esc_html__( 'Street', 'avalon' ) . '</strong> ' . esc_html__( 'Fashion for Women', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button" href="#">' . esc_html__( 'Our Mission', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"56.66%","style":{"spacing":{"padding":{"left":"0"}}}} -->
	<div class="wp-block-column" style="padding-left:0;flex-basis:56.66%"><!-- wp:paragraph -->
	<p>' . esc_html__( 'Street fashion for women is all about embracing your individual style, while also having fun with fashion trends. From statement pieces to classic staples, street fashion can be whatever you want it to be.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"6%"}}}} -->
	<div class="wp-block-columns" style="padding-top:6%"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"tagline"} -->
	<figure class="wp-block-image size-full tagline"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-1.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size" id="a-small-heading">' . esc_html__( 'Free Shipping', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"ext-medium"} -->
	<p class="has-ext-medium-font-size">' . esc_html__( 'Your items will be shipped for free using our standard shipping method. Please allow 1-2 weeks for delivery.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"tagline"} -->
	<figure class="wp-block-image size-full tagline"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-2.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size" id="a-second-heading-1">' . esc_html__( 'Money Guarantee', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"ext-medium"} -->
	<p class="has-ext-medium-font-size">' . esc_html__( 'Money Guarantee ensures that you will receive your full purchase price back if you are not satisfied with your purchase.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"tagline"} -->
	<figure class="wp-block-image size-full tagline"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-3.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size" id="a-second-heading">' . esc_html__( 'Flexible Payment', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"ext-medium"} -->
	<p class="has-ext-medium-font-size">' . esc_html__( 'Flexible payment options allow customers to choose from a variety of payment methods, including credit cards, debit cards, online payment services, and even cash.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"tagline"} -->
	<figure class="wp-block-image size-full tagline"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-4.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size" id="a-third-heading">' . esc_html__( 'Online Support', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"ext-medium"} -->
	<p class="has-ext-medium-font-size">' . esc_html__( 'Our online support is focused on providing our customers with fast, reliable and helpful support. We are available via email &amp; chat to answer any questions.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
