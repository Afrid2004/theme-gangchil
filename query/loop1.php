<a href="<?php the_permalink(); ?>" class="d-flex flex-column">
	<span class="pb-2">
        <?php 
            $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'400x250px');
            if(!empty($lead_image)){ ?>
            <img class="fluid-img" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri().'/assets/images/400x250px.jpg'?>" alt="<?php the_title();?>">   
        <?php } ?>
	</span>
	
		<h6 class="text-dark mb-0 font-weight-bold pb-2"> 
			<?php the_title(); ?> 
		</h6>
		<!-- <small class="text-muted"> (<?php //the_time('l, d F Y');?>) </small> -->
</a>