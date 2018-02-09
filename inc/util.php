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
	return get_stylesheet_directory_uri() . '/assets' . $path;
}
/**
 * get library file uri
 */
function nendoban_get_library_file_uri( $path ) {
	return get_stylesheet_directory_uri() . '/library' . $path;
}