<?php get_header();?>
	<div id="wrapper">
		<div id="content">
			<?php if(have_posts()):?><?php while(have_posts()):the_post();?>
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
						<?php the_content();?>
						<p><?php the_tags('Tags : ', ', ', ''); ?><br/>Categories : <?php the_category(', ');?></p>
						<?php link_pages('<p><strong>Pages : </strong>', '</p>', 'number');?>
					</div>
					<div class="post_content_footer">
						<div class="pml"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?><?php the_title(); ?>"><?php _e('Permalink'); ?></a></div>
						<div class="tcb"><a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack URL'); ?></a></div>
					</div>
				</div>
			<?php endwhile;?>
				<?php comments_template();?>
				<div id="nav">
						<?php previous_post_link('<div class="nav_l"> %link</div>');?>
						<?php next_post_link('<div class="nav_r"> %link</div>');?>
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