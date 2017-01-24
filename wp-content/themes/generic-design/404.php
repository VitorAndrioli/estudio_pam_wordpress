<?php

/**

 * @package WordPress

 * @subpackage Jonk_Theme

 */



get_header();

?>



<div id="contentContainer">
	<div id="allContentWidth">
		<div id="menuUnder"></div>
		<div id="mainContent">
			<div class="noDate"></div>

			<div class="post">
				<div class="postInnerPadding">

					<h2 class="center">Error 404 - Not Found</h2>
					Go to <a href="<?php echo get_option('home'); ?>/">the start page</a> or <a href="javascript:history.go(-1);">go back</a>.
				</div>
			</div>

		</div>

		<?php get_sidebar(); ?>
		<div class="clearer"></div>
	</div>
</div>



<?php get_footer(); ?>