<?php

function gangchil_theme_register_footer_menu()
{
    //register_footer_menus
    register_nav_menus(array(
        'footer-menu-left'    => __('Footer Menu Left'),
        'footer-menu-right'   => __('Footer Menu Right'),
    ));
};
add_action('init', 'gangchil_theme_register_footer_menu');