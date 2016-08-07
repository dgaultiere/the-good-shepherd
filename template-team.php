<?php
/**
 * Template Name: Our Team
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page-custom'); ?>
<?php endwhile; ?>

<?php while( have_rows('team_members') ): the_row(); ?>
	<div class="row">
		<div class="col-sm-2">
			<?php echo wp_get_attachment_image( get_sub_field('team_member_photo'), 'thumbnail' ); ?>
		</div>
		<div class="col-sm-10">
			<h3><?php the_sub_field('team_member_name'); ?></h3>
			<h6><?php the_sub_field('team_member_title'); ?></h6>
			<?php the_sub_field('team_member_description'); ?>
		</div>
	</div>
<?php endwhile; ?>
