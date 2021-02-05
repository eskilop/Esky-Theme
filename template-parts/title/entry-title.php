<?php
  if (has_post_thumbnail())
  {
    echo '<div class="esky-featured-image" style="background-image: url(';
    the_post_thumbnail_url( 'full' );
    echo ')">';
    echo '<div id="esky-featured-image-gradient">';
    the_title( '<h1 class="title">', '</h1>' );
    echo '<p class="subtitle">' . esky_get_erd(get_the_content()) . '</p>';
    echo '</div>';
    echo '</div>';
  }
  else {
    the_title( '<h1 class="title">', '</h1>' );
    echo '<p class="subtitle">' . esky_get_erd(get_the_content()) . '</p>';
  }
?>
