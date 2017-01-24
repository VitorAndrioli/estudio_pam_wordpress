<?php

/**

 * @package WordPress

 * @subpackage Default_Theme

 */

?>

	<div id="sidebar">

		<ul>

			<?php 	/* Widgetized sidebar, if you have the plugin installed. */

					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<!--

			<li>

				<?php get_search_form(); ?>

			</li>

			-->

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.

			<li><h2>F&ouml;rfattare</h2>

			<p>N&aring;gon liten text om dig sj&auml;lv.</p>

			</li>

			-->



			<?php if ( is_404() || is_category() || is_day() || is_month() ||

						is_year() || is_search() || is_paged() ) {

			?>

			<!-- moved to archive.php-->

			<?php }?>



			<?php

				//wp_list_pages('title_li=<h2>Sidor</h2>' );

			?>



			<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

	

			<li><h2>Archives</h2>

				<ul class="archive">

					<?php 

						//wp_get_archives('type=monthly');

					?>

					<li>

						<form name="archiveForm" id="archiveForm" action="#">

							<select name="archiveSelect" id="archiveSelect" onchange="selectBrowse('','archiveForm','archiveSelect')" style="width:100%;">

								<option value="do_nothing">- Choose month -</option>

								<?php wp_get_archives('type=monthly&format=option'); ?>

							</select>

						</form>

					</li>

				</ul>

			</li>

			

			<li><h2>Calendar</h2>

				<ul>

					<li>

						<?php get_calendar(); ?>

					</li>

				</ul>

			</li>

			

			<?php if ( !function_exists('dynamic_sidebar')

				|| !dynamic_sidebar() ) : ?>

			<?php endif; ?>



			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>

				<?php wp_list_bookmarks(); ?>



				<li><h2>Meta</h2>

				<ul>

					<?php wp_register(); ?>

					<li><?php wp_loginout(); ?></li>

					<li><a href="http://validator.w3.org/check/referer" title="Denna sida validerar som XHTML 1.0 Transitional">Validerande <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>

					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>

					<li><a href="http://wordpress.org/" title="Drivs med WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>

					<?php wp_meta(); ?>

				</ul>

				</li>

			<?php } ?>



			<?php endif; ?>

		</ul>

	</div>

	<div class="clearer"></div>