<?php

/*
 * Template name: Wikitongues Team
 */

get_header();

get_template_part('includes/component', 'page-header');

echo '<div class="content-wrap">';

if( have_rows('board_members') ):

	echo '<section id="board" class="section-wrap"><p class="title">Board of Directors</p>';

	    while ( have_rows('board_members') ) : the_row();

			get_template_part('includes/component', 'board-members');

	    endwhile;

    echo '</section>';

endif; 

if( have_rows('featured_team_members') ):

	echo '<section id="featured-volunteers" class="section-wrap"><p class="title">Core Team</p>';

	    while ( have_rows('featured_team_members') ) : the_row();

			get_template_part('includes/component', 'featured-team');

	    endwhile;

    echo '</section>';

endif; 

if( get_field('honorable_mentions') ):

	get_template_part('includes/component', 'honorable-mentions');

endif;

echo '</div>';

get_template_part('includes/component', 'cta'); 

get_footer();