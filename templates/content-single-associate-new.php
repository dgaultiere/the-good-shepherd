<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
      <div class="featured-image">
        <?php the_post_thumbnail( 'medium' ); ?>
      </div>
    <?php } ?>
    <header>
      <h4 class="entry-subtitle"><?php the_field('associate_title'); ?></h4>
      <?php get_template_part('templates/entry-meta', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    </header>
    <div class="entry-content <?php if(the_field('text_style') !== 'sans-serif'){ ?>serif<?php }; ?>">
      <?php the_content(); ?>
    </div>
	  <div class="clearfix"></div>
    <footer>
      <?php get_template_part('templates/share-buttons'); ?>
    </footer>
  </article>
<?php endwhile; ?>
