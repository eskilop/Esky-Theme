<?php
/**
 * Header for posts
 * 
 * @package Esky
 * @since Esky 1.0
 */
?>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head() ?>
</head>
<body>
  <header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="javascript:history.back();">
          <i class="fas fa-chevron-left"></i>
        </a>
        <a class="navbar-item" href="<?php bloginfo('url'); ?>">
          <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
              echo '<img id="avatar" src="'. esc_url( $logo[0] ) .'" class="is-rounded">';
            }
          ?>
          <div class="navbar-item">
            <?php bloginfo('name'); ?>
          </div>
        </a>
      </div>
    </nav>
  </header>