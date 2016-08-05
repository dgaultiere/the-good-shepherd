<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php get_template_part('templates/entry-meta', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    </header>
	  <?php if ( has_post_thumbnail() ) { ?>
			<div class="featured-image">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>
		<?php } ?>
    <div class="entry-content <?php if(the_field('text_style') !== 'sans-serif'){ ?>serif<?php }; ?>">
      <?php the_content(); ?>
    </div>
	  <div class="clearfix"></div>
    <footer>
      <?php get_template_part('templates/share-buttons'); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
