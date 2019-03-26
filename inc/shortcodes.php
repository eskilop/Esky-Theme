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

function esky_bandcamp($attrs) {
  $bgcol = array_key_exists('bgcol', $attrs) ? $attrs['bgcol'] : 'ffffff';
  $linkcol = array_key_exists('linkcol', $attrs) ? $attrs['linkcol'] : '0687f5';
  return '<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=' . $attrs['album'] . '/size=large/bgcol=' . $bgcol . '/linkcol=' . $linkcol .  '/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://dangerfeelnewbies.bandcamp.com/album/culture-dawn">Culture Dawn by The DangerFeel Newbies</a></iframe>';
}
add_shortcode( 'bandcamp', 'esky_bandcamp' );

function esky_cnnmoney($attrs) {
  return '<script src=\'//i.cdn.turner.com/money/.element/script/7.0/players/embed.js?videoid=' . str_replace("http://money.cnn.com/", "", str_replace("/index.html", "", $attrs['url'])) . '\'></script>';
}
add_shortcode( 'cnnmoney-video', 'esky_cnnmoney' );

function esky_contact_form($attrs) {

}
add_shortcode( 'contact-form', 'esky_contact_form' );

function esky_dailymotion($attrs) {
  return '<iframe frameborder="0" width="480" height="270" src="https://www.dailymotion.com/embed/video/' . $attrs['id'] . '" allowfullscreen allow="autoplay"></iframe>';
}
add_shortcode( 'dailymotion', 'esky_dailymotion' );

function esky_flickr_video($attrs) {
  return '<a data-flickr-embed="true"  href="https://www.flickr.com/photos/137234620@N07/22926094479/in/photolist-cx6Bzd-AVUea2-AVKjei-fL1MsD-AwQMTP-JRc6Kk-AVUdDH-Jqp6S5-7s6GbU-7Xwy4D-bWawMB-zJmreR-HUPNyk-7GW2jH-2cJaScA-Q4Vegt-2dQ6DDv-RGdNBE-Q4VteP-29WnFmm-2cJarYq-zJcPzG-2ckXa6z-HURYdN-JRc6yD-2cCxwv1-nGkMuZ-2dE8qmL-YySjdM-23iv3Mo-ZA5B6p-fbCsvR-6VvEfd-6tQooC-dzbE4z-cgioS9-9unmmR-7ALnWu-efxNsA-AQr7VE-bV3HHK-9JEbFu-8k7DsU-7Q68xQ-ird4VR-eEgDR1-9Pmewh-29i4BvZ-8HcnsY-8G8BAt" title="gh"><img src="https://live.staticflickr.com/604/22926094479_4c6a15df47_z.jpg" width="640" height="360" alt="gh"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>';
}

function esky_instagram($attrs) {
  return '<iframe src="https://instagram.com/p/fA9uwTtkSN/media/?size=t">';
}
add_shortcode( 'instagram', 'esky_instagram' );

function esky_youtube ($attrs) {
  return '<iframe class="esky-yt-sc" width="560" height="315" src="https://www.youtube.com/embed/' . str_replace("=http://www.youtube.com/watch?v=", "", $attrs[0]) . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}
add_shortcode( 'youtube', 'esky_youtube' );

?>