<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', false);
  $thumb_url = $thumb_url_array[0];
  $excerpt = get_the_excerpt();
?>
<article class="snippet snippet-side">
  <a href="<?php the_permalink(); ?>" class="plain-link">
    <div class="snippet-thumbnail" style="background-image:url('<?php echo $thumb_url; ?>');">
      <span>&nbsp;</span>
    </div>
  </a>
  <h4 class="entry-title">
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h4>
  <?php get_template_part('templates/entry-meta', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <div class="entry-summary">
    <p>
      <?php echo Roots\Sage\Extras\string_limit_words($excerpt,40); ?>
    </p>
  </div>
</article>
