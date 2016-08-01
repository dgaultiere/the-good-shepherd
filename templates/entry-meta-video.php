<div class="entry-meta-container entry-meta-video">
	<span class="meta-datapoint post-type">
		<i class="fa fa-sun-o"></i> <?php echo get_post_type(); ?>
	</span>
	<div class="meta-datapoint date">
		<i class="fa fa-calendar"></i> <?php the_field('video_date'); ?>
	</div>
	<?php if ( get_field('show_video_location') ) { ?>
		<div class="meta-datapoint location">
			<i class="fa fa-map-marker"></i> <?php the_field('video_location'); ?>
		</div>
	<?php }; ?>
	<div class="meta-datapoint author">
		<i class="fa fa-user"></i> <?php the_field('video_speaker'); ?>
	</div>
</div>