<?php
/**
 * @package WordPress
 * @subpackage Nekolog
 * @since Nekolog 1.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<!-- entry-header -->
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
	<!-- .entry-header -->

	<div class="entry-content">
		<!-- entry content -->
		<?php
			/* php code from _s */
			if ( in_the_loop() ) {
				the_excerpt( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'nekolog' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			} else {
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'nekolog' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			}
		?>
		<!-- .entry content -->
		<!-- page link -->
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nekolog' ),
				'after'  => '</div>',
			) );
		?>
		<!-- .page link -->
	</div>
	<!-- entry-footer -->
	<footer class="entry-footer">
	</footer>
	<!-- .entry-footer -->
</article>
