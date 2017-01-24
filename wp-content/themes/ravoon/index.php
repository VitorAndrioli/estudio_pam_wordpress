<?php get_header(); ?>





<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include (TEMPLATEPATH . '/item-post.php'); ?>

<?php endwhile; ?>



<?php include (TEMPLATEPATH . '/item-pagebar.php'); ?>





	<?php else : ?>

	<div class="post">

	<h2><?php _e('Not Found','Ravoon'); ?></h2>

		<h2 class="center"><?php _e('Not Found','Ravoon'); ?></h2>

		<p class="center"><?php _e('Sorry, but you are looking for something that isn\'t here.','Ravoon'); ?></p>

		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	</div><?php endif; ?>





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



