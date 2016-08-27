<!-- Upcoming events -->
<h3 id="upcoming-events-title">Upcoming Events</h3>
<div class="upcoming-events">
<?php
  date_default_timezone_set('America/Los_Angeles');
  $args1 = array(
    'post_type' => 'event',
    'meta_key' => 'event_date',
    'meta_value' => date('Ymd'),
    'meta_compare' => '>=',
    'orderby' => 'event_date',
    'order' => 'ASC'
  );
  // the query
  $query1 = new WP_Query( $args1 );
  if ( $query1->have_posts() ) :
    // the loop
    while ( $query1->have_posts() ) : $query1->the_post();
?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php
    endwhile; // end of the loop
    wp_reset_postdata();
  else :
?>
  <p>There are no upcoming events scheduled at this time. Check out past events below or contact us to request an event.</p>
<?php
  endif;
?>
</div>

<!-- Past events -->
<?php
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $args2 = array(
    'post_type' => 'event',
    'meta_key' => 'event_date',
    'meta_value' => date( "Ymd" ),
    'meta_compare' => '<=',
    'orderby' => 'event_date',
		'posts_per_page' => 12,
    'paged' => $paged
  );
  // the query
  $query2 = new WP_Query( $args2 );
  if ( $query2->have_posts() ) :
?>
  <h3 id="past-events-title">Past Events</h3>
  <div class="row past-events">
<?php
    // the loop
    while ( $query2->have_posts() ) : $query2->the_post();
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

<!-- Pagination for past events -->
<?php
  if ($query2->max_num_pages > 1) :
    // add something here to view all past events
  endif;
?>
