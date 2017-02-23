<?php
$video_source = get_sub_field('video_source');
$video_poster = get_sub_field('video_poster');
$video_caption = get_sub_field('caption');
?>
<div class="carousel-slide banner-video" style="background:url(<?php echo $video_poster; ?>) center center no-repeat;">
	<?php if( is_front_page() ): ?>
	<?php endif; ?>
	<video src="<?php echo $video_source; ?>" id="video" autoplay="false" loop="true" poster="<?php echo $video_poster; ?>">
	Sorry! Looks like your browser doesn't support video. <!-- upgrade notice -->
	</video>
	<h1 class="video-caption"><?php echo $video_caption; ?></h1>
</div>