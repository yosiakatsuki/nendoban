<?php
/**
 * nendoban utility
 *
 * @package nendoban
 */
/**
 * get assets file uri
 */
function nendoban_get_assets_file_uri( $path ) {
	if( file_exists( get_stylesheet_directory() . '/assets' . $path ) ) {
		$path = get_stylesheet_directory_uri() . '/assets' . $path;
	} else {
		$path = get_template_directory_uri() . '/assets' . $path;
	}
	return $path;
}
/**
 * get library file uri
 */
function nendoban_get_library_file_uri( $path ) {
	if( file_exists( get_stylesheet_directory() . '/library' . $path ) ) {
		$path = get_stylesheet_directory_uri() . '/library' . $path;
	} else {
		$path = get_template_directory_uri() . '/library' . $path;
	}
	return $path;
}