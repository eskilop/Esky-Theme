<?php
function esky_customize_register($wp_customize) {

  $wp_customize->add_section( 'esky_social' , array(
    'title'      => __( 'Social Menu', 'esky' ),
    'priority'   => 30,
  ) );

  $wp_customize->add_setting( 'esky_telegram', array(
    'default' => 'username',
    'sanitize_callback' => 'esky_sanitize_telegram',
  ) );

  $wp_customize->add_control(
    'esky_telegram', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'esky_social',
      'label' => __( 'Telegram username' ),
      'description' => __( 'Telegram username, without \'@\'' ),
      'input_attrs' => array(
    ),
  ) );

  $wp_customize->add_setting( 'esky_instagram', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_instagram',
  ) );

  $wp_customize->add_control(
    'esky_instagram', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'esky_social',
      'label' => __( 'Instagram username' ),
      'description' => __( 'Instagram username, without \'@\'' ),
      'input_attrs' => array(
    ),
  ) );

  $wp_customize->add_setting( 'esky_twitter', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_twitter',
  ) );

  $wp_customize->add_control(
    'esky_twitter', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'esky_social',
      'label' => __( 'Twitter username' ),
      'description' => __( 'Twitter username, without \'@\'' ),
      'input_attrs' => array(
    ),
  ) );

  $wp_customize->add_setting( 'esky_gitlab', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_gitlab',
  ) );

  $wp_customize->add_control(
    'esky_gitlab', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'esky_social',
      'label' => __( 'Gitlab username' ),
      'description' => __( 'Gitlab username, without \'@\'' ),
      'input_attrs' => array(
    ),
  ) );

  $wp_customize->add_setting( 'esky_github', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_github',
  ) );

  $wp_customize->add_control(
    'esky_github', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'esky_social',
      'label' => __( 'Github username' ),
      'description' => __( 'Github username, without \'@\'' ),
      'input_attrs' => array(
    ),
  ) );

  $wp_customize->add_setting( 'esky_bitbucket', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_bitbucket',
  ) );

  $wp_customize->add_control(
    'esky_bitbucket', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'esky_social',
      'label' => __( 'Bitbucket username' ),
      'description' => __( 'Bitbucket username, without \'@\'' ),
      'input_attrs' => array(
    ),
  ) );

  $wp_customize->add_setting( 'esky_dribbble', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_dribbble',
  ) );

  $wp_customize->add_control(
    'esky_dribbble', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'esky_social',
      'label' => __( 'Dribbble username' ),
      'description' => __( 'Dribbble username, without \'@\'' ),
      'input_attrs' => array(
    ),
  ) );

  $wp_customize->add_setting( 'esky_deviantart', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_deviantart',
  ) );

  $wp_customize->add_control(
    'esky_deviantart', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'esky_social',
      'label' => __( 'DeviantArt username' ),
      'description' => __( 'DeviantArt username, without \'@\'' ),
      'input_attrs' => array(
    ),
  ) );

  $wp_customize->add_setting( 'esky_behance', array(
    'default' => '',
    'sanitize_callback' => 'esky_sanitize_behance',
  ) );

  $wp_customize->add_control(
    'esky_behance', array(
      'type' => 'text',
      'priority' => 10,
      'section' => 'esky_social',
      'label' => __( 'Behance username' ),
      'description' => __( 'Behance username, without \'@\'' ),
      'input_attrs' => array(
    ),
  ) );
}
add_action( 'customize_register', 'esky_customize_register' );
?>