<div class="entry-meta-container entry-meta-event">
	<span class="meta-datapoint post-type">
		<i class="fa fa-sun-o"></i> <?php echo get_post_type(); ?>
	</span>
	<div class="meta-datapoint date">
		<i class="fa fa-calendar"></i> <?php the_field('event_date'); ?>
	</div>
	<div class="meta-datapoint time">
		<i class="fa fa-clock-o"></i> <?php the_field('event_time'); ?>
	</div>
	<div class="meta-datapoint location">
		<i class="fa fa-map-marker"></i> <?php the_field('event_location'); ?>
	</div>
	<?php if ( get_field('event_host') ) { ?>
		<div class="meta-datapoint host">
			<i class="fa fa-user"></i> <?php the_field('event_host_name'); ?>
		</div>
	<?php }; ?>
</div>
