<?php get_header(); ?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<div class ="post">

<div class ="mtitle">

<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></div>

<div class ="postbody">	

	<p class="author"><?php _e('Posted by','Ravoon'); ?> <?php the_author_posts_link(); ?>

	<?php _e(' at ','Ravoon'); ?><?php the_time('  j F , Y'); ?>

	 <?php if(function_exists('the_views')) { the_views(); } ?>

	</p>

	

	<?php the_content(__('<br />Read the rest of this entry &raquo;','Ravoon')); ?>

	<?php wp_link_pages('before=<p><b>' .__('Pages:', 'Ravoon') . '&after=</b></p>&next_or_number=number') ?>

	

	<p class="center"><?php the_tags(__(' Tags: ','Ravoon'), ', ' , '<br />'); ?>

	<?php _e('Posted in:','Ravoon'); ?> <?php the_category(' , ') ?>

	<?php edit_post_link(__('Edit','Ravoon'), ' | ', ''); ?>

	</p>	





</div></div>



	<?php endwhile; ?>





<?php comments_template(); ?>



	<?php else : ?>

	<div class="post"><h2><?php _e('Not Found','Ravoon'); ?></h2>

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



