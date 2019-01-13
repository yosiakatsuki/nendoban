<?php
/**
 * 404
 *
 * @package nendoban
 */

get_header(); ?>
<div class="container my-5 py-5">
	<div class="row justify-content-center">

		<div class="col-lg-8">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'nendoban' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'nendoban' ); ?></p>

							<?php
								get_search_form();
							?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- col-lg-12 -->
	</div><!-- .row -->
</div><!-- .container -->
<?php
get_footer();