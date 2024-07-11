<?php
/**
 * Footer 5
 */
return array(
	'title'	  => __( 'Footer 5', 'avalon' ),
	'categories' => array( 'avalon-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"30px","left":"30px"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:30px;padding-bottom:var(--wp--preset--spacing--60);padding-left:30px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"gigantic"} -->
	<h2 class="has-text-align-center has-gigantic-font-size" style="font-style:normal;font-weight:300">' . esc_html__( 'If you have any questions about our products or business, feel free to', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Contact Now', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->
	
	<!-- wp:separator {"backgroundColor":"septenary"} -->
	<hr class="wp-block-separator has-text-color has-septenary-color has-alpha-channel-opacity has-septenary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"}} /-->
	
	<!-- wp:separator {"backgroundColor":"septenary"} -->
	<hr class="wp-block-separator has-text-color has-septenary-color has-alpha-channel-opacity has-septenary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","size":"has-normal-icon-size","style":{"spacing":{"blockGap":"20px","margin":{"top":"30px","bottom":"24px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only" style="margin-top:30px;margin-bottom:24px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"#","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
	<!-- /wp:social-links -->
	
	<!-- wp:separator {"backgroundColor":"septenary"} -->
	<hr class="wp-block-separator has-text-color has-septenary-color has-alpha-channel-opacity has-septenary-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:columns {"style":{"spacing":{"blockGap":"0px","margin":{"top":"0px"},"padding":{"top":"20px"}}}} -->
	<div class="wp-block-columns" style="margin-top:0px;padding-top:20px"><!-- wp:column {"verticalAlignment":"center","width":"","fontSize":"small"} -->
	<div class="wp-block-column is-vertically-aligned-center has-small-font-size"><!-- wp:paragraph -->
	<p>' . esc_attr__( '© 2022 Your Company LLC ·', 'avalon' ) . ' <a href="' . esc_html__( 'https://woocommerce.com/products/avalon', 'avalon' ) . '">' . esc_attr__( 'Avalon Theme', 'avalon' ) . '</a> ' . esc_attr__( 'by Anariel Design', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":""} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"},"style":{"spacing":{"blockGap":"0px"}},"fontSize":"small"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->',
);
