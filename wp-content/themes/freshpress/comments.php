<?php // Do not delete these lines

	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))

		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password

            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie

	?>

		<p class="center"><?php _e("Este post &eacute; protegido por senha. Entre com a mesma para ver os coment&aacute;rios."); ?><p>

<?php	return; } }

?>

<!-- You can start editing here. -->

<?php if (($comments) or ('open' == $post-> comment_status)) { ?>

<div id="comments">

	<h3><?php comments_number('Sem coment&aacute;rios', '1 coment&aacute;rio', '% coment&aacute;rios ');?></h3>

	<?php if ($comments) { ?>

	<ol id="commentlist">

	<?php 

         $oddcomment = FALSE;

         foreach ($comments as $comment) { 

           // let's decide on the styling first

           $thismode = '';

           if ($oddcomment) $thismode = 'alternate';

           // override if author

           if ($comment->comment_author_email == get_the_author_email()) $thismode = 'author';

           // prep for next iteration

   	   $oddcomment = !$oddcomment;

          $thisclass = ' class="'.$thismode.'"';

        ?>

		<li id="comment-<?php comment_ID() ?>"<?php echo $thisclass ?>>

		<?php echo get_avatar( $comment, 32 ); ?> <strong><?php comment_author_link() ?></strong> em <?php comment_date('d/m/y') ?> &agrave;s <?php comment_time() ?> | <a href="#comment-<?php comment_ID() ?>" title="Permalink">Permalink</a> <?php edit_comment_link('Editar',' | '); ?>

		</li>

		<div class="entry <?php echo $thismode ?>">

			<?php comment_text() ?> 

			<?php if ($comment->comment_approved == '0') : ?>

			<p><strong>Seu coment&aacute;rio est&aacute; aguardando aprova&ccedil;&atilde;o.</strong></p>

			<?php endif; ?>

		</div>

	<?php } /* end for each comment */ ?>

	</ol>

	<?php } else { // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post-> comment_status) { ?> 

		<!-- If comments are open, but there are no comments. -->

		<div class="entry">

			<p>Nenhum coment&aacute;rio at&eacute; o momento, seja o primeiro!</p>

		</div>

		<?php } else { // comments are closed ?>

		<!-- If comments are closed. -->

		<?php if (is_single) { // To hide comments entirely on Pages without comments ?>

		<div class="entry">

			<p>Os coment&aacute;rios est&atilde;o fechados.</p>

		</div>

		<?php } ?>

		<?php } ?>

	<?php } ?>

<!-- Comment Form -->



	<?php if ('open' == $post-> comment_status) : ?>

		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

			<div class="entry">

				<p class="log_in">Voc&ecirc; precisa estar <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logado</a> para comentar.</p>

			</div>

		<?php else : ?>

			<div id="respond"><h4>Fa&ccedil;a um coment&aacute;rio</h4></div>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment_form">

			<?php if ( $user_ID ) { ?>	

				<p class="unstyled">Logado como: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Sair') ?>">Sair &raquo;</a></p>

			<?php } ?>

			<?php if ( !$user_ID ) { ?>

				<p><input class="text_input" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" /><label for="author"><strong>Nome</strong></label></p>

				<p><input class="text_input" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" /><label for="email"><strong>E-mail</strong></label></p>

				<p><input class="text_input" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" /><label for="url"><strong>Site</strong></label></p>

			<?php } ?>

				<p><textarea class="text_input text_area" name="comment" rows="7" tabindex="4"></textarea></p>

			<p><small><strong>XHTML:</strong> Pode usar as seguintes tags: <?php echo allowed_tags(); ?></small></p>

				<p>

					<input name="submit" class="form_submit" type="submit" id="submit" tabindex="5" value="Enviar coment&aacute;rio" />

					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

				</p>

				<?php do_action('comment_form', $post->ID); ?>

			</form>

		<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

</div> <!-- Close #comments container -->

<?php } ?>