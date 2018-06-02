<?php
/**
 * Template Name: Homepage New
 */
?>

<!-- Cover -->
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
					<p>
						Are you worn out by people’s needs?<br><br>
						Do you feel alone with the weight of leadership?<br><br>
						Is your spouse frustrated with your ministry?<br><br>
						Do you know how to care for your soul?
					</p>
					<h3 class="subtitle"><?php the_field('featured_link_subtitle'); ?></h3>
					<a href="<?php the_field('featured_link_url'); ?>">
						<?php
							$featured_link_image = get_field('featured_link_image');
							if( $featured_link_image ) {
								echo wp_get_attachment_image($featured_link_image, 'medium');
							}
						?>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('featured_link_button_url'); ?>" class="btn btn-primary">
						<?php the_field('featured_link_button_text'); ?>
					</a>
				</div>
			</div>
			<div class="row">
				<a href="#testimonial" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Testimonial -->
<div class="container-fluid section grey-bg" id="testimonial">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php
						$testimonial_image = get_field('testimonial_image');
						if( $testimonial_image ) {
							echo wp_get_attachment_image($testimonial_image, 'medium');
						}
					?>
					<div class="quote">
						<h2 class="title long callout"><?php the_field('testimonial_quote'); ?></h2>
						<h3 class="subtitle long"><?php the_field('testimonial_quote_credit'); ?></h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('testimonial_link_url'); ?>" class="secondary-link">
						<?php the_field('testimonial_link_text'); ?><i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<a href="#what-we-offer" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- What We Offer -->
<div class="container-fluid section" id="what-we-offer">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('what_we_offer_title'); ?></h2>
					<p class="text-justify"><?php the_field('what_we_offer_description'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 distinctive">
					<?php
						$distinctive_image_1 = get_field('what_we_offer_distinctive_1_icon');
						if( $distinctive_image_1 ) {
							echo wp_get_attachment_image( $distinctive_image_1, 'thumbnail');
						}
					?>
					<h4><?php the_field('what_we_offer_distinctive_1'); ?></h4>
				</div>
				<div class="col-sm-4 distinctive">
					<?php
						$distinctive_image_2 = get_field('what_we_offer_distinctive_2_icon');
						if( $distinctive_image_2 ) {
							echo wp_get_attachment_image( $distinctive_image_2, 'thumbnail');
						}
					?>
					<h4><?php the_field('what_we_offer_distinctive_2'); ?></h4>
				</div>
				<div class="col-sm-4 distinctive">
					<?php
						$distinctive_image_3 = get_field('what_we_offer_distinctive_3_icon');
						if( $distinctive_image_3 ) {
							echo wp_get_attachment_image( $distinctive_image_3, 'thumbnail');
						}
					?>
					<h4><?php the_field('what_we_offer_distinctive_3'); ?></h4>
				</div>
			</div>
			<div class="row">
				<a href="#about" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- About -->
<div class="container-fluid section grey-bg" id="about">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('about_title'); ?></h2>
					<?php
						$about_photo = get_field('about_photo');
						if( $about_photo ) {
							echo wp_get_attachment_image( $about_photo, 'medium-banner');
						}
					?>
					<p class="text-justify"><?php the_field('about_description'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('about_link_url'); ?>" class="secondary-link">
						<?php the_field('about_link_text'); ?><i class="fa fa-angle-right"></i>
					</a>
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
					<div class="video"><?php the_field('video_embed_code'); ?></div>
					<div class="quote">
						<h2 class="title long callout"><?php the_field('video_quote'); ?></h2>
						<h3 class="subtitle long"><?php the_field('video_quote_credit'); ?></h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('video_button_url'); ?>" class="btn btn-primary">
						<?php the_field('video_button_text'); ?>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('video_secondary_url'); ?>" class="secondary-link">
						<?php the_field('video_secondary_text'); ?><i class="fa fa-angle-right"></i>
					</a>
				</div>
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
					<?php
						$highlight_photo = get_field('highlight_photo');
						if( $highlight_photo ) {
							echo wp_get_attachment_image( $highlight_photo, 'medium-banner');
						}
					?>
					<p class="text-justify"><?php the_field('highlight_description'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 distinctive">
					<?php
						$distinctive_image_1 = get_field('highlight_distinctive_1_icon');
						if( $distinctive_image_1 ) {
							echo wp_get_attachment_image( $distinctive_image_1, 'thumbnail');
						}
					?>
					<h4><?php the_field('highlight_distinctive_1'); ?></h4>
				</div>
				<div class="col-sm-4 distinctive">
					<?php
						$distinctive_image_2 = get_field('highlight_distinctive_2_icon');
						if( $distinctive_image_2 ) {
							echo wp_get_attachment_image( $distinctive_image_2, 'thumbnail');
						}
					?>
					<h4><?php the_field('highlight_distinctive_2'); ?></h4>
				</div>
				<div class="col-sm-4 distinctive">
					<?php
						$distinctive_image_3 = get_field('highlight_distinctive_3_icon');
						if( $distinctive_image_3 ) {
							echo wp_get_attachment_image( $distinctive_image_3, 'thumbnail');
						}
					?>
					<h4><?php the_field('highlight_distinctive_3'); ?></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('highlight_button_url'); ?>" class="btn btn-primary">
						<?php the_field('highlight_button_text'); ?>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('highlight_secondary_url'); ?>" class="secondary-link">
						<?php the_field('highlight_secondary_text'); ?><i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<a href="#featured-quotes" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Featured Quotes -->
<div class="container-fluid section" id="featured-quotes">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('featured_quote_title'); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<p><?php the_field('featured_quote_1'); ?></p>
					<?php
						$featured_quote_1_image = get_field('featured_quote_1_image');
						if( $featured_quote_1_image ) {
							echo wp_get_attachment_image($featured_quote_1_image, 'medium');
						}
					?>
					<p><?php the_field('featured_quote_1_credit'); ?></p>
				</div>
				<div class="col-sm-4">
					<p><?php the_field('featured_quote_2'); ?></p>
					<?php
						$featured_quote_2_image = get_field('featured_quote_2_image');
						if( $featured_quote_2_image ) {
							echo wp_get_attachment_image($featured_quote_2_image, 'medium');
						}
					?>
					<p><?php the_field('featured_quote_2_credit'); ?></p>
				</div>
				<div class="col-sm-4">
					<p><?php the_field('featured_quote_3'); ?></p>
					<?php
						$featured_quote_3_image = get_field('featured_quote_3_image');
						if( $featured_quote_3_image ) {
							echo wp_get_attachment_image($featured_quote_3_image, 'medium');
						}
					?>
					<p><?php the_field('featured_quote_3_credit'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('featured_quote_link_url'); ?>" class="secondary-link">
						<?php the_field('featured_quote_link_text'); ?><i class="fa fa-angle-right"></i>
					</a>
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
						<h2 class="title small"><?php the_field('podcast_title'); ?></h2>
						<h3 class="subtitle big"><?php the_field('podcast_subtitle2'); ?></h3>
						<p><?php the_field('podcast_description'); ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php the_field('podcast_button_url'); ?>" class="btn btn-primary">
							<?php the_field('podcast_button_text'); ?>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php the_field('podcast_secondary_url'); ?>" class="secondary-link">
							<?php the_field('podcast_secondary_text'); ?><i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
				<div class="row">
					<a href="#blog" class="down-arrow"><i class="fa fa-angle-down"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Blog -->
<div class="container-fluid section" id="blog">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('blog_title'); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<!-- Latest post here -->
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('blog_button_url'); ?>" class="btn btn-primary">
						<?php the_field('blog_button_text'); ?>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('blog_secondary_url'); ?>" class="secondary-link">
						<?php the_field('blog_secondary_text'); ?><i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<a href="#product" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Featured Product -->
<div class="container-fluid section grey-bg" id="product">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-pull-2 pull-right">
					<h2 class="title small long"><?php the_field('featured_product_title'); ?></h2>
					<h3 class="subtitle long"><?php the_field('featured_product_subtitle'); ?></h3>
				</div>
				<div class="col-sm-3 col-sm-offset-2">
					<a href="<?php the_field('featured_product_button_url'); ?>">
						<?php
							$product_image = get_field('featured_product_image');
							if( $product_image ) {
								echo wp_get_attachment_image( $product_image, 'medium');
							}
						?>
					</a>
				</div>
				<div class="col-sm-5 col-sm-pull-2 pull-right">
					<a href="<?php the_field('featured_product_button_url'); ?>" class="btn btn-primary">
						<?php the_field('featured_product_button_text'); ?>
					</a>
					<div class="clearfix"></div>
					<a href="<?php the_field('featured_product_secondary_url'); ?>" class="secondary-link">
						<?php the_field('featured_product_secondary_text'); ?><i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<a href="#search" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Search -->
<div class="container-fluid section" id="search">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('search_title'); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="big-search">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_field('search_secondary_url'); ?>" class="secondary-link">
						<?php the_field('search_secondary_text'); ?><i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
