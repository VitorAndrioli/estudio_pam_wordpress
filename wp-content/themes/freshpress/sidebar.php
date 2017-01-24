<div id="leftsidebar"><!-- Sidebar Starts -->



<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>



  <h3>&Uacute;ltimos Posts</h3>

  <ul>

		<?php query_posts('showposts=10'); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>

		<?php endwhile; endif; ?>

  </ul>

  

  <h3>Categorias</h3>

  <ul>

    <?php wp_list_categories('title_li=0'); ?>

  </ul>

  <?php endif; ?>	

  </div>

<!-- Sidebar Ends -->



<div id="rightsidebar"><!-- Sidebar Starts -->



<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>



  <h3>Arquivos</h3>

  <ul>

    <?php wp_get_archives('type=monthly'); ?>

  </ul>

  

  <h3>Administra&ccedil;&atilde;o</h3>

  <ul>

    <?php wp_meta(); ?>

  </ul>

  <?php endif; ?>	

  </div>

<!-- Sidebar Ends -->



<div class="clear"></div>



</div><!-- Container Ends -->