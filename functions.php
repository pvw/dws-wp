<?php	
	// No one except hackers value the wordpress version number
	remove_action('wp_head', 'wp_generator');
	
	if ( function_exists('register_sidebar') )
	    register_sidebars(2, array(
			'before_widget' => '',
			'after_widget' => '</div></div></div><div class="linear_bg_bottom">&nbsp;</div>',
			'before_title' => '<div class="gradient_box"><div class="space10"><h2 class="title">',
			'after_title' => '</h2><div class="content">',
		));
			
	function widget_akvo_search() {
	?>
	    <div class="gradient_box">
        	<div class="space10">
        		<h2 class="title">Search for</h2>
        	    <div class="content">
        	        <form role="search" method="get" id="searchform" name="searchform" action="." >
    					<input type="search" value="" name="s" id="s" style="width:100%;" />
    					<div style="text-align:right; margin-top:10px;">
    					    <input type="submit" id="searchsubmit" value="Search" style="float:right; margin-bottom:5px;"/>
    					    <div class="clear"></div>
    					</div>
    					<?php /*
    					    <a class="awesome aqua small" 
    						    href="javascript:document.searchform.submit();" onclick="this.blur();">
    						    Search
    						</a>
    					    <input type="submit" name="submit" value="search" id="search" style="display:none;">    
    					*/?>
    					
    				</form>        	    
        	    </div>
        	</div>
        </div>
        <div class="linear_bg_bottom">
        	&nbsp;
        </div>
	<?php
	}
	if ( function_exists('register_sidebar_widget') )
	    register_sidebar_widget(__('Search2'), 'widget_akvo_search');
	
		
?>