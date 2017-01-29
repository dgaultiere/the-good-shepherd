<?php
/**
 * Template Name: Email Subscribe
 */
?>

<?php if(get_field('signup_form_placement') == "top") { ?>
	<!-- Form (Top) -->
	<div class="subscribe-form-container top">
		<h3><?php the_field('signup_form_title'); ?></h3>
		<div class="subscribe-form">
			<?php the_field('subscribe_form_code','option'); ?>
		</div>
	</div>
<?php } ?>

<?php if(get_field('signup_form_placement') == "right") { ?>
	<!-- Form (Right) -->
	<div class="row">
		<div class="col-sm-8 col-subscribe-content">
<?php } ?>

<?php while (have_posts()) : the_post(); ?>
	<!-- Content -->
	<?php get_template_part('templates/content', 'page-custom'); ?>
<?php endwhile; ?>

<?php if(get_field('signup_form_placement') == "right") { ?>
		</div>
		<div class="col-sm-4 col-subscribe-form right">
			<div class="subscribe-form">
				<h3><?php the_field('signup_form_title'); ?></h3>
				<?php the_field('signup_form_code'); ?>
			</div>
		</div>
	</div><!-- /Form (Right) -->
<?php } ?>

<?php if(get_field('signup_form_placement') == "bottom") { ?>
	<!-- Form (Bottom) -->
	<div class="subscribe-form bottom">
		<h3><?php the_field('signup_form_title'); ?></h3>
		<?php the_field('signup_form_code'); ?>
	</div>
<?php } ?>
