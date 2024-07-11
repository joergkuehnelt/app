<?php
/**
 * Testimonials 1 block pattern
 */
return array(
	'title'	  => __( 'Testimonials 1', 'avalon' ),
	'categories' => array( 'avalon-testimonials' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"testimonials","layout":{"contentSize":"","type":"constrained"}} -->
	<div class="wp-block-group alignfull testimonials" style="padding-top:var(--wp--preset--spacing--50);padding-right:30px;padding-bottom:var(--wp--preset--spacing--50);padding-left:30px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"bottom":"10px"}}}} -->
	<div class="wp-block-column" style="padding-bottom:10px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"border":{"radius":{"bottomRight":"0px"},"top":{"color":"var:preset|color|senary","width":"4px"}}},"backgroundColor":"secondary","className":"is-style-default"} -->
	<div class="wp-block-group is-style-default has-secondary-background-color has-background" style="border-bottom-right-radius:0px;border-top-color:var(--wp--preset--color--senary);border-top-width:4px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:quote {"className":"is-style-default"} -->
	<blockquote class="wp-block-quote is-style-default"><!-- wp:paragraph -->
	<p>' . esc_html__( '"I absolutely love my new clothes from Avalon! The styles are trendy and fashionable, and the fabrics are soft and comfortable. I received so many compliments on my outfit when I wore it out. I am so glad I chose Avalon for my wardrobe update!"', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}},"border":{"radius":"0px"}},"gradient":"diagonal-background-to-secondary-triangle","className":"negative-margin"} -->
	<div class="wp-block-group negative-margin has-diagonal-background-to-secondary-triangle-gradient-background has-background" style="border-radius:0px;padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
	<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="a-small-heading">' . esc_html__( 'Yuna Lane', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:image {"width":100,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"is-style-avalon-shadow-image"} -->
	<figure class="wp-block-image size-large is-resized has-custom-border is-style-avalon-shadow-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-1.jpg" alt="' . esc_attr__( 'Member', 'avalon' ) . '" style="border-radius:100px" width="100"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"10px"}}}} -->
	<div class="wp-block-column" style="padding-bottom:10px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"border":{"radius":"0px","top":{"color":"var:preset|color|senary","width":"4px"}}},"backgroundColor":"secondary","className":"is-style-default"} -->
	<div class="wp-block-group is-style-default has-secondary-background-color has-background" style="border-radius:0px;border-top-color:var(--wp--preset--color--senary);border-top-width:4px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:quote {"className":"is-style-default"} -->
	<blockquote class="wp-block-quote is-style-default"><!-- wp:paragraph -->
	<p>' . esc_html__( '"I am absolutely in love with the clothes from this boutique! I always find the perfect pieces for any occasion and the quality is unbeatable. The prices are also great, so I am able to get lots of pieces without breaking the bank."', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}},"border":{"radius":"0px"}},"gradient":"diagonal-background-to-secondary-triangle","className":"negative-margin"} -->
	<div class="wp-block-group negative-margin has-diagonal-background-to-secondary-triangle-gradient-background has-background" style="border-radius:0px;padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
	<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="a-small-heading">' . esc_html__( 'Love Smith', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:image {"width":100,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"is-style-avalon-shadow-image"} -->
	<figure class="wp-block-image size-large is-resized has-custom-border is-style-avalon-shadow-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-3.jpg" alt="' . esc_attr__( 'Member', 'avalon' ) . '" style="border-radius:100px" width="100"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"10px"}}}} -->
	<div class="wp-block-column" style="padding-bottom:10px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"border":{"radius":"0px","top":{"color":"var:preset|color|senary","width":"4px"}}},"backgroundColor":"secondary","className":"is-style-default"} -->
	<div class="wp-block-group is-style-default has-secondary-background-color has-background" style="border-radius:0px;border-top-color:var(--wp--preset--color--senary);border-top-width:4px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:quote {"className":"is-style-default"} -->
	<blockquote class="wp-block-quote is-style-default"><!-- wp:paragraph -->
	<p>' . esc_html__( '"I love shopping at Avalon! Their selection of clothing is amazing and their prices are so affordable. They have everything I need, from casualwear to formalwear. The quality of the clothing is great."', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></blockquote>
	<!-- /wp:quote --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"5%","right":"5%","bottom":"5%","left":"5%"}},"border":{"radius":"0px"}},"gradient":"diagonal-background-to-secondary-triangle","className":"negative-margin"} -->
	<div class="wp-block-group negative-margin has-diagonal-background-to-secondary-triangle-gradient-background has-background" style="border-radius:0px;padding-top:5%;padding-right:5%;padding-bottom:5%;padding-left:5%"><!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"right"}} -->
	<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="a-small-heading">' . esc_html__( 'Lane Doe', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:image {"width":100,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"is-style-avalon-shadow-image"} -->
	<figure class="wp-block-image size-large is-resized has-custom-border is-style-avalon-shadow-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-4.jpg" alt="' . esc_attr__( 'Member', 'avalon' ) . '" style="border-radius:100px" width="100"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
