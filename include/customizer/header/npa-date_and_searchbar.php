<?php

/**
 * =================================
 * Date and search bar Background Color
 * =================================
 */
$wp_customize->add_section('date_and_search_bar_color', array(
  'title' =>  esc_html__('Date and search Bar Background Color'),
  'panel' => 'npa_header_panel',
));

$wp_customize->add_setting('date_and_search_bar_background_setting', array(
  'default'   => '#006400',
  'transport' => 'refresh',
  'capability' => 'edit_theme_options',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'date_and_search_bar_background_setting', array(
  'label' => 'Background Color',
  'settings' => 'date_and_search_bar_background_setting',
  'section' => 'date_and_search_bar_color',
)));


/**
 * =================================
 * Date and search bar Text Color
 * =================================
 */

$wp_customize->add_setting('date_and_search_bar_color_setting', array(
  'default' => '#ffffff',
  'transport' => 'refresh'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'date_and_search_bar_color_setting', array(
  'label' => 'Text Color',
  'settings' => 'date_and_search_bar_color_setting',
  'section' => 'date_and_search_bar_color',
)));