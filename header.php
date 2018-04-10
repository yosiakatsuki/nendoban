<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nendoban
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nendoban' ); ?></a>
	<header id="masthead" class="site-header fixed-top box-shadow py-2">
		<div class="container">
			<div class="row align-items-cente">
				<div class="col">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title h3 m-0 py-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title h3 m-0 py-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description text-muted m-0"><small><?php echo $description; /* WPCS: xss ok. */ ?></small></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
				</div><!-- .col -->
				<?php if( has_nav_menu( 'Primary' ) ): ?>
					<div class="col-auto">
						<nav id="site-navigation" class="header-nav main-navigation navbar navbar-expand-lg navbar-light h-100 flex align-items-center">
							<button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_html_e( 'Primary Menu', 'nendoban' ); ?>"><i class="fas fa-bars"></i></button>
							<div class="navbar-collapse offcanvas-collapse">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'Primary',
										'menu_class'     => 'navbar-nav',
										'fallback_cb'    => '',
										'container'      => false
									) );
								?>
							</div><!-- .navbar-collapse offcanvas-collapse -->
						</nav><!-- #site-navigation -->
					</div><!-- .col -->
				<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->
	<div id="content" class="site-content pt-3 pt-lg-5">
