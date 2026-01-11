<div class="container">

    <h5 class="text-uppercase bg-b10 py-1 px-2 mb-3 text-el"> FRIENDS OF ENL </h5>


   <div class="row mb-5">

		<?php 
            $catId = new WP_Query(array(
                'post_type'         =>  'friends', //changeable
                'posts_per_page'    =>  -1,
                'order'             =>  'DESC'
            ));
        ?>

            <div class="my-slider row">
                <?php while($catId->have_posts()):$catId->the_post(); ?>
                    <div class="col">
                        <figure>
                            <?php 
                                $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'300x300px');
                                if(!empty($lead_image)){ ?>
                                <img class="fluid-img rounded-circle" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri().'/images/300x300px.jpg'?>" alt="<?php the_title();?>">   
                            <?php } ?>
                        </figure>
                        <p class="text-center"> <?php the_title(); ?> </p>
                    </div>
	           <?php endwhile; wp_reset_postdata(); ?>
            </div>
      </div>
</div>