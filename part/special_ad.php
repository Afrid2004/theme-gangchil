<?php
    $special = new WP_Query(array(
        'post_type'         =>  'special',
        'posts_per_page'    =>  1,
    ));
?>


<?php if($special->have_posts()):
    
    while($special->have_posts()):$special->the_post();
    
    $expirationtime = get_post_custom_values('expiration');
    
    if(is_array($expirationtime)){
        $expirestring = implode($expirationtime);
    }
    
    $secondsbetween = strtotime($expirestring)-time();
            if($secondsbetween > 0){?>

                <!--start special_featur-->
                <div class="special_featur">
                    <!--start special_featur_image-->
                    <div class="special_featur_image">
                        <?php $singleimage =    
                            wp_get_attachment_image_src(get_post_thumbnail_id ($post->ID), 'large'); 
                        ?>

                       <a href="<?php the_title();?>" target="_blank">
                           <img src="<?php echo $singleimage[0]?>" 
                           alt="<?php the_title();?>">
                       </a>

                    </div><!--//close special_featur_image-->
                </div>
                <!--//close special_featur-->       
            <?php } endwhile; endif; wp_reset_postdata();?>