<?php
/**
 * Template Name: Homepage 2
 */
?>

<!-- Cover Section -->
<div class="bg-image" style="background-image:url('<?php $cover_image = get_field('cover_photo'); echo $cover_image['sizes']['extra-large']; ?>');">
	<div class="container-fluid section text-<?php the_field('cover_text_color'); ?>" id="cover" style="background-color: rgba(0,0,0,0.<?php the_field('cover_photo_darkness'); ?>)">
		<div class="row">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<h1 class="title"><?php the_field('cover_title'); ?></h1>
						<h2 class="subtitle"><?php the_field('cover_subtitle'); ?></h2>
						<?php if ( get_field('show_cover_button') ) { ?>
							<a href="<?php the_field('cover_button_link'); ?>" class="btn btn-primary"><?php the_field('cover_button_text'); ?></a>
						<?php }; ?>
					</div>
				</div>
				<div class="row">
					<a href="#featured-link" class="down-arrow"><i class="fa fa-angle-down"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Featured Link -->
<div class="container-fluid section" id="featured-link">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('featured_link_title'); ?></h2>
					<a href="<?php the_field('featured_link_url'); ?>">
						<?php
							$featured_link_image = get_field('featured_link_image');
							if( $featured_link_image ) {
								echo wp_get_attachment_image( $featured_link_image, 'large');
							}
						?>
					</a>
					<div class="row">
						<a href="<?php the_field('featured_link_button_url'); ?>" class="btn btn-primary">
							<?php the_field('featured_link_button_text'); ?>
						</a>
					</div>
					<div class="row">
						<a href="<?php the_field('featured_link_secondary_url'); ?>" class="secondary-link">
							<?php the_field('featured_link_secondary_text'); ?><i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<a href="#podcast" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Podcast -->
<div class="bg-image" style="background-image:url('<?php $cover_image = get_field('podcast_photo'); echo $cover_image['sizes']['extra-large']; ?>');">
	<div class="container-fluid section text-<?php the_field('podcast_text_color'); ?>" id="podcast" style="background-color: rgba(0,0,0,0.<?php the_field('podcast_photo_darkness'); ?>)">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="title"><?php the_field('podcast_title'); ?></h2>
						<h3 class="subtitle"><?php the_field('podcast_subtitle2'); ?></h3>
						<div class="row">
							<p><?php the_field('podcast_description'); ?></p>
						</div>
						<div class="row">
							<a href="<?php the_field('podcast_button_url'); ?>" class="btn btn-primary">
								<?php the_field('podcast_button_text'); ?>
							</a>
						</div>
						<div class="row">
							<a href="<?php the_field('podcast_secondary_url'); ?>" class="secondary-link">
								<?php the_field('podcast_secondary_text'); ?><i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<a href="#product" class="down-arrow"><i class="fa fa-angle-down"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Featured Product -->
<div class="container-fluid section" id="product">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('featured_product_title'); ?></h2>
					<h3 class="subtitle"><?php the_field('featured_product_subtitle'); ?></h3>
					<a href="<?php the_field('featured_product_button_url'); ?>">
						<?php
							$product_image = get_field('featured_product_image');
							if( $product_image ) {
								echo wp_get_attachment_image( $product_image, 'medium');
							}
						?>
					</a>
					<div class="row">
						<a href="<?php the_field('featured_product_button_url'); ?>" class="btn btn-primary">
							<?php the_field('featured_product_button_text'); ?>
						</a>
					</div>
					<div class="row">
						<a href="<?php the_field('featured_product_secondary_url'); ?>" class="secondary-link">
							<?php the_field('featured_product_secondary_text'); ?><i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<a href="#about" class="down-arrow"><i class="fa fa-angle-down"></i></a>
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
					<p><?php the_field('about_description'); ?></p>

					<!-- 3 distinctives & icons go here -->

					<div class="row">
						<a href="<?php the_field('about_button_url'); ?>" class="btn btn-primary">
							<?php the_field('about_button_text'); ?>
						</a>
					</div>
					<div class="row">
						<a href="<?php the_field('about_secondary_url'); ?>" class="secondary-link">
							<?php the_field('about_secondary_text'); ?><i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<a href="#video" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Video -->
<div class="container-fluid section" id="video">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('video_title'); ?></h2>
					<h3 class="subtitle"><?php the_field('video_subtitle'); ?></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<?php the_field('video_embed_code'); ?>
					<?php the_field('video_description'); ?>
				</div>
			</div>
			<div class="row">
				<a href="<?php the_field('video_button_link'); ?>" class="btn btn-primary"><?php the_field('video_button_text'); ?></a>
			</div>
			<div class="row">
				<a href="#highlight" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Highlighted Page -->
<div class="container-fluid section grey-bg" id="highlight">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('highlight_title'); ?></h2>
					<h3 class="subtitle"><?php the_field('highlight_subtitle'); ?></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<?php echo wp_get_attachment_image( get_field('highlight_image'), 'medium' ); ?>
					<a href="<?php the_field('highlight_link'); ?>" class="heading-link">
						<h4><?php the_field('highlight_paragraph_heading'); ?></h4>
					</a>
					<div>
						<p>
							<?php the_field('highlight_paragraph_content'); ?>
						</p>
						<div class="read-more-link">
							<a href="<?php the_field('highlight_link'); ?>">
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
				<a href="#subscribe" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Subscribe -->
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

<!-- Search -->
<div class="container-fluid section grey-bg" id="search">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('search_title'); ?></h2>
					<h3 class="subtitle"><?php the_field('search_subtitle'); ?></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="big-search">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
