<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php get_template_part('templates/entry-meta-video'); ?>
    </header>
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
