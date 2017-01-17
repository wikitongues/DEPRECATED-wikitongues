<?php 

get_header();

get_template_part('includes/component', 'page-header');

echo '<div class="content-wrap">';

if ( have_posts() ):

	while ( have_posts() ): the_post();

		echo '<div class="main-content">';

			the_content();

		echo "</div>";

	endwhile; wp_reset_postdata();

endif;

echo '</div>';

get_template_part('includes/component', 'cta');

get_footer();