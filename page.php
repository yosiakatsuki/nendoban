<?php
/**
 * 固定ページ
 *
 * @package nendoban
 */

get_header(); ?>
	<div class="container mt-3 mt-lg-5">
		<div class="<?php nendoban_the_use_sidebar_attr( 'row', 'row justify-content-center' ); ?>">

			<div class="<?php nendoban_the_use_sidebar_attr( 'col-lg-8', 'col-lg-8' ); ?>">

				<div id="primary" class="content-area">
					<main id="main" class="site-main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/page/content' );

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-lg-8 -->

			<?php get_sidebar(); ?>
		</div><!-- .row -->
	</div><!-- .container -->

<?php get_footer(); ?>