<?php get_header(); ?>

<div id="content">
	<div id="content-inner">

<div id="main">

<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
			
	<div class="post" id="post-<?php the_ID(); ?>">
	
			
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'panorama'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		
		<div class="entry">

			<div class="authormeta">
							
				<?php _e('By','panorama'); ?> <?php the_author_posts_link(); ?>, <?php the_time($ap_dateTimeFormat); ?></div>
	
	
				<?php the_content(__('Continue reading','panorama') . ' &#39;' . get_the_title('', '', false) . '&#39;&raquo;'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>'. __('Pages','') .':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<div style="clear:both"></div>
		</div>
	
		<div class="postmetadata">
		
			<p><img style="vertical-align:-5px;" alt="<?php _e('categories','panorama'); ?>" src="<?php bloginfo('template_directory'); ?>/images/category.gif" height="16" width="16" /> <?php the_category(', ') ?> 
			 <?php if (get_the_tags()){?>
		 		  |	<img style="vertical-align:-5px;" alt="<?php _e('tags','panorama'); ?>" src="<?php bloginfo('template_directory'); ?>/images/tag.gif" height="16" width="16" /> <?php the_tags('') ?>
		<?php } ?> <?php edit_post_link(__('Edit'),' ',''); ?></p>			
			</div> 
	
		
		
		<?php comments_template(); ?>
		
		
		</div>
		
		


	<?php endwhile; ?>

	
	<div id="navigation">
	
			<div class="fleft"><?php previous_post_link('&larr; %link') ?></div>
			<div class="fright"><?php next_post_link('%link &rarr;') ?></div>
			
			<div style="clear:both;"></div>	
		
	</div>


	<?php else : ?>
	
	<div class="post">
	<div class="entry">
		<h2><?php _e('Not Found','panorama'); ?></h2>
		<p><?php _e('Sorry, you are looking for something that isn\'t here.','panorama'); ?></p>
	</div>
	</div>	
		
		
	<?php endif; ?>
	
	

	</div> <!-- eof main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
