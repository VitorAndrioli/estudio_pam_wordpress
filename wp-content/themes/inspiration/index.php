<?php get_header(); ?>



	<div id="content" class="grid_6">



	<?php if (have_posts()) : ?>



		<?php while (have_posts()) : the_post(); ?>



			<div class="post" id="post-<?php the_ID(); ?>">

				<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<p class="postmetadata"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> <span class="cat-tag"><?php the_category(', ') ?></span> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

				<div class="entry">

					<?php the_content('Read more &raquo;'); ?>

					<div class="hr"></div>

				</div>

			</div>



		<?php endwhile; ?>



		<div class="navigation">

			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>

			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>

		</div>



	<?php else : ?>



		<h2 class="center">Not Found</h2>

		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php include (TEMPLATEPATH . "/searchform.php"); ?>



	<?php endif; ?>

	<div class="clear"></div>

	</div>



<?php get_sidebar(); ?>



<?php get_footer(); ?>

