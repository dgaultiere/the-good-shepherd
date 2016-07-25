<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="navbar navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-menu">
		  		<?php if(get_field('site_language', 'option') == "es-mx") { ?>
		  			Menú
					<?php } else { ?>
						Menu
					<?php } ?>
        </span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
	      <?php if(get_field('use_logo_title', 'option')) { ?>
		      <img src="<?php the_field('site_logo', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
	      <?php } else { ?>
	      	<?php bloginfo('name'); ?>
	      <?php } ?>
      </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <div class="social-links-above">
        <?php get_template_part('templates/social-links'); ?>
      </div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
      <div class="social-links-below">
        <?php get_template_part('templates/social-links'); ?>
      </div>
    </nav>
  </div>
</header>
