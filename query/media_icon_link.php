<div class="col-md-3">
    <a href="<?php the_field('media_link'); ?>" target="_blank" class="d-flex flex-column text-center border py-1 px-2 mb-3">
        <span class="pb-2">
            <?php 
                $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large');
                if(!empty($lead_image)){ ?>
                <img class="fluid-img" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri().'/assets/images/media_icon_160x40px.jpg'?>" alt="<?php the_title();?>">   
            <?php } ?>
        </span>
        <h6 class="text-dark mb-0"> <?php the_title(); ?> </h6>
    </a>
</div>