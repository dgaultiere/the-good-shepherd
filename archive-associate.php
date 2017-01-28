<div class="row">
  <?php
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'associate',
      'meta_key' => 'associate_last_name',
      'orderby' => 'meta_value',
      'order' => 'ASC',
      'posts_per_page' => 18,
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
    else :
  ?>
    <div class="alert alert-warning">
      Sorry, no associates were found.
    </div>
  	<div class="big-search">
  		<?php get_search_form(); ?>
  	</div>
  <?php
    endif;
  ?>
</div>

<?php
  if ($the_query->max_num_pages > 1) :
   Roots\Sage\Extras\page_navi();
  endif;
?>
