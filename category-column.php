<?php get_header();?>
    <!--start wrap-->
    <div class="wrap">

        <!--start category_and_other-->
        <div class="category_and_other">

           
            <!--start per_templat_matter-->
            <div class="per_templat_matter">
                
                <span class="archive_heading">
                         <a href="<?php echo site_url();?>"> </a> 
                             <i class="fa fa-angle-right"></i>
                         <?php $category_name = single_cat_title('', true);?>
                </span>

                <?php if(have_posts()): ?>
                    <?php while(have_posts()):the_post();?>

                        <!--start per_category_image_title_body-->
                        <div class="per_category_image_title_body">
                            <h2> <a href="<?php the_permalink();?>"> <?php the_title();?> </a>  </h2>
                            <p>
                                <?php the_field('reporter_name');?> |
                                    <?php the_time('l, d F Y');?> | 
                                        <?php echo getPostViews(get_the_ID()); ?>
                            </p>
                            <!--start per_category_image_body-->
                            <div class="per_category_image_body">
                                <!--start per_category_image-->
                                <div class="per_category_image for_column">

                                    <?php $category_image = 
                                        wp_get_attachment_image_src(get_post_thumbnail_id($post_ID), 
                                                                     'category_image_size_column');?>

                                        <a href="<?php the_permalink();?>">
                                        <img src="<?php echo $category_image[0]?>"
                                                    alt="<?php the_title();?>"></a>
                                </div>
                                <!--.end per_category_image-->
                                <!--start per_category_body-->
                                <div class="per_category_body displayNone for_column_body">
                                    <p>
                                        <?php echo excerpt('110')?>
                                    </p>
                                </div>
                                <div class="per_category_body displayNone1000 for_column_body">
                                    <p>
                                        <?php echo excerpt('80')?>
                                    </p>
                                </div>
                                <div class="per_category_body displayNone1000 displayBlock320 for_column_body">
                                    <p>
                                        <?php echo excerpt('20')?>
                                    </p>
                                </div>
                                <!--.end per_category_body-->
                            </div>
                            <!--.end per_category_image_body-->
                        </div>
                        <!--.end per_category_image_title_body-->

                        <?php endwhile; else:?>

                            <div class="sorry">
                                <p> Sorry ,No more here </p>
                            </div>
                            <?php endif;?>
                                <?php get_template_part('include/pagination');?>
            </div>
            <!--.end per_templat_matter-->





            <!--start namaz_writer_other-->
            <div class="namaz_writer_other">
                
                <?php get_template_part('part/category_right_top_ad');?>
                

                <!--start writeup-->
                <!--start writeup-->
                <div class="writeup">
                    <h2><a href=""> <?php $category_name = single_cat_title( '', true );?>  more </a></h2>
                    <!--start writeup_image_body-->
                    <div class="writeup_image_body">
                        <div class="qaomisongbad_news_list">
                            <ul>
                                <?php
                                    $category = get_the_category(); //get first current category ID
                                    $this_post = $post->ID; // get ID of current post
                                    $posts = get_posts('numberposts=10&offset=10&order=DESC&category=' . 
                                                       $category[0]->cat_ID);
                                    foreach($posts as $post) { ?>


                                    <li>
                                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                            <?php the_title('')?>
                                        </a>

                                    </li>
                                    <?php } wp_reset_postdata(); ?>
                            </ul>
                        </div>
                        <!--.end qaomisongbad_news_list-->
                    </div>
                    <!--.end writeup_image_body-->
                </div>
                <!--.end writeup-->


                <?php dynamic_sidebar('calender');?>
                <?php get_template_part('part/facebook');?>

            </div>
            <!--.end namaz_writer_other-->

        </div>
        <!--.endcategory_and_other-->
    </div>
    <!--.end wrap-->

    <?php get_footer();?>