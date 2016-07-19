<?php use Roots\Sage\Titles; ?>

<?php if ( is_home() || is_archive() ) { ?>
	<div class="header-background"
		<?php if (get_field('default_header_background', 'option') == 'color') { ?>
			style="background-color: <?php the_field('default_header_color', 'option'); ?>"
		<?php } elseif (get_field('default_header_background', 'option') == 'image') { ?>
			style="background-image: url('<?php the_field('default_header_image', 'option'); ?>');"
		<?php } else { ?>
			style="background-color: grey;"
		<?php }; ?>
	>
<?php } else { ?>
	<div class="header-background"
		<?php if (get_field('header_background_type') == 'color') { ?>
			style="background-color: <?php the_field('header_background_color'); ?>"
		<?php } elseif (get_field('header_background_type') == 'image') { ?>
			style="background-image: url('<?php the_field('header_background_image'); ?>');"
		<?php } else { ?>
			<?php if (get_field('default_header_background', 'option') == 'color') { ?>
				style="background-color: <?php the_field('default_header_color', 'option'); ?>"
			<?php } elseif (get_field('default_header_background', 'option') == 'image') { ?>
				style="background-image: url('<?php the_field('default_header_image', 'option'); ?>');"
			<?php } else { ?>
				style="background-color: grey;"
			<?php }; ?>
		<?php }; ?>
	>
<?php }; ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-header">
					<h1>
						<?= Titles\title(); ?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>
