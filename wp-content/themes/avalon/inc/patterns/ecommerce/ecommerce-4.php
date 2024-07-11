<?php
/**
 * Ecommerce 4 block pattern
 */
return array(
	'title'	  => __( 'eCommerce 4', 'avalon' ),
	'categories' => array( 'avalon-ecommerce' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"gradient":"diagonal-background-to-secondary"} -->
	<div class="wp-block-group alignwide has-diagonal-background-to-secondary-gradient-background has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"border":{"width":"2px"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"borderColor":"foreground"} -->
	<div class="wp-block-group has-border-color has-foreground-border-color" style="border-width:2px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'Up to', 'avalon' ) . ' <strong>' . esc_html__( '50%', 'avalon' ) . '</strong> ' . esc_html__( 'OFF *', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"10px"},"spacing":{"margin":{"top":"0"}}},"className":"fade avalon-negative-margin-top"} -->
	<h2 class="has-text-align-center fade avalon-negative-margin-top" style="margin-top:0;letter-spacing:10px"><strong>' . esc_html__( 'SALE', 'avalon' ) . '</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"className":"avalon-negative-margin-top","fontSize":"small"} -->
	<p class="has-text-align-center avalon-negative-margin-top has-small-font-size" style="margin-top:0"><em>' . esc_html__( '*Ends October 18, 2022, 13:59 PST', 'avalon' ) . '</em></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"3px","backgroundColor":"tertiary"} -->
	<div class="wp-block-column has-tertiary-background-color has-background" style="flex-basis:3px"></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"align":"center","width":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-1.jpg" alt="" width="200"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3} -->
	<h3 class="has-text-align-center"><strong>' . esc_html__( 'New in Shop', 'avalon' ) . '</strong></h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'We have refreshed our sale with discounts of up to ', 'avalon' ) . '<strong>' . esc_html__( '40%', 'avalon' ) . '</strong> ' . esc_html__( 'on select styles.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-yuna-button-shadow is-style-avalon-button-shadow","fontSize":"small"} -->
	<div class="wp-block-button aligncenter has-custom-font-size is-style-yuna-button-shadow is-style-avalon-button-shadow has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Shop Now', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
