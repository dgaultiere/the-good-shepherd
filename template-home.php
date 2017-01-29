<?php
/**
 * Template Name: Homepage
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
				<a href="#content-section-1" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Subscribe Section -->
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

<!-- Content Section 1 -->
<div class="container-fluid section" id="content-section-1">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div id="about-us">
						<h3 class="title">
							<?php the_field('about_us_title'); ?>
							<div class="view-all">
								<a href="<?php the_field('about_us_link') ?>">Learn More</a>
							</div>
						</h3>
						<a href="<?php the_field('about_us_link') ?>">
							<?php
								$about_image = get_field('about_us_image');
								if( $about_image ) {
									echo wp_get_attachment_image( $about_image, 'large');
								}
							?>
						</a>
						<div class="entry-summary">
							<?php the_field('about_us_summary'); ?>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div id="recent-article">
						<h3 class="title">
							<?php the_field('recent_article_title'); ?>
							<div class="view-all">
								<a href="<?php echo get_post_type_archive_link('post') ?>">All Articles</a>
							</div>
						</h3>
						<?php
							$args = array(
								'posts_per_page' => '1'
							);
							// the query
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) :
								// the loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
									get_template_part('templates/content-snippet-post-side');
								endwhile; // end of the loop
								wp_reset_postdata();
							else :
								_e( '<div class="alert alert-warning">' . 'Sorry, no results were found.' . '</div>' );
							endif;
						?>
					</div>
					<div id="recent-podcast">
						<h3 class="title">
							<?php the_field('recent_podcast_title'); ?>
							<div class="view-all">
								<a href="<?php echo get_post_type_archive_link('podcast') ?>">All Podcasts</a>
							</div>
						</h3>
						<?php
							$args = array(
								'post_type' => 'podcast',
								'posts_per_page' => '1'
							);
							// the query
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) :
								// the loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
									get_template_part('templates/content-snippet-post-side');
								endwhile; // end of the loop
								wp_reset_postdata();
							else :
								_e( '<div class="alert alert-warning">' . 'Sorry, no results were found.' . '</div>' );
							endif;
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<a href="#quote" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Quote Section -->
<div class="container-fluid section text-<?php the_field('quote_text_color'); ?>" id="quote" style="background-color:<?php the_field('quote_background_color'); ?>">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="callout"><?php the_field('quote_title'); ?></h2>
					<h5 class="quote-credit"><?php the_field('quote_subtitle'); ?></h5>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Content Section 2 -->
<div class="container-fluid section" id="content-section-2">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div id="tlc">
						<h3 class="title">
							<?php the_field('tlc_title'); ?>
							<div class="view-all">
								<a href="<?php the_field('tlc_link') ?>">Learn More</a>
							</div>
						</h3>
						<a href="<?php the_field('tlc_link') ?>">
							<?php
								$tlc_image = get_field('tlc_image');
								if( $tlc_image ) {
									echo wp_get_attachment_image( $tlc_image, 'medium');
								}
							?>
						</a>
						<div class="entry-summary">
							<?php the_field('tlc_summary'); ?>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div id="recent-event">
						<h3 class="title">
							<?php the_field('recent_event_title'); ?>
							<div class="view-all">
								<a href="<?php echo get_post_type_archive_link('event') ?>">All Events</a>
							</div>
						</h3>
						<?php
						  date_default_timezone_set('America/Los_Angeles');
						  $args = array(
						    'post_type' => 'event',
						    'meta_key' => 'event_date',
						    'meta_value' => date('Ymd'),
						    'meta_compare' => '>=',
						    'orderby' => 'event_date',
						    'order' => 'ASC',
								'posts_per_page' => '1'
							);
							// the query
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) :
								// the loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
									get_template_part('templates/content-snippet-post-side');
								endwhile; // end of the loop
								wp_reset_postdata();
							else :
								_e( '<div class="alert alert-warning">' . 'Sorry, no results were found.' . '</div>' );
							endif;
						?>
					</div>
					<div id="recent-video">
						<h3 class="title">
							<?php the_field('recent_video_title'); ?>
							<div class="view-all">
								<a href="<?php echo get_post_type_archive_link('video') ?>">All Videos</a>
							</div>
						</h3>
						<?php
							$args = array(
								'post_type' => 'video',
								'posts_per_page' => '1'
							);
							// the query
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) :
								// the loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
									get_template_part('templates/content-snippet-post-side');
								endwhile; // end of the loop
								wp_reset_postdata();
							else :
								_e( '<div class="alert alert-warning">' . 'Sorry, no results were found.' . '</div>' );
							endif;
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<a href="#featured-link" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Featured Link Section -->
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

<!-- Featured Product Section -->
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
