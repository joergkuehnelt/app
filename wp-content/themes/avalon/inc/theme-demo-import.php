<?php
/**
 * Theme Demo Import.
 *
 * @package Avalon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
* Demo import.
*/
function avalon_import_files() {

	return array(
		array(
			'import_file_name'           => 'Avalon',
			'import_file_url'            => 'https://www.anarieldesign.com/demo-content/avalon/avalon-demo-content.xml',
			'import_preview_image_url'	 => esc_url( 'https://demo.anarieldesign.com/avalon/wp-content/uploads/sites/39/2023/01/screenshot.png' ),
			'preview_url'                => 'https://demo.anarieldesign.com/avalon/',
		)
	);
}

/**
* Assign menus and front page after demo import
*
* @param array $selected_import array with demo import data
*/
function avalon_after_import( $selected_import ) {
}
