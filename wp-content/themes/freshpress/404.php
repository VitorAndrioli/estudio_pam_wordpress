<?php get_header(); ?>



<div id="container"><!-- Container Starts -->



<div id="content"><!-- Content Starts -->



  <h3>Agora voc&ecirc; sabe como nossa p&aacute;gina de erro &eacute;!</h3>

  

<div class="post"><!-- Post Starts -->

  <p>Esta p&aacute;gina &eacute; reservcada para as vezes que n&atilde;o sabemos o porqu&ecirc; das coisas na vida acontecem da forma que acontecem. Acredito que nunca saberemos.</p>

  <p>Falando nisso, voc&ecirc; pode realizar uma busca ou ir para a <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">p&aacute;gina inicial</a> e recome&ccedil;ar de l&aacute;..</p>

  <p><strong>Meus &uacute;ltimos 10 posts podem te interessar?</strong></p>

						<ul>

							<?php query_posts('showposts=10'); ?>

							<?php while (have_posts()) : the_post(); ?>

							<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>

							<?php endwhile; ?>

							</ul>



</div><!-- Post Ends -->



</div>

<!-- Content Ends -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>