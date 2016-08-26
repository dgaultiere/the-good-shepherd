<?php
/**
 * Template Name: Search Articles
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page-custom'); ?>
<?php endwhile; ?>
<div class="article-search">
	<h3><?php the_field('articles_search_title'); ?></h3>
	<div class="big-search">
		<?php get_search_form(); ?>
	</div>
</div>
<div class="article-tags">
	<h3><?php the_field('articles_tags_title'); ?></h3>
	<div class="tag-cloud">
		<?php wp_tag_cloud( 'number=80' ); ?>
	</div>
</div>
<div class="article-indexes">
	<h3><?php the_field('articles_indexes_title'); ?></h3>
	<div class="row grid">
		<?php while( have_rows('articles_indexes') ): the_row(); ?>
			<div class="col-sm-3 grid-item">
	      <?php get_template_part('templates/content-snippet-index'); ?>
			</div>
			<?php endwhile; ?>
	</div>
</div>
<div class="article-categories">
	<h3><?php the_field('articles_categories_title'); ?></h3>
	<div class="row grid">
		<?php while( have_rows('articles_categories') ): the_row(); ?>
			<div class="col-sm-3 grid-item">
	      <?php get_template_part('templates/content-snippet-category'); ?>
			</div>
			<?php endwhile; ?>
	</div>
</div>
<div class="article-recent">
	<a href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>" class="btn btn-primary">
		<?php the_field('articles_recent_title'); ?> <i class="fa fa-angle-right"></i>
	</a>
</div>
