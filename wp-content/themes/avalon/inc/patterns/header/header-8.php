<?php
/**
 * Header 8 Block Pattern
 */
return array(
	'title'	  => __( 'Header 8', 'avalon' ),
	'categories' => array( 'avalon-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"header-1","layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull header-1" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"30px","bottom":"16px","left":"30px","top":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:10px;padding-right:30px;padding-bottom:16px;padding-left:30px"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#FFFFFF","size":"has-small-icon-size","className":"is-style-logos-only socials","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only socials"><!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"pinterest.com","service":"pinterest"} /--></ul>
	<!-- /wp:social-links -->
	
	<!-- wp:paragraph {"align":"center","fontSize":"tiny"} -->
	<p class="has-text-align-center has-tiny-font-size">' . esc_html__( 'Free Delivery on orders over', 'avalon' ) . ' <strong>' . esc_html__( '$100', 'avalon' ) . '</strong>' . esc_html__( '. Don’t miss it!', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"10px","right":"30px","left":"30px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|septenary","width":"1px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--septenary);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:30px;padding-left:30px"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"padding":{"right":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="padding-right:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:site-title {"level":0,"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"extra-large"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group"><!-- wp:navigation {"className":"is-style-default","layout":{"type":"flex","setCascadingProperties":"true","justifyContent":"right","orientation":"horizontal","flexWrap":"wrap"},"fontSize":"tiny"} /-->
	
	<!-- wp:woocommerce/mini-cart {"hasHiddenPrice":true,"style":{"typography":{"fontSize":"11px"}}} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);

