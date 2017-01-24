<?php get_header(); ?>

	

	<?php get_sidebar(); ?>



	<div id="content">



	<?php if (have_posts()) : ?>



 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

 	  <?php /* If this is a category archive */ if (is_category()) { ?>

		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>

		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>

 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>

		<h2 class="pagetitle">Author Archive</h2>

 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

		<h2 class="pagetitle">Blog Archives</h2>

 	  <?php } ?>





	<div id="contentinner">



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