<?php

//adding class on nav li
function add_class_footer_left_menu_li($classes, $item, $args, $depth)
{
    if ($args->theme_location === 'footer-menu-left' || $args->theme_location === 'footer-menu-right') {
        $classes[] = 'nav-item py-1';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_footer_left_menu_li', 10, 4);

//adding class on nav li a
function add_class_footer_left_menu_li_a($atts, $item, $args, $depth)
{
    if ($args->theme_location === 'footer-menu-left' || $args->theme_location === 'footer-menu-right') {
        $existing_class = isset($atts['class']) ?  $atts['class'] : '';
        $atts['class'] = $existing_class . 'nav-link text-dark p-0';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_footer_left_menu_li_a', 10, 4);