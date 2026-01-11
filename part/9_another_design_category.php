<?php
    $catname_9 = ot_get_option('9_category'); //changeable
    if (empty($catname_9)) {
        $catname_9 = 1667; //changeable
    }
    query_posts(array(
        'cat'               =>  $catname_9, //changeable
        'posts_per_page'    =>  1,
        'order'             =>  'DESC'
));?>


<!--start per_category-->
<div class="per_category category">
  <h2> 
    <a href="<?php echo get_category_link($catname_9); ?>">
        <?php echo get_cat_name($catname_9);?>
    </a> 
</h2>

<?php get_template_part('loop_5');?>

<!--start per_category_list_title-->
<div class="per_category_list_title">
    <?php
        $catname_9 = ot_get_option('9_category'); //changeable
        if (empty($catname_9)) {
            $catname_9 = 1667; //changeable
        }
    query_posts(array(
        'cat'               =>  $catname_9, //changeable
        'offset'            =>  1,
        'posts_per_page'    =>  4,
        'order'             =>  'DESC'
    ));?>                             
    <?php get_template_part('loop_4');?>
    </div><!--//end per_category_list_title-->
</div><!--//end per_category-->