<?php
/**
 * About Page Pattern
 */
return array(
	'title'	  => __( 'About', 'avalon' ),
	'categories' => array( 'avalon-pages' ),
	'content'	=> '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"padding":{"bottom":"0","top":"var:preset|spacing|40"}}},"className":"what-we-do"} -->
	<div class="wp-block-columns alignwide what-we-do" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":""} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"500px","bottomLeft":"500px"}}},"gradient":"horizontal-primary-to-background","className":"avalon-left-top"} -->
	<div class="wp-block-group avalon-left-top has-horizontal-primary-to-background-gradient-background has-background" style="border-top-left-radius:500px;border-bottom-left-radius:500px"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"size-full avalon-right is-style-default"} -->
	<figure class="wp-block-image size-large size-full avalon-right is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/hero-1.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontStyle":"normal","fontWeight":"400"}},"className":"tagline","fontSize":"tiny"} -->
	<p class="has-text-align-left tagline has-tiny-font-size" style="font-style:normal;font-weight:400;letter-spacing:3px;text-transform:uppercase">' . esc_html__( 'About us', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.2"}},"fontSize":"x-large"} -->
	<p class="has-x-large-font-size" style="font-style:normal;font-weight:300;line-height:1.2"><strong>' . esc_html__( 'Street', 'avalon' ) . '</strong> ' . esc_html__( 'Fashion', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Street fashion is a style of fashion that is worn by people in the streets and public places, such as parks, malls, and other public venues. Street fashion is usually influenced by the latest trends in the fashion industry, as well as popular culture and social media.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button" href="#0">' . esc_html__( 'Our Mission', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"secondary","className":"avalon-trusted-by is-style-avalon-border","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignwide avalon-trusted-by is-style-avalon-border has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size">' . esc_html__( 'Trusted by over&nbsp;', 'avalon' ) . '<strong>' . esc_html__( '250,000+&nbsp;', 'avalon' ) . '</strong>' . esc_html__( 'Clients worldwide since 2017', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"huge"} -->
	<p class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:800">' . esc_html__( '4.8', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"2px"}},"className":"avalon-rating"} -->
	<p class="has-text-align-center avalon-rating" style="letter-spacing:2px">' . esc_html__( '★★★★★', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( '3000 Ratings', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"huge"} -->
	<p class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:800">' . esc_html__( '2000+', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center","className":"avalon-rating"} -->
	<p class="has-text-align-center avalon-rating">' . esc_html__( 'Worldwide Sales per Year', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
	
	
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"28px","left":"30px"}}},"className":"what-we-do","layout":{"contentSize":"","type":"constrained"}} -->
	<div class="wp-block-group alignfull what-we-do" style="padding-top:var(--wp--preset--spacing--60);padding-right:28px;padding-bottom:var(--wp--preset--spacing--60);padding-left:30px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"43.33%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:43.33%"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontStyle":"normal","fontWeight":"400"}},"className":"tagline","fontSize":"tiny"} -->
	<p class="has-text-align-left tagline has-tiny-font-size" style="font-style:normal;font-weight:400;letter-spacing:3px;text-transform:uppercase">' . esc_html__( 'about us', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1","fontSize":"2.15rem"}}} -->
	<p style="font-size:2.15rem;font-style:normal;font-weight:300;line-height:1"><strong>' . esc_html__( 'Street', 'avalon' ) . '</strong> ' . esc_html__( 'Fashion for Women', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button" href="#">' . esc_html__( 'Our Mission', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"56.66%","style":{"spacing":{"padding":{"left":"0"}}}} -->
	<div class="wp-block-column" style="padding-left:0;flex-basis:56.66%"><!-- wp:paragraph -->
	<p>' . esc_html__( 'Street fashion for women is all about embracing your individual style, while also having fun with fashion trends. From statement pieces to classic staples, street fashion can be whatever you want it to be.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"6%"}}}} -->
	<div class="wp-block-columns" style="padding-top:6%"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"tagline"} -->
	<figure class="wp-block-image size-full tagline"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-1.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size" id="a-small-heading">' . esc_html__( 'Free Shipping', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"ext-medium"} -->
	<p class="has-ext-medium-font-size">' . esc_html__( 'Your items will be shipped for free using our standard shipping method. Please allow 1-2 weeks for delivery.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"tagline"} -->
	<figure class="wp-block-image size-full tagline"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-2.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size" id="a-second-heading-1">' . esc_html__( 'Money Guarantee', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"ext-medium"} -->
	<p class="has-ext-medium-font-size">' . esc_html__( 'Money Guarantee ensures that you will receive your full purchase price back if you are not satisfied with your purchase.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"tagline"} -->
	<figure class="wp-block-image size-full tagline"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-3.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size" id="a-second-heading">' . esc_html__( 'Flexible Payment', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"ext-medium"} -->
	<p class="has-ext-medium-font-size">' . esc_html__( 'Flexible payment options allow customers to choose from a variety of payment methods, including credit cards, debit cards, online payment services, and even cash.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}},"className":"tagline"} -->
	<figure class="wp-block-image size-full tagline"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/icon-4.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="has-large-font-size" id="a-third-heading">' . esc_html__( 'Online Support', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"ext-medium"} -->
	<p class="has-ext-medium-font-size">' . esc_html__( 'Our online support is focused on providing our customers with fast, reliable and helpful support. We are available via email &amp; chat to answer any questions.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontStyle":"normal","fontWeight":"400"}},"className":"tagline","fontSize":"tiny"} -->
	<p class="has-text-align-left tagline has-tiny-font-size" style="font-style:normal;font-weight:400;letter-spacing:3px;text-transform:uppercase">' . esc_html__( 'about us', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"}}}} -->
	<h2 style="margin-top:0">' . esc_html__( 'Street wear inspires us to be unique always.', 'avalon' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Street fashion for women is all about embracing your individual style, while also having fun with fashion trends. From statement pieces to classic staples, street fashion can be whatever you want it to be.', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-avalon-button-shadow is-style-avalon-button-shadow"} -->
	<div class="wp-block-button is-style-avalon-button-shadow is-style-avalon-button-shadow"><a class="wp-block-button__link wp-element-button" href="#">' . esc_html__( 'Our Mission', 'avalon' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-avalon-effect-2-image"} -->
	<figure class="wp-block-image size-large is-style-avalon-effect-2-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-4.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--60)"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-avalon-effect-2-image"} -->
	<figure class="wp-block-image size-large is-style-avalon-effect-2-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-6.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->
	
	
	
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"30px","left":"30px"},"margin":{"bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:30px;padding-bottom:var(--wp--preset--spacing--50);padding-left:30px"><!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10%","right":"10%","bottom":"10%","left":"10%"}}},"backgroundColor":"background","className":"is-style-avalon-border"} -->
	<div class="wp-block-group is-style-avalon-border has-background-background-color has-background" style="padding-top:10%;padding-right:10%;padding-bottom:10%;padding-left:10%"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p><strong>' . esc_html__( 'Rose Smith', 'avalon' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px","fontSize":"10px"}},"textColor":"foreground","className":"avalon-rating"} -->
	<p class="avalon-rating has-foreground-color has-text-color" style="font-size:10px;letter-spacing:2px">' . esc_html__( '★★★★★', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"foreground","fontSize":"small"} -->
	<p class="has-foreground-color has-text-color has-small-font-size">' . esc_html__( 'Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-avalon-effect-3-image"} -->
	<figure class="wp-block-image size-large is-style-avalon-effect-3-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-4.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"backgroundColor":"septenary","className":"is-style-default"} -->
	<hr class="wp-block-separator has-text-color has-septenary-color has-alpha-channel-opacity has-septenary-background-color has-background is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:image {"width":80,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-1.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" width="80"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="a-small-heading">' . esc_html__( 'Cool Jacket', 'avalon' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10%","right":"10%","bottom":"10%","left":"10%"}}},"backgroundColor":"background","className":"is-style-avalon-border"} -->
	<div class="wp-block-group is-style-avalon-border has-background-background-color has-background" style="padding-top:10%;padding-right:10%;padding-bottom:10%;padding-left:10%"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p><strong>' . esc_html__( 'Rose Smith', 'avalon' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px","fontSize":"10px"}},"textColor":"foreground","className":"avalon-rating"} -->
	<p class="avalon-rating has-foreground-color has-text-color" style="font-size:10px;letter-spacing:2px">' . esc_html__( '★★★★★', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"foreground","fontSize":"small"} -->
	<p class="has-foreground-color has-text-color has-small-font-size">' . esc_html__( 'Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-avalon-effect-3-image"} -->
	<figure class="wp-block-image size-large is-style-avalon-effect-3-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-4.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"backgroundColor":"septenary","className":"is-style-default"} -->
	<hr class="wp-block-separator has-text-color has-septenary-color has-alpha-channel-opacity has-septenary-background-color has-background is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:image {"width":80,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-1.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" width="80"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="a-small-heading">' . esc_html__( 'Cool Jacket', 'avalon' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10%","right":"10%","bottom":"10%","left":"10%"}}},"backgroundColor":"background","className":"is-style-avalon-border"} -->
	<div class="wp-block-group is-style-avalon-border has-background-background-color has-background" style="padding-top:10%;padding-right:10%;padding-bottom:10%;padding-left:10%"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p><strong>' . esc_html__( 'Lili Boe', 'avalon' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px","fontSize":"10px"}},"textColor":"foreground","className":"avalon-rating"} -->
	<p class="avalon-rating has-foreground-color has-text-color" style="font-size:10px;letter-spacing:2px">' . esc_html__( '★★★★★', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"foreground","fontSize":"small"} -->
	<p class="has-foreground-color has-text-color has-small-font-size">' . esc_html__( 'Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-avalon-effect-3-image"} -->
	<figure class="wp-block-image size-large is-style-avalon-effect-3-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-5.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"backgroundColor":"septenary","className":"is-style-default"} -->
	<hr class="wp-block-separator has-text-color has-septenary-color has-alpha-channel-opacity has-septenary-background-color has-background is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:image {"width":80,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-4.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" width="80"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="a-small-heading">' . esc_html__( 'Street Shirt', 'avalon' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10%","right":"10%","bottom":"10%","left":"10%"}}},"backgroundColor":"background","className":"is-style-avalon-border"} -->
	<div class="wp-block-group is-style-avalon-border has-background-background-color has-background" style="padding-top:10%;padding-right:10%;padding-bottom:10%;padding-left:10%"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
	<p><strong>' . esc_html__( 'Hannah Love', 'avalon' ) . '</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px","fontSize":"10px"}},"textColor":"foreground","className":"avalon-rating"} -->
	<p class="avalon-rating has-foreground-color has-text-color" style="font-size:10px;letter-spacing:2px">' . esc_html__( '★★★★★', 'avalon' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"textColor":"foreground","fontSize":"small"} -->
	<p class="has-foreground-color has-text-color has-small-font-size">' . esc_html__( 'Fusce gravida ut nisi et facilisis. Nullam ut mi fermentum, posuere dolor id, ultricies ipsum. Duis urna ipsum, tincidunt ut lorem.', 'avalon' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-avalon-effect-3-image"} -->
	<figure class="wp-block-image size-large is-style-avalon-effect-3-image"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/fashion-6.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"backgroundColor":"septenary","className":"is-style-default"} -->
	<hr class="wp-block-separator has-text-color has-septenary-color has-alpha-channel-opacity has-septenary-background-color has-background is-style-default"/>
	<!-- /wp:separator -->
	
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:image {"width":80,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/product-3.jpg" alt="' . esc_attr__( 'Fashion', 'avalon' ) . '" width="80"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"fontSize":"medium"} -->
	<h2 class="has-medium-font-size" id="a-small-heading">' . esc_html__( 'Urban Jacket', 'avalon' ) . '</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
