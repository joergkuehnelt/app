<?php
/**
 * Testimonials 3 block pattern
 */
return array(
	'title'	  => __( 'Testimonials 3', 'avalon' ),
	'categories' => array( 'avalon-testimonials' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"volunteers testimonials","layout":{"contentSize":"","type":"constrained"}} -->
	<div class="wp-block-group alignfull volunteers testimonials" style="padding-top:var(--wp--preset--spacing--50);padding-right:30px;padding-bottom:var(--wp--preset--spacing--50);padding-left:30px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"className":"is-style-default"} -->
	<div class="wp-block-column is-style-default"><!-- wp:image {"width":300,"sizeSlug":"large","linkDestination":"none","className":"is-style-avalon-effect-2-image"} -->
	<figure class="wp-block-image size-large is-resized is-style-avalon-effect-2-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-1.jpg" alt="' . esc_attr__( 'Member', 'avalon' ) . '" width="300"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"volunteers-box is-style-avalon-border"} -->
	<div class="wp-block-group volunteers-box is-style-avalon-border has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"right","className":"quote-mark","fontSize":"huge"} -->
	<p class="has-text-align-right quote-mark has-huge-font-size">' . esc_html__( '❞', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size"><strong>' . esc_html__( 'Excelent Work', 'avalon' ) . '</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"className":"rating","fontSize":"tiny"} -->
	<p class="rating has-tiny-font-size" style="letter-spacing:2px">' . esc_html__( '★★★★★', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:quote {"className":"is-style-default"} -->
	<blockquote class="wp-block-quote is-style-default"><!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">' . esc_html__( 'I absolutely love my new clothes from Avalon! The styles are trendy and fashionable, and the fabrics are soft and comfortable. I received so many compliments on my outfit when I wore it out. I am so glad I chose Avalon for my wardrobe update!', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></blockquote>
	<!-- /wp:quote -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:image {"width":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-1.jpg" alt="' . esc_attr__( 'Member', 'avalon' ) . '" width="100"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="a-small-heading"><strong>' . esc_html__( 'Smily Lone', 'avalon' ) . '</strong></h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"className":"is-style-default"} -->
	<div class="wp-block-column is-style-default"><!-- wp:image {"width":300,"sizeSlug":"large","linkDestination":"none","className":"is-style-avalon-effect-2-image"} -->
	<figure class="wp-block-image size-large is-resized is-style-avalon-effect-2-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-3.jpg" alt="' . esc_attr__( 'Member', 'avalon' ) . '" width="300"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"volunteers-box is-style-avalon-border"} -->
	<div class="wp-block-group volunteers-box is-style-avalon-border has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"right","className":"quote-mark","fontSize":"huge"} -->
	<p class="has-text-align-right quote-mark has-huge-font-size">' . esc_html__( '❞', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size"><strong>' . esc_html__( 'Excelent Work', 'avalon' ) . '</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"className":"rating","fontSize":"tiny"} -->
	<p class="rating has-tiny-font-size" style="letter-spacing:2px">' . esc_html__( '★★★★★', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:quote {"className":"is-style-default"} -->
	<blockquote class="wp-block-quote is-style-default"><!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">' . esc_html__( 'I love shopping at Avalon! Their selection of clothing is amazing and their prices are so affordable. They have everything I need, from casualwear to formalwear. The quality of the clothing is great.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></blockquote>
	<!-- /wp:quote -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:image {"width":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-3.jpg" alt="' . esc_attr__( 'Member', 'avalon' ) . '" width="100"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="a-small-heading"><strong>' . esc_html__( 'Yuna Lone', 'avalon' ) . '</strong></h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"className":"is-style-default"} -->
	<div class="wp-block-column is-style-default"><!-- wp:image {"width":300,"sizeSlug":"large","linkDestination":"none","className":"is-style-avalon-effect-2-image"} -->
	<figure class="wp-block-image size-large is-resized is-style-avalon-effect-2-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-4.jpg" alt="' . esc_attr__( 'Member', 'avalon' ) . '" width="300"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"secondary","className":"volunteers-box is-style-avalon-border"} -->
	<div class="wp-block-group volunteers-box is-style-avalon-border has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"right","className":"quote-mark","fontSize":"huge"} -->
	<p class="has-text-align-right quote-mark has-huge-font-size">' . esc_html__( '❞', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size"><strong>' . esc_html__( 'Excelent Work', 'avalon' ) . '</strong></h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px"}},"className":"rating","fontSize":"tiny"} -->
	<p class="rating has-tiny-font-size" style="letter-spacing:2px">' . esc_html__( '★★★★★', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:quote {"className":"is-style-default"} -->
	<blockquote class="wp-block-quote is-style-default"><!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">' . esc_html__( 'I am absolutely in love with the clothes from this boutique! I always find the perfect pieces for any occasion and the quality is unbeatable. The prices are also great, so I am able to get lots of pieces without breaking the bank.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></blockquote>
	<!-- /wp:quote -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:image {"width":100,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-4.jpg" alt="' . esc_attr__( 'Member', 'avalon' ) . '" width="100"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="a-small-heading"><strong>' . esc_html__( 'Rose Smith', 'avalon' ) . '</strong></h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
