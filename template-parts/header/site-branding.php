<div class="site-branding">
	<?php
	$site_logo = sprintf(
		'<a class="color-text-main" href="%s" rel="home">%s</a>',
		esc_url( home_url( '/' ) ),
		get_bloginfo( 'name' )
	);
	if( has_custom_logo()) {
		$site_logo = get_custom_logo();
	}
	if ( is_front_page() && is_home() ) : ?>
		<h1 class="site-title h3 m-0 py-0"><?php echo $site_logo; ?></h1>
	<?php else : ?>
		<p class="site-title h3 m-0 py-0"><?php echo $site_logo; ?></p>
	<?php
	endif;

	$description = get_bloginfo( 'description', 'display' );
	if ( $description || is_customize_preview() ) : ?>
		<p class="site-description text-muted m-0"><small><?php echo $description; /* WPCS: xss ok. */ ?></small></p>
	<?php
	endif; ?>
</div><!-- .site-branding -->