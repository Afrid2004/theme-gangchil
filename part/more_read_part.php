<!--start more_read_section_all-->
<div class="mostRead">
    <!--start more_read_section-->
        <p class="header_bg_1 py-1 px-2 text-white wow slideInLeft"> <?php $category_name = single_cat_title('', true);?> এ বিভাগের সর্বাধিক পঠিত  </p>
        <!--start more_read_box-->
        <div class="more_read_box">
            <div class="row">
                <?php
                    $category = get_the_category(); //get first current category ID
                    $this_post = $post->ID; // get ID of current post
                    $posts = get_posts('numberposts=33&meta_key=post_views_count&orderby=meta_value_num&category=' . 
                                       $category[0]->cat_ID . '&exclude=' . 
                                       $this_post);
                    foreach($posts as $post) { ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="col-md-4 col-6 wow zoomIn">
                                <div class="col-12 px-0 pb-2">
                                <?php                
                                    if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {
                                                $singleimage =    
                                                    wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px'); 
                                        ?>
                                            <img src="<?php echo $singleimage[0]?>" 
                                                alt="<?php the_title();?>">
                                    <?php } else { ?>    
                                       <img src="<?php echo get_template_directory_uri().'/assets/images/400x250px.jpg'?>">   
                                    <?php } ?>
                                </div>   
                                <h6 class="mb-0"> <a class="text-dark" href="<?php the_permalink() ?>"> <?php the_title()?></a> </h6>
                                <p>
                                    <small class="text-muted"> (<?php echo getPostViews(get_the_ID()); ?>) </small>
                                </p>
                            </div><!--//end more_read_box_title_image-->
                        </a>
                    <?php } wp_reset_postdata(); ?>
            </div>
        </div><!--//colse more_read_box-->
</div><!--//close more_read_section_all-->