<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo ap_rssLink(); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<style type="text/css" media="screen">
	@import url("<?php bloginfo('template_directory'); ?>/<?php ap_layout(); ?>col.css");
		
	#headerimage{
			<?php echo ap_headerImage(); ?>
	}	

	a{
		color: <?php echo ap_linkColour(); ?>;
	}
		
	a:hover{
		color: <?php echo ap_hoverColour(); ?>;
	}		
		
	<?php if (get_option('thread_comments') == 1){ ?>	
		
	ol.commentlist li div.reply {
	background:#ddd;
	border:1px solid #aaa;
	padding:2px 10px;
	text-align:center;
	width:55px;
	-moz-border-radius: 3px;
	-khtml-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	}
		
	ol.commentlist li div.reply:hover {
	background:#f3f3f3;
	border:1px solid #aaa;
	}
	<?php } ?>			
		
	</style>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/utils.js"></script>
<?php
	$ap_horizmenu_url = get_bloginfo('template_directory') . '/scripts/horizmenu.js';
 	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	wp_enqueue_script('jquery');
	wp_enqueue_script('horizmenu', $ap_horizmenu_url, 'jquery');
	
	wp_localize_script( 'horizmenu', 'horizmenuSettings', array(
	  	'ap_baseurl' => get_bloginfo('template_directory')
		));
	wp_head();
 ?>	
</head>
<body>
<div id="wrapper">

	<div id="header">
	
		<div id="surheader">
	
		<p><?php echo ap_twitterLink(); ?> <img style="vertical-align:-3px;" alt="RSS" src="<?php bloginfo('template_directory'); ?>/styles/<?php them_activeStyleDir(); ?>/feed-icon-16x16.gif" height="16" width="16" /> <a href="<?php echo ap_rssLink(); ?>"><?php _e('Entries RSS','panorama'); ?></a> | <a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments RSS','panorama'); ?></a></p> 
	
		
</div>	
	
	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">

				
		<div id="search">
			<input type="text"  onfocus="doClear(this)" value="Search..." name="s" id="s" />
			<input name="" class="searchsubmit" type="image" src="<?php bloginfo('template_directory'); ?>/styles/<?php them_activeStyleDir(); ?>/search_icon.gif" value="Go" />
		</div>
				
	</form>

		<?php ap_logo(); ?>

	</div>
	
	<div id="container">
		
		<div id="headerimage"></div>
		
	<div id="topmenu">	
	
		<div id="tabs" class="horizmenu">

			<ul>
			
			<?php if (get_option('ap_includeHome') == 0){ ?>
			
			<li class="<?php if (((is_home()) && !(is_paged())) or (is_archive()) or (is_single()) or (is_paged()) or (is_search())) { ?>current_page_item<?php } else { ?>page_item<?php } ?>"><a href="<?php echo get_option('home'); ?>/"><?php _e('Home') ; ?></a></li>
			<?php } ?>

			<?php ap_buildMenu(); ?>

			</ul>
		</div>
	</div>
