<?php
/**
 * Hero 7 block pattern
 */
return array(
	'title'	  => __( 'Hero 7', 'avalon' ),
	'categories' => array( 'avalon-hero' ),
	'content'	=> '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/hero-1.jpg' ) ) . '","dimRatio":70,"overlayColor":"foreground","focalPoint":{"x":0.47,"y":0.32},"minHeight":800,"align":"full","className":"is-style-default hero-header additional","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
	<div class="wp-block-cover alignfull is-style-default hero-header additional" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Background Image', 'avalon' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/hero-1.jpg" style="object-position:47% 32%" data-object-fit="cover" data-object-position="47% 32%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"header-1","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide header-1"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"30px","bottom":"0","left":"30px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:0;padding-right:30px;padding-bottom:0;padding-left:30px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","right":"2px"}}}} -->
	<div class="wp-block-column" style="padding-top:10px;padding-right:2px;padding-bottom:10px"><!-- wp:paragraph {"align":"center","fontSize":"tiny"} -->
	<p class="has-text-align-center has-tiny-font-size">' . esc_html__( 'Free Delivery on orders over', 'avalon' ) . ' <strong>' . esc_html__( '$100', 'avalon' ) . '</strong>' . esc_html__( '. Don’t miss it!', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"30px","left":"30px","bottom":"10px"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"background","textColor":"foreground","className":"socials-cart","layout":{"type":"constrained"}} -->
	<div class="wp-block-group socials-cart has-foreground-color has-background-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only"} -->
	<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"pinterest.com","service":"pinterest"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"align":"wide","className":"banner-info","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group alignwide banner-info"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","width":350,"widthUnit":"px","buttonText":"Search","buttonPosition":"no-button","query":{"post_type":"product"},"style":{"border":{"color":"#211f1dde","width":"2px","radius":"0px"}},"className":"hide-mobile"} /-->
	
	<!-- wp:woocommerce/mini-cart {"hasHiddenPrice":true,"style":{"typography":{"fontSize":"13px"}}} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"10px","right":"30px","left":"30px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"#eeeeee","width":"1px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:#eeeeee;border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:30px;padding-left:30px"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"padding":{"right":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="padding-right:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":""} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-title {"level":0,"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontSize":"extra-large"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group"><!-- wp:navigation {"className":"is-style-default","layout":{"type":"flex","setCascadingProperties":"true","justifyContent":"right","orientation":"horizontal","flexWrap":"wrap"},"fontSize":"tiny"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:30px;padding-left:30px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"gigantic"} -->
	<h2 class="has-text-align-center has-gigantic-font-size" style="font-style:normal;font-weight:400"><strong>' . esc_html__( 'Street', 'avalon' ) . '</strong> ' . esc_html__( 'Fashion', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'It is time for a winter wardrobe refresh! Head to our Winter Street Fashion Sale for all the hottest looks at unbeatable prices', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"radius":"0px"}},"className":"is-style-avalon-button-shadow","fontSize":"small"} -->
	<div class="wp-block-button has-custom-font-size is-style-avalon-button-shadow has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:0px">' . esc_html__( 'Shop the Sale', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:cover -->',
);
