<?php
    function special_advertisement_post_type(){
        register_post_type('special', array(
            'label'     =>  'বিশেষ বিজ্ঞাপন', array(
                'name'                  =>  __('special_advertisement'),
                'singular_name'         =>  __('special_advertisement'),
                'add_new'               =>  __('add new'),
                'add_new_item'          =>  __('add New special_advertisement'),
                'edit_item'             =>  __('Edit special_advertisement'),
                'view_item'             =>  __('view special_advertisement'),
                'new_item'              =>  __('new special_advertisement'),
                'not_found'             =>  __('sorry, we couln\'t find anything which you are looking for')
            ),
            'public'                =>  true,
            'publicity_queryable'   =>  true,
            'exclude_from_search'   =>  false,
            'has_archive'           =>  true,
            'hierarchical'          =>  false,
            'capability_type'       =>  'page',
            'menu_position'         =>  10,
            'rewrite'               =>  array('slug'=>'special_advertisement'),
            'supports'              =>  array('title', 'thumbnail')
        ));
    }
    add_action('init', 'special_advertisement_post_type');
?>