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
		the_post_navigation();
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}
}

get_footer();
