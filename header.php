<?php
/**
 * @package WordPress
 * @subpackage Nekolog
 * @since Nekolog 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header" class="header">
		<div class="header-image">
			<img src="<?php echo get_template_directory_uri(); ?>/images/404.jpg" alt="">
		</div><!-- /.header-image -->
		<div class="header-content">
			<?php if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else: ?>
			<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<?php endif; ?>

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="header-navigation" role="navigation">
					<div class="header-navigation-drawer">
						<div class="header-navigation-hamburger">
							<span class="header-navigation-hamburger-01"></span>
							<span class="header-navigation-hamburger-02"></span>
							<span class="header-navigation-hamburger-03"></span>
						</div><!-- /.header-navigation-hamburger -->
						<h2 class="header-navigation-title"><?php _e( 'MENU', 'nekolog' ); ?></h2>
					</div><!-- /.header-navigation-drawer -->
					<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'header-navigation-list',
						'theme_location' => 'primary',
					) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>
		</div><!-- /.header-content -->
	</header>
