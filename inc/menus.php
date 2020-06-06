<?php
function esky_display_social_menu() {
  $services = get_theme_mod("esky_social_add", null);

  foreach (explode(',', $services) as $v) {
    $value = get_theme_mod("esky_" . $v, null);
    $value_icon = get_theme_mod("esky_" . $v . "_icon", null);
    $value_color = get_theme_mod("esky_" . $v . "_color", null);
    if (isset($value) && $value !=="") {
      echo "<a class=\"button esky-social-item is-rounded\" style=\"background-color: " . $value_color . "; border-color: " . $value_color . "\" href=\"".$value."\">
              <span class=\"icon\">";
              if (substr( $value_icon, 0, 4 ) === "http")
                echo "<img src=\"" . $value_icon . "\" style=\"width=1em\">";
              else
                echo "<i class=\"" . $value_icon . "\"></i>";
        echo "</span>
            </a>";
    }
  }
}

function the_menu($name) {
  $menu = wp_nav_menu( array(
    "container" => 'div',
    "echo" => false,
    "walker" => new Esky_NavWalker()
    ) );

  $menu = preg_replace('/<div class="menu-(.*)-container"><ul id="menu-(.*)" class="menu">/', '', $menu);
  $menu = str_replace("</ul></div>", "", $menu);
  echo $menu;
}
?>