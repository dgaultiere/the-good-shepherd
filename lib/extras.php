<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Config;



/**
 * Add <body> classes
 */

function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (!Config\hide_sidebar()) {
    $classes[] = 'has-sidebar';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');



/**
 * Limit search post types
 */

function search_all($query) {
  if (!is_admin()) {
   if($query->is_search) {
     $query->set('post_type', array(
     'post',
     'article',
     'podcast',
     'video',
     'product'
     ));
   }
   return $query;
 }
}
add_filter('pre_get_posts', __NAMESPACE__ . '\\search_all');


 // function mySearchFilter($query) {
 // 	if (isset($_GET['post_type']) && $_GET['post_type'] == 'podcast') {
 // 		$post_type = 'podcast';
 // 	} else {
 // 		$post_type = 'any';
 // 	}
 //     if ($query->is_search) {
 //         $query->set('post_type', $post_type);
 //     };
 //     return $query;
 // };
 // add_filter('pre_get_posts','mySearchFilter');




/**
 * Clean up the_excerpt()
 */

function excerpt_more() {
	return '&hellip;';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');



/**
 * Add TGM Plugin Activation to theme
 */

require_once( get_stylesheet_directory() . '/plugins/tgmpa/tgmpa-config.php' );



/**
 * Add ACF plugin to theme
 */

// 1. Customize ACF path
add_filter('acf/settings/path', __NAMESPACE__ . '\\my_acf_settings_path');
function my_acf_settings_path( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/plugins/acf/';

    // return
    return $path;

}

// 2. Customize ACF dir
add_filter('acf/settings/dir', __NAMESPACE__ . '\\my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {

    // update path
    $dir = get_stylesheet_directory_uri() . '/plugins/acf/';

    // return
    return $dir;

}

// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( get_stylesheet_directory() . '/plugins/acf/acf.php' );

// 5. Include field groups
add_action('acf/include_fields', __NAMESPACE__ . '\\add_theme_field_groups');
function add_theme_field_groups() {
	require_once( get_stylesheet_directory() . '/plugins/acf/theme-field-groups.php' );
}


/**
 * Add support for ACF options page
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page([
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
    'position'    => '63.3',
		'icon_url'    => 'dashicons-welcome-widgets-menus',
		'redirect'		=> false
	]);

	acf_add_options_sub_page([
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	]);

	acf_add_options_sub_page([
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	]);

	acf_add_options_sub_page([
		'page_title' 	=> 'Blog & Posts Settings',
		'menu_title'	=> 'Blog & Posts',
		'parent_slug'	=> 'theme-general-settings',
	]);

	acf_add_options_sub_page([
		'page_title' 	=> 'Podcast Settings',
		'menu_title'	=> 'Podcast',
		'parent_slug'	=> 'theme-general-settings',
	]);

	acf_add_options_sub_page([
		'page_title' 	=> 'Videos Settings',
		'menu_title'	=> 'Videos',
		'parent_slug'	=> 'theme-general-settings',
	]);

	acf_add_options_sub_page([
		'page_title' 	=> 'Store Settings',
		'menu_title'	=> 'Store',
		'parent_slug'	=> 'theme-general-settings',
	]);

	acf_add_options_sub_page([
		'page_title' 	=> 'Events Settings',
		'menu_title'	=> 'Events',
		'parent_slug'	=> 'theme-general-settings',
	]);

	acf_add_options_sub_page([
		'page_title' 	=> 'Associates Settings',
		'menu_title'	=> 'Associates',
		'parent_slug'	=> 'theme-general-settings',
	]);

}



/**
 * Google Maps API
 */

// Google seems to have changed their terms or something so I'm disabling this for now...

// function google_maps_add_scripts() {
//   if (is_page_template('template-contact.php')) {
//     wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), '3', true );
//     wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/plugins/acf/google-maps.js', array('google-map', 'jquery'), '0.1', true );
//   }
// }
// add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\google_maps_add_scripts' );



/**
 * Add Bootstrap styles to comment form
 */

add_filter( 'comment_form_default_fields', __NAMESPACE__ . '\\bootstrap_comment_form_fields' );
function bootstrap_comment_form_fields( $fields ) {
	$commenter 	= wp_get_current_commenter();

	$req 				= get_option( 'require_name_email' );
	$aria_req 	= ( $req ? " aria-required='true'" : '' );
	$html5 			= current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;

	if(get_field('site_language', 'option') == "es-mx") {
		$author = 'Nombre *';
		$email = 'Correo *';
	} else {
		$author = 'Name *';
		$email = 'Email *';
	}

	$fields 		=  array(
		  'author' => '<div class="form-group comment-form-author">' . '<input class="form-control" id="author" name="author" placeholder="' . $author . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
		  'email'  => '<div class="form-group comment-form-email">' . '<input class="form-control" id="email" name="email" placeholder="' . $email . '" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
		  'url'    => ' '
	);

	return $fields;
}

add_filter( 'comment_form_defaults', __NAMESPACE__ . '\\bootstrap_comment_form' );
function bootstrap_comment_form( $args ) {
	if(get_field('site_language', 'option') == "es-mx") {
		$comment = 'Mensaje...';
	} else {
		$comment = 'Comment...';
	}

	$args['comment_field'] = '<div class="form-group comment-form-comment">
			<textarea class="form-control" id="comment" name="comment" placeholder="' . $comment . '" cols="45" rows="4" aria-required="true"></textarea>
		</div>';
	$args['class_submit'] = 'btn btn-default';

	return $args;
}



/**
 * Custom pagination with bootstrap styles
 */

add_filter( 'bootstrap_page_navi', __NAMESPACE__ . '\\page_navi' );
function page_navi( $before = '', $after = '' ) {
  global $wpdb, $wp_query;
  $request = $wp_query->request;
  $posts_per_page = intval(get_query_var('posts_per_page'));
  $paged = intval(get_query_var('paged'));
  $numposts = $wp_query->found_posts;
  $max_page = $wp_query->max_num_pages;
  if ( $numposts <= $posts_per_page ) { return; }
  if(empty($paged) || $paged == 0) {
    $paged = 1;
  }
  $pages_to_show = 7;
  $pages_to_show_minus_1 = $pages_to_show-1;
  $half_page_start = floor($pages_to_show_minus_1/2);
  $half_page_end = ceil($pages_to_show_minus_1/2);
  $start_page = $paged - $half_page_start;
  if($start_page <= 0) {
    $start_page = 1;
  }
  $end_page = $paged + $half_page_end;
  if(($end_page - $start_page) != $pages_to_show_minus_1) {
    $end_page = $start_page + $pages_to_show_minus_1;
  }
  if($end_page > $max_page) {
    $start_page = $max_page - $pages_to_show_minus_1;
    $end_page = $max_page;
  }
  if($start_page <= 0) {
    $start_page = 1;
  }

  echo $before.'<ul class="pagination">'."";
  if ($paged > 1) {
    $first_page_text = "<i class='fa fa-angle-double-left'></i>";
    echo '<li class="prev"><a href="'.get_pagenum_link().'" title="First">'.$first_page_text.'</a></li>';
  }

  $prevposts = get_previous_posts_link("<i class='fa fa-angle-left'></i>");
  if($prevposts) { echo '<li>' . $prevposts  . '</li>'; }

  for($i = $start_page; $i <= $end_page; $i++) {
    if($i == $paged) {
      echo '<li class="active"><a href="#">'.$i.'</a></li>';
    } else {
      echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
    }
  }

  $nextposts = get_next_posts_link("<i class='fa fa-angle-right'></i>");
  if($nextposts) { echo '<li class="">' . $nextposts  . '</li>'; }

  if ($end_page < $max_page) {
    $last_page_text = '<i class="fa fa-angle-double-right"></i>';
    echo '<li class="next"><a href="'.get_pagenum_link($max_page).'" title="Last">'.$last_page_text.'</a></li>';
  }
  echo '</ul>'.$after."";
}



/**
 * Custom shortcodes
 */

// Callout
function callout_text_shortcode( $atts , $content = null ) {
	return '<div class="callout">' . $content . '</div>';
}
add_shortcode( 'callout', __NAMESPACE__ . '\\callout_text_shortcode' );

// Button (regular)
function button_shortcode( $atts , $content = null ) {
  return '<div class="btn">' . $content . '</div>';
}
add_shortcode( 'button', __NAMESPACE__ . '\\button_shortcode' );

// Button (primary)
function button_primary_shortcode( $atts , $content = null ) {
  return '<div class="btn btn-primary">' . $content . '</div>';
}
add_shortcode( 'button-primary', __NAMESPACE__ . '\\button_primary_shortcode' );





/**
 * Function to limit string word length
 */

function string_limit_words($string, $word_limit) {
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words) . '...';
}
add_filter('string_limit_words', __NAMESPACE__ . '\\string_limit_words');



/**
 * Ensure TinyMCE uses TypeKit fonts
 */

add_filter('mce_external_plugins', __NAMESPACE__ . '\\tomjn_mce_external_plugins');
function tomjn_mce_external_plugins($plugin_array){
  $plugin_array['typekit']  =  get_template_directory_uri() . '/plugins/typekit-tinymce/typekit.tinymce.js';
    return $plugin_array;
}



/**
 * Rename post to "blog post"
 */

function change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Blog Posts';
    $labels->singular_name = 'Blog Post';
    $labels->add_new = 'New Blog Post';
    $labels->add_new_item = 'Add Blog Post';
    $labels->edit_item = 'Edit Blog Post';
    $labels->new_item = 'Blog Post';
    $labels->view_item = 'View Blog Post';
    $labels->search_items = 'Search Blog Posts';
    $labels->not_found = 'No blog posts found';
    $labels->not_found_in_trash = 'No blog posts found in trash';
    $labels->all_items = 'All Blog Posts';
    $labels->menu_name = 'Blog Posts';
    $labels->name_admin_bar = 'Blog Post';
}
add_action( 'init', __NAMESPACE__ . '\\change_post_object' );




/**
 * Add custom post types
 */

 add_action( 'init', __NAMESPACE__ . '\\create_post_type' );
 function create_post_type() {
   register_post_type( 'article',
     array(
       'labels' => array(
         'name' => __( 'Articles' ),
         'singular_name' => __( 'Article' ),
         'add_new' => __( 'New Article' ),
         'add_new_item' => __( 'Add New Article' ),
         'edit_item' => __( 'Edit Article' ),
         'new_item' => __( 'New Article' ),
         'view_item' => __( 'View Article' ),
         'search_items' => __( 'Search Articles' ),
         'all_items' => __( 'All Articles' )
      ),
       'public' => true,
       'has_archive' => true,
       'rewrite' => array('slug' => 'articles'),
       'menu_icon' => 'dashicons-welcome-edit-page',
       'supports' => array('title','editor','thumbnail','excerpt','revisions','page-attributes', 'comments'),
     )
   );
   register_post_type( 'podcast',
     array(
       'labels' => array(
         'name' => __( 'Podcast' ),
         'singular_name' => __( 'Podcast' ),
         'add_new' => __( 'New Podcast' ),
         'add_new_item' => __( 'Add New Podcast' ),
         'edit_item' => __( 'Edit Podcast' ),
         'new_item' => __( 'New Podcast' ),
         'view_item' => __( 'View Podcast' ),
         'search_items' => __( 'Search Podcasts' ),
         'all_items' => __( 'All Podcasts' )
      ),
       'public' => true,
       'has_archive' => true,
       'rewrite' => array('slug' => 'podcast'),
       'menu_icon' => 'dashicons-microphone',
       'supports' => array('title','editor','thumbnail','excerpt','revisions','page-attributes', 'comments'),
     )
   );
   register_post_type( 'video',
     array(
       'labels' => array(
         'name' => __( 'Videos' ),
         'singular_name' => __( 'Video' ),
         'add_new' => __( 'New Video' ),
         'add_new_item' => __( 'Add New Video' ),
         'edit_item' => __( 'Edit Video' ),
         'new_item' => __( 'New Video' ),
         'view_item' => __( 'View Video' ),
         'search_items' => __( 'Search Videos' ),
         'all_items' => __( 'All Videos' )
      ),
       'public' => true,
       'has_archive' => true,
       'rewrite' => array('slug' => 'videos'),
       'menu_icon' => 'dashicons-video-alt2',
       'supports' => array('title','editor','thumbnail','excerpt','revisions','page-attributes', 'comments'),
     )
   );
   register_post_type( 'product',
     array(
       'labels' => array(
         'name' => __( 'Store' ),
         'singular_name' => __( 'Product' ),
         'add_new' => __( 'New Product' ),
         'add_new_item' => __( 'Add New Product' ),
         'edit_item' => __( 'Edit Product' ),
         'new_item' => __( 'New Product' ),
         'view_item' => __( 'View Product' ),
         'search_items' => __( 'Search Products' ),
         'all_items' => __( 'All Products' )
      ),
       'public' => true,
       'has_archive' => true,
       'rewrite' => array('slug' => 'store'),
       'menu_icon' => 'dashicons-store',
       'supports' => array('title','editor','thumbnail','excerpt','revisions','page-attributes', 'comments'),
     )
   );
   register_post_type( 'event',
     array(
       'labels' => array(
         'name' => __( 'Events' ),
         'singular_name' => __( 'Event' ),
         'add_new' => __( 'New Event' ),
         'add_new_item' => __( 'Add New Event' ),
         'edit_item' => __( 'Edit Event' ),
         'new_item' => __( 'New Event' ),
         'view_item' => __( 'View Event' ),
         'search_items' => __( 'Search Events' ),
         'all_items' => __( 'All Events' )
       ),
       'public' => true,
       'has_archive' => true,
       'rewrite' => array('slug' => 'events'),
       'menu_icon' => 'dashicons-calendar-alt',
       'supports' => array('title','editor','thumbnail','excerpt','revisions','page-attributes', 'comments'),
     )
   );
   register_post_type( 'associate',
     array(
       'labels' => array(
         'name' => __( 'Associates' ),
         'singular_name' => __( 'Associate' ),
         'add_new' => __( 'New Associate' ),
         'add_new_item' => __( 'Add New Associate' ),
         'edit_item' => __( 'Edit Associate' ),
         'new_item' => __( 'New Associate' ),
         'view_item' => __( 'View Associate' ),
         'search_items' => __( 'Search Associates' ),
         'all_items' => __( 'All Associates' )
       ),
       'public' => true,
       'has_archive' => true,
       'rewrite' => array('slug' => 'associates'),
       'menu_icon' => 'dashicons-admin-users',
       'supports' => array('title','editor','thumbnail','excerpt','revisions','page-attributes', 'comments'),
     )
   );
   register_post_type( 'salt',
     array(
       'labels' => array(
         'name' => __( 'SaLT Pages' ),
         'singular_name' => __( 'SaLT Page' )
       ),
       'public' => true,
       'has_archive' => false,
       'menu_icon' => 'dashicons-welcome-learn-more',
       'show_in_admin_bar' => false,
       'supports' => array('title','editor','thumbnail','excerpt','revisions','page-attributes', 'comments'),
     )
   );
 }



 /**
  * Customize taxonomies
  */

// add_action( 'init', __NAMESPACE__ . '\\create_custom_taxonomies', 0 );
// function create_custom_taxonomies() {
//   register_taxonomy(
//     'articles_categories',
//     'article',
//     array(
//       'labels' => array(
//         'name' => 'Article Categories',
//         'singular_name' => 'Article Category'
//       ),
//       'show_ui' => true,
//       'show_tagcloud' => false,
//       'hierarchical' => true
//     )
//   );
//   register_taxonomy(
//     'article_tags',
//     'article',
//     array(
//       'labels' => array(
//         'name' => 'Article Tags',
//         'singular_name' => 'Article Tag'
//       ),
//       'show_ui' => true,
//       'show_tagcloud' => true,
//       'hierarchical' => false
//     )
//   );
//   register_taxonomy(
//     'podcast_tags',
//     'podcast',
//     array(
//       'labels' => array(
//         'name' => 'Podcast Tags',
//         'singular_name' => 'Podcast Tag'
//       ),
//       'show_ui' => true,
//       'show_tagcloud' => true,
//       'hierarchical' => false
//     )
//   );
//   register_taxonomy(
//     'video_tags',
//     'video',
//     array(
//       'labels' => array(
//         'name' => 'Video Tags',
//         'singular_name' => 'Video Tag'
//       ),
//       'show_ui' => true,
//       'show_tagcloud' => true,
//       'hierarchical' => false
//     )
//   );
// }

add_action( 'init', __NAMESPACE__ . '\\extend_post_taxonomies', 0 );
function extend_post_taxonomies() {
  register_taxonomy_for_object_type('post_tag','article');

  // register_taxonomy_for_object_type(
  //   array(
  //     'post_tag' => array(
  //       'article',
  //       'podcast',
  //       'video'
  //     ),
  //     'post_category' => array(
  //       'article',
  //       'podcast',
  //       'video'
  //     )
  //   )
  // );
}



/**
 * Add custom image sizes
 */

add_action( 'after_setup_theme', __NAMESPACE__ . '\\create_custom_image_sizes' );
function create_custom_image_sizes() {
	add_image_size( 'medium-banner', 768, 360, array( 'center', 'center' ) );
	add_image_size( 'extra-large', 1920, 1080, false );
	add_image_size( 'page-header', 1920, 480, array( 'center', 'center' ) );
}




 /**
 * Lightens/darkens a given colour (hex format), returning the altered colour in hex format.
 *
 * @param str $hex Colour as hexadecimal (with or without hash);
 * @percent float $percent Decimal ( 0.2 = lighten by 20%(), -0.4 = darken by 40%() )
 * @return str Lightened/Darkend colour as hexadecimal (with hash);
 */

function color_luminance( $hex, $percent ) {

	// validate hex string
	$hex = preg_replace( '/[^0-9a-f]/i', '', $hex );
	$new_hex = '#';

	if ( strlen( $hex ) < 6 ) {
		$hex = $hex[0] + $hex[0] + $hex[1] + $hex[1] + $hex[2] + $hex[2];
	}

	// convert to decimal and change luminosity
	for ($i = 0; $i < 3; $i++) {
		$dec = hexdec( substr( $hex, $i*2, 2 ) );
		$dec = min( max( 0, $dec + $dec * $percent ), 255 );
		$new_hex .= str_pad( dechex( $dec ) , 2, 0, STR_PAD_LEFT );
	}

	return $new_hex;
}
add_filter('color_luminance', __NAMESPACE__ . '\\color_luminance');




/**
 * Google Analytics tracking code
 */

function include_GA() {
$analytics_id = get_field('google_analytics_id','option');
?>
  <script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create', <?php echo $analytics_id ?> ,'auto');ga('send','pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
<?php }
add_action('wp_footer', __NAMESPACE__ . '\\include_GA', 10);



/**
 * FitVids
 */

function fit_vids() {
  wp_enqueue_script( 'fit-vids', get_template_directory_uri() . '/plugins/fitvids/jquery.fitvids.js', array('jquery'), 1.0, true );
  wp_enqueue_script( 'fit-vids-target', get_template_directory_uri() . '/plugins/fitvids/fitvids-targets.js', array('fit-vids','jquery'), 1.0, true );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\fit_vids' );



/**
 * Register support for Gutenberg wide images in your theme
 */

function gutenberg_theme_setup() {
  add_theme_support( 'align-wide' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support( 'editor-styles' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\gutenberg_theme_setup' );
