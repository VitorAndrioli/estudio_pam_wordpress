<?php
 if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div class ="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<div class ="mtitle"><h3>',
		'after_title' => '</h3></div>',
	));

?>