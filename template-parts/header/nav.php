<?php if( has_nav_menu( 'Primary' ) ): ?>
	<div class="col-auto">
		<nav id="site-navigation" class="header-nav main-navigation navbar navbar-expand-lg navbar-light h-100 d-flex align-items-center">
			<button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_html_e( 'Primary Menu', 'nendoban' ); ?>"><i class="fas fa-bars"></i></button>
			<div class="navbar-collapse offcanvas-collapse">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'Primary',
					'menu_class'     => 'navbar-nav',
					'fallback_cb'    => '',
					'container'      => false
				) );
				?>
			</div><!-- .navbar-collapse offcanvas-collapse -->
		</nav><!-- #site-navigation -->
	</div><!-- .col -->
<?php endif; ?>