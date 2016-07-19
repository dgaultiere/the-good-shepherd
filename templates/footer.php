<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
	<?php if(get_field('enable_social_links', 'option')) { ?>
	  <div class="container">
	  	<div class="widget social-widget">
	  		<h3><?php the_field('social_links_title', 'option'); ?></h3>
		  	<ul>
	  			<?php while( have_rows('setup_social_links', 'option') ): the_row(); ?>
		  			<li><a href="<?php the_sub_field('social_links_url', 'option'); ?>" class="fa fa-<?php the_sub_field('social_links_icon', 'option'); ?>" target="_blank"></a></li>
					<?php endwhile; ?>
		  	</ul>
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
  			&nbsp;&#124;&nbsp;
  		<?php if(get_field('site_language', 'option') == "es-mx") { ?>
  			Un asociado de 
			<?php } else { ?>
				An associate of
			<?php } ?> 
				<a href="http://www.soulshepherding.org/" title="Soul Shepherding, for you and your ministry" target="_blank">Soul Shepherding</a>
  	</p>
  </div>
</footer>