<div class="entry">
<?php 
if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
<p><?php _e('This post is password protected. Enter the password to view comments.','panorama'); ?></p>
<?php return; endif; ?>

<?php if ( comments_open() ) : ?>
	<h3 id="comments"><?php comments_number(__('No Responses to','panorama'), __('One Response to','panorama'), __('% Responses to','panorama') );?> &#8220;<?php the_title(); ?>&#8221;</h3>
	
	<a href="#postcomment" title="<?php _e('Leave a Reply','panorama'); ?>"></a>
<?php endif; ?>
</h3>

<?php if ( $comments ) : ?>


<ul id="lcommentlist">

<?php foreach ($comments as $comment) : 

if (get_comment_type() == 'comment'){

?>

	<li id="comment-<?php comment_ID() ?>">
	<div class="comm">
	<div class="gravatar">
<?php

   if (function_exists('get_avatar')) {
       echo get_avatar(get_comment_author_email(), '50');
   } else {
	  $gravatarUrl = "http://www.gravatar.com/avatar.php?gravatar_id=" . md5(get_comment_author_email()) . "&size=50";
      echo "<img src='$gravatarUrl'/>";
   }
?>

</div>


		<div class="commenttext">
			<div class="commentwrapper">
		
				<p class="commentheader"><b><?php _e('By','panorama'); ?> <?php comment_author_link() ?></b>, <?php comment_date() ?> @ <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a> </p>

			<?php comment_text() ?>

			</div>
		</div>
		<div style="clear:both;"></div>
		</div>
</li>

<?php } ?> 
<?php endforeach; ?>

</ul>

<h3 id="comments"><?php _e('Other Links to this Post', 'panorama'); ?></h3>

<ol id="lcommentlist">

<?php foreach ($comments as $comment) : 

	if (get_comment_type() != 'comment'){

?>

	<li id="comment-<?php comment_ID() ?>">
		<p class="commentheader"><?php comment_author_link() ?> &#8212; <?php comment_date() ?> @ <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a></p>

	</li>
<?php } ?> 
<?php endforeach; ?>

</ol>




<?php else : // If there are no comments yet ?>

<?php if ( comments_open() ) : ?>
	<p><?php _e('No comments yet','panorama'); ?></p>
<?php endif; ?>	
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>
<p><?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.','panorama')); ?> 
<?php if ( pings_open() ) : ?>
	<a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack URI','panorama'); ?></a>
<?php endif; ?>
</p>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<h3 id="postcomment"><?php _e('Leave a comment','panorama'); ?></h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>


<p><?php printf(__('You must be %slogged in</a> to post a comment.', 'panorama'), '<a href="' . get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink()) . '">')?></p>	

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php printf(__('Logged in as %s.', 'panorama'), '<a href="' . get_option('siteurl') . '/wp-admin/profile.php">' . $user_identity . '</a>')?>			
			<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account','panorama'); ?>"><?php _e('Logout &raquo;','panorama'); ?></a></p>
			

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="28" tabindex="1" />
<label for="author"><?php _e('Name','panorama'); ?> </label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="28" tabindex="2" />
<label for="email"><?php _e('Mail (will not be published)','panorama'); ?> </label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="28" tabindex="3" />
<label for="url"><?php _e('Web site','panorama'); ?></label></p>

<?php endif; ?>

<p><textarea name="comment" id="comment" style="width:80%; height:100px;" tabindex="4"></textarea></p>

<p><input class="replysubmit" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Add your Reply','panorama'); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>

<?php do_action('comment_form', $post->ID); ?>

</form>


<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>

<?php endif; ?>
</div>
