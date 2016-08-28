<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    Sorry, no results were found.
  </div>
	<div class="big-search">
		<?php get_search_form(); ?>
	</div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <?php Roots\Sage\Extras\page_navi(); ?>
<?php endif; ?>
