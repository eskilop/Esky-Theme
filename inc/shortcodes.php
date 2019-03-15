<?php

function esky_youtube ($attrs) {
  return '<iframe class="esky-yt-sc" width="560" height="315" src="https://www.youtube.com/embed/' . str_replace("=http://www.youtube.com/watch?v=", "", $attrs[0]) . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}
add_shortcode( 'youtube', 'esky_youtube' );

?>