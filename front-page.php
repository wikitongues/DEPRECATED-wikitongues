<?php 

get_header(); 

get_template_part('includes/component', 'partners');

if( have_rows('content_block') ):

    echo '<div id="content-blocks">';

    while ( have_rows('content_block') ) : the_row();

        if ( get_row_layout() == 'image' ):

        	get_template_part('includes/component', 'image');

       	elseif ( get_row_layout() == 'video' ):

       		get_template_part('includes/component', 'video');

       	elseif ( get_row_layout() == 'pullquote' ):

       		get_template_part('includes/component', 'pullquote');

       	else:

       		echo "An error occured";

       	endif;

    endwhile;

    echo '</div>';

endif;

get_template_part('includes/component', 'cta'); 

get_footer();