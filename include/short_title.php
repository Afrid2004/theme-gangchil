<?php
    function short_title($length, $after = '') {
       $mytitle = explode(' ', get_the_title(), $length);
       if (count($mytitle)>=$length) {
           array_pop($mytitle);
           $mytitle = implode(" ",$mytitle). $after;
       } else {
           $mytitle = implode(" ",$mytitle);
       }
           return $mytitle;
    }
?>