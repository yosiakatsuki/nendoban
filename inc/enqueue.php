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
	wp_enqueue_style( 'bootstrap-style', nendoban_get_library_file_uri( '/bootstrap-4/css/bootstrap.min.css' ) );
	wp_enqueue_style( 'base-style', get_template_directory_uri() . '/css/theme.css', array( 'bootstrap-style' ) );
	wp_enqueue_style( 'fontawesome', nendoban_get_library_file_uri( '/fontawesome/css/fontawesome-all.min.css' ) );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'base-style' ) );

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', nendoban_get_library_file_uri( '/jquery/jquery.min.js' ), array(), '3.3.1');
	wp_enqueue_script( 'bootstrap-script', nendoban_get_library_file_uri( '/bootstrap-4/js/bootstrap.min.js' ), array('jquery'), false, true );
	wp_enqueue_script( 'nendoban-script', get_template_directory_uri() . '/js/theme.bundle.js', array('jquery'), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nendoban_scripts' );