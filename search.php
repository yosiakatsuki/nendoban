<?php
/**
 * The template for displaying search results pages
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package nendoban
 */

get_header(); ?>
	<div class="container mt-3 mt-lg-5">
		<div class="<?php nendoban_the_use_sidebar_attr( 'row', 'row' ); ?>">

			<div class="<?php nendoban_the_use_sidebar_attr( 'col-lg-8', 'col-12' ); ?>">
				<section id="primary" class="content-area">
					<main id="main" class="site-main">

						<?php if ( have_posts() ) : ?>

							<header class="page-header mb-5">
								<h1 class="page-title h2"><?php
									printf( esc_html__( 'Search Results for: %s', 'nendoban' ), '<span>' . get_search_query() . '</span>' );
									?></h1>
							</header><!-- .page-header -->

							<div class="row">
								<?php
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/archive/content' );
								endwhile;
								?>
							</div>

							<?php the_posts_navigation(); ?>

						<?php else : ?>

							<?php get_template_part( 'template-parts/404/content' ); ?>

						<?php endif; ?>

					</main><!-- #main -->
				</section><!-- #primary -->
			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>

<?php
get_footer();
