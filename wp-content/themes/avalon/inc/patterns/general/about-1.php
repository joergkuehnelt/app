<?php
/**
 * About 1 block pattern
 */
return array(
	'title'	  => __( 'About 1', 'avalon' ),
	'categories' => array( 'avalon-about' ),
	'content'	=> '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"padding":{"bottom":"0","top":"var:preset|spacing|40"}}},"className":"what-we-do"} -->
	<div class="wp-block-columns alignwide what-we-do" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":""} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"500px","bottomLeft":"500px"}}},"gradient":"horizontal-primary-to-background","className":"avalon-left-top"} -->
	<div class="wp-block-group avalon-left-top has-horizontal-primary-to-background-gradient-background has-background" style="border-top-left-radius:500px;border-bottom-left-radius:500px"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"size-full avalon-right is-style-default"} -->
	<figure class="wp-block-image size-large size-full avalon-right is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/hero-1.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontStyle":"normal","fontWeight":"400"}},"className":"tagline","fontSize":"tiny"} -->
	<p class="has-text-align-left tagline has-tiny-font-size" style="font-style:normal;font-weight:400;letter-spacing:3px;text-transform:uppercase">' . esc_html__( 'About us', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.2"}},"fontSize":"x-large"} -->
	<p class="has-x-large-font-size" style="font-style:normal;font-weight:300;line-height:1.2"><strong>' . esc_html__( 'Street', 'avalon' ) . '</strong> ' . esc_html__( 'Fashion', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Street fashion is a style of fashion that is worn by people in the streets and public places, such as parks, malls, and other public venues. Street fashion is usually influenced by the latest trends in the fashion industry, as well as popular culture and social media.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button" href="#0">' . esc_html__( 'Our Mission', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"secondary","className":"avalon-trusted-by is-style-avalon-border","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignwide avalon-trusted-by is-style-avalon-border has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size">' . esc_html__( 'Trusted by over&nbsp;', 'avalon' ) . '<strong>' . esc_html__( '250,000+&nbsp;', 'avalon' ) . '</strong>' . esc_html__( 'Clients worldwide since 2017', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"huge"} -->
	<p class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:800">' . esc_html__( '4.8', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"2px"}},"className":"avalon-rating"} -->
	<p class="has-text-align-center avalon-rating" style="letter-spacing:2px">' . esc_html__( '★★★★★', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( '3000 Ratings', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"huge"} -->
	<p class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:800">' . esc_html__( '2000+', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center","className":"avalon-rating"} -->
	<p class="has-text-align-center avalon-rating">' . esc_html__( 'Worldwide Sales per Year', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
