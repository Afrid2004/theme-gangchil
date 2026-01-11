<?php query_posts(array(
    'cat'               =>  2265,
    'posts_per_page'    =>  1,
    'order'             =>  'DESC'
));?>


    <!--start category-->
    <div class="category">
        <h2> 
            <a href="<?php echo get_category_link(2265); ?>">
                <?php echo get_cat_name(2265);?>
            </a> 
        </h2>
        <!--start category_inner_left-->
        <div class="category_inner_left">

            <?php get_template_part('loop_1');?>

        </div>
        <!--.end category_inner_left-->

        <!--start category_inner_right-->
        <div class="category_inner_right">
            <?php query_posts(array(
                    'cat'               =>  2265,
                    'posts_per_page'    =>  5,
                    'offset'            =>  1,
                    'order'             =>  'DESC'
            ));?>

                <?php get_template_part('loop_2');?>

        </div>
        <!--.end start category_inner_right-->
    </div>
    <!--.end category-->