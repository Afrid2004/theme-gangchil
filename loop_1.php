<?php if(have_posts()):?>
    <?php while(have_posts()):the_post();?>

        <!--start image_title_body-->
        <div class="category_image_title_body">
            <!--start category_image-->
            <?php 
                if(has_post_thumbnail()){?>
                    <div class="category_image">
                        <?php $category_image =             
                            wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),
                            'category_image_size');?>
                            <img src="<?php echo $category_image[0]?>" alt="<?php the_title();?>">
                    </div>
            <?php } else {?>
                <!--start category_alter_image-->
                <div class="category_alter_image">
                    <img src="<?php echo    
                        get_template_directory_uri();?>/assets/images/350x230px.jpg" alt="<?php the_title();?>">
                </div><!--//emd category_alter_image-->
            <?php }?>
            <!--//end category_image-->

            <!--start category_title-->
            <div class="category_title">
                <h2> <a href="<?php the_permalink();?>"> <?php the_title();?> </a> </h2>
                <h3> <?php the_field('reporter_name');?> | <?php the_time('l, d F Y')?> | <?php the_time();?></h3>
                <p>
                    <?php echo excerpt('35');?>
                </p>
            </div>
            <!--.end category_title-->

        </div>
        <!--.end image_title_body-->
        <?php endwhile;?>
    <?php endif;?>