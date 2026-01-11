<?php query_posts(array(
            'cat'               =>  2266,
            'posts_per_page'    =>  1,
            'order'             =>  'DESC'
        ));?>

            <!--start per_category-->

                <div class="per_category category">
                  <h2> 
                    <a href="<?php echo get_category_link(2266); ?>">
                        <?php echo get_cat_name(2266);?>
                    </a> 
                </h2>

                <?php get_template_part('loop_5');?>




                    <!--start per_category_list_title-->
                    <div class="per_category_list_title">

                        <?php query_posts(array(
                            'cat'               =>  2266,
                            'posts_per_page'    =>  4,
                            'order'             =>  'DESC',
                            'offset'            =>  1
                        ));?>                               


                        <?php get_template_part('loop_4');?>

                    </div><!--//end per_category_list_title-->
                </div><!--//end per_category-->


        