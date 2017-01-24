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
				<div class="date">
					<div class="dateContainer">
						<span class="day"><?php the_time('j') ?></span>
						<span class="month"><?php the_time('M') ?></span>
						<span class="year"><?php the_time('Y') ?></span>
					</div>
				</div>

				<div class="post image">
					<div class="postInnerPadding">



					  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>





								<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>



									<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>

									<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>



									<?php the_content('<p class="serif">L&auml;s mer &raquo;</p>'); ?>



									<div class="navigation">

										<div class="alignleft"><?php previous_image_link() ?></div>

										<div class="alignright"><?php next_image_link() ?></div>
										<div class="clearer"></div>

									</div>



									<p class="postmetadata alt">

										<small>

											This entry was posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
											and is filed under <?php the_category(', ') ?>.
											<?php the_taxonomies(); ?>
											You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

											<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
												// Both Comments and Pings are open ?>
												You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

											<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
												// Only Pings are Open ?>
												Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

											<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
												// Comments are open, Pings are not ?>
												You can skip to the end and leave a response. Pinging is currently not allowed.

											<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
												// Neither Comments, nor Pings are open ?>
												Both comments and pings are currently closed.

											<?php } edit_post_link('Edit this entry.','',''); ?>



										</small>

									</p>











						<?php comments_template(); ?>



						<?php endwhile; else: ?>



							<p>Sorry, no attachments matched your criteria.</p>



					<?php endif; ?>



					</div>
				</div>

			</div>

			<?php get_sidebar(); ?>
			<div class="clearer"></div>
		</div>
	</div>

<?php get_footer(); ?>



