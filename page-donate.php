<?php

/*
 * Template name: Donate
 */

get_header();

get_template_part('includes/component', 'page-header');

if( have_posts() ):

	echo '<div class="content-wrap">';

	while( have_posts() ) : the_post();

		the_content();

	endwhile;

	echo '</div>';

endif;

get_footer();