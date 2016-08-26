<article class="snippet">
  <a href="<?php the_sub_field('articles_index_link'); ?>" class="plain-link">
    <div class="snippet-thumbnail" style="background-image: url('<?php the_sub_field('articles_index_image'); ?>');">
      <span>&nbsp;</span>
    </div>
  </a>
  <h3 class="entry-title below">
    <a href="<?php the_sub_field('articles_index_link'); ?>" class="plain-link">
      <?php the_sub_field('articles_index_title'); ?>
    </a>
  </h3>
  <div class="entry-summary">
  <?php the_sub_field('articles_index_desc'); ?>
  </div>
</article>
