<?php
    function excerpt($num){
        global $post;
        $limit = $num+1;
        $excerpt = explode(' ', get_the_content(), $limit);
        array_pop($excerpt);
        $excerpt = implode (" ", $excerpt) . "<a href='" . get_permalink($post->ID) . "'> ... </a>";
        echo $excerpt;
    }
?>