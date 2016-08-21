<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <div class="row">
        <div class="col-sm-10">
          <?php if ( get_field('event_host') ) { ?>
            <h4 class="entry-subtitle"><?php the_field('event_host_name'); ?></h4>
          <?php }; ?>
          <?php get_template_part('templates/entry-meta', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        </div>
        <div class="col-sm-2">
          <?php
            date_default_timezone_set('America/Los_Angeles');
            if ( get_field('show_event_button') && ( get_field('event_date',false,false) >= date('Ymd') ) ) {
          ?>
            <a class="btn btn-primary btn-event" href="<?php the_field('event_register_url'); ?>" target="_blank">Register</a>
          <?php }; ?>
        </div>
      </div>
    </header>
	  <?php if ( has_post_thumbnail() && get_field('post_header_background') != 'featured-image' && !is_singular('video') ) { ?>
			<div class="featured-image">
				<?php the_post_thumbnail( 'medium' ); ?>
			</div>
		<?php } ?>
    <div class="entry-content <?php if(the_field('text_style') !== 'sans-serif'){ ?>serif<?php }; ?>">
      <?php the_content(); ?>
    </div>
	  <div class="clearfix"></div>
    <footer>
      <div class="bottom-share-buttons">
        <?php get_template_part('templates/share-buttons'); ?>
      </div>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
