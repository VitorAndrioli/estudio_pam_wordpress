<?php

/**

 * @package WordPress

 * @subpackage Jonk_Theme

 */

/*

Template Name: Archives

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

						<h2>Archives by Month:</h2>

						<ul>

							<?php wp_get_archives('type=monthly'); ?>

						</ul>

						<h2>Archives by Subject:</h2>

						<ul>

							 <?php wp_list_categories(); ?>

						</ul>
					</div>
				</div>

			</div>

			<?php get_sidebar(); ?>
			<div class="clearer"></div>
		</div>
	</div>

<?php get_footer(); ?>

