<?php
use Roots\Sage\Titles;

$post_type = get_post_type();
$post_type_all_items = get_post_type_object($post_type)->labels->all_items;
$post_thumbnail_xl = get_the_post_thumbnail_url(get_the_ID(),'extra-large');
$post_thumbnail_header = get_the_post_thumbnail_url(get_the_ID(),'page-header');
?>

<div class="header-container
<?php
	// set header background from page/post featured image
	if ( is_singular( array('page','post','event','podcast') ) && has_post_thumbnail() ) {
		if ( get_field('featured_image_layout') == 'cover' ) {
			echo ' bg-image bg-cover" style="background-image: url(\'' . $post_thumbnail_xl . '\');';
		}
		else if ( get_field('featured_image_layout') == 'banner' ) {
			echo ' bg-image bg-banner" style="background-image: url(\'' . $post_thumbnail_header . '\');';
		}
	};
?>
">
	<div class="container-fluid mask">
		<div class="row">
			<div class="container">
				<div class="row">
					<?php	if ( is_singular() && !is_page() && !is_singular('product') ) { ?>
						<div class="col-sm-10 col-sm-offset-1">
					<?php } else { ?>
						<div class="col-sm-12">
					<?php }; ?>
						<div class="page-header">
							<?php	if ( is_singular() && !is_page() ) { ?>
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
		</div>
	</div>
	<?php if ( is_singular(array('post','podcast','video','event','associate')) ) { ?>
		<div class="floating-share-buttons">
			<?php get_template_part('templates/share-buttons'); ?>
		</div>
	<?php }; ?>
</div>
