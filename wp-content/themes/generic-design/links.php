<?php

/**

 * @package WordPress

 * @subpackage Jonk_Theme

 */



/*

Template Name: Links

*/

?>



<?php get_header(); ?>

	<div id="contentContainer">
		<div id="allContentWidth">
			<div id="menuUnder"></div>
			<div id="mainContent">
				<div class="noDate"></div>

				<div class="post archive">
					<div class="postInnerPadding">

						<h2>Links:</h2>

						<ul>

							<?php wp_list_bookmarks(); ?>

						</ul>

					</div>
				</div>

			</div>

			<?php get_sidebar(); ?>
			<div class="clearer"></div>
		</div>
	</div>

<?php get_footer(); ?>