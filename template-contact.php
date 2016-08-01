<?php
/**
 * Template Name: Contact Us
 */

 use Roots\Sage\Extras;

?>

<?php while (have_posts()) : the_post(); ?>
	<div class="row">
		<div class="col-sm-8">
				<?php get_template_part('templates/content', 'page-custom'); ?>
			<div class="contact-form">
				<?php the_field('contact_form'); ?>
			</div>
		</div>
		<div class="col-sm-4 sidebar">
			<div class="widget widget_map">
				<h3><?php the_field('address_title'); ?></h3>
				<?php if(get_field('show_map')) { ?>
					<?php
					$location = get_field('address_map');
					if( !empty($location) ) {
					?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="widget widget_address">
				<?php the_field('address_label'); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
