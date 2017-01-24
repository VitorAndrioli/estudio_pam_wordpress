  <div class="clear"></div>

  </div>

  <div id="recent-block" class="container_12 alpha omega">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar3') ) : ?> 

	<p class="grid_6">Sidebar3 : Please add some widgets here.</p>

	<?php endif; ?>

  <div class="clear"></div>

  </div> 

  <div id="footer" class="container_12 alpha omega">

  <div class="grid_6">

    <p>

      <?php bloginfo('name'); ?>is proudly powered by <a href="http://wordpress.org/">WordPress</a>

	  <?php wp_footer(); ?>

    </p>

	</div>

	<div id="bottomnav" class="grid_6">

      <ul>

        <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>

        <?php wp_list_pages('title_li=&delpth=1'); ?>

		<li id="gotop"><a href="#top">Go to top</a></li>

      </ul>

	</div>

	<div class="clear"></div>

  </div>

</div>

</body>

</html>

