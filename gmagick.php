<?php
/*
Plugin Name: WP_Image_Editor_Gmagick
Plugin URI: http://wordpress.org/extend/plugins/wp-image-editor-gmagick
Description: Enables Gmagick in WordPress
Author: Marko Heijnen and Mike Schroder
Version: 0.1
Author URI: https://github.com/markoheijnen/gmagick-editor/
*/

function image_editors_add_gmagick( $editors ) {
	if( ! class_exists('WP_Image_Editor_Gmagick') ) {
		include 'editors/gmagick.php';
		array_unshift( $editors, 'WP_Image_Editor_Gmagick' );
	}

	return $editors;
}
add_filter( 'wp_image_editors', 'image_editors_add_gmagick' );
