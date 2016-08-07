<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', false);
  $thumb_url = $thumb_url_array[0];
  $excerpt = get_the_excerpt();
?>
<article class="snippet">
  <a href="<?php the_permalink(); ?>" class="plain-link">
    <div style="background-image: url('<?php echo $thumb_url; ?>')" class="snippet-thumbnail">
      <h3 class="entry-title over">
        <?php the_title(); ?>
      </h3>
    </div>
  </a>
  <?php get_template_part('templates/entry-meta'); ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
