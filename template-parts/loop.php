<?php
/**
 * @package WordPress
 * @subpackage Nekolog
 * @since Nekolog 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-thumbnail"><a href="<?php the_permalink(); ?>">
		<?php
		if( has_post_thumbnail() ) {
			the_post_thumbnail();
		} else {
		?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/404.jpg" alt="">
		<?php } ?>
		<span class="post-postdate"><?php the_date(); ?> <?php the_author(); ?></span>
	</a></div><!-- /.post-thumbnail -->
	<div class="post-excerpt-contain">
		<h2 class="post-title"><?php the_title(); ?></h2>
		<div class="post-excerpt">
			<?php the_excerpt(); ?>
		</div><!-- /.post-excerpt -->
		<div class="post-more-button"><a href="<?php the_permalink(); ?>"><?php _e('READ MORE', 'nekolog'); ?></a></div>
	</div><!-- /.post-excerpt-contain -->
</article>
