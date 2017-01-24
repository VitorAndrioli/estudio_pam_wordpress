<?php get_header(); ?>

	

	<?php get_sidebar(); ?>



	<div id="content">



	<h2 class="pagetitle">&nbsp;</h2>



	<div id="singlepost">

			

		<?php if (have_posts()) : ?>



			<?php while (have_posts()) : the_post(); ?>



			<div class="post" id="post-<?php the_ID(); ?>">

				<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>



				<small class="postmetadata">

					Posted in <?php the_category(', ') ?> on <?php the_time('m/d/Y h:i a') ?> by <?php the_author() ?> 

					<?php edit_post_link('Edit', ' | ', ''); ?>   

				</small>



				<div class="entry">

					<?php the_content('Read the rest of this entry &raquo;'); ?>

				</div>



				

				<?php the_tags('Tags: ', ', ', ''); ?>&nbsp;

					

			</div><!--/post-->

	

		</div><!--/singlepost-->



		<?php comments_template(); ?>



			<?php endwhile; ?>

				<div class="navigation" style="padding-top: 1em">

					<?php previous_post_link(); ?> | <?php next_post_link(); ?>

				</div>

		<?php else : ?>



		<h2 class="pagetitle">Not Found</h2>

		<div id="contentinner">

		<div class="post"><div class="entry"><p>Sorry, but you are looking for something that isn't here.</p></div></div>

		</div>



	<?php endif; ?>



</div><!-- /content -->



<?php get_footer(); ?>