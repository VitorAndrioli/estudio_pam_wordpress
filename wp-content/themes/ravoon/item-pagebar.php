	<?php if(function_exists('wp_pagenavi')) { ?>

     <?php wp_pagenavi(); ?>

     <?php } else { ?>  

<div class="aligncenter">

<p class="alignleft"><?php previous_posts_link(__('Newer Entries &raquo;','Ravoon')) ?></p>

<p class="alignright"><?php next_posts_link(__('&laquo; Older Entries','Ravoon')) ?></p>

</div>

	<?php } ?>