<?php
function esky_customize_register($wp_customize) {
  esky_social_menu_settings($wp_customize);
  esky_cta_settings($wp_customize);
  esky_analytics_settings($wp_customize);
}

function esky_social_menu_settings($wp_customize) {
  $wp_customize->add_section( 'esky_social' , array(
    'title'      => __( 'Social Menu', 'esky' ),
    'priority'   => 100,
  ) );

  $wp_customize->add_setting( 'esky_telegram', array(
    'default' => 'username',
    'sanitize_callback' => 'esky_sanitize_telegram',
  ) );

  $wp_customize->add_control(
    'esky_telegram', array(
      'type' => 'text',
      'section' => 'esky_social',
      'label' => __( 'Telegram username' ),
      'description' => __( 'Telegram username, without \'@\'' ),
  ) );

  $wp_customize->add_setting( 'esky_instagram', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_instagram',
  ) );

  $wp_customize->add_control(
    'esky_instagram', array(
      'type' => 'text',
      'section' => 'esky_social',
      'label' => __( 'Instagram username' ),
      'description' => __( 'Instagram username, without \'@\'' ),
  ) );

  $wp_customize->add_setting( 'esky_twitter', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_twitter',
  ) );

  $wp_customize->add_control(
    'esky_twitter', array(
      'type' => 'text',
      'section' => 'esky_social',
      'label' => __( 'Twitter username' ),
      'description' => __( 'Twitter username, without \'@\'' ),
  ) );

  $wp_customize->add_setting( 'esky_gitlab', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_gitlab',
  ) );

  $wp_customize->add_control(
    'esky_gitlab', array(
      'type' => 'text',
      'section' => 'esky_social',
      'label' => __( 'Gitlab username' ),
      'description' => __( 'Gitlab username, without \'@\'' ),
  ) );

  $wp_customize->add_setting( 'esky_github', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_github',
  ) );

  $wp_customize->add_control(
    'esky_github', array(
      'type' => 'text',
      'section' => 'esky_social',
      'label' => __( 'Github username' ),
      'description' => __( 'Github username, without \'@\'' ),
  ) );

  $wp_customize->add_setting( 'esky_bitbucket', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_bitbucket',
  ) );

  $wp_customize->add_control(
    'esky_bitbucket', array(
      'type' => 'text',
      'section' => 'esky_social',
      'label' => __( 'Bitbucket username' ),
      'description' => __( 'Bitbucket username, without \'@\'' ),
  ) );

  $wp_customize->add_setting( 'esky_dribbble', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_dribbble',
  ) );

  $wp_customize->add_control(
    'esky_dribbble', array(
      'type' => 'text',
      'section' => 'esky_social',
      'label' => __( 'Dribbble username' ),
      'description' => __( 'Dribbble username, without \'@\'' ),
  ) );

  $wp_customize->add_setting( 'esky_deviantart', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_deviantart',
  ) );

  $wp_customize->add_control(
    'esky_deviantart', array(
      'type' => 'text',
      'section' => 'esky_social',
      'label' => __( 'DeviantArt username' ),
      'description' => __( 'DeviantArt username, without \'@\'' ),
  ) );

  $wp_customize->add_setting( 'esky_behance', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_behance',
  ) );

  $wp_customize->add_control(
    'esky_behance', array(
      'type' => 'text',
      'section' => 'esky_social',
      'label' => __( 'Behance username' ),
      'description' => __( 'Behance username, without \'@\'' ),
  ) );
}

function esky_cta_settings($wp_customize) {
  $wp_customize->add_section( 'esky_cta' , array(
    'title'      => __( 'Call to action', 'esky' ),
    'priority'   => 110,
  ) );

  $wp_customize->add_setting( 'esky_telegram_cta', array(
    'default' => true,
  ) );

  $wp_customize->add_control(
    'esky_telegram_cta', array(
      'type' => 'checkbox',
      'section' => 'esky_cta',
      'label' => __( 'Telegram' ),
      'description' => __( 'Display share with telegram button' ),
  ) );

  $wp_customize->add_setting( 'esky_twitter_cta', array(
    'default' => true,
  ) );

  $wp_customize->add_control(
    'esky_twitter_cta', array(
      'type' => 'checkbox',
      'section' => 'esky_cta',
      'label' => __( 'Twitter' ),
      'description' => __( 'Display share with twitter button' ),
  ) );

  $wp_customize->add_setting( 'esky_facebook_cta', array(
    'default' => false,
  ) );

  $wp_customize->add_control(
    'esky_facebook_cta', array(
      'type' => 'checkbox',
      'section' => 'esky_cta',
      'label' => __( 'Facebook' ),
      'description' => __( 'Display share with facebook button' ),
  ) );

  $wp_customize->add_setting( 'esky_pinterest_cta', array(
    'default' => false,
  ) );

  $wp_customize->add_control(
    'esky_pinterest_cta', array(
      'type' => 'checkbox',
      'section' => 'esky_cta',
      'label' => __( 'Pinterest' ),
      'description' => __( 'Display share with pinterest button' ),
  ) );

  $wp_customize->add_setting( 'esky_whatsapp_cta', array(
    'default' => false,
  ) );

  $wp_customize->add_control(
    'esky_whatsapp_cta', array(
      'type' => 'checkbox',
      'section' => 'esky_cta',
      'label' => __( 'Whatsapp' ),
      'description' => __( 'Display share with whatsapp button' ),
  ) );
}

function esky_analytics_settings($wp_customize) {
  $wp_customize->add_section( 'esky_analytics' , array(
    'title'      => __( 'Analytics', 'esky' ),
    'priority'   => 200,
  ) );

  $wp_customize->add_setting( 'esky_google_analytics', array(
    'default' => null,
  ) );

  $wp_customize->add_control(
    'esky_google_analytics', array(
      'type' => 'textarea',
      'section' => 'esky_analytics',
      'label' => __( 'Google Analytics' ),
      'description' => __( 'Paste in your google analytics code' ),
  ) );
}

add_action( 'customize_register', 'esky_customize_register' );
?>