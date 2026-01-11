<?php
    function newsportal_menu(){
        register_nav_menus(array(
            'topMenu'       => __('Top Menu'),
            'sticky'		=> __('sticky Menu')
        ));    
    }
    add_action('init', 'newsportal_menu');
?>