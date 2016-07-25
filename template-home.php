<?php
/**
 * Template Name: Homepage
 */
?>

<!-- Cover Section -->
<div class="container-fluid section text-<?php the_field('cover_text_color'); ?>" id="cover" style="background-image:url('<?php the_field('cover_photo'); ?>');">
	<div class="row">
		<div class="container">
			<div class="row">
				<h1 class="title"><?php the_field('cover_title'); ?></h1>
				<h2 class="subtitle"><?php the_field('cover_subtitle'); ?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="row">
					<a href="#recent-articles" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- Recent Articles Section -->
<div class="container-fluid section" id="recent-articles">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title">
						<?php the_field('recent_articles_title'); ?>
						<div class="view-all">
							<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
					  		<?php if(get_field('site_language', 'option') == "es-mx") { ?>
					  			Ver Todo
								<?php } else { ?>
									View All
								<?php } ?>
							</a>
						</div>
					</h2>
					<h3 class="subtitle"><?php the_field('recent_articles_subtitle'); ?></h3>
				</div>
			</div>
			<div clas="row">
				<?php
					$args = array(
						'posts_per_page' => '2'
					);
					// the query
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
						// the loop
						while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
					<div class="col-sm-6">
						<?php get_template_part('templates/content-snippet-post-full'); ?>
					</div>
				<?php
						endwhile; // end of the loop
						wp_reset_postdata();
					else :
						_e( '<div class="col-xs-12">' . 'No articles were found.' . '</div>' );
					endif;
				?>
			</div>
			<div class="row">
				<a href="#about" class="down-arrow"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>

<!-- About Section -->
<div class="container-fluid section" id="about">
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
					<img src="<?php the_field('about_image'); ?>">
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

<!-- Featured Section -->
<div class="container-fluid section" id="featured">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="title"><?php the_field('featured_title'); ?></h2>
					<h3 class="subtitle"><?php the_field('featured_subtitle'); ?></h3>
				</div>
			</div>
			<div class="row">
				<?php
				  $args = array(
				    'cat' => 13,
				    'posts_per_page' => '4'
				  );
				  // the query
				  $the_query = new WP_Query( $args );
				  if ( $the_query->have_posts() ) :
				    // the loop
				    while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				  <div class="col-sm-3">
						<?php get_template_part('templates/content-snippet-post'); ?>
				  </div>
				<?php
				    endwhile; // end of the loop
				    wp_reset_postdata();
				  else :
				    _e( '<div class="col-xs-12">' . 'No articles were found.' . '</div>' );
				  endif;
				?>
			</div>
		</div>
	</div>
</div>
