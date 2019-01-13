<?php
/**
 * 投稿詳細
 *
 * @package nendoban
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php nendoban_post_thumbnail(); ?>
	<div class="entry-meta color-text-sub-a mt-1 fs-em-08">
		<?php nendoban_posted_on(); ?>
	</div><!-- .entry-meta -->
	<div class="entry-content mt-3">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nendoban' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nendoban' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer mt-4">
		<?php nendoban_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
<div class="mt-5">
	<?php the_post_navigation(); ?>	
</div>
