<?php
/**
 * Template to display single posts
 * 
 * @package Esky
 * @since Esky 1.0
 */
wp_head();?>

  <header class="entry-header">
    <?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>

  <section id="primary" class="content-area" style="margin: 2%">
    <main id="main" class="site-main">
      <?php
        while (have_posts()):
          the_post();

          echo '<div class="esky-featured-image" style="background-image: url(';
          the_post_thumbnail_url( 'full' );
          echo ')">';
          the_title( '<h1 style="margin-left: 2%;" class="content title">', '</h1>' );
          echo '</div>';

          get_template_part( 'template-parts/content/content', 'single' );
  
          // If comments are open or we have at least one comment, load up the comment template.
				  if ( comments_open() || get_comments_number() ) {
					  comments_template();
				  }
        endwhile;
      ?>
    </main>
  </section>
<?php get_footer(); ?>