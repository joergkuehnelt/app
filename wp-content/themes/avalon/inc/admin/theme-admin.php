<?php
/**
 * Theme admin functions.
 *
 * @package Avalon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
* Add admin menu
*
* @since 1.0.0
*/
function avalon_theme_admin_menu() {
	add_theme_page(
		esc_html__( 'Avalon Getting Started', 'avalon' ),
		esc_html__( 'Demo Content', 'avalon' ),
		'manage_options',
		'avalon-theme',
		'avalon_admin_page_content',
		30
	);
}
add_action( 'admin_menu', 'avalon_theme_admin_menu' );


/**
* Add admin page content
*
* @since 1.0.0
*/
function avalon_admin_page_content() {
	$theme             = wp_get_theme();
	$theme_name        = 'Avalon';
	$active_theme_name = $theme->get('Name');
	$docs_url          = 'https://woocommerce.com/document/avalon-theme/';

	$urls = array(
		'theme-url-default'					=> 'https://demo.anarieldesign.com/avalon/',
		'docs' 						=> 'https://woocommerce.com/document/avalon-theme/',
	);

	$demos = array(
		array(
			'title'			=> esc_html__( 'Theme Demo', 'avalon' ),
			'url'			=> $urls['theme-url-default'],
			'preview'		=> trailingslashit( get_template_directory_uri() ) . 'assets/admin/img/theme-preview.jpg',
			'slug' 			=> 'avalon',
			'parent'		=> true
		)
	);

	?>

		<div class="avalon-page-header">
			<div class="avalon-page-header__container">
				<div class="avalon-page-header__branding">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/img/theme_logo.png' ); ?>" class="avalon-page-header__logo" alt="<?php echo esc_attr__( 'Avalon', 'avalon' ); ?>" />
				</div>
				<div class="avalon-page-header__tagline">
					<span  class="avalon-page-header__tagline-text">				
						<?php echo esc_html__( 'Made by ', 'avalon' ); ?>
						<a href="https://woocommerce.com/vendor/anariel-design/"><?php echo esc_html__( 'Anariel Design', 'avalon' ); ?></a>						
					</span>					
				</div>				
			</div>
		</div>

		<div class="wrap avalon-container">
			<div class="avalon-grid">

				<div class="avalon-grid-content">
					<div class="avalon-body">

						<h1 class="avalon-title"><?php esc_html_e( 'Getting Started', 'avalon' ); ?></h1>
						<p class="avalon-intro-text">
							<?php echo esc_html__( 'Avalon is now installed and ready to use. You can start building something beautiful from scratch using a selection of block and page patterns available in the page/post editor.', 'avalon' ); ?>
						</p>
						<p class="avalon-intro-text">
							<?php echo esc_html__( 'If you wish to use one our demo as a starting point select the demo below and the setup wizard will lead you through the short process.', 'avalon' ); ?>
						</p>

						<!-- Pro Demos -->
						<section class="avalon-section">
							<h2 class="avalon-heading"><?php echo esc_html( $theme_name ) . esc_html__( ' Demo', 'avalon' ); ?></h2>
							<p id="child-theme-text" class="avalon-notice notice"></p>
							<ul class="avalon-demos">
								<?php foreach ( $demos as $index => $demo ) : ?>
									<li class="avalon-demos__item">
										<a href="<?php echo esc_url( $demo['url'] ); ?>" target="_blank" class="avalon-demos__item-url" <?php the_title_attribute( $demo['title'] ); ?>>
											<img src="<?php echo esc_url( $demo['preview'] ); ?>" alt="<?php echo esc_attr( $demo['title'] ); ?>">
											<h2 class="avalon-demos__item-title"><?php echo esc_html( $demo['title'] ); ?></h2>
										</a>
										<?php
										if ( true == $demo['parent'] ) : 
											?>
												<a href="<?php echo esc_html(wp_nonce_url( admin_url( 'themes.php?page=merlin&amp;demo=' . absint($index) ) )); ?>" class="avalon-import-content button button-primary" data-theme="<?php echo esc_attr( $demo['slug'] ); ?>" data-theme-index="<?php echo esc_attr( absint( $index ) ); ?>"><?php echo esc_html__( 'Import', 'avalon' ); ?></a>
											<?php endif; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						</section>

					</div> <!-- .body -->

				</div> <!-- .content -->
				
				<!-- Sidebar -->
				<aside class="avalon-grid-sidebar">
					<div class="avalon-grid-sidebar-widget-area">

						<div class="avalon-widget">
							<h2 class="avalon-widget-title"><?php echo esc_html__( 'Useful Links', 'avalon' ); ?></h2>
							<ul class="avalon-useful-links">
								<li>
									<a href="https://woocommerce.com/document/avalon-theme/" target="_blank"><?php echo esc_html__( 'Documentation', 'avalon' ); ?></a>
								</li>
								<li>
									<a href="https://woocommerce.com/vendor/anariel-design/" target="_blank"><?php echo esc_html__( 'Support', 'avalon' ); ?></a>
								</li>
							</ul>
						</div>

					</div>					
				</aside>	

			</div> <!-- .grid -->

		</div>
	<?php
}


/**
* Adds an admin notice upon successful activation.
*/
function avalon_activation_admin_notice() {
	global $current_user;
	global $current_screen;

	// Don't show on Nokke main admin page
	if ( 'appearance_page_avalon-theme' === $current_screen->id || 'toplevel_page_avalon' === $current_screen->id ) {
		return;
	}

	if ( is_admin() ) {

		$current_theme     = wp_get_theme();
		$welcome_dismissed = get_user_meta( $current_user->ID, 'avalon_wizard_admin_notice' );

		if ( ( $current_theme->get('Name') == 'Avalon' || $current_theme->get('Name') == 'Avalon Pro' ) && ! $welcome_dismissed ) {
			add_action( 'admin_notices', 'avalon_wizard_admin_notice', 99 );
		}

		wp_enqueue_style( 'avalon-wizard-notice-css', get_template_directory_uri() . '/assets/admin/css/wizard-notice.css', wp_get_theme()->get( 'Version' ), true );

	}
}
add_action( 'current_screen', 'avalon_activation_admin_notice' );



/**
* Adds a button to dismiss the notice
*/
function avalon_dismiss_wizard_notice() {
	global $current_user;
	$user_id = $current_user->ID;

	if ( isset( $_GET['avalon_wizard_dismiss'] ) && '1' == $_GET['avalon_wizard_dismiss'] ) {
		add_user_meta( $user_id, 'avalon_wizard_admin_notice', 'true', true );
	}
}
add_action( 'admin_init', 'avalon_dismiss_wizard_notice', 1 );


/**
* Display an admin notice linking to the wizard screen
*/
function avalon_wizard_admin_notice() {
	if ( current_user_can( 'customize' ) ) : 
		?>
		<div class="notice theme-notice welcome-panel">
			<div class="theme-notice-logo">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/img/theme_thumb.png' ); ?>" alt="<?php esc_attr_e( 'Avalon', 'avalon' ); ?>">
			</div>
			<div class="theme-notice-message wp-theme-fresh">
				<h2><?php esc_html_e( 'Thank you for choosing Avalon!', 'avalon' ); ?></h2>
				<?php if ( class_exists( 'Merlin' ) ) : ?>
					<p class="about-description"><?php esc_html_e( 'Visit the getting started page for more info and import your favorite theme demo.', 'avalon' ); ?></p>
				<?php else : ?>
					<p class="about-description"><?php esc_html_e( 'Follow the steps to configure your new theme and begin customizing your site.', 'avalon' ); ?></p>
				<?php endif; ?>
			</div>
			<div class="theme-notice-cta">
				<a href="<?php echo esc_url( admin_url( 'themes.php?page=avalon-theme' ) ); ?>" class="button button-primary button-hero" style="text-decoration: none;"><?php esc_html_e( 'Get Started', 'avalon' ); ?></a>
				<a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'avalon_wizard_dismiss', '1' ) ) ); ?>" class="notice-dismiss" target="_parent"></a>
			</div>
		</div>
	<?php 
	endif;
}
