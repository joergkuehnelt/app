<?php
/**
 * Ecommerce 7 block pattern
 */
return array(
	'title'	  => __( 'eCommerce 7', 'avalon' ),
	'categories' => array( 'avalon-ecommerce' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"var:preset|spacing|30","bottom":"0"}}},"gradient":"vertical-background-to-secondary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-vertical-background-to-secondary-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:30px;padding-bottom:0;padding-left:30px"><!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
	<h2 class="alignwide" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( 'On Sale', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( 'Our winter fashion sale is now on, with up to 40% off select styles.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"10px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:10px"><!-- wp:woocommerce/product-on-sale {"rows":1,"categories":[],"contentVisibility":{"image":true,"title":true,"price":true,"rating":true,"button":true},"stockStatus":["","instock","outofstock","onbackorder"],"orderby":"popularity","align":"wide"} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
