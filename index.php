<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
        <div class="column is-one-quarter is-tablet"></div>
        <div class="columns is-multiline">
        <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( '/template-parts/content/content'); ?>
        <?php endwhile; echo '</div>'; ?>
        <!-- pagination -->
        <?php
                echo get_the_posts_pagination( array(
                        'mid_size' => 2
                ) );
        ?>
<?php endif; ?>
        </div>
<?php get_footer(); ?>
