<?php
function newsportal_css_js(){
        wp_register_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.4.0 ', 'all');
        wp_register_style('jquery.bxslider', get_template_directory_uri().'/assets/css/jquery.bxslider.css', array(), 'v4.1.2', 'all');
        wp_register_style('bootstrapmin', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), 'null', 'screen');
        wp_register_style('responsive', get_template_directory_uri().'/responsive.css', array(), 'null', 'all');
        
        
        wp_enqueue_style('font-awesome');
        wp_enqueue_style('jquery.bxslider');
        wp_enqueue_style('bootstrapmin');
        wp_enqueue_style('npa-css-style', get_stylesheet_uri());
        wp_enqueue_style('responsive');
        
    
    wp_enqueue_script('jquery-slim.min.js', get_template_directory_uri().'/assets/js/jquery-slim.min.js', array('jquery'), '2017', 'false');
    wp_enqueue_script('popper.min.js', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '2017', 'false');
    wp_enqueue_script('bootstrap.min.js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), 'v4.0.0', 'false');
    wp_enqueue_script('jQueryv1.10.2', get_template_directory_uri().'/assets/js/jQueryv1.10.2.min.js', array('jquery'), 'v1.10.2', 'false');
    wp_enqueue_script('jquery.bxslider.min', get_template_directory_uri().'/assets/js/jquery.bxslider.min.js', array('jquery'),'v4.1.2', 'false' );
    wp_enqueue_script('my-js', get_template_directory_uri().'/assets/js/my.js', array('jquery'), '1.0', 'false');
    
    }

    add_action('wp_enqueue_scripts', 'newsportal_css_js');
