<?php
/**
 * Team 2 block pattern
 */
return array(
	'title'	  => __( 'Team/Volunteers 2', 'avalon' ),
	'categories' => array( 'avalon-team' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"volunteers","layout":{"contentSize":"","type":"constrained"}} -->
	<div class="wp-block-group alignfull volunteers" style="padding-top:var(--wp--preset--spacing--50);padding-right:30px;padding-bottom:var(--wp--preset--spacing--50);padding-left:30px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"className":"is-style-default"} -->
	<div class="wp-block-column is-style-default"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-1.jpg" alt="' . esc_attr__( 'Team Member', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"right":"35px","bottom":"35px","left":"35px","top":"5px"}}},"backgroundColor":"secondary","className":"volunteers-box-1 is-style-avalon-shadow"} -->
	<div class="wp-block-group volunteers-box-1 is-style-avalon-shadow has-secondary-background-color has-background" style="padding-top:5px;padding-right:35px;padding-bottom:35px;padding-left:35px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","lineHeight":"0.8"},"spacing":{"margin":{"top":"40px"}}},"fontSize":"extra-large"} -->
	<h2 class="has-text-align-left has-extra-large-font-size" style="margin-top:40px;font-style:normal;font-weight:700;line-height:0.8;text-transform:capitalize">' . esc_html__( 'Yuna Lane', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"0.1","fontStyle":"normal","fontWeight":"400"}},"className":"has-text-color","fontSize":"small"} -->
	<p class="has-text-align-left has-text-color has-small-font-size" style="font-style:normal;font-weight:400;line-height:0.1">' . esc_html__( 'Fashion Designer', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"left","className":"has-text-color","fontSize":"small"} -->
	<p class="has-text-align-left has-text-color has-small-font-size">' . esc_html__( 'As a fashion designer, I strive to create unique pieces that capture the essence of style, beauty, and comfort.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"#211F1D","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left"}} -->
	<ul class="wp-block-social-links has-small-icon-size has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"className":"is-style-default"} -->
	<div class="wp-block-column is-style-default"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-3.jpg" alt="' . esc_attr__( 'Team Member', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"right":"35px","bottom":"35px","left":"35px","top":"5px"}}},"backgroundColor":"secondary","className":"is-style-avalon-shadow volunteers-box-1"} -->
	<div class="wp-block-group is-style-avalon-shadow volunteers-box-1 has-secondary-background-color has-background" style="padding-top:5px;padding-right:35px;padding-bottom:35px;padding-left:35px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","lineHeight":"0.8"},"spacing":{"margin":{"top":"40px"}}},"fontSize":"extra-large"} -->
	<h2 class="has-text-align-left has-extra-large-font-size" style="margin-top:40px;font-style:normal;font-weight:700;line-height:0.8;text-transform:capitalize">' . esc_html__( 'Down Smile', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"0.1","fontStyle":"normal","fontWeight":"400"}},"className":"has-text-color","fontSize":"small"} -->
	<p class="has-text-align-left has-text-color has-small-font-size" style="font-style:normal;font-weight:400;line-height:0.1">' . esc_html__( 'CEO', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"left","className":"has-text-color","fontSize":"small"} -->
	<p class="has-text-align-left has-text-color has-small-font-size">' . esc_html__( 'As a fashion CEO, I believe it is important to stay up to date on new technologies and materials that are being used to create textiles.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"#211F1D","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left"}} -->
	<ul class="wp-block-social-links has-small-icon-size has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default"} -->
	<div class="wp-block-column is-style-default" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"bottomRight":"0px"}}}} -->
	<figure class="wp-block-image size-large has-custom-border"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-4.jpg" alt="' . esc_attr__( 'Team Member', 'avalon' ) . '" style="border-bottom-right-radius:0px"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:group {"style":{"spacing":{"padding":{"right":"35px","bottom":"35px","left":"35px","top":"5px"}}},"backgroundColor":"secondary","className":"is-style-avalon-shadow volunteers-box-1","layout":{"type":"default"}} -->
	<div class="wp-block-group is-style-avalon-shadow volunteers-box-1 has-secondary-background-color has-background" style="padding-top:5px;padding-right:35px;padding-bottom:35px;padding-left:35px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","lineHeight":"0.8"},"spacing":{"margin":{"top":"40px"}}},"fontSize":"extra-large"} -->
	<h2 class="has-text-align-left has-extra-large-font-size" style="margin-top:40px;font-style:normal;font-weight:700;line-height:0.8;text-transform:capitalize">' . esc_html__( 'Line Kind', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"0.1","fontStyle":"normal","fontWeight":"400"}},"className":"has-text-color","fontSize":"small"} -->
	<p class="has-text-align-left has-text-color has-small-font-size" style="font-style:normal;font-weight:400;line-height:0.1">' . esc_html__( 'Marketing', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"left","className":"has-text-color","fontSize":"small"} -->
	<p class="has-text-align-left has-text-color has-small-font-size">' . esc_html__( 'Fashion marketing is all about connecting with your target audience and understanding their needs, wants, and desires.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"#211F1D","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left"}} -->
	<ul class="wp-block-social-links has-small-icon-size has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
	
	<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
	
	<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
	
	<!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
