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



				<?php if (have_posts()) : ?>



					<?php while (have_posts()) : the_post(); ?>

						<div class="date">
							<div class="dateContainer">
								<span class="day"><?php the_time('j') ?></span>
								<span class="month"><?php the_time('M') ?></span>
								<span class="year"><?php the_time('Y') ?></span>
							</div>
						</div>

						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<div class="postInnerPadding">
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

								<?php the_content('Read the rest of this entry &raquo;'); ?>
								<div class="postFooter">
									<small><?php the_time('j F, Y') ?> at <?php the_time('G:i') ?> by <?php the_author() ?> </small>
									<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
								</div>								
							</div>

							<div class="clearer"></div>

						</div>



					<?php endwhile; ?>



					<div class="navigation">

						<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
						<div class="clearer"></div>

					</div>



				<?php else : ?>



					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>

					<?php get_search_form(); ?>



				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>
			<div class="clearer"></div>
		</div>
	</div>



<?php get_footer(); ?>

