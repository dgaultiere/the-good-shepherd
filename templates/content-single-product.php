<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="col-sm-3">
      <?php if ( has_post_thumbnail() ) { ?>
  			<div class="featured-image">
  				<?php the_post_thumbnail( 'medium' ); ?>
  			</div>
  		<?php } ?>
      <header>
        <h4 class="entry-subtitle"><?php the_field('product_author'); ?></h4>
        <?php get_template_part('templates/entry-meta-product'); ?>
        <div class="clearfix"></div>
        <a class="btn btn-primary btn-product" href="<?php the_field('product_purchase_url'); ?>" target="_blank">Purchase</a>
      </header>
    </div>
    <div class="col-sm-9">
      <div class="entry-content <?php if(the_field('text_style') !== 'sans-serif'){ ?>serif<?php }; ?>">
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
