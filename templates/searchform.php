<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'sage'); ?></label>
  <div class="input-group">
    <input
      type="search"
      value="<?= get_search_query(); ?>"
      name="s"
      class="search-field form-control"
      placeholder="<?php
          if( is_page_template('template-home.php') ) :
            echo 'Search keywords, topics, and more...';
          elseif( get_field('site_language', 'option') == "es-mx" ) :
            echo 'Busque';
          else :
            echo 'Search';
          endif;
        ?>"
      required>
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><i class="fa fa-search" title="<?php if(get_field('site_language', 'option') == "es-mx") { ?>Busque<?php } else { ?>Search<?php } ?>"></i></button>
    </span>
  </div>
</form>
