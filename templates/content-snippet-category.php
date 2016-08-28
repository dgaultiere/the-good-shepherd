<?php
  $category_image = get_sub_field('articles_category_image');
?>
<article class="snippet">
  <a href="<?php the_sub_field('articles_category_link'); ?>" class="plain-link">
    <div class="snippet-thumbnail" style="background-image: url('<?php echo $category_image['sizes']['medium']; ?>');">
      <span>&nbsp;</span>
    </div>
  </a>
  <h3 class="entry-title below">
    <a href="<?php the_sub_field('articles_category_link'); ?>" class="plain-link">
      <?php the_sub_field('articles_category_title'); ?>
    </a>
  </h3>
  <div class="entry-summary">
    <p><?php the_sub_field('articles_category_desc'); ?></p>
  </div>
</article>
