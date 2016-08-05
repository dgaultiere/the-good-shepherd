<div class="entry-meta-container entry-meta-associate">
	<span class="meta-datapoint post-type">
		<i class="fa fa-users"></i><?php echo get_post_type(); ?>
	</span>
	<div class="meta-datapoint location">
		<i class="fa fa-map-marker"></i><?php the_field('associate_location'); ?>
	</div>
	<?php if( get_field('show_associate_website') ) { ?>
		<div class="meta-datapoint website">
			<i class="fa fa-link"></i><a href="<?php the_field('associate_website_url'); ?>" target="_blank"><?php the_field('associate_website_label'); ?></a>
		</div>
	<?php }; ?>
</div>
