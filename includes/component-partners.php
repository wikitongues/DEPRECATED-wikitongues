<?php

if( have_rows('partners_list') ):

	echo '<div id="partners">';
	echo '<h1>Our friends and partners</h1>';
    echo '<ul id="partners-list">';

    while ( have_rows('partners_list') ) : the_row();

        get_template_part('includes/component', 'partner');

    endwhile;

    echo '</ul></div>';

endif;