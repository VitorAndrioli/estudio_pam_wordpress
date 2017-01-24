<?php get_header(); ?>



<div id="container"><!-- Container Starts -->



<div id="content"><!-- Content Starts -->



<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>



<div class="date"><?php the_time('d/m/y') ?></div>



  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link para <?php the_title(); ?>"><?php the_title(); ?></a> <?php edit_post_link('Editar', ' | ', ''); ?></h2>

  

 <div class="meta">

 <ul>

 <li>Escrito por: <?php the_author_posts_link(); ?> em <?php the_category(', ') ?> |</li>

 <li><a href="<?php the_permalink() ?>#comments" title="Veja o que os outros pensam">Leia os coment&aacute;rios</a></li>

 </ul>

 </div>

 

<div class="post" id="post-<?php the_ID(); ?>"><!-- Post Starts -->

  <?php the_content(); ?>

</div><!-- Post Ends -->

<div style="margin: 0px 10px 20px; font-size: 0.8em; text-align: right;"<?php comments_rss_link('Feed da entrada'); ?> | <a href="<?php trackback_url(); ?>" title="<?php _e('Copie o trackback para a entrada.'); ?>"> <?php _e('Trackback Url'); ?></a></div>

<?php comments_template(); ?>



<?php endwhile; ?>



<?php include (TEMPLATEPATH . '/navigation.php'); ?>



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