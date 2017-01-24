<?php get_header(); ?>



<div id="container"><!-- Container Starts -->



<div id="content"><!-- Content Starts -->



<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>



<div class="date"><?php the_time('d/m/y') ?></div>



  <h2><?php the_title(); ?> <?php edit_post_link('Editar', ' | ', ''); ?></h2>

  

 

<div class="post" id="post-<?php the_ID(); ?>"><!-- Post Starts -->

  <?php the_content(); ?>

</div><!-- Post Ends -->



<?php endwhile; ?>



<?php else : ?>



<h2>Ops! Algu&eacute;m esqueceu de pagar o autor novamente!</h2>



<div class="post">



<p>N&atilde;o se preocupe. V&aacute; para a<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">p&aacute;gina inicial</a> e l&aacute; encontrar&aacute; mais conte&uacute;do</p>



</div>



<?php endif; ?>



</div>

<!-- Content Ends -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>