<?php
  if(get_field('enable_post_share', 'option')) {

    // Post info for sharing
    $share_title = utf8_uri_encode( get_the_title(), 99 );
    $share_url = urlencode( get_permalink($post->ID) );
    $share_image = urlencode( get_site_url() . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) );
    $share_description = utf8_uri_encode('I just found this ' . get_post_type($post->ID) . ' on ' . get_bloginfo('name') . ' and thought you would enjoy it.', 999);
?>
  <div class="social-share-container">
    <h4><?php the_field('post_share_title', 'option'); ?></h4>
    <ul>
      <?php if ( in_array( 'facebook', get_field('post_share_buttons', 'option') ) ) { ?>
        <li>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url ?>" target="_blank" class="facebook-icon">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
      <?php }; ?>
      <?php if ( in_array( 'twitter', get_field('post_share_buttons', 'option') ) ) { ?>
        <li>
          <a href="https://twitter.com/intent/tweet?text=<?php echo $share_title . '%20' . $share_url ?>" target="_blank" class="twitter-icon">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
      <?php }; ?>
      <?php if ( in_array( 'pinterest', get_field('post_share_buttons', 'option') ) ) { ?>
        <li>
          <a href="http://pinterest.com/pin/create/button/?url=<?php echo $share_url ?>&media=<?php echo $share_image ?>&description=<?php echo $share_title ?>" target="_blank" class="pinterest-icon">
            <i class="fa fa-pinterest"></i>
          </a>
        </li>
      <?php }; ?>
      <?php if ( in_array( 'email', get_field('post_share_buttons', 'option') ) ) { ?>
        <li>
          <a href="mailto:?subject=<?php echo $share_title ?>&body=<?php echo $share_description . '%0A%0A' . $share_url ?>" target="_blank" class="email-icon">
            <i class="fa fa-envelope"></i>
          </a>
        </li>
      <?php }; ?>
    </ul>
  </div>
<?php } ?>
