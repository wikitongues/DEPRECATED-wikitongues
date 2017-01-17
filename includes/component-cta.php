<?php
	
	$message = get_field('cta_message');
	$primary_link = get_field('cta_primary_link');
	$primary_link_title = get_field('cta_primary_link_title');
	$secondary_link = get_field('cta_secondary_link');
	$secondary_link_title = get_field('cta_secondary_link_title');
?>
<?php if($primary_link) : ?>
<div class="cta-section">
<?php if( $message ): ?>
	<h1><?php echo $message; ?></h1>
<?php endif; ?>
<?php if( $primary_link ): ?>
	<a class="cta-button" href="<?php echo $primary_link; ?>"><?php echo $primary_link_title; ?></a>
<?php endif; ?>
<?php if( $secondary_link ): ?>
	<a class="cta-secondary" href="<?php echo $secondary_link; ?>"><?php echo $secondary_link_title; ?></a>
<?php endif; ?>
</div>
<?php endif; ?>