<?php
/**
 * Hero 9 block pattern
 */
return array(
	'title'	  => __( 'Hero 9', 'avalon' ),
	'categories' => array( 'avalon-hero' ),
	'content'	=> '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"60px","left":"60px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","className":"is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide is-style-default has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:60px;padding-bottom:var(--wp--preset--spacing--60);padding-left:60px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"floating-image"} -->
	<div class="wp-block-column floating-image" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);flex-basis:60%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-avalon-shadow-image image-one"} -->
	<figure class="wp-block-image size-full is-style-avalon-shadow-image image-one"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-3.jpg" alt="' . esc_attr__( 'Fashion & Style', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-avalon-shadow-image image-two"} -->
	<figure class="wp-block-image size-large is-style-avalon-shadow-image image-two"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-1.jpg" alt="' . esc_attr__( 'Fashion & Style', 'avalon' ) . '"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-avalon-shadow-image image-three"} -->
	<figure class="wp-block-image size-full is-style-avalon-shadow-image image-three"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-3.jpg" alt="' . esc_attr__( 'Fashion & Style', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":""} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"3.6rem"}}} -->
	<h2 style="font-size:3.6rem;font-style:normal;font-weight:300"><strong>' . esc_html__( 'On Sale', 'avalon' ) . '</strong> ' . esc_html__( 'Collection', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'It is time to freshen up your wardrobe with our latest fashion collection! From bold statement pieces to classic staples, our collection has something for everyone. Update your style today and be the trendsetter you know you are!', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","style":{"border":{"radius":"0px"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"is-style-avalon-button-shadow","fontSize":"small"} -->
	<div class="wp-block-button has-custom-font-size is-style-avalon-button-shadow has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" style="border-radius:0px">' . esc_html__( 'Shop the Sale', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
