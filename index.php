<?php
/**
 * @package WordPress
 * @subpackage Nekolog
 * @since Nekolog 1.0
 */

get_header();

if ( have_posts() ) {
	while ( have_posts( ) ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
	the_posts_navigation();
}

get_footer();
