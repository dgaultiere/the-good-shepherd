<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Icons -->
    <link rel="icon" href="<?php the_field('favicon','option'); ?>">
    <link rel="apple-touch-icon" href="<?php the_field('apple_touch_icon','option'); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php the_field('apple_touch_icon','option'); ?>">

    <?php wp_head(); ?>

    <!-- Web Fonts -->
    <script>
      (function(d) {
        var config = {
          kitId: 'ifd6ekz',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
    <!-- <script src="https://use.typekit.net/ifd6ekz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script> -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

		<!-- Theme Styles -->
		<style type="text/css">
			<?php
			/* Link Color*/
			$link_color = get_field('link_color','option');

			/* Accent Color */
			$accent_color = get_field('accent_color','option');

			/* Nav Highligh Color */
			$nav_highlight = get_field('nav_highlight','option');

			/* Page Header Color */
			$page_header_color = get_field('page_header_color','option');

			/* Footer Background Color */
			$footer_background_color = get_field('footer_background_color','option');

			?>

			/** Links **/
			a {
				color: <?php echo $link_color?>;
			}

			a:hover,
			a:active,
			a:focus {
				color: <?php echo $link_color?>;
			}

      /** Headings **/
      .entry-title a:hover,
      .entry-title a:active,
      .entry-title a:focus {
  				color: <?php echo $link_color?>;
      }

			/** Navbar **/
			.navbar-brand:hover,
			.navbar-brand:active,
			.navbar-brand:focus,
			.navbar-nav li a:hover,
			.navbar-nav li a:active,
			.navbar-nav li a:focus,
			.navbar-nav .active a,
			.navbar-nav .active .dropdown-menu a:hover,
			.navbar-nav .active .dropdown-menu a:active,
			.navbar-nav .active .dropdown-menu a:focus,
			.navbar-nav .active .dropdown-menu .active a,
			.navbar-toggle:hover,
			.navbar-toggle:active,
			.navbar-toggle:focus,
			.navbar-toggle:hover .icon-menu,
			.navbar-toggle:active .icon-menu,
			.navbar-toggle:focus .icon-menu {
				color: <?php echo $nav_highlight?>;
			}

			.navbar-nav .open a,
			.navbar-nav .open a:hover,
			.navbar-nav .open a:focus {
				border-color: <?php echo $nav_highlight?>;
			}

			.navbar-toggle:hover .icon-bar,
			.navbar-toggle:active .icon-bar,
			.navbar-toggle:focus .icon-bar {
				background-color: <?php echo $nav_highlight?>;
			}

      .navbar .social-links .fa,
    	.navbar .social-links .fa,
    	.navbar .social-links .fa {
  			color: <?php echo $nav_highlight?>;
      }

      .navbar .social-links .fa:hover,
    	.navbar .social-links .fa:active,
    	.navbar .social-links .fa:focus {
  			color: <?php echo Roots\Sage\Extras\color_luminance($nav_highlight,-.15); ?>;
      }

			/** Buttons **/
			.more-button a:active,
			.more-button a:focus,
			.more-button a:hover,
			.read-more-link a:active,
			.read-more-link a:focus,
			.read-more-link a:hover,
			.view-all a:active,
			.view-all a:focus,
			.view-all a:hover,
			.btn:active,
			.btn:focus,
			.btn:hover,
			.btn-primary:active,
			.btn-primary:focus,
			.btn-primary:hover,
			.subscribe-form .button:active,
			.subscribe-form .button:focus,
			.subscribe-form .button:hover,
      input[type=submit]:active,
      input[type=submit]:focus,
      input[type=submit]:hover {
				background-color:  <?php echo $accent_color?>;
				border-color: <?php echo $accent_color?>;
			}

			.btn-primary,
      .btn-primary a,
      .subscribe-form .button,
      input[type=submit] {
				color: <?php echo $accent_color?>;
				border-color: <?php echo $accent_color?>;
			}

      .secondary-link:hover,
      .secondary-link:active,
      .secondary-link:focus {
        border-color: <?php echo $accent_color?>;
      }

      /** Button Styles for Homepage 2 **/
      .page-template-template-home-2 .section .btn-primary {
        background-color: <?php echo $accent_color?>;
      }

      .page-template-template-home-2 .section .btn-primary:hover,
      .page-template-template-home-2 .section .btn-primary:active,
      .page-template-template-home-2 .section .btn-primary:focus {
        background-color: <?php echo Roots\Sage\Extras\color_luminance($accent_color,-.15) ?>;
      }

			/** Forms & Inputs **/
			.btn:focus,
			.form-control:focus,
			input:focus,
			textarea:focus {
				border-color: <?php echo $accent_color?>;
			}

			/** Icons **/
			.snippet-metadata i,
			.entry-meta-container i {
				color: <?php echo $accent_color?>;
			}

			/** Footer **/
			footer.content-info {
				background-color: <?php echo $footer_background_color?>;
			}

			footer.content-info .social-links .fa {
				color: <?php echo $footer_background_color?>;
			}

			/** Pagination **/
			.pagination .active>a,
			.pagination .active>a:focus,
			.pagination .active>a:hover {
				background-color: <?php echo $accent_color?>;
				border-color: <?php echo $accent_color?>;
			}

			.pagination li a {
				color: <?php echo $accent_color?>;
			}

			.pagination>li>a:focus,
			.pagination>li>a:hover {
				color: <?php echo $accent_color?>;
				background-color: transparent;
				border-color: <?php echo $accent_color?>;
			}
		</style>
  </head>
