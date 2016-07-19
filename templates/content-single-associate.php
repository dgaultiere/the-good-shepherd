<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="col-sm-3">
      <?php if ( has_post_thumbnail() ) { ?>
  			<div class="featured-image">
  				<?php the_post_thumbnail( 'large' ); ?>
  			</div>
  		<?php } ?>
    </div>
    <div class="col-sm-9">
      <header>
        <h3><?php the_title(); ?></h3>
        <?php get_template_part('templates/entry-meta-associate'); ?>
        <?php if ( get_field('show_event_button') ) { ?>
          <a class="btn btn-primary btn-event" href="<?php the_field('event_register_url'); ?>">Register</a>
        <?php }; ?>
        <div class="clearfix"></div>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
  	  <div class="clearfix"></div>
      <footer>
        <?php get_template_part('templates/share-buttons'); ?>
      </footer>
      <?php comments_template('/templates/comments.php'); ?>
    </div>
  </article>
<?php endwhile; ?>
