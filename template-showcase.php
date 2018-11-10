<?php
/**
 * Template Name: Showcase
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
					<a href="#section" class="down-arrow"><i class="fa fa-angle-down"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
