<?php
if (post_password_required()) {
  return;
}

/** Translations for Spanish Option **/
if(get_field('site_language', 'option') == "es-mx") {
	$oneresponse = 'Una respuesta a &ldquo;%2$s&rdquo;';
	$multiresponse = '%1$s respuestas a &ldquo;%2$s&rdquo;';
	$prevcomments = '&larr; Previo';
	$nextcomments = 'Próximo &rarr;';
	$commentsclosed = 'Comentarios están cerrados.';
} else {
	$oneresponse = 'One response to &ldquo;%2$s&rdquo;';
	$multiresponse = '%1$s responses to &ldquo;%2$s&rdquo;';
	$prevcomments = '&larr; Older comments';
	$nextcomments = 'Newer comments &rarr;';
	$commentsclosed = 'Comments are closed.';
}
?>

<?php if (have_comments()) : ?>
  <section id="comments" class="comments">
    <h3><?php printf(_nx($oneresponse, $multiresponse, get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?></h3>

    <ul class="comment-list">
      <?php wp_list_comments(['style' => 'ul', 'short_ping' => true]); ?>
    </ul>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
      <nav>
        <ul class="pager">
          <?php if (get_previous_comments_link()) : ?>
            <li class="previous"><?php previous_comments_link(__($prevcomments, 'sage')); ?></li>
          <?php endif; ?>
          <?php if (get_next_comments_link()) : ?>
            <li class="next"><?php next_comments_link(__($nextcomments, 'sage')); ?></li>
          <?php endif; ?>
        </ul>
      </nav>
    <?php endif; ?>

    <?php comment_form(); ?>
  </section>
<?php endif; // have_comments() ?>

<?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
  <div class="alert alert-warning">
		<?php _e($commentsclosed, 'sage'); ?>
  </div>
<?php endif; ?>

<?php if (!have_comments() && comments_open()) : ?>
  <section id="comments" class="comments">
    <?php comment_form(); ?>
  </section>
<?php endif; ?>
