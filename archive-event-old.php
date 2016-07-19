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

<div class="archive-top-content">
  <?php the_field('events_top_content', 'option'); ?>
</div>

<div class="row">
	<?php
    // the query
    $count = 0;
		$args = array(
			'post_type' => 'event',
			'posts_per_page' => 12,
		);
		$wp_query = new WP_Query( $args );

		// begin the loop
		while ( $wp_query->have_posts() ) : $wp_query->the_post();
      $excerpt = get_the_excerpt();
	?>
		<div class="col-sm-12 grid-item">
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="featured-image">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'large' ); ?>
					</a>
				</div>
			<?php }; ?>
			<h3 class="entry-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h3>
			<?php get_template_part('templates/entry-meta-event'); ?>
			<div class="clearfix"></div>
			<?php if ( get_field('events_show_excerpt', 'option') ) { ?>
				<div class="entry-content">
					<?php echo Roots\Sage\Extras\string_limit_words($excerpt,15); ?>
				</div>
			<?php }; ?>
		</div>
	<?php
      $count++;
      if ( $count % 2 == 0 ) echo '</div><div class="row">';

		endwhile;
		// end the loop
		wp_reset_postdata();
	?>
</div>

<?php
  if ($wp_query->max_num_pages > 1) :
   Roots\Sage\Extras\page_navi();
  endif;
?>
