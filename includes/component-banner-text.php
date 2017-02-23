<?php
$text = get_sub_field('text');
$background_color = get_sub_field('background_color');
?>
<!-- add background styles to global.styl -->
<div style="background:<?php echo $background_color; ?>" class="carousel-slide banner-text">
<?php if( is_front_page() ): ?>
<?php endif; ?>
<?php if( $text ): ?>
  <div class="content-wrap">
    <!-- <h1><?php echo $text; ?></h1> -->
    <h1>In the next eighty years, 3,000 languages are expected to disappear.
      <span>We won't let that happen.</span>
      <!-- <a href="donate">Stand with us</a> -->
    </h1>
  </div>
<?php endif; ?>
</div>