<?php

$title = get_sub_field('title');
$secondary_title = get_sub_field('secondary_title');
$text = get_sub_field('text');
$image = get_sub_field('image');
$linked_page = get_sub_field('linked_page'); ?>

<div class="component media image">
	<?php if ( $linked_page ): ?>
	<a href="<?php echo $linked_page; ?>">
	<?php endif; ?>
		<aside style="background:url(<?php echo $image['url']; ?>) center center no-repeat; background-size:cover;"></aside>
		<aside>
		 	<p class="secondary-title"><?php echo $secondary_title; ?></p>
		 	<h1><?php echo $title; ?></h1>
		 	<p class="text"><?php echo $text; ?></p>
		</aside>
		<div class="clear"></div>
	<?php if ( $linked_page ): ?>
	</a>
	<?php endif; ?>
</div>