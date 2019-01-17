<?php
/**
 * アーカイブ
 *
 * @package nendoban
 */

get_header(); ?>
	<div class="container mt-3 mt-lg-5">
		<div class="<?php nendoban_the_use_sidebar_attr( 'row', 'row' ); ?>">

			<div class="<?php nendoban_the_use_sidebar_attr( 'col-lg-8', 'col-12' ); ?>">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

						<?php if ( have_posts() ) : ?>

							<?php get_template_part( 'template-parts/archive/header' ); ?>

							<div class="row">
								<?php
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/archive/content' );
								endwhile;
								?>
							</div>
						
							<?php get_template_part( 'template-parts/archive/pagination' ); ?>

						<?php else : ?>

							<?php get_template_part( 'template-parts/404/content' ); ?>

						<?php endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- col-lg-8 -->

			<?php get_sidebar(); ?>
		</div><!-- .row -->
	</div><!-- .container -->

<?php get_footer(); ?>