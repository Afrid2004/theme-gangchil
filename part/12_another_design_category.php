<?php
    $catname_12 = ot_get_option('12_category'); //changeable
    if (empty($catname_12)) {
        $catname_12 = 1667; //changeable
    }
    query_posts(array(
        'cat'               =>  $catname_12, //changeable
        'posts_per_page'    =>  1,
        'order'             =>  'DESC'
));?>


<!--start per_category-->
<div class="per_category category">
  <h2> 
    <a href="<?php echo get_category_link($catname_12); ?>">
        <?php echo get_cat_name($catname_12);?>
    </a> 
</h2>

<?php get_template_part('loop_5');?>

<!--start per_category_list_title-->
<div class="per_category_list_title">
    <?php
        $catname_12 = ot_get_option('12_category'); //changeable
        if (empty($catname_12)) {
            $catname_12 = 1667; //changeable
        }
    query_posts(array(
        'cat'               =>  $catname_12, //changeable
        'offset'            =>  1,
        'posts_per_page'    =>  4,
        'order'             =>  'DESC'
    ));?>                             
    <?php get_template_part('loop_4');?>
    </div><!--//end per_category_list_title-->
</div><!--//end per_category-->