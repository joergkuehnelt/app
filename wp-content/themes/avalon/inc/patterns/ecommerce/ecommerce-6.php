<?php
/**
 * Ecommerce 6 block pattern
 */
return array(
	'title'	  => __( 'eCommerce 6', 'avalon' ),
	'categories' => array( 'avalon-ecommerce' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:30px;padding-bottom:0;padding-left:30px"><!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
	<h2 class="alignwide" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( 'Shop by Categories', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">' . esc_html__( 'Browse through our categories to find the perfect look for you.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:separator {"style":{"color":{"background":"#eeeeee"}}} -->
	<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="background-color:#eeeeee;color:#eeeeee"/>
	<!-- /wp:separator --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"className":"product-category","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide product-category" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:woocommerce/featured-category {"editMode":false,"focalPoint":{"x":0.52,"y":0.26},"imageFit":"cover","mediaId":2012,"mediaSrc":"' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-3.jpg","minHeight":566,"categoryId":19,"showDesc":false} -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button" href="">' . esc_html__( 'Street Fashion', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	<!-- /wp:woocommerce/featured-category -->
	
	<!-- wp:woocommerce/featured-category {"editMode":false,"focalPoint":{"x":0.5,"y":0.67},"imageFit":"cover","mediaId":2009,"mediaSrc":"' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-2.jpg","minHeight":358,"categoryId":22,"showDesc":false} -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button" href="">' . esc_html__( 'Jacket', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	<!-- /wp:woocommerce/featured-category --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:woocommerce/featured-category {"editMode":false,"focalPoint":{"x":0.5,"y":0.52},"imageFit":"cover","mediaId":2010,"mediaSrc":"' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-1.jpg","minHeight":424,"categoryId":17,"showDesc":false} -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button" href="">' . esc_html__( 'Jeans', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	<!-- /wp:woocommerce/featured-category --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:woocommerce/featured-category {"editMode":false,"imageFit":"cover","mediaId":2011,"mediaSrc":"' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-4.jpg","minHeight":422,"categoryId":20,"showDesc":false} -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button" href="">' . esc_html__( 'Shirts', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	<!-- /wp:woocommerce/featured-category --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:woocommerce/featured-category {"editMode":false,"focalPoint":{"x":0.43,"y":0.2},"imageFit":"cover","mediaId":2008,"mediaSrc":"' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-5.jpg","minHeight":499,"categoryId":20,"showDesc":false,"textColor":"foreground"} -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","style":{"border":{"radius":"0px"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button" href="" style="border-radius:0px">' . esc_html__( 'Bluse', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
	<!-- /wp:woocommerce/featured-category --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
