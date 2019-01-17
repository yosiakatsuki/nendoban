<?php
/**
 * テーマで使う関数
 *
 * @package nendoban
 */
/**
 * config
 */
require_once get_template_directory() . '/inc/config.php';
/**
 * init
 */
require_once get_template_directory() . '/inc/init.php';
/**
 * util
 */
require_once get_template_directory() . '/inc/util.php';
/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/customizer.php';
/**
 * enqueue
 */
require_once get_template_directory() . '/inc/enqueue.php';
/**
 * widgets
 */
require_once get_template_directory() . '/inc/widgets.php';
/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';
/**
 * Plugin Activation
 */
require_once get_template_directory() . '/inc/tgm-plugin-activation.php';