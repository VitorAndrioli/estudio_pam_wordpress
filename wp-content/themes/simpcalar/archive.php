<?php get_header();?>
	<div id="wrapper">
		<div id="content">
			<?php if(have_posts()):?>
					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
					  <?php /* If this is a category archive */ if (is_category()) { ?>
						<div id="top_bar"><h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2></div>
					  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<div id="top_bar"><h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2></div>
					  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<div id="top_bar"><h2>Archive for <?php the_time('F jS, Y'); ?></h2></div>
					  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<div id="top_bar"><h2>Archive for <?php the_time('F, Y'); ?></h2></div>
					  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<div id="top_bar"><h2>Archive for <?php the_time('Y'); ?></h2></div>
					  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<div id="top_bar"><h2>Author Archive</h2></div>
					  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<div id="top_bar"><h2>Blog Archives</h2></div>
					  <?php } ?>
					  <?php while(have_posts()):the_post();?>
				<div class="post_entry" id="post-<?php the_ID();?>">
					<div class="post_meta">
						<div class="post_title">
							<h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
						</div>
						<div class="post_info">
							 <?php the_time('F jS, Y') ?> <?php edit_post_link('<strong> &raquo;&raquo; edit</strong>'); ?>
						</div>
					</div>
					<div class="post_content">
						<?php the_content(__('Read the rest of this entry &raquo;&raquo;'));?>
						<p><?php the_tags('Tags : ', ', ', ''); ?></p>
					</div>
					<div class="post_content_footer">
						<div class="tcb"><a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack URL'); ?></a></div>
						<div class="comm"><?php comments_popup_link('No Response', '1 Response', '% Responses'); ?></div>
					</div>
				</div>
			<?php endwhile;?>
				<div id="nav">
					<p><?php posts_nav_link();?></p>
				</div>
			<?php else:?>
			<div class="post_entry">
					<div class="post_meta">
						<div class="post_title">
							<h2>404 Error!</h2>
						</div>
					</div>
					<div class="post_content">
						<p>Sorry! Page not found!</p>
					</div>
				</div>
			<?php endif;?>
		</div>
		<div id="search_bar">
		<?php include(TEMPLATEPATH.'/searchform.php');?>
		</div>
	<?php get_sidebar();?>
		<?php include(TEMPLATEPATH.'/diyadd.php');?>	
	</div>
<?php get_footer();?>