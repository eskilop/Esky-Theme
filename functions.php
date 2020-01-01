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
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fontawesome/all.css', $media="all");
  wp_enqueue_style( 'style', get_stylesheet_uri(), $media="all" );
  wp_enqueue_style( 'dynamic_esky', get_template_directory_uri() . '/css/dynamic_esky.php');
  wp_enqueue_style( 'dynamic_esky', get_template_directory_uri() . '/css/structure.css');
  wp_enqueue_style( 'dynamic_esky', get_template_directory_uri() . '/css/ui.css');
  wp_enqueue_style( 'dynamic_esky', get_template_directory_uri() . '/css/esky_content.css');
  wp_enqueue_script( 'esky', get_template_directory_uri() . '/js/jquery.min.js');
  wp_enqueue_script( 'esky', get_template_directory_uri() . '/js/esky.js', array('jquery'));
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'esky_enqueue_scripts' );

require get_template_directory() . '/classes/esky_navwalker.php';

require get_template_directory() . '/inc/sanitizers.php';
require get_template_directory() . '/inc/colorscheme_generator.php';
require get_template_directory() . '/inc/admin.php';
require get_template_directory() . '/inc/menus.php';
require get_template_directory() . '/inc/shortcodes.php';
require get_template_directory() . '/inc/articles.php';
?>