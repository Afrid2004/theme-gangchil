<?php while(have_posts()):the_post();?>

    <div class="per_category_image_title">

    <?php if(has_post_thumbnail()){?>
       <?php $category_image =             
            wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),
            'category_image_size');?>
            <img src="<?php echo $category_image[0]?>" alt="<?php the_title();?>">


        <?php } else {?>
            <!--start category_alter_image-->
            <img src="<?php echo    
                get_template_directory_uri();?>/assets/images/350x230px.jpg" alt="<?php the_title();?>">

        <?php } ?>        

        <h2> 
            <a href="<?php the_permalink();?>">
                <?php the_title();?>
            </a> 
        </h2>
    </div>

<?php endwhile;?>