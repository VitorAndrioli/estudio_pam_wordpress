<div class="entry">
<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!','panorama'));

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','panorama');?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number(__('No Responses to','panorama'), __('One Response to','panorama'), __('% Responses to','panorama') );?> &#8220;<?php the_title(); ?>&#8221;</h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(__('&laquo; Older Comments','panorama')) ?></div>
		<div class="alignright"><?php next_comments_link(__('Newer Comments &raquo;','panorama')) ?></div>
		<div style="clear:both;"></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments(); ?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(__('&laquo; Older Comments','panorama')) ?></div>
		<div class="alignright"><?php next_comments_link(__('Newer Comments &raquo;','panorama')) ?></div>
		<div style="clear:both;"></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed','panorama') ; ?></p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3><?php comment_form_title( __('Leave a Reply', 'panorama'), __('Leave a Reply to %s', 'panorama') ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(__('Cancel Reply','panorama')); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

<p><?php printf(__('You must be %slogged in</a> to post a comment.', 'panorama'), '<a href="' . get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink()) . '">')?></p>	

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>


<p><?php printf(__('Logged in as %s.', 'panorama'), '<a href="' . get_option('siteurl') . '/wp-admin/profile.php">' . $user_identity . '</a>')?>			
			<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account','panorama'); ?>"><?php _e('Logout &raquo;','panorama'); ?></a></p>


<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small><?php _e('Name','panorama'); ?> <?php if ($req) _e('(required)','panorama'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small><?php _e('Mail (will not be published)','panorama'); ?> <?php if ($req) _e('(required)','panorama'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Web site','panorama'); ?></small></label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" style="width:80%" rows="6" tabindex="4"></textarea></p>

<p><input class="replysubmit" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Add your Reply', 'panorama') ?>" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
</div>
