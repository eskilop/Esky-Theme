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

		<?php
			$tags = get_the_tags();
			$html = '<h4>Tags:</h4><div class="post_tags">';
			foreach ( $tags as $tag ) {
				$tag_link = get_tag_link( $tag->term_id );

				$html .= "<span class=\"tag\" class='{$tag->slug}' style='margin: 0.2rem;'><a href='{" . esc_url( $tag_link) . "}'>$tag->name</a></span>";
			}
			$html .= '</div>';
			echo $html;
		?>
	</div><!-- .entry-content -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>
</article><!-- #post-${ID} -->