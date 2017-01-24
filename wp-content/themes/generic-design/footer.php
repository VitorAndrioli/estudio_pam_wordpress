<?php

/**

 * @package WordPress

 * @subpackage Jonk_Theme

 */

?>

<style type="text/css">

<!--

.style1 {font-weight: bold}

-->

</style>





<div id="footer">

  <div id="footerInnerPadding">

		<?php bloginfo('name'); ?> is powered by

		<a href="http://wordpress.org/">WordPress</a>

		<br />Theme Design by <a href="http://genericdesigner.info">Generic Designer</a>

		<br />

		<br />

	  <span class="style1"><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>	</span>and<span class="style1"> <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>

		<!-- <?php echo get_num_queries(); ?> fr&aring;gor. <?php timer_stop(1); ?> sekunder. -->

	        </span></div>

</div>

</div>



<!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/kubrick/ -->

<?php /* "Just what do you think you're doing Dave?" */ ?>



		<?php wp_footer(); ?>

</div><!--from header-->

</body>

</html>

