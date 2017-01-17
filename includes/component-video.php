<?php 

$title = get_sub_field('title'); 
$secondary_title = get_sub_field('secondary_title');
$text = get_sub_field('text');
$embed_code = get_sub_field('embed_code');
$linked_page = get_sub_field('linked_page'); ?>

<div class="component media video">
	<?php if ( $linked_page ): ?>
	<a href="<?php echo $linked_page; ?>">
	<?php endif; ?>
		<aside>
			<?php echo $embed_code; ?>
		</aside>
		<aside>
		 	<p class="secondary-title"><?php echo $secondary_title; ?></p>
		 	<h1><?php echo $title; ?></h1>
		 	<p class="text-blurb"><?php echo $text; ?></p>
		</aside>
		<div class="clear"></div>
	<?php if ( $linked_page ): ?>
	</a>
	<?php endif; ?>
</div>