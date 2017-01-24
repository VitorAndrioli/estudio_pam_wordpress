<?php

/**

 * @package WordPress

 * @subpackage Jonk_Theme

 */



get_header(); ?>



	<div id="contentContainer">
		<div id="allContentWidth">
			<div id="menuUnder"></div>
			<div id="mainContent">



				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="noDate"></div>

				<div class="post" id="post-<?php the_ID(); ?>">
					<div class="postInnerPadding">

						<h2><?php the_title(); ?></h2>

						<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

	

						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

							
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>	
					</div>

				</div>

				<?php endwhile; endif; ?>

			</div>



			<?php get_sidebar(); ?>

			<div class="clearer"></div>
		</div>
	</div>

<?php get_footer(); ?>