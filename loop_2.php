<!--start category_inner_right_image_title-->
<?php while(have_posts()):the_post();?>
    <div class="category_inner_right_image_title">
        <?php if(has_post_thumbnail()){?>
            <!--start category_inner_right_image-->
            <div class="category_inner_right_image">
                <?php $category_image_inner =           
                    wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),
                    'category_image_size_inner');?>
                    <img src="<?php echo $category_image_inner[0]?>" alt="<?php the_title();?>">
            </div>
            <!--.end category_inner_right_image-->
        <?php } else {?>
            <!--start category_inner_2_right_image -->
            <div class="category_inner_2_right_image">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/115x76px.jpg" alt="<?php the_title();?>">
            </div><!--//end category_inner_2_right_image -->    
        
        <?php } ?>
        <!--start category_inner_right_title-->
        <div class="category_inner_right_title">
            <h2> <a href="<?php the_permalink();?>"> <?php the_title();?>  </a> </h2>
        </div>
        <!--.end category_inner_right_title-->
    </div>
    <!--.end category_inner_right_image_title-->
    <?php endwhile;?>