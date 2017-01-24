<?php

/*

Template Name: Archives

*/

?>



<?php get_header(); ?>



<div id="container"><!-- Container Starts -->



<div id="content"><!-- Content Starts -->



<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>



<div class="post"><!-- Post Starts -->



<h3>Monthly Archives</h3>

	<ul><?php wp_get_archives('type=monthly'); ?></ul>





<h3>Category Archives</h3>

	<ul id="archives"><?php wp_list_categories('title_li='); ?></ul>



<?php endwhile; endif; ?>



</div><!-- Post Ends -->



</div>

<!-- Content Ends -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>