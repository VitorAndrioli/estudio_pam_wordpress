<?php

/*

Template Name: Archives

*/

?>

<?php get_header(); ?>



<?php if (have_posts()) : ?>



<div class ="post">

<div class ="mtitle"><h2>

<?php _e('Archives by Month:','Ravoon'); ?>

</h2></div>

<div class ="postbody">

<ul>

		<?php if (function_exists('wp_get_jarchives')) { ?>

			<?php wp_get_jarchives('type=monthly'); ?>

		<?php } else { ?>

			<?php wp_get_archives('type=monthly'); ?>

		<?php } ?>

</ul>

</div></div>

<div class ="post">

<div class ="mtitle"><h2>

<?php _e('Archives by Subject:','Ravoon'); ?>

</h2></div>

<div class ="postbody">

<ul>

 <?php wp_list_categories('show_count=1&title_li='); ?>

</ul>

</div></div>



<?php endif; ?>



	

<div id="footer">

<p>

<?php _e('Copyright &copy; ','Ravoon'); ?> <a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a>

<?php _e('Powered by ','Ravoon'); ?><?php _e('<a href="http://wordpress.org/">WordPress</a>','Ravoon'); ?>

		 <?php _e('Theme Design By <a href="http://weblog.Hottehran.ir">Maysam</a>','Ravoon'); ?>

		<br /><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','Ravoon'); ?></a>

		<?php _e('and','Ravoon'); ?> <a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','Ravoon'); ?></a>.

		</p>

</div>

</td>

<td class ="top" width="170">



<?php get_sidebar(); ?>



<?php get_footer(); ?>

