<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
  } elseif ( is_post_type_archive('podcast') ) {
    return __('Podcast', 'sage');
  } elseif ( is_post_type_archive('video') ) {
    return __('Videos', 'sage');
  } elseif ( is_post_type_archive('product') ) {
    return __('Store', 'sage');
  } elseif ( is_post_type_archive('event') ) {
    return __('Events', 'sage');
  } elseif ( is_post_type_archive('associate') ) {
    // return __('Associates', 'sage');
    return get_field('associate_archive_title', 'option');
  } elseif (is_archive()) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return sprintf(__('Search results for &ldquo;%s&rdquo;', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Page Not Found', 'sage');
  } elseif ( is_singular('podcast') ) {
    return sprintf(__('<a href="/podcast">Podcast</a>: %s', 'sage'), get_the_title());
  } elseif ( is_singular('product') ) {
    return sprintf(__('<a href="/store">Store</a>: %s', 'sage'), get_the_title());
  } elseif ( is_singular('event') ) {
    return sprintf(__('<a href="/events">Events</a>: %s', 'sage'), get_the_title());
  } elseif ( is_singular('associate') ) {
    return sprintf(__('<a href="/associates">Soul Shepherds</a>: %s', 'sage'), get_the_title());
  // } elseif ( is_singular(array('podcast','video','product','event','associate')) ) {
  //   return get_post_type_object(get_post_type())->labels->singular_name . ': ' . get_the_title() ;
  } else {
    return get_the_title();
  }
}
