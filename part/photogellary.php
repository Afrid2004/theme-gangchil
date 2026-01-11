<?php $category_part = new WP_Query(array(
    'post_type'         =>  'photogellary',
    'posts_per_page'    =>  10,
    'order'             =>  'DESC'
));?>

    <div class="category margin_bottom_zero">
        <h2> <a href="<?php echo site_url();?>/ফটোগ্যালারি"> ফটোগ্যালারি </a>  </h2>
        <!--start photo_gellary-->
        <div class="photo_gellary">
            <ul class="photo">
                <?php while($category_part->have_posts()):$category_part->the_post();?>

                    <?php $category_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large');?>

                    <li>
                        <a href="<?php echo $category_image[0]?>" data-lightbox="roadtrip" 
                                data-title="<?php the_title();?> ">
                                <?php the_post_thumbnail('image_for_photogellary');?>
                        </a>    
                        <!--start photo_gellary_caption-->
                        <div class="fix photo_gellary_caption">
                            <a href="<?php echo $category_image[0]?>"> 
                                <?php the_title();?>
                            </a>
                        </div><!--//close photo_gellary_caption-->
                    </li>
                    <?php endwhile;?>
            </ul>
        </div>
        <!--.end photo_gellary-->

    </div>