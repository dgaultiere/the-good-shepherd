<article <?php post_class(); ?>>
  <div class="entry-content">
	  <header>
		  <?php if ( has_post_thumbnail() ) { ?>
				<div class="featured-image">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'thumbnail' ); ?>
					</a>
				</div>
			<?php } ?>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h4 class="entry-subtitle"><?php the_field('associate_title'); ?></h4>
	    <?php get_template_part('templates/entry-meta-associate'); ?>
	  </header>
    <?php if ( get_field('associate_show_excerpt', 'option') ) { ?>
  	  <div class="entry-summary">
  	    <?php
          $excerpt = get_the_excerpt();
          echo Roots\Sage\Extras\string_limit_words($excerpt,15);
        ?>
  	  </div>
    <?php }; ?>
	  <div class="clearfix"></div>
  </div>
</article>
