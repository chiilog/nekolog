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

if ( ! function_exists( 'init_setup_func' ) ) {
	/**
	* Sets up theme defaults.
	*
	* @since Nekolog 1.0
	*/
	function init_setup_func() {
		add_editor_style();
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
	}
}
add_action( 'after_setup_theme', 'init_setup_func' );



?>
