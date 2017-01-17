<?php
$text = get_sub_field('text');
$background_color = get_sub_field('background_color');
?>
<!-- add background styles to global.styl -->
<div style="background:<?php echo $background_color; ?>" class="carousel-slide banner-text">
<?php if( is_front_page() ): ?>
<i class="fa fa-chevron-right slide-forward" aria-hidden="true"></i>
<?php endif; ?>
<?php if( $text ): ?>	
	<div class="content-wrap">
		<h1><?php echo $text; ?></h1>
	</div>
<?php endif; ?>
</div>