<?php

/**

 * @package WordPress

 * @subpackage Jonk_Theme

 */



get_header();

?>



	<div id="contentContainer">
		<div id="allContentWidth">
			<div id="menuUnder"></div>
			<div id="mainContent">

				<?php if (have_posts()) : ?>

					<div class="noDate"></div>
					<div class="post">
						<div class="postInnerPadding">

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

 	  
 	  						<?php /* If this is a 404 page */ if (is_404()) { ?>
							<?php /* If this is a category archive */ } elseif (is_category()) { ?>
							<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

							<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
							<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
							for the day <?php the_time('l, F jS, Y'); ?>.</p>

							<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
							for <?php the_time('F, Y'); ?>.</p>

							<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
							for the year <?php the_time('Y'); ?>.</p>

							<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
							<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
							for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

							<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

							<?php } ?>
							</div>

						</div>


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

					<?php else :



					if ( is_category() ) { // If this is a category archive
						printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
					} else if ( is_date() ) { // If this is a date archive
						echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
					} else if ( is_author() ) { // If this is a category archive
						$userdata = get_userdatabylogin(get_query_var('author_name'));
						printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
					} else {
						echo("<h2 class='center'>No posts found.</h2>");
					}

					get_search_form();



				endif;
				?>



			</div>

			<?php get_sidebar(); ?>
			<div class="clearer"></div>
		</div>
	</div>

<?php get_footer(); ?>

