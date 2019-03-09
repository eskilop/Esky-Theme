<?php
if ( ! function_exists('esky_setup') ) :
  function esky_setup() {
    /**
     * adds RSS feeds to <head>
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Adds support for custom logo
     */
    $defaults = array(
      'height'      => 48,
      'width'       => 48,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );

    /**
     * This theme is available for translation.
     * Just place translations in ./languages/
     */
    load_theme_textdomain( 'esky', get_template_directory() . '/languages' );

    /**
     * This theme supports featured images
     */
    add_theme_support( 'post-thumbnails' );

    /**
     * Adds different post formats to be selected
     */
    add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    /**
     * Adds support for one nav menu
     */
    register_nav_menus( array(
      'primary' => __('Primary Menu', 'esky')
    ) );
  }
endif;

add_action( 'after_setup_theme', 'esky_setup');

function esky_enqueue_scripts() {
  wp_enqueue_style( 'material-icons', get_template_directory_uri() . '/css/material-icons/material-icons.css', $media="all");
  wp_enqueue_style( 'bulma', get_template_directory_uri() . '/css/bulma.css', $media="all" );
  wp_enqueue_style( 'style', get_stylesheet_uri(), $media="all" );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'esky_enqueue_scripts' );

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
  if (strlen($itemtitle) <= 10)
    return $itemtitle;
  else
    return substr($itemtitle, 0, 9) . "...";
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