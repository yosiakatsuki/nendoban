<?php
/**
 * nendoban init
 *
 * @package nendoban
 */


/**
 * テーマセットアップ
 */
function nendoban_setup() {

	load_theme_textdomain( 'nendoban', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'Primary' => esc_html__( 'Primary', 'nendoban' ),
		'Footer' => esc_html__( 'Footer', 'nendoban' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-logo' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
}

add_action( 'after_setup_theme', 'nendoban_setup' );

/**
 * コンテンツ幅
 *
 * @global int $content_width
 */
function nendoban_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nendoban_content_width', 640 );
}

add_action( 'after_setup_theme', 'nendoban_content_width', 0 );
