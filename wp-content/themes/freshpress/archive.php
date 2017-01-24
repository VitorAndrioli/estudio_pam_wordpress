<?php get_header(); ?>



<div id="container"><!-- Container Starts -->



<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>



<div id="content"><!-- Content Starts -->



<?php /* If this is a category archive */ if (is_category()) { ?>				

<h3>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Categoria</h3>

		

<?php /* If this is a daily archive */ } elseif (is_day()) { ?>

<h3>Archive for <?php the_time('d/m/y'); ?></h3>

		

<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

<h3>Archive for <?php the_time('m/y'); ?></h3>



<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

<h3>Archive for <?php the_time('Y'); ?></h3>

		

<?php /* If this is a search */ } elseif (is_search()) { ?>

<h3>Resultados da Busca</h3>

		

<?php /* If this is an author archive */ } elseif (is_author()) { ?>

<h3>Arquivos do autor</h3>



<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

<h3>Arquivos do Blog</h3>



<?php /* If this is a tag archive */ } elseif (is_tag()) { ?>

<h3>Arquivos para a Tag &#8216;<?php single_tag_title(); ?>&#8217;</h3>



<?php } ?>



<?php while (have_posts()) : the_post(); ?>



<div class="date"><?php the_time('d/m/y') ?></div>



<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link para <?php the_title(); ?>"><?php the_title(); ?></a> <?php edit_post_link('Edit', ' | ', ''); ?></h2>

  

  <div class="meta">

 <ul>

 <li>Escrito por<?php the_author_posts_link(); ?> |</li>

 <li><?php comments_popup_link('Sem coment&aacute;rios', '1 coment&aacute;rio', '% coment&aacute;rios '); ?></li>

 </ul>

 </div>

 

<div class="post" id="post-<?php the_ID(); ?>"><!-- Post Starts -->

  <?php the_excerpt(); ?>

</div><!-- Post Ends -->



<?php endwhile; endif; ?>



<?php include (TEMPLATEPATH . '/navigation.php'); ?>



</div>

<!-- Content Ends -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>