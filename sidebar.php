<div style="float:left; width:195px;">
	<?php /* 
	<div class="white_box"><div class="space20">
		<?php get_search_form(); ?>
	</div></div>
	<br />
	*/?>
	<?php if ( !function_exists('dynamic_sidebar')
	        || !dynamic_sidebar(1) ) : ?>
	<p>Theme is developed for dynamic sidebars!</p>
	<?php endif; ?>
</div>
<div style="float:left; width:195px; margin-left:15px;">
	<?php if ( !function_exists('dynamic_sidebar')
	        || !dynamic_sidebar(2) ) : ?>
	<p>Theme is developed for dynamic sidebars!</p>
	<?php endif; ?>
</div>
<div class="clear"></div>