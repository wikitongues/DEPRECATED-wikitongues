<?php

if( have_rows('carousel_slide') ):

	echo '<div class="page-banner">';

      if ( is_front_page() ):
        echo '<span class="slide-back banner-counter active"></span>';
        echo '<span class="slide-forward banner-counter"></span>';
      endif;

	while( have_rows('carousel_slide') ) : the_row();

		if( get_row_layout() == 'text' ):

			get_template_part( 'includes/component', 'banner-text' );

		elseif( get_row_layout() == 'image' ):

			get_template_part( 'includes/component', 'banner-image' );

		elseif( get_row_layout() == 'video' ):

			get_template_part( 'includes/component', 'banner-video' );

		else:

			echo 'An error occurs';

		endif;

	endwhile;

	echo '</div>';

endif;