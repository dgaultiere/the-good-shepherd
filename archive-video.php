<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php if(get_field('site_language', 'option') == "es-mx") {
			_e('Lo sentimos, no se encontraron resultados.', 'sage');
		} else {
			_e('Sorry, no results were found.', 'sage');
		} ?>
  </div>
	<div class="big-search">
		<?php get_search_form(); ?>
	</div>
<?php endif; ?>

<div class="row">
  <?php
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'video',
      'meta_key' => 'video_date',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'posts_per_page' => 10,
      'paged' => $paged
    );
    // the query
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
      // the loop
      while ( $the_query->have_posts() ) : $the_query->the_post();
  ?>
        <div class="col-sm-4 grid-item">
          <?php get_template_part('templates/content-archive', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        </div>
  <?php
        $count++;
        if ( $count % 3 == 0 ) echo '</div><div class="row">';
      endwhile; // end of the loop
      wp_reset_postdata();
    endif;
  ?>
</div>

<?php
  if ($the_query->max_num_pages > 1) :
   Roots\Sage\Extras\page_navi();
  endif;
?>
