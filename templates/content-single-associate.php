<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="col-sm-3">
      <?php if ( has_post_thumbnail() ) { ?>
  			<div class="featured-image">
  				<?php the_post_thumbnail( 'thumbnail' ); ?>
  			</div>
  		<?php } ?>
    </div>
    <div class="col-sm-9">
      <header>
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <h4 class="entry-subtitle"><?php the_field('associate_title'); ?></h4>
        <?php get_template_part('templates/entry-meta-associate'); ?>
        <div class="clearfix"></div>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
  	  <div class="clearfix"></div>
      <footer>
        <?php if( get_field('associate_show_sharing_buttons', 'option') ) { ?>
          <?php get_template_part('templates/share-buttons'); ?>
        <?php } ?>
      </footer>
      <?php if( get_field('associate_show_comments', 'option') ) { ?>
        <?php comments_template('/templates/comments.php'); ?>
      <?php } ?>
    </div>
  </article>
<?php endwhile; ?>
