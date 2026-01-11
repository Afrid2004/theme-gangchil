<?php
$wp_customize->add_panel('npa_header_panel', array(
  'title'     => esc_html__('Header Area'),
  'priority'  => 10
));

require get_template_directory() . '/include/customizer/header/npa-date-and-searchbar.php';
require get_template_directory() . '/include/customizer/header/npa-main-logo-and-postion.php';
require get_template_directory() . '/include/customizer/header/npa-menubar-background-and-text-color.php';
require get_template_directory() . '/include/customizer/header/npa_meta_keywords.php';
