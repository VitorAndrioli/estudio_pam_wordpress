<?php

/**

 * @package WordPress

 * @subpackage Jonk_Theme

 */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>



<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />



<title><?php bloginfo('name'); ?> <?php wp_title('-', true, 'left'); ?></title>



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php echo get_settings('home'); ?>/wp-content/themes/generic-designer/generic-designer.js"></script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>



<?php wp_head(); ?>

</head>

<body>



<div id="allContainer"><!--ends in footer-->

	<div id="header">

		<div id="headerContainer">

			<div id="headerLogo"><a href="<?php echo get_option('home'); ?>/"></a></div>

			<div id="titleContent">

				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

				<span id="subHeader"><?php bloginfo('description'); ?></span>

				

			</div>

		</div>

		<div id="menuContainer">

			<div id="menu">

				<ul>

					<?php

					$homeActive = true;

					foreach ($_GET as $key => $value) {

						if ($key != "") {

							$homeActive = false;

						}

					}

					?>

					<li class="page_item<?php if (is_home()) {print(" current_page_item");} ?>"><a href="<?php echo get_option('home'); ?>" title="Home" id="subitemmenu0">Home</a></li>

					<?php wp_list_pages('title_li=&depth=1' ); ?>

					<li id="menuSearch"><?php get_search_form(); ?></li>

					<!--		

					<li class="page_item"><a href="http://www.advancepatrol.se/shop/" title="shop" target="_blank">Shop</a></li>

					<li class="page_item"><a href="http://myspace.com/advancepatrol" title="myspace" target="_blank">Myspace</a></li>

					-->

				</ul>

			</div>

		

	</div>