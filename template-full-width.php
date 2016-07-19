<?php
/**
 * Template Name: Page Without Sidebar
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page-custom'); ?>
<?php endwhile; ?>