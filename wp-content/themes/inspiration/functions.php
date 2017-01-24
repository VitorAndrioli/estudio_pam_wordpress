<?php



if (function_exists('register_sidebar'))

{

	

	register_sidebar(

		array(

			'name'          => 'Sidebar1',

	        'before_widget' => '<li id="%1$s" class="widget %2$s">',

    	    'after_widget'  => '</li>',

        	'before_title'  => '<h2>',

        	'after_title'   => '</h2>'

		)

	);



	register_sidebar(

		array(

			'name'          => 'Sidebar2',

	        'before_widget' => '<li id="%1$s" class="widget %2$s">',

    	    'after_widget'  => '</li>',

        	'before_title'  => '<h2>',

        	'after_title'   => '</h2>'

		)

	);



	register_sidebar(

		array(

			'name'          => 'Sidebar3',

	        'before_widget' => '<div class="grid_4">',

    	    'after_widget'  => '</div>',

        	'before_title'  => '<h3>',

        	'after_title'   => '</h3>'

		)

	);



	register_sidebar(

		array(

			'name'          => 'Sidebar4',

	        'before_widget' => '<p>',

    	    'after_widget'  => '</p>',

        	'before_title'  => '<h3>',

        	'after_title'   => '</h3>'

		)

	);

	

}



function widget_mytheme_search() {

	?>

	<li><h3>Search </h3>

	<?php

	include (TEMPLATEPATH . '/searchform.php');

	?>

	</li>

	<?php

}

if ( function_exists('register_sidebar_widget') )

    register_sidebar_widget(__('Search'), 'widget_mytheme_search');



	



?>