<div class="row">
    <?php while(have_posts()):the_post();?>
        <div class="col-md-4 col-6 wow zoomIn">
                <figure class="figure mb-2">
                    <a class="d-block" href="<?php the_permalink(); ?>">
                        <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'515x250');?>
                           <?php if(!empty($lead_image)){ ?>
                            <img class="img-fluid" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri().'/assets/images/515x250.jpg'?>" alt="<?php the_title();?>">   
                     <?php } ?>
                    </a>
                </figure>
                <h2 class="h6"> <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
            </div>    

        <?php endwhile;?>

</div>