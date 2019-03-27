<div class="column is-one-third">
  <div class="card is-flex">
    <?php if (has_post_thumbnail()) : ?>
      <div class="card-image">
        <figure class="image is-16by9">
          <?php the_post_thumbnail('medium'); ?>
        </figure>
      </div>
    <?php endif; ?>
    <div class="card-content">
      <p class="title">
        <?php the_title(); ?>
      </p>
      <?php
        if (!has_post_thumbnail())
        {
          echo '<p class="subtitle">' .
                  get_the_excerpt() .
                '</p>';
        }
      ?>
    </div>
    <footer class="card-footer">
      <a href="<?php the_permalink(); ?>" id="read-btn" class="button card-footer-item is-primary">
        Read
      </a>
    </footer>
  </div>
</div>