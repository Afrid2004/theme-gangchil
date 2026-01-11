<?php
    $catname_2 = ot_get_option('2_category'); //changeable
    if (empty($catname_2)) {
        $catname_2 = 1667; //changeable
    }
    
query_posts(array(
    'cat'               =>  $catname_2, //changeable
    'posts_per_page'    =>  5,
    'order'             =>  'DESC'
));?>

    <!--start category-->
    <div class="category">
        
        <h2> 
            <a href="<?php echo get_category_link($catname_2); ?>">
                <?php echo get_cat_name($catname_2);?>
            </a> 
        </h2>
        
        <div class="fix highlights">
           <div class="fix minus_highlights">
              
               <?php if(have_posts()):?>
                    <?php while(have_posts()):the_post();?>
                        <div class="fix highlights_image_title">
                          <?php if(has_post_thumbnail()){?>
                             <div class="fix highlights_image">
                                <a href="<?php the_permalink();?>">
                                    <?php $category_image =             
                                    wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),
                                    'category_image_size');?>
                                    <img src="<?php echo $category_image[0]?>" alt="<?php the_title();?>">
                                </a>
                            </div>
                    <?php } else { ?>
                        <div class="fix highlights_image">
                            <a href="<?php the_permalink();?>">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/351x231px.jpg" alt="<?php the_title();?>">
                            </a>
                        </div>
                        <?php } ?>
                        <div class="highlights_title">
                            <h2> <a href="<?php the_permalink();?>"> <?php the_title();?> </a> </h2>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
            </div>
        </div>
    </div>
    <!--.end category-->