<?php
/**
 * Template Name: Find An Article
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
	<h3><?php the_field('articles_recent_title'); ?></h3>
	<div class="row grid">
	  <?php
			$args = array(
				'posts_per_page' => '4'
			);
			// the query
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :
				// the loop
				while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
	    <div class="col-sm-3 grid-item">
	      <?php get_template_part('templates/content-snippet-post'); ?>
	    </div>
		<?php
			endwhile;// end of the loop
				wp_reset_postdata();
			else :
				_e( 'Whoops, something went wrong. Please try again later.' );
			endif;
		?>
	</div>
</div>
