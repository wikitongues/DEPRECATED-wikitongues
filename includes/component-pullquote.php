<?php 

$text = get_sub_field('text');
$attribute = get_sub_field('attribute'); ?>

<article class="component pullquote">
	<h1>&#8220;<?php echo $text; ?>&#8221;</h1>
	<p>&#8212;<?php echo $attribute; ?></p>
</article>