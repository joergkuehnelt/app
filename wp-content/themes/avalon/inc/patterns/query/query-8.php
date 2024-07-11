<?php
/**
 * Blog Layout 8 block pattern
 */
return array(
	'title'	  => __( 'Blog Layout 8', 'avalon' ),
	'categories' => array( 'avalon-query' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"3px","left":"3px"}}}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:3px;padding-bottom:var(--wp--preset--spacing--50);padding-left:3px"><!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignwide"><!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":8},"displayLayout":{"type":"list"},"align":"wide"} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"4em"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:4em"><!-- wp:post-date {"textAlign":"center","format":"M j","style":{"spacing":{"padding":{"top":"10px","right":"15px","bottom":"10px","left":"15px"}}},"backgroundColor":"foreground","textColor":"background","fontSize":"small"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":""} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-style-avalon-post-title-border"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"backgroundColor":"foreground","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-foreground-color has-alpha-channel-opacity has-foreground-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
