<?php get_header(); ?>



<div id="container"><!-- Container Starts -->



<?php if ( $paged < 2 ) { // Do stuff specific to first page?>



<?php $my_query = new WP_Query('category_name=featured&showposts=1');

while ($my_query->have_posts()) : $my_query->the_post();

$do_not_duplicate = $post->ID; ?>



<div id="featured" class="post-<?php the_ID(); ?>"><!-- Featured Starts -->

			

  <h2>

  <span>

  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link para <?php the_title(); ?>"><?php the_title(); ?></a> <?php edit_post_link('Editar', ' | ', ''); ?></span>

  <div class="fcomments"><?php comments_popup_link('Sem coment&aacute;rios', '1 coment&aacute;rio', '% coment&aacute;rios '); ?></div>

    <div style="clear:both;"></div>

	</h2>



	<div id="fpost"><!-- Inicio do post em destaque -->

	<div class="date"><?php the_time('d/m/y') ?></div>

  <?php the_content('{Leia Mais}'); ?>

  </div><!-- Fim do post em destaque -->

  	

	  <div id="fmore"><!-- Featured Posts -->

    <h2>Mais Artigos em Destaque</h2>

    <ul> <!-- Entre a Id de sua categoria no campo "category=" para que funcione corretamente -->

 <?php

 global $post;

 $myposts = get_posts('numberposts=5&category=1');

 foreach($myposts as $post) :

 ?>

    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

 <?php endforeach; ?>

 </ul>

    </div><!-- Featured Posts -->

	

    <div class="clear"></div>

</div><!-- Featured Ends -->

  	

<?php endwhile; ?>



			<div id="content">



<?php if (have_posts()) : while (have_posts()) : the_post();

if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>



				<div class="date"><?php the_time('d/m/y') ?></div>



					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link para <?php the_title(); ?>"><?php the_title(); ?></a> <?php edit_post_link('Editar', ' | ', ''); ?></h2>



					<div class="meta">

 <ul>

 <li>Escrito por: <?php the_author_posts_link(); ?> em <?php the_category(', ') ?> |</li>

 <li><a href="<?php the_permalink() ?>#comments" title="Veja o que os outros pensam">Leia os coment&aacute;rios</a></li>

 </ul>

 </div>



					<div class="post" class="post-<?php the_ID(); ?>"><!-- Post Starts -->

 			<?php the_content(); ?>

  		<div class="commentmeta"><?php comments_popup_link('Sem coment&aacute;rios', '1 coment&aacute;rio', '% coment&aacute;rios '); ?></div>

</div><!-- Post Ends -->



<?php endwhile; endif; ?>



<?php } else { // Do stuff specific to non-first page ?>



			<div id="content">



<?php if (have_posts()) : while (have_posts()) : the_post();

if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>



				<div class="date"><?php the_time('d/m/y') ?></div>



					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link para <?php the_title(); ?>"><?php the_title(); ?></a> <?php edit_post_link('Editar', ' | ', ''); ?></h2>



					<div class="meta">

 <ul>

 <li>Written by <?php the_author_posts_link(); ?> under <?php the_category(', ') ?> |</li>

 <li><a href="<?php the_permalink() ?>#comments" title="Veja o que os outros pensam">Leia os coment&aacute;rios</a></li>

 </ul>

 </div>



		<div class="post" class="post-<?php the_ID(); ?>"><!-- Post Starts -->

 			<?php the_content(); ?>

  		<div class="commentmeta"><?php comments_popup_link('Sem coment&aacute;rios', '1 coment&aacute;rio', '% coment&aacute;rios'); ?></div>

</div><!-- Post Ends -->



<?php include (TEMPLATEPATH . '/navigation.php'); ?>



<?php endwhile; endif; ?>



<?php } ?>







</div>

<!-- Content Ends -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>