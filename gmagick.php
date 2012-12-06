<?php
function image_editors_add_gmagick( $editors ) {
	include 'editors/gmagick.php';
	$editors[] = 'WP_Image_Editor_Gmagick';

	return $editors;
}
add_filter( 'wp_image_editors', 'image_editors_add_gmagick' );
