<?php $category_part = new WP_Query(array(
    'post_type'     =>  'video',
    'posts_per_page'    =>  1,
    'order'             =>  'DESC'
));?>
   
   <!--start writeup-->
    <div class="writeup">
        <h2> <a href="<?php echo site_url();?>/ভিডিও"> ভিডিও </a> </h2>
        
        <!--start writeup_image_body-->
        <div class="writeup_image_body videoBox">
            <?php while($category_part->have_posts()):$category_part->the_post();?>
            
            <iframe  src="<?php the_field('video');?>" style="border:none; background:transparent; overflow:hidden; width:100%;"></iframe>
            
            <h3> <?php the_title();?> </h3>
            <?php endwhile;?>
        </div>
        <!--.end writeup_image_body-->
        
    </div>
    <!--.end writeup-->