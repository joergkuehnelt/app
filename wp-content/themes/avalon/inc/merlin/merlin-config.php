<?php
/**
 * Merlin WP configuration file.
 *
 * @package   Merlin WP
 * @version   @@pkg.version
 * @link      https://merlinwp.com/
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and settings.
 */
	
	$config = array(
		'directory'            => 'inc/merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'           => 'merlin', // The wp-admin page slug where Merlin WP loads.
		'parent_slug'          => 'themes.php', // The wp-admin parent page slug for the admin menu item.
		'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
		'child_action_btn_url' => 'https://codex.wordpress.org/child_themes', // URL for the 'child-action-link'.
		'dev_mode'             => false, // Enable development mode for testing.
		'ready_big_button_url' => home_url( '/' ), // Link for the big button on the ready step.
	);
	 
	$strings = array(
		'admin-menu'               => esc_html__( 'Theme Setup', 'avalon' ),

		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'avalon' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'avalon' ),
		'ignore'                   => esc_html__( 'Disable this wizard', 'avalon' ),

		'btn-skip'                 => esc_html__( 'Skip', 'avalon' ),
		'btn-next'                 => esc_html__( 'Next', 'avalon' ),
		'btn-start'                => esc_html__( 'Start', 'avalon' ),
		'btn-try-again'            => esc_html__( 'Try Again', 'avalon' ),
		'btn-no'                   => esc_html__( 'Cancel', 'avalon' ),
		'btn-plugins-install'      => esc_html__( 'Install', 'avalon' ),
		'btn-plugins-activate'     => esc_html__( 'Activating...', 'avalon' ),
		'btn-child-install'        => esc_html__( 'Install', 'avalon' ),
		'btn-child-installing'     => esc_html__( 'Installing...', 'avalon' ),
		'btn-content-install'      => esc_html__( 'Install', 'avalon' ),
		'btn-import'               => esc_html__( 'Import', 'avalon' ),
		'btn-content-importing'    => esc_html__( 'Importing...', 'avalon' ),

		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Welcome to %s', 'avalon' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'avalon' ),
		'welcome%s'                => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It should take only a few minutes.', 'avalon' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'avalon' ),

		'plugins-header'           => esc_html__( 'Install WooCommerce', 'avalon' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'avalon' ),
		'plugins'                  => esc_html__( 'Let\'s install & activate the WooCommerce plugin to enable all the eCommerce features you need.', 'avalon' ),
		'plugins-success%s'        => esc_html__( 'WooCommerce plugin has been installed and is now activated.', 'avalon' ),
		'plugins-install-error%s'  => esc_html__( 'Installation failed: An unexpected error occurred. Something may be wrong with WordPress.org or this server\'s configuration.', 'avalon' ),
		'plugins-activate-error%s' => esc_html__( 'Activation failed: An unexpected error occurred. Something may be wrong with WordPress.org or this server\'s configuration.', 'avalon' ),
		'plugins-action-link'      => esc_html__( 'Advanced', 'avalon' ),

		'import-header'            => esc_html__( 'Import Content', 'avalon' ),
		'import'                   => esc_html__( 'Let\'s import content to your website. This could take some minutes. Please wait.', 'avalon' ),
		'import-demo-link'         => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://demo.anarieldesign.com/avalon/', esc_html__( 'Explore Demos', 'avalon' ) ),
		'import-action-link'       => esc_html__( 'Advanced', 'avalon' ),

		'ready-header'             => esc_html__( 'All done. Have fun!', 'avalon' ),

		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your theme has been all set up.', 'avalon' ),
		'ready-action-link'        => esc_html__( 'Extras', 'avalon' ),
		'ready-big-button'         => esc_html__( 'View your website', 'avalon' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://woocommerce.com/document/avalon-theme/', esc_html__( 'Documentation', 'avalon' ) ),
		'ready-link-2'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://woocommerce.com/vendor/anariel-design/', esc_html__( 'Get Theme Support', 'avalon' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'site-editor.php' ), esc_html__( 'Start Customizing', 'avalon' ) ),
);

$wizard = new Merlin( $config, $strings );

