<?php
function esky_display_social_menu() {
  echo "<a class=\"button esky-social-item is-blue is-rounded\" href=\"https://t.me/".get_theme_mod( "esky_telegram", "username" )."\">
  <span class=\"icon\">
    <i class=\"fab fa-telegram-plane\"></i>
  </span></a>";
  echo "<a class=\"button esky-social-item is-red is-rounded\" href=\"https://instagram.com/".get_theme_mod( "esky_instagram", "" )."\">
  <span class=\"icon\">
    <i class=\"fab fa-instagram\"></i>
  </span></a>";
}

function esky_get_menu_items($menu_name){
  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
      return wp_get_nav_menu_items($menu->term_id);
  }
}

function esky_menu_search_parents($menu_items) {
  $result = array ();
  if ($menu_items === null) return $result;
  foreach ($menu_items as $item) {
    if ($item->menu_item_parent === "0") {
      array_push($result, $item);
    }
  }
  return $result;
}

function esky_menu_search_childsof($items, $parent) {
  $parent = (int) $parent;
  $list = [];
  foreach ( $items as $item ) {
    if ( $parent === (int) $item->menu_item_parent ) {
      $list[] = $item;
    }
  }
  return $list;
}

function esky_format_menu_title($itemtitle) {
  if (strlen($itemtitle) <= 12)
    return $itemtitle;
  else
    return substr($itemtitle, 0, 11) . "...";
}

function esky_format_submenu_title ($itemtitle) {
  if (strlen($itemtitle) <= 20)
    return $itemtitle;
  else
    return substr($itemtitle, 0, 19) . "...";
}

function the_menu($name) {
  $menu = esky_get_menu_items($name);

  foreach(esky_menu_search_parents($menu) as $item) {
    if (esky_menu_search_childsof($menu, $item->db_id) === []) {
      echo '<div class="navbar-item">';
      echo '<a href="' . $item->url . '">' . esky_format_menu_title($item->title) . '</a></div>';
    }
    else {
      echo '<div class="navbar-item has-dropdown is-hoverable">';
      echo '  <a class="navbar-link" href="' . $item->url . '">' . esky_format_menu_title($item->title) . '</a>';
      echo '  <div class="navbar-dropdown">';
      foreach (esky_menu_search_childsof($menu, $item->db_id) as $child) {
        echo '<a class="navbar-item" href="' . $child->url . '">' . esky_format_submenu_title($child->title) . "</a>";
      }
      echo '  </div>';
      echo '</div>';
    }
  }
}
?>