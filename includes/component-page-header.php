<?php
$page_header_background = get_field('page_header_background');
$page_header_title = get_field('page_header_title');
$page_header_content = get_field('page_header_content');

if( $page_header_title ): ?>
<div class="page-header">
	<div class="page-header-content">
		<h1><?php echo $page_header_title; ?></h1>
		<?php echo $page_header_content; ?>
	</div>
</div>
<?php endif; ?>