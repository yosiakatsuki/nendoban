<?php
/**
 * テーマで使う関数
 *
 * @package nendoban
 */
/**
 * config
 */
require get_template_directory() . '/inc/config.php';
/**
 * init
 */
require get_template_directory() . '/inc/init.php';
/**
 * util
 */
require get_template_directory() . '/inc/util.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * enqueue
 */
require get_template_directory() . '/inc/enqueue.php';
/**
 * widgets
 */
require get_template_directory() . '/inc/widgets.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';