<?php get_header(); ?>





	<?php if (have_posts()) : ?>



	<div class ="post">

	<div class ="mtitle">

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

 	  <?php /* If this is a category archive */ if (is_category()) { ?>

		<h2 class="pagetitle"><?php _e('Archive for the','Ravoon'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category','Ravoon'); ?></h2>

 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

		<h2 class="pagetitle"><?php _e('Posts Tagged','Ravoon'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>

		<h2 class="pagetitle"><?php _e('Archive for','Ravoon'); ?> <?php the_time(__('F jS, Y','Ravoon')); ?></h2>

 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

		<h2 class="pagetitle"><?php _e('Archive for','Ravoon'); ?> <?php the_time(__('F, Y','Ravoon')); ?></h2>

 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

		<h2 class="pagetitle"><?php _e('Archive for','Ravoon'); ?> <?php the_time(__('Y','Ravoon')); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>

		<h2 class="pagetitle"><?php _e('Author Archive','Ravoon'); ?></h2>

 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

		<h2 class="pagetitle"><?php _e('Blog Archives','Ravoon'); ?></h2>

		<?php } ?>

	</div></div>

		

	<!--loop article begin-->

	<?php while (have_posts()) : the_post(); ?>

	<?php include (TEMPLATEPATH . '/item-post.php'); ?>

	<?php endwhile; ?>



<?php include (TEMPLATEPATH . '/item-pagebar.php'); ?>

	

	<!-- do not delete-->

	<?php else : ?>

	<div class ="post">

	<div class ="mtitle"><h2><?php _e('Not Found','Ravoon'); ?></h2></div></div>

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