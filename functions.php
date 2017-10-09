<?php
/**
 * @package WordPress
 * @subpackage Nekolog
 * @since Nekolog 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Nekolog 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

if ( ! function_exists( 'nekolog_after_setup_theme' ) ) {
	/**
	* Sets up theme defaults.
	*
	* @since Nekolog 1.0
	*/
	function nekolog_after_setup_theme() {
		add_editor_style();
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 400,
			'flex-width'  => true,
		) );
	}
}
add_action( 'after_setup_theme', 'nekolog_after_setup_theme' );

/**
* Load the CSS and JS
*
* @since Nekolog 1.0
*/
function nekolog_wp_enqueue_scripts() {
	wp_enqueue_style( 'nekolog-style', get_stylesheet_uri() );
	// wp_enqueue_script( 'nekolog-script', get_template_directory_uri() . '/js/bindle.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'nekolog_wp_enqueue_scripts' );
