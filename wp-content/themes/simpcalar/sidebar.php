	<div id="sidebar">
			<ul>
				<?php
						$children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
							if ($children) { ?>
							<li>
									<h2>Sub Pages</h2>
									<ul>
										<?php echo $children; ?>
									</ul>
							</li>
				<?php } ?>
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1)) : ?>
				<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
				<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>
				<li>
					<h2>Meta</h2>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
						<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
						<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
						<?php wp_meta(); ?>
					</ul>
				</li>
				<?php } ?>
			<?php endif;?>
			</ul>
		</div>