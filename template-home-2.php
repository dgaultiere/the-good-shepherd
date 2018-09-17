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
						<?php
							if ( get_field('show_cover_button') ) :
								$button = get_field('cover_button');
								if( $button ) :
						?>
							<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btn btn-primary">
								<?php echo $button['title']; ?>
							</a>
						<?php
								endif;
							endif;
						?>
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
					<h2 class="title"><?php the_field('featured_link_title2'); ?></h2>
					<p class="description"><?php the_field('featured_link_description'); ?></p>
					<h3 class="subtitle"><?php the_field('featured_link_subtitle2'); ?></h3>
					<?php
					$featured_link_image = get_field('featured_link_image2');
					if( $featured_link_image ):
					?>
						<div class="link-photo">
							<?php echo wp_get_attachment_image($featured_link_image, 'medium'); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a class="btn btn-primary" id="featured-link-show-hide">
						<?php the_field('featured_link_button_title'); ?>
					</a>
				</div>
			</div>
			<div class="row featured-download-form" id="featured-link-email-form">
				<div class="col-xs-12">
					<?php get_template_part('templates/subscribe-form-download-a'); ?>
						<!-- Nine Ways eBook -->
						<input type="checkbox" value="2097152" name="group[41][2097152]" id="mce-group[41]-41-0" checked>
					<?php get_template_part('templates/subscribe-form-download-b'); ?>
				</div>
			</div>
			<div class="row">
				<a href="#testimonial" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Testimonial -->
<div class="bg-image" style="background-image:url('<?php $image = get_field('testimonial_photo'); echo $image['sizes']['extra-large']; ?>');">
	<div class="container-fluid section text-<?php the_field('testimonial_text_color'); ?>" id="testimonial" style="background-color: rgba(0,0,0,0.<?php the_field('testimonial_photo_darkness'); ?>)">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="quote">
							<h2 class="title long callout"><?php the_field('testimonial_quote'); ?></h2>
							<h3 class="subtitle long"><?php the_field('testimonial_credit'); ?></h3>
						</div>
					</div>
				</div>
				<?php
					$link = get_field('testimonial_action_link');
					if( $link ):
				?>
					<div class="row">
						<div class="col-xs-12">
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="secondary-link">
								<?php echo $link['title']; ?><i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				<?php endif; ?>
				<div class="row">
					<a href="#what-we-offer" class="down-arrow"><i class="fa fa-angle-down"></i></a>
				</div>
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
					<h2 class="title"><?php the_field('wwo_title'); ?></h2>
				</div>
			</div>
			<?php if( have_rows('wwo_distinctives') ): ?>
				<div class="row">
					<?php while ( have_rows('wwo_distinctives') ) : the_row(); ?>
						<div class="col-sm-4 distinctive">
							<div class="circle">
								<?php
									$icon = get_sub_field('icon');
									if( $icon ) {
										echo wp_get_attachment_image( $icon, 'thumbnail');
									}
								?>
							</div>
							<h4><?php the_sub_field('label'); ?></h4>
							<?php
								if( have_rows('links') ):
								while ( have_rows('links') ) : the_row();
								$link = get_sub_field('link');
								if( $link ):
							?>
								<div class="distinctive-link">
									<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
										<?php echo $link['title']; ?>
									</a>
								</div>
							<?php
								endif;
								endwhile;
								endif;
							?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php
				$button = get_field('wwo_button');
				if( $button ):
			?>
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btn btn-primary">
							<?php echo $button['title']; ?>
						</a>
					</div>
				</div>
			<?php endif; ?>
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
			<?php
				$link = get_field('about_link');
				if( $link ):
			?>
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-primary">
							<?php echo $link['title']; ?>
						</a>
					</div>
				</div>
			<?php endif; ?>
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
			<?php
				$button = get_field('video_button');
				if( $button ):
			?>
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btn btn-primary">
							<?php echo $button['title']; ?>
						</a>
					</div>
				</div>
			<?php endif; ?>
			<?php
				$link = get_field('video_link');
				if( $link ):
			?>
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="secondary-link">
							<?php echo $link['title']; ?><i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			<?php endif; ?>
			<div class="row">
				<a href="#highlight" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Highlighted Page -->
<div class="bg-image" style="background-image:url('<?php $image = get_field('highlight_photo'); echo $image['sizes']['extra-large']; ?>');">
	<div class="container-fluid section text-<?php the_field('highlight_text_color'); ?>" id="highlight" style="background-color: rgba(0,0,0,0.<?php the_field('highlight_photo_darkness'); ?>)">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="title small"><?php the_field('highlight_title'); ?></h2>
						<h3 class="subtitle big"><?php the_field('highlight_subtitle'); ?></h3>
						<p class="text-justify"><?php the_field('highlight_description'); ?></p>
					</div>
				</div>
				<?php if( have_rows('hp_distinctives') ): ?>
					<div class="row">
						<?php while ( have_rows('hp_distinctives') ) : the_row(); ?>
							<div class="col-sm-4 distinctive">
								<div class="circle">
									<?php
										$icon = get_sub_field('icon');
										if( $icon ) {
											echo wp_get_attachment_image( $icon, 'thumbnail');
										}
									?>
								</div>
								<h4><?php the_sub_field('label'); ?></h4>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<?php
					$button = get_field('highlight_button');
					if( $button ):
				?>
					<div class="row">
						<div class="col-xs-12">
							<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="btn btn-primary">
								<?php echo $button['title']; ?>
							</a>
						</div>
					</div>
				<?php endif; ?>
				<?php
					$link = get_field('highlight_link');
					if( $link ):
				?>
					<div class="row">
						<div class="col-xs-12">
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="secondary-link">
								<?php echo $link['title']; ?><i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				<?php endif; ?>
				<div class="row">
					<a href="#featured-quotes" class="down-arrow"><i class="fa fa-angle-down"></i></a>
				</div>
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
					<h2 class="title"><?php the_field('fq_title'); ?></h2>
				</div>
			</div>
			<div class="row">
				<?php if( have_rows('fq_quotes') ): while ( have_rows('fq_quotes') ) : the_row(); ?>
					<div class="col-sm-4 featured-quote">
						<p><?php the_sub_field('quote'); ?></p>
						<?php
							$photo = get_sub_field('photo');
							if( $photo ) {
								echo wp_get_attachment_image($photo, 'thumbnail');
							}
						?>
						<div class="quote-author">
							<?php the_sub_field('name'); ?><br>
							<span class="smaller"><?php the_sub_field('personal_title'); ?></span>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<?php
						$link = get_field('fq_link');
						if( $link ):
					?>
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="secondary-link">
							<?php echo $link['title']; ?><i class="fa fa-angle-right"></i>
						</a>
					<?php
						endif;
					?>
				</div>
			</div>
			<div class="row">
				<a href="#podcast" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Podcast -->
<div class="bg-image" style="background-image:url('<?php $image = get_field('podcast_photo'); echo $image['sizes']['extra-large']; ?>');">
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
				<?php
					$args = array(
						'post_type' => 'podcast',
						'posts_per_page' => '1'
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
					<div class="row">
						<div class="col-xs-12">
							<a href="<?php the_permalink(); ?>" class="btn btn-primary">
								Listen Now
							</a>
						</div>
					</div>
				<?php
						endwhile;
						wp_reset_postdata();
					else :
				?>
					<a href="<?php echo get_post_type_archive_link('podcast') ?>" class="btn btn-primary">
						View Episodes
					</a>
				<?php endif; ?>
				<?php
					$link = get_field('podcast_link');
					if( $link ):
				?>
					<div class="row">
						<div class="col-xs-12">
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="secondary-link">
								<?php echo $link['title']; ?><i class="fa fa-angle-right"></i>
							</a>
						</div>
					</div>
				<?php endif; ?>
				<div class="row">
					<a href="#blog" class="down-arrow"><i class="fa fa-angle-down"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Blog -->
<div class="container-fluid section grey-bg" id="blog">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('blog_title'); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<?php
						$args = array('posts_per_page' => 1, 'ignore_sticky_posts' => 1);
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
					<?php	get_template_part('templates/content-snippet-post-side'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a href="<?php the_permalink(); ?>" class="btn btn-primary">
						Read Now
					</a>
				</div>
			</div>
				<?php
						endwhile;
						wp_reset_postdata();
					else :
				?>
			<div class="row">
				<div class="col-xs-12">
						<a href="<?php echo get_post_type_archive_link('post') ?>" class="btn btn-primary">
							View the Blog
						</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<?php
						$link = get_field('blog_link');
						if( $link ):
					?>
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="secondary-link">
							<?php echo $link['title']; ?><i class="fa fa-angle-right"></i>
						</a>
					<?php
						endif;
					?>
				</div>
			</div>
			<div class="row">
				<a href="#product" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Featured Product -->
<div class="container-fluid section" id="product">
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
					<a class="btn btn-primary" id="featured-product-show-hide">
						<?php the_field('fp_button_title'); ?>
					</a>
					<?php
						$link = get_field('fp_link');
						if( $link ):
					?>
						<div class="clearfix"></div>
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="secondary-link">
							<?php echo $link['title']; ?><i class="fa fa-angle-right"></i>
						</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="row featured-download-form" id="featured-product-email-form">
				<div class="col-xs-12">
					<?php get_template_part('templates/subscribe-form-download-a'); ?>
						<!-- Easy Yoke Sample Chapter -->
						<input type="checkbox" value="4194304" name="group[41][4194304]" id="mce-group[41]-41-1" checked>
					<?php get_template_part('templates/subscribe-form-download-b'); ?>
				</div>
			</div>
			<div class="row">
				<a href="#search" class="down-arrow"><i class="fa fa-angle-down"></i></a>
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
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="big-search">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
			<?php
				$link = get_field('search_link');
				if( $link ):
			?>
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="secondary-link">
							<?php echo $link['title']; ?><i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
