<div class="mb-4 <?php nendoban_the_use_sidebar_attr( 'col-12 col-md-6', 'col-12 col-md-4' ); ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'archive-post', '--card', 'card', 'h-100', 'flex', 'flex-column', 'justify-content-between' ) ); ?>>
		<div class="card-main">
			<a class="ratio -r-16-9" href="<?php echo get_the_permalink() ?>">
				<div class="ratio__item">
					<?php if ( has_post_thumbnail() ): ?>
						<div class="ratio__image">
							<?php
							the_post_thumbnail(
								'post-thumbnail',
								array(
									'class' => 'card-img-top archive-post__image',
								)
							);
							?>
						</div>
					<?php elseif ( ! empty( NDBN_ARCHIVE_DEFAULT_IMAGE_URL ) ): ?>
						<div class="ratio__image">
							<img class="card-img-top archive-post__image" src="<?php echo esc_url_raw( NDBN_ARCHIVE_DEFAULT_IMAGE_URL ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
						</div>
					<?php else: ?>
						<div class="d-flex h-100 justify-content-center align-items-center alert-secondary">
							<i class="far fa-image h4 m-0 p-0"></i>
						</div>
					<?php endif; ?>
				</div>
			</a>
			
			<div class="card-body pb-1">
				<?php
				the_title(
					'<h2 class="entry-title archive-post__title card-title fs-em-12 color-text-main-a"><a href="' . get_the_permalink() . '">',
					'</a></h2>'
				);
				?>
			</div>
		</div>
		<div class="entry-meta card-body pt-0 fs-em-08 color-text-sub-a">
			<?php nendoban_posted_on(); ?>
		</div><!-- .entry-meta -->
	</article>
</div>
