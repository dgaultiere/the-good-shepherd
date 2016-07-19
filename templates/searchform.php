<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'sage'); ?></label>
  <div class="input-group">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php if(get_field('site_language', 'option') == "es-mx") { ?>Busque<?php } else { ?>Search<?php } ?>" required>
    <!-- <?php if ( is_post_type_archive('podcast') ) : ?>
      <input type="hidden" name="post_type" value="podcast">
    <?php endif; ?> -->
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><i class="fa fa-search" title="<?php if(get_field('site_language', 'option') == "es-mx") { ?>Busque<?php } else { ?>Search<?php } ?>"></i></button>
    </span>
  </div>
</form>
