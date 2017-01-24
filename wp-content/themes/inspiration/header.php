<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>



<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />



<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if IE 6]>

<style type="text/css" media="screen">

pre { width:100%; }

</style>

<![endif]-->

<?php wp_head(); ?>

</head>

<body id="top">

<div id="wrapper" class="container_12">

  <div id="header" class="container_12 alpha omega">

    <div class="grid_6"><h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1><small><?php bloginfo('description'); ?></small></div>

    <div id="topnav" class="grid_6 alpha">

      <ul>

	  	<li><a href="<?php echo get_option('home'); ?>/">Home</a></li>

	  	<?php wp_list_pages('title_li=&delpth=1'); ?>        

      </ul>

    </div>

  </div>

  <div id="sub-header" class="container_12 alpha omega">

  <div class="grid_6" id="welcome"><h1>The Design Company.</h1><p>You can change this area in header.php</p></div>

  <div class="grid_6">

    <div class="grid_3 omega" id="spbox1">

      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar4') ) : ?>

	  <h3>Special Sidebar</h3>

      <p>You can add any content in this area by go to <br/><strong>Admin->Design->Widgets->Sidebar4</strong></p>

	  <?php endif; ?>

    </div>

    <div class="grid_3 omega" id="spbox2">

      <ul>

        <li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>

        <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>

        <li>

          <?php include (TEMPLATEPATH . '/searchform.php'); ?>

        </li>

      </ul>

    </div>

	</div>

	<div class="clear"></div>

  </div>

  <div class="container_12 omega alpha" id="content-wrapper">

