<?php get_header(); ?>



	<div id="content" class="grid_8">



	<?php if (have_posts()) : ?>



		<h2 class="pagetitle">Search Results</h2>



		<div class="navigation">

			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>

			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

		</div>





		<?php while (have_posts()) : the_post(); ?>



			<div class="post border-bottom">

				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<p class="postmetadata"><?php the_time('l, F jS, Y') ?> Posted in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

				<div class="entry">

				<?php the_excerpt(); ?>

				</div>

				<?php the_tags('<p class="tags-title">Tags: ', ', ', '</p>'); ?>

			</div>



		<?php endwhile; ?>



		<div class="navigation">

			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>

			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

		</div>



	<?php else : ?>



		<h2 class="center">No posts found. Try a different search?</h2>

		<?php include (TEMPLATEPATH . '/searchform.php'); ?>



	<?php endif; ?>



	</div>



<?php get_sidebar('single'); ?>



<?php get_footer(); ?>