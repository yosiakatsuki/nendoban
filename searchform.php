<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
		<div class="row no-gutters align-items-center">
			<div class="col">
				<label class="w-100 m-0">
					<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
					<input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
				</label>
			</div>
			<div class="col-auto">
				<button type="submit" class="search-submit btn btn-secondary ml-1"><i class="fas fa-search"></i></button>
			</div>
		</div>
	</div>
	
	
</form>