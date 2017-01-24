<?php get_header(); ?>

	

	<?php get_sidebar(); ?>



	<div id="content">



	<h2 class="pagetitle">&nbsp;</h2>



	<div id="contentinner">



	<?php if (have_posts()) : ?>



		<?php while (have_posts()) : the_post(); ?>



			<div class="post" id="post-<?php the_ID(); ?>">

				<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>



				<small class="postmetadata">

					<?php

					if($post->post_parent) {

						echo '&laquo; ';

						echo '<a href="'.get_permalink($post->post_parent).'" class="parentpage" title="Parent page: '.get_the_title($post->post_parent).'">'.get_the_title($post->post_parent).'</a>';

						echo ' | ';

					}

					?>

					Posted on <?php the_time('m/d/Y h:i a') ?> by <?php the_author() ?> 

					<?php edit_post_link('Edit', ' | ', ''); ?>  

				</small>



				<div class="entry">

					<?php the_content('Read the rest of this entry &raquo;'); ?>

				</div>



				<?php

				  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=1');

				  if ($children) { ?>

				  <h3 class="subpages">Subpages</h3>

				  <ul class="subpages">

				  <?php echo $children; ?>

				  </ul>

				<?php } ?>

			</div>



			





		<?php endwhile; ?>



	<?php else : ?>



		<h2 class="pagetitle">Not Found</h2>

		<div id="contentinner">

		<div class="post"><div class="entry"><p>Sorry, but you are looking for something that isn't here.</p></div></div>

		</div>



	<?php endif; ?>



</div><!-- /content -->



</div><!-- /contentinner -->



<?php get_footer(); ?>