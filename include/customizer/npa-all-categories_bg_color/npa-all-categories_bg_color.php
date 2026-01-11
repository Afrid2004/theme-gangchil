<?php

add_action('customize_register', 'rjs_customize_register');

function rjs_customize_register($wp_customize)
{
  //Get an array with the category list
  $rjs_categories_full_list = get_categories(array('orderby' => 'name',));

  //Create an empty array
  $rjs_choices_list = [];

  //Loop through the array and add the correct values every time
  foreach ($rjs_categories_full_list as $rjs_single_cat) {
    $rjs_choices_list[$rjs_single_cat->term_id] = esc_html__($rjs_single_cat->name, 'npa');
  }

  $wp_customize->add_section('npa_acd', array(
    'title' => __('All Category names, Background and Color', 'npa'),
    'priority'  => 10,
  ));

  require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/npa-cat-serial_no.php';



// for loop has been started here for generating code for wp customizer category
for( $npaCat = 1; $npaCat < 27; $npaCat++ ){

  /**
   * 
   * ======================================================================
   * 3 no category
   * ======================================================================
   * 
   * */


  //Get an array with the category list
  $rjs_categories_full_list = get_categories(array('orderby' => 'name',));

  //Create an empty array
  $rjs_choices_list = [];

  //Loop through the array and add the correct values every time
  foreach ($rjs_categories_full_list as $rjs_single_cat) {
    $rjs_choices_list[$rjs_single_cat->term_id] = esc_html__($rjs_single_cat->name, 'npa');
  }

  //Register the setting
  $wp_customize->add_setting('rjs_category_dropdown_' . $npaCat, array(
    'type'        => 'theme_mod',
    'capability'  => 'edit_theme_options',
    'default'     => 1,
  ));

  //Register the control
  $wp_customize->add_control('rjs_category_dropdown_' . $npaCat, array(
    'type'        => 'select',
    'section'     => 'npa_acd',
    'label'       => __($npaCat . ' No. Category'),
    'choices'     => $rjs_choices_list, //Add the list with options
  ));

  // for background color
  $wp_customize->add_setting('npa_category_bg_id_' . $npaCat, array(
    'title'   => esc_html__('Category { $npaCat} Background Color'),
    'default' => '#006400'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_category_bg_id_' . $npaCat, array(
    'section' =>  'npa_acd',
    'settings'  => 'npa_category_bg_id_' . $npaCat,
    'label' => esc_html__('Choose Background color'),
  )));

  // for background color
  $wp_customize->add_setting('npa_category_text_id_' . $npaCat, array(
    'title'   => esc_html__('Category { $npaCat} Background Color'),
    'default' => '#fff'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_category_text_id_' . $npaCat, array(
    'section' =>  'npa_acd',
    'settings'  => 'npa_category_text_id_' . $npaCat,
    'label' => esc_html__('Choose Text color'),
  )));
}

// require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/3_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/4_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/5_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/6_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/7_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/8_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/9_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/10_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/11_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/12_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/13_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/14_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/15_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/16_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/17_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/18_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/19_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/20_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/21_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/22_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/23_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/24_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/25_no_category_bg_color.php';
  // require get_template_directory() . '/include/customizer/npa_all_categories_bg_color/26_no_category_bg_color.php';

}