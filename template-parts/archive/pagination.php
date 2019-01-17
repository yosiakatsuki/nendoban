<div class="row mt-3">
	<div class="col">
		<div class="pagination">
			<?php
			if ( function_exists( 'wp_pagenavi' ) ) {
				wp_pagenavi();
			} else {
				the_posts_navigation();
			}
			?>
		</div>
	</div>
</div>
