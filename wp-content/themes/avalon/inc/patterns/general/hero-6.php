<?php
/**
 * Hero 6 block pattern
 */
return array(
	'title'	  => __( 'Hero 6', 'avalon' ),
	'categories' => array( 'avalon-hero' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"30px","left":"30px"}}},"gradient":"diagonal-background-to-secondary","className":"what-we-do","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull what-we-do has-diagonal-background-to-secondary-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:30px;padding-bottom:var(--wp--preset--spacing--60);padding-left:30px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"10px"},"spacing":{"margin":{"top":"var:preset|spacing|30","right":"0","bottom":"0","left":"0"}}},"fontSize":"tiny"} -->
	<p class="has-tiny-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:0;margin-left:0;letter-spacing:10px;text-transform:uppercase">' . esc_html__( 'Winter Sale', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"gigantic"} -->
	<h2 class="has-gigantic-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( 'Street Fashion', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'It is time for a winter wardrobe refresh! Head to our Winter Street Fashion Sale for all the hottest looks at unbeatable prices', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"radius":"0px"}},"className":"is-style-avalon-button-shadow","fontSize":"small"} -->
	<div class="wp-block-button has-custom-font-size is-style-avalon-button-shadow has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:0px">' . esc_html__( 'Shop the Sale', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-right:30px;padding-left:30px"><!-- wp:video {"align":"wide"} -->
	<figure class="wp-block-video alignwide"><video autoplay controls poster="' . esc_url( get_template_directory_uri() ) . '/assets/images/hero-1.jpg" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/video.mp4"></video></figure>
	<!-- /wp:video --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
