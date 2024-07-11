<?php
/**
 * Scroll to Top
 */
return array(
	'title'	  => __( 'Scroll to Top', 'avalon' ),
	'categories' => array( 'avalon-footer' ),
	'content'	=> '<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"10px"}}},"className":"scroll-to-top float-right","fontSize":"medium"} -->
	<p class="scroll-to-top float-right has-medium-font-size" style="padding-top:10px">' . esc_html__( 'Scroll to Top', 'avalon' ) . '<strong>↑</strong> </p>
	<!-- /wp:paragraph -->',
);
