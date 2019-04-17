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
      'priority' => 10, // Within the section.
      'section' => 'esky_social', // Required, core or custom.
      'label' => __( 'Telegram username' ),
      'description' => __( 'Telegram username, without \'@\'' ),
      'input_attrs' => array(
    ),
    //'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'esky_instagram', array(
    'default' => '_eskilop',
    'sanitize_callback' => 'esky_sanitize_instagram',
  ) );

  $wp_customize->add_control(
    'esky_instagram', array(
      'type' => 'text',
      'priority' => 10, // Within the section.
      'section' => 'esky_social', // Required, core or custom.
      'label' => __( 'Instagram username' ),
      'description' => __( 'Instagram username, without \'@\'' ),
      'input_attrs' => array(
    ),
    //'active_callback' => 'is_front_page',
  ) );

  $wp_customize->add_setting( 'esky_twitter', array(
    'default' => '_eskilop',
    'sanitize_callback' => 'esky_sanitize_twitter',
  ) );

  $wp_customize->add_control(
    'esky_twitter', array(
      'type' => 'text',
      'priority' => 10, // Within the section.
      'section' => 'esky_social', // Required, core or custom.
      'label' => __( 'Twitter username' ),
      'description' => __( 'Twitter username, without \'@\'' ),
      'input_attrs' => array(
    ),
    //'active_callback' => 'is_front_page',
  ) );

}
add_action( 'customize_register', 'esky_customize_register' );
?>