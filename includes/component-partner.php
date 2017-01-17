<?php 
$partner_logo = get_sub_field( 'partner_logo' );
$partner_name = get_sub_field( 'partner_name' ); 
?>
<li class="partner">
	<div class="partner-logo">
		<img src="<?php echo $partner_logo['url']; ?>" alt="<?php echo $partner_logo['alt']; ?>">
	</div>
	<p><?php echo $partner_name; ?></p>
</li>