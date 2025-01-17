<?php
/**
 * Blog Layout 4 block pattern
 */
return array(
	'title'	  => __( 'Blog Layout 4', 'avalon' ),
	'categories' => array( 'avalon-query' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"30px","left":"30px"}}},"className":"blog-sidebar","layout":{"inherit":false}} -->
	<div class="wp-block-group alignfull blog-sidebar" style="padding-top:var(--wp--preset--spacing--50);padding-right:30px;padding-bottom:var(--wp--preset--spacing--50);padding-left:30px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0rem","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0rem;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"40px","top":"40px","right":"40px","left":"40px"}}},"backgroundColor":"secondary","className":"is-style-avalon-border"} -->
	<div class="wp-block-group is-style-avalon-border has-secondary-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"align":"center","width":120,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"is-style-rounded"} -->
	<figure class="wp-block-image aligncenter size-large is-resized is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-1.jpg" alt="' . esc_attr__( 'Image', 'avalon' ) . '" width="120"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"right":"0","bottom":"0","left":"0","top":"10px"}}}} -->
	<h3 class="has-text-align-center" style="margin-top:10px;margin-right:0;margin-bottom:0;margin-left:0"><strong>' . esc_html__( 'Yuna Smile', 'avalon' ) . '</strong></h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"right":"0","bottom":"0","left":"0","top":"5px"}}},"fontSize":"tiny"} -->
	<p class="has-text-align-center has-tiny-font-size" id="blogger" style="margin-top:5px;margin-right:0;margin-bottom:0;margin-left:0;text-transform:uppercase">' . esc_html__( 'Fashion Designer', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Hey there! Welcome to our charity blog.We hope that this blog will inspire you to get involved and make a difference in the world. Thanks for reading!', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"}}},"className":"is-style-default avalon-team-additional","layout":{"inherit":false,"contentSize":"1200px","type":"constrained"}} -->
	<div class="wp-block-group alignwide is-style-default avalon-team-additional" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#211F1D","className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"40px","top":"0px"}}},"className":"is-style-avalon-border"} -->
	<div class="wp-block-group is-style-avalon-border" style="padding-top:0px;padding-bottom:40px"><!-- wp:image {"align":"center","id":76,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"is-style-default"} -->
	<figure class="wp-block-image aligncenter size-large is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/hero-1.jpg" alt="' . esc_attr__( 'Image', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"textAlign":"center","level":4} -->
	<h4 class="has-text-align-center">' . esc_html__( 'Fashion Event', 'avalon' ) . '</h4>
	<!-- /wp:heading -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris purus urna.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Order Now', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	


	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"var:preset|spacing|30"}}},"className":"additional-column-padding-left"} -->
	<div class="wp-block-group alignfull additional-column-padding-left" style="padding-right:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"is-style-default","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group is-style-default"><!-- wp:query {"queryId":9,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"},"align":"wide","layout":{"inherit":false}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true,"style":{"color":{"duotone":"unset"}}} /-->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30","top":"var:preset|spacing|30","right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|50"}}},"backgroundColor":"secondary","className":"negative-margin is-style-avalon-shadow"} -->
	<div class="wp-block-group negative-margin is-style-avalon-shadow has-secondary-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-title {"style":{"spacing":{"margin":{"bottom":"1rem","top":"10px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtypography\u002d\u002dfont-size\u002d\u002dhuge, clamp(2.25rem, 4vw, 2.75rem))"} /-->
	
	<!-- wp:post-excerpt {"moreText":"Read More"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next {"fontSize":"small"} /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
