<?php get_header(); ?>

	

	<?php get_sidebar(); ?>



	<div id="content">



	<?php if (have_posts()) : ?>



		<h2 class="pagetitle">Search Results for &#8216;<?=$_GET['s']?>&#8217;</h2>



		<div id="contentinner">



		<?php while (have_posts()) : the_post(); ?>



			<div class="post" id="post-<?php the_ID(); ?>">

				<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>



				<small class="postmetadata">

					Posted in <?php the_category(', ') ?> on <?php the_time('m/d/Y h:i a') ?> by <?php the_author() ?> 

					<?php edit_post_link('Edit', ' | ', ''); ?>   

				</small>



				<div class="entry">

					<?php the_excerpt(); ?>

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



		<h2 class="pagetitle">No Posts Found</h2>

		<div id="contentinner">

		<div class="post"><div class="entry"><p>Search for something else.</p></div></div>

		</div>



	<?php endif; ?>



</div><!-- /content -->



<?php get_footer(); ?>