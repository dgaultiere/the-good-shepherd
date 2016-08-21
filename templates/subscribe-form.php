<?php if( get_field('show_subscribe_form','option') ) {?>
  <div class="subscribe-form">
    <h5><?php the_field('subscribe_form_title','option'); ?></h5>
    <?php if( get_field('subscribe_form_description','option') ) { ?>
      <p><?php the_field('subscribe_form_description','option'); ?></p>
    <?php }; ?>
    <?php the_field('subscribe_form_code','option'); ?>
  </div>
<?php } else { ?>
  <hr>
<?php }; ?>
