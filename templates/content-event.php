<article <?php post_class(); ?>>
  <div class="entry-content">
	  <header>
	    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <?php get_template_part('templates/entry-meta-event'); ?>
	  </header>
	  <div class="entry-summary">
		  <?php if ( has_post_thumbnail() ) { ?>
				<div class="featured-image">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'medium' ); ?>
					</a>
				</div>
			<?php } ?>
	    <?php the_excerpt(); ?>
	    <?php if(get_field('site_language', 'option') == "es-mx") { ?>
			  	<div class="read-more-link"><a href="<?php the_permalink(); ?>">Más Info</a></div>
			<?php } else { ?>
			  	<div class="read-more-link"><a href="<?php the_permalink(); ?>">More Info</a></div>
			<?php } ?>
	  </div>
	  <div class="clearfix"></div>
  </div>
</article>
