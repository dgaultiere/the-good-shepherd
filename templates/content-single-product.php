<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="col-sm-3">
      <?php if ( has_post_thumbnail() ) { ?>
  			<div class="featured-image">
  				<?php the_post_thumbnail( 'medium' ); ?>
  			</div>
  		<?php } ?>
    </div>
    <div class="col-sm-9">
      <header>
        <h3><?php the_title(); ?></h3>
        <?php get_template_part('templates/entry-meta-product'); ?>
        <a class="btn btn-primary btn-product" href="<?php the_field('product_purchase_url'); ?>" target="_blank">Purchase</a>
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
