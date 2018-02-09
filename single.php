<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nendoban
 */

get_header(); ?>
<div class="container">
	<div class="row">

		<div class="col-lg-8">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
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
get_footer();