<?php get_header(); ?>



<div id="container"><!-- Container Starts -->



<div id="content"><!-- Content Starts -->



<?php if (have_posts()) : ?>

			<h3>Resultados para "<?php echo wp_specialchars($s, 1); ?>"</h3>

<?php while (have_posts()) : the_post(); ?>

				

<div class="date"><?php the_time('d/m/y') ?></div>



<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link para <?php the_title(); ?>"><?php the_title(); ?></a> <?php edit_post_link('Editar', ' | ', ''); ?></h2>

 

<div class="post" id="post-<?php the_ID(); ?>"><!-- Post Starts -->

  <?php the_excerpt(); ?>

</div><!-- Post Ends -->



<?php endwhile; ?>



<?php include (TEMPLATEPATH . '/navigation.php'); ?>



<?php else : ?>



<div class="post"><!-- Post Starts -->



<h3>Nenhum post encontrado com o que procura "<?php echo wp_specialchars($s, 1); ?>". Tente outra pesquisa?</h3>



</div><!-- Post Ends -->



		



	<?php endif; ?>



</div>

<!-- Content Ends -->



<?php get_sidebar(); ?>



<?php get_footer(); ?>