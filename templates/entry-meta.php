<div class="entry-meta-container">
	<span class="meta-datapoint post-type">
		<?php
			$post_type = get_post_type();
			$post_type_name = get_post_type_object($post_type)->labels->singular_name;

			if ( 'post' == get_post_type() ) {
				echo '<i class="fa fa-file-text"></i>';
			} elseif ( 'page' == get_post_type() ) {
				echo '<i class="fa fa-file"></i>';
			} elseif ( 'podcast' == get_post_type() ) {
				echo '<i class="fa fa-microphone"></i>';
			} elseif ( 'video' == get_post_type() ) {
				echo '<i class="fa fa-video-camera"></i>';
			} elseif ( 'product' == get_post_type() ) {
				echo '<i class="fa fa-shopping-cart"></i>';
			} elseif ( 'event' == get_post_type() ) {
				echo '<i class="fa fa-sun-o"></i>';
			} elseif ( 'associate' == get_post_type() ) {
				echo '<i class="fa fa-users"></i>';
			}
		?><?php echo $post_type_name; ?>
	</span>
	<div class="meta-datapoint author">
		<i class="fa fa-user"></i><?php the_author_posts_link(); ?>
	</div>
	<?php if( is_page_template('template-home.php') ) { ?>
		<div class="meta-datapoint date">
 			<i class="fa fa-calendar"></i><?php the_time( get_option( 'date_format' ) ); ?>
 		</div>
	<?php }; ?>
	<?php if(get_the_category_list()) { ?>
		<div class="meta-datapoint category">
			<i class="fa fa-folder-o"></i><?php the_category(', '); ?>
		</div>
	<?php } ?>
	<?php if(get_the_tag_list()) { ?>
		<div class="meta-datapoint tags">
			<i class="fa fa-tags"></i><?php the_tags(); ?>
		</div>
	<?php } ?>
</div>
