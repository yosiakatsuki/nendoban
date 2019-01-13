<?php if ( is_archive() ): ?>
	<header class="page-header mb-5">
		<?php
		the_archive_title( '<h1 class="page-title h2">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->
<?php endif; ?>