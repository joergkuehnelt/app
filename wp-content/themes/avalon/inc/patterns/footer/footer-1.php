<?php
/**
 * Default Footer
 */
return array(
	'title'	  => __( 'Default Footer', 'avalon' ),
	'categories' => array( 'avalon-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
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
	<!-- /wp:group -->
	
	
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0","right":"30px","left":"30px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:30px;padding-bottom:0;padding-left:30px"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"20px"}}},"fontSize":"medium"} -->
	<h3 class="has-medium-font-size" style="margin-top:20px">' . esc_html__( 'Company', 'avalon' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-bottom:0">' . esc_html__( 'Find a location nearest you.&nbsp;', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30","top":"0"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><a href="#">' . esc_html__( 'See Our Stores', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:0px"><a href="#">' . esc_html__( '+391 (0)35 2568 4593', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:0px"><a href="#">' . esc_html__( 'hello@domain.com', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","right":"0","left":"0","top":"0"}}},"className":"is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-default" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"20px"}}},"fontSize":"medium"} -->
	<h3 class="has-medium-font-size" style="margin-top:20px">' . esc_html__( 'Information', 'avalon' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"12px"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:12px"><a href="#">' . esc_html__( 'Shop', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:10px"><a href="#">' . esc_html__( 'My Account', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:10px"><a href="#">' . esc_html__( 'Cart', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"10px"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:10px"><a href="#">' . esc_html__( 'Checkout', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","right":"0","left":"0","top":"0"}}},"className":"is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-default" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"20px"}}},"fontSize":"medium"} -->
	<h3 class="has-medium-font-size" style="margin-top:20px">' . esc_html__( 'Services', 'avalon' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","bottom":"0","left":"0","top":"20px"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:20px;margin-right:0;margin-bottom:0;margin-left:0"><a href="#">' . esc_html__( 'About Us', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","bottom":"0","left":"0","top":"10px"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0"><a href="#">' . esc_html__( 'Careers', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","bottom":"0","left":"0","top":"10px"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0"><a href="#">' . esc_html__( 'Delivery Info', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","bottom":"0","left":"0","top":"10px"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0"><a href="#">' . esc_html__( 'Privacy Policy', 'avalon' ) . '</a></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","right":"0","left":"0","top":"0"}}},"className":"is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-default" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"20px"}}},"fontSize":"medium"} -->
	<h3 class="has-medium-font-size" style="margin-top:20px">' . esc_html__( 'Social Media', 'avalon' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","showLabels":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
	<ul class="wp-block-social-links has-small-icon-size has-visible-labels has-icon-color is-style-logos-only" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"pinterest.com","service":"pinterest"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:separator {"align":"full","backgroundColor":"septenary"} -->
	<hr class="wp-block-separator alignfull has-text-color has-septenary-color has-alpha-channel-opacity has-septenary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-right:30px;padding-left:30px"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"><!-- wp:image {"width":300,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/cards.png" alt="' . esc_attr__( 'Cards', 'avalon' ) . '" width="300"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:site-title {"fontSize":"medium"} /-->
	
	<!-- wp:paragraph {"fontSize":"tiny"} -->
	<p class="has-tiny-font-size">' . esc_attr__( '© 2022', 'avalon' ) . ' <a href="' . esc_html__( 'https://woocommerce.com/products/avalon', 'avalon' ) . '">' . esc_attr__( 'Avalon Theme', 'avalon' ) . '</a> ' . esc_attr__( 'by Anariel Design', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
