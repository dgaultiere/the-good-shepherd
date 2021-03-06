<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php if ( is_singular('associate') ) { ?>
        <h4 class="entry-subtitle"><?php the_field('associate_title'); ?></h4>
      <?php }; ?>
      <?php get_template_part('templates/entry-meta', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    </header>
	  <?php if ( has_post_thumbnail() && get_field('featured_image_layout') == 'inline' && !is_singular('video') ) { ?>
			<div class="featured-image">
				<?php the_post_thumbnail( 'medium_large' ); ?>
			</div>
		<?php }; ?>
    <div class="entry-content <?php if(the_field('text_style') !== 'sans-serif'){ ?>serif<?php }; ?>">
      <?php the_content(); ?>
    </div>
	  <div class="clearfix"></div>
    <footer>
      <div class="bottom-share-buttons">
        <?php get_template_part('templates/share-buttons'); ?>
      </div>
      <?php if ( is_singular(array('post','podcast')) && get_field('show_subscribe_form','option') ) { ?>
        <?php get_template_part('templates/subscribe-form'); ?>
      <?php } else { ?>
        <hr>
      <?php }; ?>
    </footer>
    <?php if ( !is_singular('associate') ) { ?>
      <?php comments_template('/templates/comments.php'); ?>
    <?php }; ?>
  </article>
<?php endwhile; ?>
