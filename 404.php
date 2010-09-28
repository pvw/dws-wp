
<?php get_header(); ?>
<div class="span-14" style="margin-bottom:20px;">
	<div id="breadcrum_back">
		<ul id="breadcrum">
			<li><a href="/"><span>Home</span></a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>"><span>News</span></a></li>
			<li id="last_breadcrum_item">Page Not Found (Error 404)</li>
		</ul>
		<div class="clear"></div>
	</div>
</div>
<div class="span-14" style="margin-bottom:20px;">
<div class="span-8 first">
    <h1 class="title">Page Not Found (Error 404)</h1>
	<br />
	<h3>
		Sorry, but you are looking for something that isn't here.
		Maybe you want to head to the <a href="<?php echo get_bloginfo('url'); ?>">front page</a> of the blog.
	</h3>
</div>
<div class="span-6 last">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
