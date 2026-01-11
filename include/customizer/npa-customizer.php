<?php
add_action('customize_register', 'npa_customize_register');

function npa_customize_register($wp_customize)
{
    // for header
    require get_template_directory() . '/include/customizer/npa-header-customizer.php';

    // for footer
    require get_template_directory() . '/include/customizer/npa-footer-customizer.php';

    // for theme color customization
    // require get_template_directory() . '/include/customizer/npa-theme-color-customizer.php';

    // for social media links
    require get_template_directory() . '/include/customizer/npa-social-media-links.php';

    // advertisements
    require get_template_directory() . '/include/customizer/advertisements/npa-advertisements.php';
    
    // For Archieve Calendar Background and Text Color
    require get_template_directory() . '/include/customizer/npa-archieve-calendar-background-and-text-color.php';
    

    /** 
     * ===============================
     * Main Logo Position Customization end
     * ==============================
     */

    //Output Customize CSS
    function npa_customize_css_for_background_color()
    { ?>
        <style>
            .npa_theme_bg_cl {
                background: <?php echo get_theme_mod('npa_theme_bg_color'); ?>
            }

            .npa-bg-ticker {
                background: <?php echo get_theme_mod('npa_scroll_bg') ?>;
            }

            .tickerH.text-color-ticker,
            #webticker .text-color-ticker a {
                color: <?php echo get_theme_mod('npa_scroll_text_color') ?>;
            }

            ul#faroqueId li a:hover,
            .current-menu-item>a {
                background: <?php echo get_theme_mod('npa_active_menu_bg'); ?>
            }
        </style>
<?php }
    add_action('wp_head', 'npa_customize_css_for_background_color');
}
