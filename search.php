
<?php get_header(); ?>
<div class="span-14" style="margin-bottom:20px;">
	<div id="breadcrum_back">
		<ul id="breadcrum">
			<li><a href="/"><span>Home</span></a></li>
			<li><a href="<?php bloginfo('wpurl'); ?>"><span>News</span></a></li>
            <li id="last_breadcrum_item">Search results for &quot;<?php echo($_GET['s']); ?>&quot;</li>		
		</ul>
		<div class="clear"></div>
	</div>
</div>

<div class="span-14" style="margin-bottom:20px;">
<div class="span-8 first">
	<?php if (have_posts()) : ?>
		<h2 class="pagetitle">Search Results for &quot;<?php echo($_GET['s']); ?>&quot;</h2>
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style="margin-bottom:20px;">
			    <h2 class="title">
					<a href="<?php the_permalink() ?>" rel="bookmark" 
						title="Permanent Link to <?php the_title_attribute(); ?>">
						<h1 class="title" style="margin-bottom:5px;">
							<?php the_title(); ?>
						</h1>
					</a>
				</h2>
				<div class="entry">
					<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignleft post_thumbnail")); } ?>
					<?php the_content(''); ?>
				</div>
				<hr style="margin: 1px 0px 4px 0px;"/>
				<p class="small grey">
					Posted in <?php the_category(', ') ?> on
					<?php the_time('F jS, Y') ?> By <?php the_author() ?>.<br />
					<?php if (current_user_can('edit_post', $post->ID)) {  
						edit_post_link('Edit', '', ''); } ?>
				</p>
			</div>
		<?php endwhile; ?>
		<div style="float:left;" class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div style="float:right;" class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		
	<?php else : ?>
		<h2 class="pagetitle">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>
	<?php endif; ?>
</div>
<div class="span-6 last">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
