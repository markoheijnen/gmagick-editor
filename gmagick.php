<?php
/*
	Plugin Name: Gmagick
	Description: Enables Gmagick in WordPress
	Version:     1.3

	Plugin URI:  http://wordpress.org/extend/plugins/gmagick

	Author:      Marko Heijnen and Mike Schroder
	Author URI:  https://github.com/markoheijnen/gmagick-editor/
	Donate link: https://markoheijnen.com/donate
*/

function image_editors_add_gmagick( $editors ) {
	if ( ! class_exists('WP_Image_Editor_Gmagick') )
		include_once 'editors/gmagick.php';

	if ( ! in_array( 'WP_Image_Editor_Gmagick', $editors ) )
		array_unshift( $editors, 'WP_Image_Editor_Gmagick' );

	return $editors;
}

add_filter( 'wp_image_editors', 'image_editors_add_gmagick' );
