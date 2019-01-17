<?php

if ( ! NDBN_SHOW_TGMPA ) {
	return;
}

require_once get_template_directory() . '/library/TGMPA-TGM-Plugin-Activation/class-tgm-plugin-activation.php';

/**
 * 推奨プラグイン案内
 */
function nendoban_register_required_plugins() {
	$plugins = array(
		array(
			'name' => 'Breadcrumb NavXT',
			'slug' => 'breadcrumb-navxt',
		),
	);
	$config  = array(
		'is_automatic' => true,
		'has_notices'  => false,
		'parent_slug'  => 'plugins.php'
	);
	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'nendoban_register_required_plugins' );