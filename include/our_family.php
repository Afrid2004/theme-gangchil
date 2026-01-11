<?php
     function family_post(){
        register_post_type('family', array(
            'label' =>  'আমাদের পরিবার', array(
                'name'          =>  __('family'),  
                'singular_name' =>  __('family'),
                'add_new'       =>  __('add new family'),
                'add_new_item'  =>  __('new family'),
                'edit_item'     =>  __('edit family'),
                'view_item'     =>  __('view family'),
                'not_found'     =>  __('sorry we could\'t find anything you are looking for')
            ),
            
            'public'                =>  true,
            'publicity'             =>  true,
            'exclude_from_search'   =>  false,
            'has_arvhive'           =>  true,
            'menu_position'         =>  6,
            'rewrite'               =>  array('slug'=>'family'),
            'supports'              =>  array('title', 'thumbnail')
        ));
    }

    add_action('init', 'family_post');
?>