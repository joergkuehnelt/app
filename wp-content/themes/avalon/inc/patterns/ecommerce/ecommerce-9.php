<?php
/**
 * Ecommerce 9 block pattern
 */
return array(
	'title'	  => __( 'eCommerce 9', 'avalon' ),
	'categories' => array( 'avalon-ecommerce' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:30px;padding-bottom:0;padding-left:30px"><!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
	<h2 class="alignwide" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( 'Newest Products', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( 'The newest fashion products in 2023 have been all about bold, daring and unique designs.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"backgroundColor":"septenary"} -->
	<hr class="wp-block-separator has-text-color has-septenary-color has-alpha-channel-opacity has-septenary-background-color has-background"/>
	<!-- /wp:separator --></div>
	<!-- /wp:group -->
	
	<!-- wp:woocommerce/product-new {"columns":4,"rows":1,"categories":[],"align":"wide"} /--></div>
	<!-- /wp:group -->',
);
