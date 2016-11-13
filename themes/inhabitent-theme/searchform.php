<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<!--<button id = "btn-search" class="search-submit">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>-->
		<div class = "search-bar-header">
			<a href = "#" class ="search-icon"> 
				<i class="fa fa-search"></i>
			</a>
			<label>
				<input type="search" id="search" class="search-field" placeholder="Type and Hit Enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
			</label>
		</div>
	</fieldset>
</form>
