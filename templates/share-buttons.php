<?php if(get_field('enable_post_share', 'option')) { ?>
  <div class="social-share-container">
    <h3><?php the_field('post_share_title', 'option'); ?></h3>
    <ul>
      <?php if ( in_array( 'facebook', get_field('post_share_buttons', 'option') ) ) { ?>
        <li>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>" target="_blank" class="facebook-icon">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
      <?php }; ?>
      <?php if ( in_array( 'twitter', get_field('post_share_buttons', 'option') ) ) { ?>
        <li>
          <a href="https://twitter.com/intent/tweet?text=<?php echo get_permalink($post->ID); ?>" target="_blank" class="twitter-icon">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
      <?php }; ?>
      <?php if ( in_array( 'pinterest', get_field('post_share_buttons', 'option') ) ) { ?>
        <li>
          <a href="http://pinterest.com/pin/create/button/?url=<?php echo get_permalink($post->ID); ?>" target="_blank" class="pinterest-icon">
            <i class="fa fa-pinterest"></i>
          </a>
        </li>
      <?php }; ?>
      <?php if ( in_array( 'email', get_field('post_share_buttons', 'option') ) ) { ?>
        <li>
          <a href="mailto:?subject=<?php echo get_the_title(); ?>&body=<?php if(get_field('site_language', 'option') == "es-mx") { ?>Acabo%20de%20leer%20este%20gran%20artículo%20sobre%20<?php echo get_bloginfo('name'); ?>%20y%20pensé%20que%20podría%20disfrutar%20de%20ella.<?php } else { ?>I%20just%20read%20this%20great%20article%20on%20<?php echo get_bloginfo('name'); ?>%20and%20thought%20you%20would%20enjoy%20it.<?php } ?>%0A%0A<?php echo get_permalink($post->ID); ?>" target="_blank" class="email-icon">
            <i class="fa fa-envelope"></i>
          </a>
        </li>
      <?php }; ?>
    </ul>
  </div>
<?php } ?>
