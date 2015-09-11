<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="row collapse">
    <div class="large-8 small-9 columns">
		<input type="text" placeholder="<?php echo get_search_query(); ?>" name="s" id="s" />
    </div>

    <div class="large-4 small-3 columns">
		<input class="button" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
    </div>
	</div>
</form>
