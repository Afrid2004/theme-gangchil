<?php get_header();?>
    <!--start wrap-->
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-9">
                <!--start per_templat_matter-->
                    <span class="archive_heading bg-success text-white">
                        <?php if(have_posts()):?>
                            <?php 
                                if(is_category()){
                                    single_cat_title();
                                }
                                elseif(is_tag()){
                                    single_tag_title();
                                }
                                elseif(is_author()){
                                    the_post();
                                    echo ''.get_the_author();
                                    rewind_posts();
                                }
                                elseif(is_day()){
                                    echo ''.get_the_time('d M Y');
                                }
                                elseif(is_month()){
                                    echo ''.get_the_date('F Y');
                                }
                                elseif(is_year()){
                                    echo ''.get_the_date('Y');
                                }
                            ?> প্রকাশিত সব খবর
                        </span>

                    <?php while(have_posts()):the_post();?>
                        <div class="archive_category_title">
                            <!--start archive_search_image_box-->
                            <div class="archive_search_image_box">
                            <?php if(has_post_thumbnail()){?>
                                <?php $query_image = 
                                wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'category_image_size_inner');?>
                                        <img src="<?php echo $query_image[0]?>" alt="<?php the_title();?>">
                                <?php } else { ?>    
                                   <img src="<?php echo get_template_directory_uri();?>/assets/images/home_page_category_2_alt_img_size_115x76px.jpg" alt="<?php the_title();?>">
                            <?php } ?>                                
                            </div>
                            <!--.end archive_search_image_box-->
                            <h5>
                               <a href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                            </h5>
                                <div class="source_date">
                                    <h6> 
                                        <?php the_field('reporter_name');?> |
                                        <?php the_time('l, d F Y');?> | পড়া হয়েছে
                                        <?php echo getPostViews(get_the_ID()); ?>
                                     </h6>
                                </div>
                        </div>
                        <?php endwhile; endif;?>
                        <?php get_template_part('include/pagination');?>
            </div>
            <!--.endcategory_and_other-->
            <div class="col-md-3">
                   <?php get_template_part('part/category_right_top_ad');?>
                    <?php dynamic_sidebar('calender');?>
                    <?php get_template_part('part/bicitrosongbad_up_ad');?>
                    <?php get_template_part('part/facebook');?>
                    <?php get_template_part('include/all_mini_ad');?>                        
                
            </div>
        </div> <!--start category_and_other-->
</div>
<!--.end wrap-->
<?php get_footer();?>