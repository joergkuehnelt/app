<?php
/**
 * Blog Layout 9 block pattern
 */
return array(
	'title'	  => __( 'Blog Layout 9', 'avalon' ),
	'categories' => array( 'avalon-query' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"3px","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"3px"}}}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:3px;padding-bottom:var(--wp--preset--spacing--50);padding-left:3px"><!-- wp:query {"query":{"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":"exclude","perPage":"3"},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":true}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"background","className":"negative-margin is-style-avalon-border","layout":{"type":"constrained"}} -->
	<div class="wp-block-group negative-margin is-style-avalon-border has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px"},"margin":{"top":"0","bottom":"0"}}},"className":"event-date is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group event-date is-style-default" style="margin-top:0;margin-bottom:0;padding-top:5px"><!-- wp:post-date {"textAlign":"right","format":"M j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"avalon-bottom-date","fontSize":"tiny"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-avalon-post-title-border"} /-->
	
	<!-- wp:post-excerpt {"moreText":"Read More","className":"is-style-default"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next {"fontSize":"small"} /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:group --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->',
);
