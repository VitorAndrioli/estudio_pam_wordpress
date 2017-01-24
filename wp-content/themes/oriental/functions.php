<?php

if ( function_exists('register_sidebar') ) {

    register_sidebar(array(

        'before_widget' => '<li id="%1$s" class="widget %2$s">',

        'after_widget' => '</li>',

        'before_title' => '<h2 class="widgettitle">',

        'after_title' => '</h2>',

		'name' => 'Main sidebar'

    ));

}



// make theme backward compatible

add_filter( 'comments_template', 'legacy_comments' );

function legacy_comments( $file ) {

	if ( !function_exists('wp_list_comments') ) {

		$file = TEMPLATEPATH . '/legacy.comments.php';

	}

	return $file;

}



// add a microid to all the comments

function comment_add_microid($classes) {

	$c_email=get_comment_author_email();

	$c_url=get_comment_author_url();

	if (!empty($c_email) && !empty($c_url)) {

		$microid = 'microid-mailto+http:sha1:' . sha1(sha1('mailto:'.$c_email).sha1($c_url));

		$classes[] = $microid;

	}

	return $classes;

}

add_filter('comment_class','comment_add_microid');





// custom comment layout

function oriental_comment($comment, $args, $depth) {

   $GLOBALS['comment'] = $comment; ?>

   <li <?php comment_class("commentind"); ?> id="li-comment-<?php comment_ID() ?>" >

		<div id="comment-<?php comment_ID(); ?>" class="commentindheader">

			<?php echo get_avatar( $comment, 32 ); ?>

			<cite><?php comment_author_link() ?></cite> 

			<?php if ($comment->comment_approved == '0') : ?>

			(Your comment is awaiting moderation.)

			<?php endif; ?>

			<br />

			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('m/d/Y') ?> at <?php comment_time() ?></a></small>

		</div>

      <?php comment_text() ?>



	  <p class="commentsedit">

		 <?php edit_comment_link('Edit','',' | '); ?> 

			

         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

      </p>

<?php

}



?>