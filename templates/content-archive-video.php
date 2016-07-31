<article <?php post_class(); ?>>
  <div class="entry-content">
	  <header>
		  <?php if ( has_post_thumbnail() ) { ?>
				<div class="featured-image">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'large' ); ?>
					</a>
				</div>
			<?php } ?>
	    <h3 class="entry-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
	    <?php get_template_part('templates/entry-meta-video'); ?>
	  </header>
    <?php if ( get_field('video_show_excerpt', 'option') ) { ?>
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
