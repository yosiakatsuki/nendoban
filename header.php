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
			<div class="row align-items-center">
				<div class="col">
					<?php get_template_part( 'template-parts/header/site-branding' ); ?>
				</div><!-- .col -->
				<?php get_template_part( 'template-parts/header/nav' ); ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
