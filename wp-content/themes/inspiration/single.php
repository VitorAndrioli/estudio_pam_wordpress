<?php get_header(); ?>



	<div id="content" class="grid_8 singlepage">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div class="post" id="post-<?php the_ID(); ?>">

			<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="trackback" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<p class="postmetadata"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <a href="#respond">leave a response</a></p>

			<div class="entry">

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>



				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<?php the_tags( '<p class="tags-title">Tags: ', ', ', '</p>'); ?>

			</div>

		</div>

		

		<div class="navigation single">

			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>

			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>

		</div>



	<?php comments_template(); ?>



	<?php endwhile; else: ?>



		<p>Sorry, no posts matched your criteria.</p>



<?php endif; ?>



	</div>

	

<?php get_sidebar('single'); ?>



<?php get_footer(); ?>

