<?php
/*
Template Name: GuestBook
*/
?><?php get_header();?>
	<div id="wrapper">
		<div id="content">
			<?php if(have_posts()):?><?php while(have_posts()):the_post();?>
				<div class="post_entry" id="post-<?php the_ID();?>">
					<div class="post_meta">
						<div class="post_title">
							<h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
						</div>
					</div>
					<div class="post_content">
						<?php the_content();?>
					</div>
					<div class="post_content_footer">
							 <?php link_pages('<strong>Pages : </strong>', '', 'number');?> <?php edit_post_link('<strong> &raquo;&raquo; edit</strong>'); ?>
					</div>
				</div>
			<?php endwhile;?>
			<?php comments_template('/gbcomments.php'); ?>
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