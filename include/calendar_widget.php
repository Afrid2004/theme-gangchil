<?php
    function calendar(){
        register_sidebar(array(
            'name'          =>  'calendar widget',
            'id'            =>  'calender',
            'description'   =>  'ক্যালেন্ডার ডিজাইন',
            'before_widget' =>  '<div class="border border-outline">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<p class="text-uppercase bg-b10 py-1 px-2 mb-2">',
            'after_title'   =>  '</p>'
        ));
    }

    add_action('widgets_init', 'calendar');
?>