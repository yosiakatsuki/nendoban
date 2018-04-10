<?php
/**
 * nendoban enqueue
 *
 * @package nendoban
 */
/**
 * Enqueue scripts and styles.
 */
function nendoban_scripts() {
	$theme = wp_get_theme();
	$ver = $theme->get('Version');
	wp_enqueue_style(
		'bootstrap-style',
		nendoban_get_library_file_uri( '/bootstrap-4/css/bootstrap.min.css' ),
		array(),
		'4.1.0'
	);
	wp_enqueue_style(
		'base-style',
		get_template_directory_uri() . '/css/theme.css',
		array( 'bootstrap-style' ),
		$ver
	);
	wp_enqueue_style(
		'fontawesome',
		nendoban_get_library_file_uri( '/fontawesome/css/fontawesome-all.min.css' ),
		array(),
		'5.0.0'
	);
	wp_enqueue_style(
		'theme-style',
		get_stylesheet_uri(),
		array( 'base-style' ),
		$ver
	);

	wp_deregister_script('jquery');
	wp_enqueue_script(
		'jquery',
		nendoban_get_library_file_uri( '/jquery/jquery.min.js' ),
		array(),
		'3.3.1'
	);
	wp_enqueue_script(
		'bootstrap-script',
		nendoban_get_library_file_uri( '/bootstrap-4/js/bootstrap.min.js' ),
		array( 'jquery' ),
		'4.1.0'
	);
	wp_enqueue_script(
		'bootstrap-offcanvas',
		nendoban_get_library_file_uri( '/bootstrap-4/offcanvas/offcanvas.js' ),
		array( 'jquery' ),
		'4.1.0'
	);
	wp_enqueue_script(
		'nendoban-script',
		get_template_directory_uri() . '/js/theme.js',
		array( 'jquery' ),
		$ver,
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nendoban_scripts' );
