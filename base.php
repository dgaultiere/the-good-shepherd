<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap <?php the_field('text_style'); ?>" role="document">
	    <?php if ( is_page_template('template-home.php') ) : ?>
	    	<div class="container-fluid">
	    <?php else : ?>
		    <div class="container-fluid">
					<?php get_template_part('templates/page', 'header'); ?>
		    </div>
				<div class="container">
	   	<?php endif; ?>
		      <div class="content row">
            <?php if ( is_post_type_archive() ) : ?>
              <div class="col-sm-12 archive-top-content">
                <?php
                  $type = get_post_type();
                  the_field($type . '_top_content', 'option');
                ?>
              </div>
            <?php endif; ?>
		        <?php if (get_field('hide_post_sidebar','option') && is_singular(array('post','event','video','podcast','associate'))) : ?>
			        <main class="main col-sm-10 col-sm-offset-1" role="main">
			          <?php include Wrapper\template_path(); ?>
			        </main><!-- /.main -->
		        <?php elseif (Config\display_sidebar()) : ?>
			        <main class="main col-sm-9" role="main">
			          <?php include Wrapper\template_path(); ?>
			        </main><!-- /.main -->
		          <aside class="sidebar col-sm-3" role="complementary">
		            <?php include Wrapper\sidebar_path(); ?>
		          </aside><!-- /.sidebar -->
		        <?php else: ?>
			        <main class="main col-sm-12" role="main">
			          <?php include Wrapper\template_path(); ?>
			        </main><!-- /.main -->
		        <?php endif; ?>
		      </div><!-- /.content -->
				</div><!-- /.container -->
    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
