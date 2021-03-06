<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    Sorry, no products were found.
  </div>
	<div class="big-search">
		<?php get_search_form(); ?>
	</div>
<?php endif; ?>

<div class="row">
  <?php while (have_posts()) : the_post(); ?>
    <div class="col-sm-4 grid-item">
      <?php get_template_part('templates/content-archive', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    </div>
  <?php
    $count++;
    if ( $count % 3 == 0 ) echo '</div><div class="row">';
    endwhile;
  ?>
</div>

<?php
  if ($wp_query->max_num_pages > 1) :
   Roots\Sage\Extras\page_navi();
  endif;
?>
