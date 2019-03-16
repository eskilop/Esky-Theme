<?php

function esky_8tracks($attrs) {
  //var_dump($attrs);
  $w = array_key_exists('width', $attrs) ? $attrs['width'] : '300';
  $h = array_key_exists('height', $attrs) ? $attrs['height'] : '250';

  return '<iframe src="' . $attrs['url'] . '" width="' . $w . '" height="' . $h . '" style="border: 0px none;"></iframe>
    <p class="_8t_embed_p" style="font-size: 11px; line-height: 12px;"><a href="https://8tracks.com/ellechanel/malevolence?utm_medium=referral&utm_content=mix-page&utm_campaign=embed_button">malevolence</a> from <a href="http://8tracks.com/ellechanel?utm_medium=referral&utm_content=mix-page&utm_campaign=embed_button">Ellechanel</a> on <a href="https://8tracks.com?utm_medium=referral&utm_content=mix-page&utm_campaign=embed_button">8tracks Radio</a>.</p>
    ';
}
add_shortcode( '8tracks', 'esky_8tracks' );

function esky_youtube ($attrs) {
  return '<iframe class="esky-yt-sc" width="560" height="315" src="https://www.youtube.com/embed/' . str_replace("=http://www.youtube.com/watch?v=", "", $attrs[0]) . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}
add_shortcode( 'youtube', 'esky_youtube' );

?>