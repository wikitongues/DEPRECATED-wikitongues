<?php
$background_image = get_sub_field('background_image');
$title = get_sub_field('title');
$caption = get_sub_field('caption');
?>
<!-- add background styles to global.styl -->
<div style="background:url(<?php echo $background_image['url']; ?>) center center no-repeat; background-size:cover !important; ?>" class="carousel-slide banner-image">
<?php if ( $title ): ?>
	<h1 class="title"><?php echo $title; ?></h1>
<?php endif; ?>
<?php if ( $caption ): ?>
    	<p class="caption"><span><?php echo $caption; ?></span></p>
<?php endif; ?>
</div>