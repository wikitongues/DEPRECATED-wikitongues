<?php

/*
 * Template name: Form
 */

get_header();

get_template_part('includes/component', 'page-header');

$form_shortcode = get_field('form_shortcode');

echo '<div class="content-wrap">';

if ( have_rows('header_names') ):

	echo '<ul class="section-tabs">';

	while ( have_rows('header_names') ) : the_row();

		echo '<li><button id="' . get_sub_field('section') . '">' . get_sub_field('section') . '</button></li>';

	endwhile;

	echo '</ul>';

endif; 

if ( $form_shortcode ):

	echo '<section id="upload" class="active">' . do_shortcode($form_shortcode) . '</section>';

endif;

if ( have_posts() ):

	while ( have_posts() ): the_post();

		echo '<section id="guidelines">';

			the_content();

		echo "</section>";

	endwhile; wp_reset_postdata();

endif;

echo '</div>';

get_footer();

