<div class="writeup_title">
    <!--start qaomisongbad-->
    
    
    <?php if(has_post_thumbnail()){?>
        <div class="qaomisongbad">
            <a href="<?php the_permalink();?>">
               <?php $category_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'category_image_size_right');?>
                <img src="<?php echo $category_image[0]?>" alt="<?php the_title();?>">
            </a>
        </div>
    <?php } else {?>
        <!--start category_3_alt_img-->
        <div class="category_3_alt_img">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/home_page_category_3_alt_img_size_252x163px.jpg" alt="<?php the_title();?>">
        </div><!--//end category_3_alt_img-->
    <?php } ?>

    <!--.emd qaomisongbad-->
    <h2> <a href="<?php the_permalink();?>"> <?php the_title();?>  </a> </h2>
    <!--.end writeup_image-->
    <p> <?php echo excerpt('19');?> </p>
</div>