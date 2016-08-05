<div class="entry-meta-container entry-meta-podcast">
	<span class="meta-datapoint post-type">
		<i class="fa fa-users"></i><?php echo get_post_type(); ?>
	</span>
	<div class="meta-datapoint date">
		<i class="fa fa-calendar"></i><?php the_time( get_option( 'date_format' ) ); ?>
	</div>
	<div class="meta-datapoint author">
		<i class="fa fa-user"></i><?php the_field('podcast_author'); ?>
	</div>
</div>
