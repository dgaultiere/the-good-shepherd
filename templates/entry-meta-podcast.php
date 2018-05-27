<div class="entry-meta-container entry-meta-podcast">
	<span class="meta-datapoint post-type">
		<i class="fa fa-microphone"></i><?php echo get_post_type(); ?>
	</span>
	<?php if( get_field('podcast_author') ) { ?>
		<div class="meta-datapoint author">
			<i class="fa fa-user"></i><?php the_field('podcast_author'); ?>
		</div>
	<?php }; ?>
	<?php if( get_the_terms($post->ID, 'podcast_tags') ) { ?>
		<div class="meta-datapoint tags">
			<i class="fa fa-tags"></i>Tags: <?php the_terms( $post->ID, 'podcast_tags' ,  ' ' ); ?>
		</div>
	<?php }; ?>
</div>
