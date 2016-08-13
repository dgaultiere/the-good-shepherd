<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  $post_type = get_post_type();
  $post_type_name = get_post_type_object($post_type)->labels->name;

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
    return get_field('associate_archive_title', 'option');
  } elseif (is_archive()) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return sprintf(__('Search results for &ldquo;%s&rdquo;', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Page Not Found', 'sage');
  } elseif ( is_singular() ) {
    return '<a href="' . get_post_type_archive_link($post_type) . '">' . $post_type_name . '</a>: ' . get_the_title();
  } else {
    return get_the_title();
  }
}
