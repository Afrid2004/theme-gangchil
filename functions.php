<?php
    //for css and js
    include_once('include/newsportal_css_js.php');
    //time ago 
    include_once('include/time_ago.php');
    //short_title
    include_once('include/short_title.php');
    //for excerpt
    include_once('include/excerpt.php');
    //for images size
    include_once('include/default.php');
    //for bangla
    //include_once('include/bangla_date.php');
    //for title name
    include_once('include/title_name.php');
    //for ajax calender
    //include_once('include/ajax-archive-calendar.php');
    //for calender widget
    include_once('include/calendar_widget.php');
    //for counter viewer
    include_once('include/viewer_counter.php');
    //for menu
    include_once('include/menu.php');
    //for video
    include_once('include/video.php');
    //for content_below_tag
    include_once('include/content_below_tag.php');
    //for special advertisement
    include_once('include/special_advertisement.php');
    
    //for tgm
    include_once('include/class-tgm-plugin-activation.php');
    include_once('include/tgm.php');

    //our family
    include_once('include/our_family.php');

    // customizer
    include_once('include/customizer/npa-customizer.php');

    // all category names, background and color
    include_once('include/customizer/npa-all-categories_bg_color/npa-all-categories_bg_color.php');

    //footer menu
    if (file_exists(get_template_directory() . '/include/helpers/footer-menu-register.php')) {
        include_once('include/helpers/footer-menu-register.php');
    }

    //footer menu class add on li a
    if (file_exists(get_template_directory() . '/include/helpers/add-class-footer-menu-li-a.php')) {
        include_once('include/helpers/add-class-footer-menu-li-a.php');
    }