<?php

//Footer area function
$wp_customize->add_section('npa_footer_editor_ans_other_names', array(
    'title'     =>  esc_html__('Editor and Others Name', 'npa'),
    'panel'     => 'npa_footer_panel',
));



for($j = 1; $j < 3; $j++){

    // position name
    $wp_customize->add_setting("npa_position_{$j}_setting", array(
        'default'           => '#',
        'transport'         => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control("npa_position_{$j}", array(
        'label'         => esc_html__("Position name {$j}", 'npa'),
        'description'   => esc_html__('Such as, Executive editor or what you want'),
        'settings'      => "npa_position_{$j}_setting",
        'section'       => 'npa_footer_editor_ans_other_names',
        'type'          => 'text'
    ));
    // position holder's name
    $wp_customize->add_setting("npa_position_name_{$j}_setting", array(
        'default'           => '#',
        'transport'         => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control("npa_position_name_{$j}_setting", array( //changable npa_position_3_name
        'label'         => esc_html__("Position holder's name {$j}", 'npa'),
        'description'   => esc_html__('Type name here'),
        'settings'      => "npa_position_name_{$j}_setting",
        'section'       => 'npa_footer_editor_ans_other_names',
        'type'          => 'text'
    ));

}