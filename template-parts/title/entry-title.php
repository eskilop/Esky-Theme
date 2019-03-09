<?php
  if (has_post_thumbnail())
  {
    echo '<div class="esky-featured-image" style="background-image: url(';
    the_post_thumbnail_url( 'full' );
    echo ')">';
    the_title( '<h1 class="content title">', '</h1>' );
    echo '</div>';
  }
  else {
    the_title( '<h1 class="content title">', '</h1>' );
  }
?>