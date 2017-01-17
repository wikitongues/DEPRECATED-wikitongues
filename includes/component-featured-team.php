<?php

if( have_rows('volunteers') ):

	while( have_rows('volunteers') ) : the_row(); 

		$name = get_sub_field('name');
		$title = get_sub_field('title');
		$location = get_sub_field('location');
		$headshot = get_sub_field('headshot'); ?>

		<div class="team-member board-member">
			<?php if( $headshot ): ?>
			<div class="headshot" style="background:url(<?php echo $headshot['url']; ?>) center center no-repeat; background-size:cover;"></div>
			<?php else : ?>
			<div class="headshot empty"></div>
			<?php endif; ?>
			<div class="personal-info">
				<span><?php echo $name; ?>,</span>
				<span><?php echo $title; ?></span><br />
				<span><i><?php echo $location; ?></i></span>
			</div>
		</div>

<?php

	endwhile;

endif; ?>