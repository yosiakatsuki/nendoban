<?php
/**
 * 投稿詳細
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

							get_template_part( 'template-parts/single/content' );

							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .col-lg-8 -->

			<?php get_sidebar(); ?>
		</div><!-- .row -->
	</div><!-- .container -->

<?php get_footer(); ?>