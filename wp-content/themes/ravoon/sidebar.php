<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>





<div class ="sidebar">

<div class ="mtitle"><h3><?php _e('Search','Ravoon'); ?></h3></div>

				<?php include (TEMPLATEPATH . '/searchform.php'); ?>

</div>



<div class ="sidebar">

<div class ="mtitle"><h3><?php _e('Pages','Ravoon'); ?></h3></div>

<ul>

			<?php wp_list_pages('title_li=','Ravoon'); ?>

</ul>

</div>



<div class ="sidebar">



<div class ="mtitle"><h3><?php _e('Archives','Ravoon'); ?></h3></div>

<ul>

<?php wp_get_archives('type=monthly'); ?>

</ul>

</div>



<div class ="sidebar">



<div class ="mtitle"><h3><?php _e('Categories','Ravoon'); ?></h3></div>

<ul>

<?php wp_list_categories('show_count=1&title_li=','Ravoon'); ?>

</ul>

</div>





<div class ="sidebar">

<div class ="mtitle"><h3><?php _e('Meta','Ravoon'); ?></h3></div>

<ul>

<?php wp_register(); ?>

<li><?php wp_loginout(); ?></li>

<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','Ravoon'); ?></a></li>

<li><a href="http://validator.w3.org/check?uri=referer"><?php _e('Valid xhtml','Ravoon'); ?></a></li>

<li><a href="http://jigsaw.w3.org/css-validator/check?uri=referer"><?php _e('Valid CSS','Ravoon'); ?></a></li>

<?php wp_meta(); ?>

</ul>

</div>





<div class ="sidebar">

<div class ="mtitle"><h3><?php _e('Links','Ravoon'); ?></h3></div>

<ul>

	<?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>

</ul>

</div>

				

<div class ="sidebar">

<div class ="mtitle"><h3><?php _e('Calendar','Ravoon'); ?></h3></div>

						<?php get_calendar(); ?>	

</div>





<?php endif; ?>