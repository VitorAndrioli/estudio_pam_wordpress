<?php get_header(); ?>



	<div id="content" class="grid_8">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div class="post" id="post-<?php the_ID(); ?>">

			<h2 class="post-title"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>

				<p class="postmetadata"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <a href="#respond">leave a response</a></p>

			<div class="entry">

				<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>



                <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>



				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>



				<div class="hr"></div>

				<?php the_tags( '<p class="tags-title">Tags: ', ', ', '</p>'); ?>

			</div>

		</div>

		

		<div class="navigation single">

			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>

			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>

		</div>



	<?php comments_template(); ?>



	<?php endwhile; else: ?>



		<p>Sorry, no attachments matched your criteria.</p>



<?php endif; ?>



	</div>

	

<?php get_sidebar('single'); ?>



<?php get_footer(); ?>

