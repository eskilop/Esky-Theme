<?php

require('wp-blog-header.php');

require get_template_directory() . '/vendor/autoload.php';

use Phim\Color;

// defaults

$colors = array(
  'red' => get_theme_mod( "esky_color_red", "#D18D8A" ),
  'green' => get_theme_mod( "esky_color_green", "#6BA272" ),
  'orange' => get_theme_mod( "esky_color_orange", "#D1AB8A" ),
  'blue' => get_theme_mod( "esky_color_blue", "#626D8D" ),
  'yellow' => get_theme_mod( "esky_color_yellow", "#D1CB8A" ),
  'purple' => get_theme_mod( "esky_color_purple", "#75628E" ),
  'lightblue' => get_theme_mod( "esky_color_lightblue", "#5C7387" ),
  'cyan' => get_theme_mod( "esky_color_cyan", "#557B7F" ),
  'pink' => get_theme_mod( "esky_color_pink", "#B7798F" ),
  'white' => get_theme_mod( "esky_foreground", "#CCD2E2" ),
  'edark' => get_theme_mod( "esky_background", "#16181E" ),
  'primary' => get_theme_mod( "esky_primary", "#626D8D" ),
  'complementary' => get_theme_mod( "esky_complementary", "#D1AB8A" ),
);
header("Content-type: text/html;");
?>
<style>
/*<minified-css-here>*/
</style>