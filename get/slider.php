<section class="sliderEnl">
    <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <?php 
                $donate = new WP_Query(array(
                    'post_type'         =>  'slider',
                    'posts_per_page'    =>  5,
                    'order'             =>  'DESC'
                )); 
            ?>

            <div id="carouselExampleControls1" class="carousel slide mb-3" data-ride="carousel" data-interval="5000">
  
            <?php 
            $active = 0;

            while($donate->have_posts()):$donate->the_post(); $active++ ?>

                <?php if ($active == 1) : ?>
                    <div class="carousel-item active">
                        <?php  else : ?>
                    <div class="carousel-item">
                <?php endif; ?>
                
                <div class="carousel-inner wow slideInDown">
                  <figure class="figure mb-2">
                      
                          <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'400x273px');?>
                             <?php if(!empty($lead_image)){ ?>
                              <img class="img-fluid" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                              <?php } else { ?>
                                  <img src="<?php echo get_template_directory_uri().'/assets/images/400x273px.jpg'?>" alt="<?php the_title();?>">   
                       <?php } ?>
                      
                  </figure> 
                   <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>            

              </div>
            
          <?php endwhile; ?>
          </div>

        </div>

      </div>
    </div>
</section>