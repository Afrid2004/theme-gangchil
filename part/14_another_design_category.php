<?php
    $catname_14 = ot_get_option('14_category'); //changeable
    if (empty($catname_14)) {
        $catname_14 = 1667; //changeable
    }
    query_posts(array(
        'cat'               =>  $catname_14, //changeable
        'posts_per_page'    =>  1,
        'order'             =>  'DESC'
));?>


<!--start per_category-->
<div class="per_category category">
  <h2> 
    <a href="<?php echo get_category_link($catname_14); ?>">
        <?php echo get_cat_name($catname_14);?>
    </a> 
</h2>

<?php get_template_part('loop_5');?>

<!--start per_category_list_title-->
<div class="per_category_list_title">
    <?php
        $catname_14 = ot_get_option('14_category'); //changeable
        if (empty($catname_14)) {
            $catname_14 = 1667; //changeable
        }
    query_posts(array(
        'cat'               =>  $catname_14, //changeable
        'offset'            =>  1,
        'posts_per_page'    =>  4,
        'order'             =>  'DESC'
    ));?>                             
    <?php get_template_part('loop_4');?>
    </div><!--//end per_category_list_title-->
</div><!--//end per_category-->