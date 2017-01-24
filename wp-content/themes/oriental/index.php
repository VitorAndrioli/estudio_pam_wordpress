<?php get_header(); ?>

	

	<?php get_sidebar(); ?>



	<div id="content">



	<h2 class="pagetitle">&nbsp;</h2>



	<div id="contentinner">



	<?php if (have_posts()) : ?>



		<?php while (have_posts()) : the_post(); ?>



			<div <?php function_exists('post_class') ? post_class('post') : 'post'; ?> id="post-<?php the_ID(); ?>">

				<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>



				<small class="postmetadata">

					Posted in <?php the_category(', ') ?> on <?php the_time('m/d/Y h:i a') ?> by <?php the_author() ?> 

					<?php edit_post_link('Edit', ' | ', ''); ?>   

				</small>



				<div class="entry">

					<?php the_content('Read the rest of this entry &raquo;'); ?>

				</div>



				<ul class="postmetadata">

					<li class="tags">

						<?php the_tags('Tags: ', ', ', ''); ?>&nbsp;

					</li>

					<li class="comments">

						<a href="<?php the_permalink() ?>#respond">Add Comment</a> 

							&raquo; 

						<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>

					</li>

				</ul>

				<div class="divider">&nbsp;</div>

			</div><!--/post-->



		<?php endwhile; ?>



		</div><!--/contentinner-->



		

		<div class="navigation">

			<?php next_posts_link('Older Entries') ?> &nbsp; &nbsp; <?php previous_posts_link('Newer Entries') ?>

		</div>



	<?php else : ?>



		<h2 class="pagetitle">Not Found</h2>

		<div id="contentinner">

		<div class="post"><div class="entry"><p>Sorry, but you are looking for something that isn't here.</p></div></div>

		</div>



	<?php endif; ?>



</div><!-- /content -->



<?php get_footer(); ?>