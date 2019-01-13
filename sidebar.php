<?php
/**
 * サイドバー
 *
 * @package nendoban
 */

if ( ! is_active_sidebar( 'sidebar-1' ) || ! NDBN_USE_SIDEBAR ) {
	return;
}
?>
<div class="col-lg-4">
	<aside id="secondary" class="widget-area mt-5 mt-lg-0">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->
</div><!-- .col-md-5 col-lg-4 -->