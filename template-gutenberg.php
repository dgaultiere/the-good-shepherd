<?php
/**
 * Template Name: Gutenberg Page
 */
?>
<div class="row">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/content', 'page-custom'); ?>
	<?php endwhile; ?>
</div>
