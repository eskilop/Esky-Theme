<?php
/**
 * Header for posts
 * 
 * @package Esky
 * @since Esky 1.0
 */
?>
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="javascript:history.back();">
      <i class="material-icons">arrow_back</i>
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