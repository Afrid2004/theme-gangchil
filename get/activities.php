<section id="activities">
    <div class="container">

        <h5 class="text-uppercase bg-b10 py-1 px-2 mb-3">
            <a class="text-el" href="<?php echo get_category_link(2322); ?> "> <?php echo get_cat_name(2322); ?> </a> 
        </h5>

        <div class="row mb-5">
            <!-- query -->
            <?php 
                $catId = new WP_Query(array(
                    'cat'               =>  2322, //changeable
                    'posts_per_page'    =>  1,
                    'order'             =>  'DESC'
                ));
            ?>

            <?php while($catId->have_posts()):$catId->the_post(); ?>
            <div class="col-md-8 col-12 wow zoomIn">
                <a href="<?php the_permalink() ?>">
                    <figure class="position-relative">
                            <?php 
                                $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'732x381px');
                                if(!empty($lead_image)){ ?>
                                <img class="fluid-img" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/732x381px.jpg'?>" alt="<?php the_title();?>">   
                            <?php } ?>
                        
                        <h4 class="position-absolute m-0 b-0 w-100 text-center d-block px-2 py-3 text-white bg-leadTitle align-bottom">
                            <?php the_title(); ?> 
                        </h4>
                    </figure>
                </a>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>

        <?php 
            $catId = new WP_Query(array(
                'cat'               =>  2322, //changeable
    /*            'offset'            =>  1,*/
                'posts_per_page'    =>  2,
                'order'             =>  'DESC'
            ));
        ?>

            <div class="col-md-4">
                    <div class="row">
                        <?php while($catId->have_posts()):$catId->the_post(); ?>
                            <div class="col-md-12 col-6 pl-0 wow zoomIn">
                                <a href="<?php the_permalink() ?>">
                                    <figure class="position-relative">
                                            <?php 
                                                $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'400x200px');
                                                if(!empty($lead_image)){ ?>
                                                <img src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                                                <?php } else { ?>
                                                    <img src="<?php echo get_template_directory_uri().'/assets/images/400x200px.jpg'?>" alt="<?php the_title();?>">   
                                            <?php } ?>
                                        
                                        <h6 class="position-absolute m-0 b-0 w-100 text-center d-block px-2 py-3 text-white bg-leadTitle align-bottom">
                                            <?php the_title(); ?> 
                                        </h6>
                                    </figure>
                                </a>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                
            </div>
        </div>
    </div>
</section>