<?php
/**
 * Template to display single posts
 * 
 * @package Esky
 * @since Esky 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content">
    <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'esky' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
    );

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'esky' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( ! is_singular( 'attachment' ) && ! is_page() ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>
</article><!-- #post-${ID} -->