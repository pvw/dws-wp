<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?>
	</title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/build/dws_style.css?v=1">
    
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />

	<link rel="alternate" type="application/rss+xml" 
		title="Akvo blog posts" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="application/rss+xml" 
		title="Akvo blog comments" href="<?php bloginfo('comments_rss2_url'); ?>" />
			
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <div id="header_container" class="container">
        <ul id="main_nav">
			<li>
				<a id="main_nav_left" href="/">
					<img src="<?php bloginfo('template_url'); ?>/img/mainnav/dws_logo.png" width="222" height="41" 
						alt="Dutch Waster Sector" style="margin:0;padding:0;">
				</a>
			</li>

			<li<?php if( $_SERVER["REQUEST_URI"] != "/features/" ) { echo " class='active'"; }; ?>>
                <a href="/news">
                    <span>News</span>
                </a>
            </li>
			<li>
				<a href="/rsr/projects/">
					<span>Projects</span>
				</a>
			</li>
			<li>
				<a href="/web/directory">
					<span>Directory</span>
				</a>
			</li>
			<li<?php if( $_SERVER["REQUEST_URI"] == "/features/" ) { echo " class='active'"; }; ?>>
                
                <a href="/features">
                    <span>Features</span>
                </a>
            </li>
			<li>
				<a href="/web/education">
					<span>Education</span>
				</a>
			</li>
			<li>
                <a href="/web/focus-areas">
                    <span>Focus Areas</span>
                </a>
            </li>
			<li>
				<a href="/web/netherlands">
					<span>Netherlands</span>
				</a>
			</li>
			<li>
                <a href="/web/about">
                    <span>About</span>
                </a>
            </li>
			<li>
				<span id="main_nav_language">
						&nbsp;
				</span>
			</li>
			<li id="mainnav_right">
			    &nbsp;
			</li>
		</ul>
    </div>
    <div style="height:15px;">
		&nbsp;
	</div>
	<div id="main_container" class="container">