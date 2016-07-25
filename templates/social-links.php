<ul class="social-links">
  <?php while( have_rows('setup_social_links', 'option') ): the_row(); ?>
    <li><a href="<?php the_sub_field('social_links_url', 'option'); ?>" class="fa fa-<?php the_sub_field('social_links_icon', 'option'); ?>" target="_blank"></a></li>
  <?php endwhile; ?>
</ul>
