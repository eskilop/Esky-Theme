<?php
function esky_customize_register($wp_customize) {
  esky_appereance_settings($wp_customize);
  add_action( 'wp_head', 'esky_generate_colorscheme' );
  esky_social_menu_settings($wp_customize);
  esky_cta_settings($wp_customize);
  esky_analytics_settings($wp_customize);
}

function esky_appereance_settings($wp_customize) {
  $wp_customize->add_section( 'esky_appereance' , array(
    'title'      => __( 'Theme & Appereance' , 'esky' ),
    'priority'   => 90,
  ) );

  $wp_customize->add_setting( 'esky_background', array(
    'default' => '#16181E',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_background',
			array(
				'label'   => __( 'Background color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );
    
  $wp_customize->add_setting( 'esky_foreground', array(
    'default' => '#CCD2E2',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_foreground',
			array(
				'label'   => __( 'Foreground color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );

  $wp_customize->add_setting( 'esky_primary', array(
    'default' => '#626D8D',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_primary',
			array(
				'label'   => __( 'Primary color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );
    
  $wp_customize->add_setting( 'esky_complementary', array(
    'default' => '#D1AB8A',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_complementary',
			array(
				'label'   => __( 'Complementary color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );

  $wp_customize->add_setting( 'esky_color_red', array(
    'default' => '#D18D8A',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_color_red',
			array(
				'label'   => __( 'Red color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );

  $wp_customize->add_setting( 'esky_color_green', array(
    'default' => '#6BA272',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_color_green',
			array(
				'label'   => __( 'Green color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );

  $wp_customize->add_setting( 'esky_color_orange', array(
    'default' => '#D1AB8A',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_color_orange',
			array(
				'label'   => __( 'Orange color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );

  $wp_customize->add_setting( 'esky_color_blue', array(
    'default' => '#626D8D',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_color_blue',
			array(
				'label'   => __( 'Blue color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );

  $wp_customize->add_setting( 'esky_color_yellow', array(
    'default' => '#D1CB8A',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_color_yellow',
			array(
				'label'   => __( 'Yellow color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );

  $wp_customize->add_setting( 'esky_color_purple', array(
    'default' => '#75628E',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_color_purple',
			array(
				'label'   => __( 'Purple color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );

  $wp_customize->add_setting( 'esky_color_lightblue', array(
    'default' => '#5C7387',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_color_lightblue',
			array(
				'label'   => __( 'Lightblue color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );

  $wp_customize->add_setting( 'esky_color_cyan', array(
    'default' => '#557B7F',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_color_cyan',
			array(
				'label'   => __( 'Cyan color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );

  $wp_customize->add_setting( 'esky_color_pink', array(
    'default' => '#B7798F',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
			$wp_customize,
			'esky_color_pink',
			array(
				'label'   => __( 'Pink color', 'esky' ),
				'section' => 'esky_appereance',
			)
    ) );
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

  $wp_customize->add_setting( 'esky_discord', array(
    'default' => null,
    'sanitize_callback' => 'esky_sanitize_discord',
  ) );

  $wp_customize->add_control(
    'esky_discord', array(
      'type' => 'text',
      'section' => 'esky_social',
      'label' => __( 'Discord invite code' ),
      'description' => __( 'Discord invite code , without \'https://discord.gg\'' ),
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

  $wp_customize->add_setting( 'esky_telegram_discussion_cta', array(
    'default' => NULL,
  ) );

  $wp_customize->add_control(
    'esky_telegram_discussion_cta', array(
      'type' => 'text',
      'section' => 'esky_cta',
      'label' => __( 'Telegram Discussion message' ),
      'description' => __( 'Message to append at the end of the article' ),
  ) );

  $wp_customize->add_setting( 'esky_telegram_discussion_url_cta', array(
    'default' => NULL,
  ) );

  $wp_customize->add_control(
    'esky_telegram_discussion_url_cta', array(
      'type' => 'text',
      'section' => 'esky_cta',
      'label' => __( 'Telegram Discussion URL' ),
      'description' => __( 'Telegram discussion group to redirect to' ),
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