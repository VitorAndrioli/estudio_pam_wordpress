<?php

/*

Template Name: Archives

*/

?>



<?php get_header(); ?>



<div id="content" class="grid_6">



<div class="post">

<h3>Archives by Month:</h3>

	<ul>

		<?php wp_get_archives('type=monthly'); ?>

	</ul>

</div>



<div class="post">

<h3>Archives by Subject:</h3>

	<ul>

		 <?php wp_list_categories(); ?>

	</ul>

</div>

<div class="clear"></div>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

