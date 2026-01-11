<?php
    function wpb_change_title_text( $title ){
         $screen = get_current_screen();
         if  ( 'post' == $screen->post_type ) {
              $title = 'type heading... image size : width: 767px; height: 404px';
         }
        if  ( 'media_link' == $screen->post_type ) {
              $title = 'type media\'s name... logo size : width: 160px; height: 40px';
         }
        if  ( 'family' == $screen->post_type ) {
              $title = 'এখানে সাংবাদিকের নাম লিখুন; image size: width: 275px; height: 362px';
         }
         return $title;
    }
    add_filter( 'enter_title_here', 'wpb_change_title_text' );
?>