<?php
/**
 * Template Name: Homepage 2
 */
?>

<!-- Cover Section -->
<div class="container-fluid section text-<?php the_field('cover_text_color'); ?>" id="cover" style="background-image:url('<?php $cover_image = get_field('cover_photo'); echo $cover_image['sizes']['extra-large']; ?>');">
	<div class="row">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="title"><?php the_field('cover_title'); ?></h1>
					<h2 class="subtitle"><?php the_field('cover_subtitle'); ?></h2>
				</div>
			</div>
			<div class="row">
				<?php if ( get_field('show_cover_button') ) { ?>
					<a href="<?php the_field('cover_button_link') ?>" class="btn btn-primary"><?php the_field('cover_button_text') ?></a>
				<?php }; ?>
				<a href="#recent-articles" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Featured Link -->
<div class="container-fluid section grey-bg" id="featured-link">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2><?php the_field('featured_link_title'); ?></h2>
					<a href="<?php the_field('featured_link_url') ?>">
						<?php
							$featured_link_image = get_field('featured_link_image');
							if( $featured_link_image ) {
								echo wp_get_attachment_image( $featured_link_image, 'large');
							}
						?>
					</a>
					<a href="<?php the_field('featured_link_url'); ?>" class="btn">
						<?php the_field('featured_link_subtitle'); ?><i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<a href="#featured-product" class="down-arrow"><i class="fa fa-angle-down"></i></a>
	</div>
</div>

<!-- Podcast -->

<!-- Featured Product -->
<div class="container-fluid section" id="featured-product">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('featured_product_link') ?>">
						<?php
							$product_image = get_field('featured_product_image');
							if( $product_image ) {
								echo wp_get_attachment_image( $product_image, 'medium');
							}
						?>
					</a>
					<h3 class="entry-title">
						<a href="<?php the_field('featured_product_link') ?>"><?php the_field('featured_product_title'); ?></a>
					</h3>
					<div class="entry-summary">
						<?php the_field('featured_product_summary'); ?>
					</div>
					<a href="<?php the_field('featured_product_link') ?>" class="btn btn-primary">More Info <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- About Section -->
<div class="container-fluid section grey-bg" id="about">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('about_title'); ?></h2>
					<h3 class="subtitle"><?php the_field('about_subtitle'); ?></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<?php echo wp_get_attachment_image( get_field('about_image'), 'medium' ); ?>
					<a href="<?php the_field('about_link'); ?>" class="heading-link">
						<h4><?php the_field('about_paragraph_heading'); ?></h4>
					</a>
					<div>
						<p>
							<?php the_field('about_paragraph_content'); ?>
						</p>
						<div class="read-more-link">
							<a href="<?php the_field('about_link'); ?>">
					  		<?php if(get_field('site_language', 'option') == "es-mx") { ?>
					  			Lee Mas
								<?php } else { ?>
									Read More
								<?php } ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<a href="#featured" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Video -->

<!-- Description #2 -->

<!-- Subscribe -->
<?php if ( get_field('show_subscribe_form_homepage') ) { ?>
	<div class="container-fluid section text-<?php the_field('subscribe_text_color'); ?>" id="subscribe" style="background-color:<?php the_field('subscribe_background_color'); ?>">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="title"><?php the_field('subscribe_form_title'); ?></h3>
						<div class="subscribe-form">
					  	<?php the_field('subscribe_form_code','option'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }; ?>

<!-- Search -->
