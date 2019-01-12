<?php if ( has_nav_menu( 'Primary' ) ): ?>
	<div class="footer-menu">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'Footer',
				'menu_class'     => 'footer-menu__list',
				'fallback_cb'    => '',
				'container'      => false
			) );
			?>
	</div>
<?php endif; ?>