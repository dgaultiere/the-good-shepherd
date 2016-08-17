<div class="entry-meta-container entry-meta-product">
	<span class="meta-datapoint post-type">
		<i class="fa fa-shopping-cart"></i><?php echo get_post_type(); ?>
	</span>
	<span class="meta-datapoint author">
		<!-- <i class="fa fa-user"></i><?php the_field('product_author'); ?> -->
		<h4 class="entry-subtitle"><?php the_field('product_author'); ?></h4>
	</span>
	<span class="meta-datapoint price">
		<i class="fa fa-dollar"></i><?php the_field('product_price'); ?>
	</span>
</div>
