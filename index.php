<?php
/**
 * @package WordPress
 * @subpackage Nekolog
 * @since Nekolog 1.0
 */

get_header();
?>
<main class="site-content-contain">
	<?php if ( have_posts() ) : ?>
	<div id="content" class="site-content">
		<?php
		while ( have_posts( ) ) {
			the_post();
			get_template_part( 'template-parts/loop', get_post_format() );
		}
		?>
	</div><!-- /.site-content -->
	<?php the_posts_navigation(); ?>
	<?php endif; ?>
</main>
<?php
get_footer();
