<?php
    function post_type_video(){
        register_post_type('video', array(
            'label' =>  'ভিডিও', array(
                'name'          => __('video'),
                'singular_name' => __('video'),
                'add_new'       => __('add new video'), 
                'add_new_item'  => __('new video'), 
                'edit_item'     => __('edit video'), 
                'view_item'     => __('view video'),
                'new_item'      => __('new video'),
                'not_found'     => __('sorry we coudn\'t find anything you are looking for')
            ),
            'public'            =>  true,
            'publicity'         =>  true,
            'exclude_from_sarch'=> false,
            'has_archive'       => true,
            'menu_position'     =>  5,
            'rewrite'           => array('slug'=>'video'),
            'supports'          => array('title')
                
        ));

}
add_action('init', 'post_type_video');
    
?>