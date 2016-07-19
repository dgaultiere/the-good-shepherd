<article class="snippet">
  <a href="<?php the_sub_field('articles_category_link'); ?>" class="plain-link">
    <div class="snippet-thumbnail" style="background-image: url('<?php the_sub_field('articles_category_image'); ?>');">
      <span>&nbsp;</span>
    </div>
  </a>
  <h3 class="entry-title below">
    <a href="<?php the_sub_field('articles_category_link'); ?>" class="plain-link">
      <?php the_sub_field('articles_category_title'); ?>
    </a>
  </h3>
  <div class="entry-summary">
  <?php the_sub_field('articles_category_desc'); ?>
  </div>
</article>
