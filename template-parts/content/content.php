<div class="column is-one-quarter">
  <div class="card is-flex">
    <?php if (has_post_thumbnail()) : ?>
      <div class="card-image">
        <figure class="image is-4by3">
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
      <p class="card-footer-item">
        <span>
          <a href="<?php the_permalink(); ?>">Read</a>
        </span>
      </p>
    </footer>
  </div>
</div>