<?php
/**
 * Avalon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage Avalon
 * @since Avalon 1.0
 */

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Avalon 1.0
	 *
	 * @return void
	 */
function avalon_support() {

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

}
	add_action( 'after_setup_theme', 'avalon_support' );

	/*
	* Query whether WooCommerce is activated.
	*/
function avalon_is_woocommerce_activated() {
	if ( class_exists( 'woocommerce' ) ) {
		return true;
	} else {
		return false;
	}
}
	/*
	* Query whether Give is activated.
	*/
function avalon_is_give_activated() {
	if ( class_exists( 'give' ) ) {
		return true;
	} else {
		return false;
	}
}
	/**
	 * Enqueue styles.
	 *
	 * @since Avalon 1.0
	 *
	 * @return void
	 */
function avalon_styles() {

	wp_enqueue_style( 'avalon-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	// Animations CSS.
	wp_enqueue_style( 'avalon-animations-styles', get_template_directory_uri() . '/assets/css/animations.css', array(), wp_get_theme()->get( 'Version' ) );

	// Global script.
	wp_enqueue_script('avalon-global-script', get_template_directory_uri() . '/assets/js/index.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true);
	// Animations script.
	wp_enqueue_script('avalon-animations-script', get_template_directory_uri() . '/assets/js/animations.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true);

}
	add_action( 'wp_enqueue_scripts', 'avalon_styles' );
	
	// Add block pattern
	require get_template_directory() . '/inc/block-patterns.php';
	
	// Block Styles.
	require get_template_directory() . '/inc/block-styles.php';

	/**
	 * * Include Woocommerce
	 * */
if (class_exists('Woocommerce')) {
	require get_template_directory() . '/inc/woocommerce/functions.php';
}
	
	// Theme Admin Page
	require get_template_directory() . '/inc/admin/theme-admin.php';

	/**
	* Theme Wizard.
	*/
	require_once get_parent_theme_file_path( '/inc/merlin/vendor/autoload.php' );
	require_once get_parent_theme_file_path( '/inc/merlin/class-merlin.php' );
	require_once get_parent_theme_file_path( '/inc/merlin/merlin-config.php' );
	require_once get_parent_theme_file_path( '/inc/merlin/merlin-filters.php' );
	
	// Theme Admin Page
	require_once get_template_directory() . '/inc/theme-demo-import.php';

	/*--------------------------------------------------------------
	# Enqueue Admin Scripts and Styles
	--------------------------------------------------------------*/
if ( ! function_exists( 'avalon_admin_scripts' ) ) :
	function avalon_admin_scripts() {
		$screen = get_current_screen();
		wp_enqueue_style( 'avalon-admin-styles', get_template_directory_uri() . '/assets/admin/css/admin-styles.css', wp_get_theme()->get( 'Version' ), true );
			
		if ( 'appearance_page_avalon-theme' === $screen->id ) {
			wp_localize_script(
				'avalon-admin-scripts', 'avalon_params', array(
					'ajaxurl' => admin_url( 'admin-ajax.php' ),
					'wpnonce' => wp_create_nonce( 'avalon_ajax_nonce' ),
					'wizard_url' => esc_url( admin_url( 'themes.php?page=merlin' ) ),
					'processing' => esc_html__( 'Processing', 'avalon' ),
					'finished' => esc_html__( 'Finished', 'avalon' ),
					)
				);
		}
	}
		add_action( 'admin_enqueue_scripts', 'avalon_admin_scripts' );
		endif;
	
	//Stop WooCommerce redirect on activation MerlinWP
	add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );
	
	/**
	* Removes some menus by page.
	*/
function basti_remove_merlin_menu() {
	remove_submenu_page( 'themes.php', 'merlin' );                  
}
	add_action( 'admin_menu', 'basti_remove_merlin_menu' );

//JKU remove login message:

add_filter( 'wcb2b_display_login_message', 'fn_wcb2b_display_login_message' );
function fn_wcb2b_display_login_message( $display ) {
    return false;
}
