<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>



	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

	<meta http-equiv="imagetoolbar" content="no" />



	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<!--[if IE 7]>

	<style>

	#searchform {

		padding: 2px 4px 4px 5px;

	}

	</style>

	<![endif]-->



	<!--[if lt IE 7]>

	<style>

	#pageinner {zoom: 1;}

	</style>

	<![endif]-->



	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.2.6.pack.js" type="text/javascript"></script>

	<!-- fix the position relative height issue -->

	<script src="<?php bloginfo('template_url'); ?>/js/ready.js" type="text/javascript"></script>





	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>



	<?php wp_head(); ?>

</head>



<body>



<div id="container">

	<div id="header">

		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

		<div class="description"><?php bloginfo('description'); ?></div>

	</div><!--/header-->



<div id="page">



	<div id="navcontainer">

		<ul id="navlist">

			<li id="first"><a href="#">&nbsp;&nbsp;&nbsp;</a></li>

			<li <?php if ($post->post_type != 'page') echo " class=\"current_page_item\""; ?>><a href="<?php bloginfo('url'); ?>">Home</a></li>

			<?php wp_list_pages('title_li=&depth=1'); ?>

		</ul>

	</div>

	<div id="searchBar">

		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">

			<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />

				<input type="submit" id="searchsubmit" value="Search" />

			</div>

		</form>

	</div>





	<div id="pageinner">

