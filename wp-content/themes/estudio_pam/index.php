<?php get_header()?>
<div id="homecol">

	<div id="columns"></div>
	
	<div id="image-container">
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
		<div class="polaroid">
			<a href="<?php the_permalink()?>" rel="bookmark">
				<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {
				echo get_the_post_thumbnail($post->ID);
				} else {
				echo main_image();
				} ?>
			</a>
		</div>
	
	<?php endwhile; ?>
	</div>
	
	
	
	
	
	<div class="navigation">
		<span class="prevlink"><?php next_posts_link('Previous entries') ?></span>
		<span class="nextlink"><?php previous_posts_link('Next entries') ?></span>
	</div>
			
	<?php else : ?>
	<h1><?php _e('No posts found','polaroids')?></h1>
	<p><?php _e('There are no posts to display here.','polaroids')?></p>
	<?php endif; ?>
	
</div>
<?php get_footer()?>