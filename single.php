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

  <section id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php
        while (have_posts()):
          the_post();

          get_template_part( 'template-parts/title/entry', 'title' );

          get_template_part( 'template-parts/content/content', 'single' );

          esky_display_tags();
  
          // If comments are open or we have at least one comment, load up the comment template.
				  if ( comments_open() || get_comments_number() ) {
					  comments_template();
				  }
        endwhile;
      ?>
    </main>
  </section>
<?php get_footer(); ?>