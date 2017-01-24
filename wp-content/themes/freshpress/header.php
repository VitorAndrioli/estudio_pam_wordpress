<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />



<title><?php wp_title(' '); ?> <?php if(wp_title(' ', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>



<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<?php wp_head(); ?>



</head>



<body>



<!-- Dashboard Starts -->

<div id="dashboard">



	<div class="dash">



		<?php include (TEMPLATEPATH . '/searchform.php'); ?>



			<a href="<?php bloginfo('rss2_url'); ?>" title="Assine <?php bloginfo('name'); ?> RSS feed">Assine nosso feed RSS <img src="<?php bloginfo('template_directory'); ?>/images/feed-icon-16x16.png" width="16" height="16" border="0" title="Assine nosso feed RSS " alt="RSS"/></a>



		<div class="clear"></div>

	</div>



</div>

<!-- Dashboard Ends -->



<!-- Header Starts -->

<div id="header">



<div class="headings">

  <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>

  <h2><?php bloginfo('description'); ?></h2>

<div class="clear"></div>

</div>

  

</div>

<!-- Header Ends -->



<div id="nav"><!-- Nav Starts -->

<ul>

<?php

wp_list_pages('title_li='); ?>

<div class="clear"></div>

</ul>

<!--[if lte IE 7]>

<div class="clear"></div>

<![endif]-->

</div><!-- Nav Ends -->