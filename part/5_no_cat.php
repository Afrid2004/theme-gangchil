<?php
    $catname_5 = ot_get_option('5_category'); //changeable
    if (empty($catname_5)) {
        $catname_5 = 1667; //changeable
    }
    
query_posts(array(
    'cat'               =>  $catname_5, //changeable
    'posts_per_page'    =>  1,
    'order'             =>  'DESC'
));?>

<!--start category-->
<div class="category">
    <h2> 
        <a href="<?php echo get_category_link($catname_5); ?>">
            <?php echo get_cat_name($catname_5);?>
        </a> 
    </h2>
    
    <!--start category_inner_left-->
    <div class="category_inner_left">
        <?php get_template_part('loop_1');?>
    </div>
    <!--.end category_inner_left-->
    <!--start category_inner_right-->
    <div class="category_inner_right">
        <?php
            $catname_5 = ot_get_option('5_category'); //changeable
            if (empty($catname_5)) {
                $catname_5 = 1667; //changeable
            }
            
        query_posts(array(
            'cat'               =>  $catname_5, //changeable
            'posts_per_page'    =>  5,
            'offset'            =>  1,
            'order'             =>  'DESC'
        ));?>

       <?php get_template_part('loop_2');?>
    </div>
    <!--.end start category_inner_right-->
</div>
<!--.end category-->