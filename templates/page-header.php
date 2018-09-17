<?php use Roots\Sage\Titles; ?>

<?php
	$default_header_image = get_field('default_header_image','option');
	$page_header_image = get_field('page_header_image');
	$post_header_image = get_field('post_header_image');
	$post_type = get_post_type();
	$post_type_all_items = get_post_type_object($post_type)->labels->all_items;
?>

<?php if ( is_home() || is_archive() ) { ?>
	<div
		<?php if (get_field('default_header_background', 'option') == 'image') { ?>
			class="header-background bg-image" style="background-image: url('<?php echo $default_header_image['sizes']['page-header'] ?>');"
		<?php } else { ?>
			class="header-background no-bg-image"
		<?php }; ?>
	>
<?php } elseif ( is_singular(array('post','event','podcast')) && !is_page() ) { ?>
	<div
		<?php if (get_field('post_header_background') == 'featured-image' && has_post_thumbnail()) { ?>
			class="header-background bg-image" style="background-image: url('<?php the_post_thumbnail_url('page-header') ?>');"
		<?php } elseif (get_field('post_header_background') == 'image') { ?>
			class="header-background bg-image" style="background-image: url('<?php echo $post_header_image['sizes']['page-header'] ?>');"
		<?php } else { ?>
			<?php if (get_field('default_header_background', 'option') == 'image') { ?>
				class="header-background bg-image" style="background-image: url('<?php echo $default_header_image['sizes']['page-header'] ?>');"
			<?php } else { ?>
				class="header-background no-bg-image"
			<?php }; ?>
		<?php }; ?>
	>
<?php } else { ?>
	<div
		<?php if (get_field('page_header_background') == 'image') { ?>
			class="header-background bg-image" style="background-image: url('<?php echo $page_header_image['sizes']['page-header'] ?>');"
		<?php } else { ?>
			<?php if (get_field('default_header_background', 'option') == 'image') { ?>
				class="header-background bg-image" style="background-image: url('<?php echo $default_header_image['sizes']['page-header'] ?>');"
			<?php } else { ?>
				class="header-background no-bg-image"
			<?php }; ?>
		<?php }; ?>
	>
<?php }; ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-header
				<?php if(
					// Posts and custom post types with image headers
					(
						is_singular(array('post','event','podcast')) && !is_page() && (
							( get_field('post_header_background') == 'featured-image' && has_post_thumbnail() )
							|| ( get_field('page_header_background') == 'default' && get_field('default_header_background', 'option') == 'image' )
						)
					)
					// Home or archive pages using theme default image header
					|| (
						( is_home() || is_archive() ) && get_field('default_header_background', 'option') == 'image'
					)
					// Pages using custom image headers or theme default image header
					|| (
						is_page() && (
							get_field('page_header_background') == 'image'
							|| ( get_field('page_header_background') == 'default' && get_field('default_header_background', 'option') == 'image' )
						)
					)
				) { ?>
					bg-image
				<?php } ?>
				">
					<?php	if(is_singular() && !is_page()) { ?>
						<div class="post-view-all">
							<a href="<?php echo get_post_type_archive_link($post_type) ?>"><span>&lsaquo;</span><?php echo $post_type_all_items ?></a>
						</div>
					<?php }; ?>
					<h1>
						<?= Titles\title(); ?>
					</h1>
				</div>
			</div>
		</div>
	</div>
	<?php if ( is_singular(array('post','podcast','video','event','associate')) ) { ?>
		<div class="floating-share-buttons">
			<?php get_template_part('templates/share-buttons'); ?>
		</div>
	<?php }; ?>
</div>
