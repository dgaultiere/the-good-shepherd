<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
	<?php if(get_field('enable_social_links', 'option')) { ?>
	  <div class="container">
      <div class="widget social-widget">
        <h3><?php the_field('social_links_title', 'option'); ?></h3>
          <?php get_template_part('templates/social-links'); ?>
      </div>
	  </div>
	<?php } ?>
  <div class="container">
  	<p class="copyright">
  		<?php if(get_field('site_language', 'option') == "es-mx") { ?>
  			Derechos Reservados
			<?php } else { ?>
				Copyright
			<?php } ?>
  		&copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?>
  	</p>
  </div>
</footer>
