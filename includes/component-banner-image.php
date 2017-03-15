<?php
$background_image = get_sub_field('background_image');
$title = get_sub_field('title');
$caption = get_sub_field('caption');
$credit = get_sub_field('credit');
?>
<!-- add background styles to global.styl -->
<div style="background-image:url(<?php echo $background_image['url']; ?>)" class="carousel-slide banner-image">
  <?php if ( $title ): ?>
  	<h1 class="title"><?php echo $title; ?></h1>
  <?php endif; ?>
  <p class="meta">
    <?php if ( $caption ): ?>
      <span class="caption">
        <?php echo $caption; ?>
      </span>
    <?php endif; ?>
    <?php if ( $credit ): ?>
      <span class="credit">
        <?php echo $credit; ?>
      </span>
    <?php endif; ?>
  </p>
</div>