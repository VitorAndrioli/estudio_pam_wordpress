<div class ="post">

<div class ="mtitle">

<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></div>

<div class ="postbody">

	

	<p class="author"><?php _e('Posted by','Ravoon'); ?> <?php the_author_posts_link(); ?>

	<?php _e(' at ','Ravoon'); ?><?php the_time('  j F , Y'); ?> </p>

	

	<?php the_content(__('<br />Read the rest of this entry &raquo;','Ravoon')); ?>

	<?php wp_link_pages('before=<p><b>' .__('Pages:', 'Ravoon') . '&after=</b></p>&next_or_number=number') ?>

	

	<p class="center"><?php the_tags(__(' Tags: ','Ravoon'), ', ' , '<br />'); ?>

	<?php _e('Posted in:','Ravoon'); ?> <?php the_category(' , ') ?>

	| <?php comments_popup_link(__('No Comments &#187;','Ravoon'), __('1 Comment &#187;','Ravoon'), __('% Comments &#187;','Ravoon')); ?>

	<?php edit_post_link(__('Edit','Ravoon'), ' | ', ''); ?>

	</p>	



</div></div>