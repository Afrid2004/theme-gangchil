<section id="eventNewsVideoDonate">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="recentEvent">
                    <h4 class="border-bottom pb-2 mb-3"> Recent Event  </h4>
                </div>
                <div class="topVolunteers">
                    <h4 class="border-bottom pb-2 mb-3"> Team Members  </h4>
                    <div class="topVolunteersPhoto">

                        <?php 
                            $teamMember = new WP_Query(array(
                                'post_type'         =>  'team',
                                'posts_per_page'    =>  5,
                                'order'             =>  'DESC'
                            ));
                        ?>
                    <?php while($teamMember->have_posts()): $teamMember->the_post(); ?>
                        <div class="row border-bottom mb-2 wow slideInLeft">
                            <div class="col-md-3 pr-0">
                                
                                <figure>
                                    <?php 
                                        $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'300x300px');
                                        if(!empty($lead_image)){ ?>
                                        <img class="rounded-circle fluid-img" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                                        <?php } else { ?>
                                            <img class="rounded-circle fluid-img" src="<?php echo get_template_directory_uri().'/assets/images/300x300px.jpg'?>" alt="<?php the_title();?>">   
                                    <?php } ?>
                                    </figure>
                            </div>
                            <div class="col-md-9">
                                <h5> <?php the_title() ?> </h5>
                                <p> <?php the_field('position'); ?> </p>
                            </div>
                        </div>

                    <?php endwhile; wp_reset_postdata(); ?>


                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <ul class="nav nav-pills mb-3 border-bottom" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active text-uppercase" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> <?php echo get_cat_name(2318); ?> </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-uppercase" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"> <?php echo get_cat_name(2323); ?> </a>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <?php 
                            $catId = new WP_Query(array(
                                'cat'               =>  2318, //changeable
                                'posts_per_page'    =>  1,
                                'order'             =>  'DESC'
                            ));
                        ?>
                        <?php while($catId->have_posts()):$catId->the_post(); ?>
                          <a href="<?php the_permalink() ?>">
                                <figure class="position-relative wow zoomIn">
                                        <?php 
                                            $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'740x400px');
                                            if(!empty($lead_image)){ ?>
                                            <img src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri().'/assets/images/740x400px.jpg'?>" alt="<?php the_title();?>">   
                                        <?php } ?>
                                    
                                    <h4 class="position-absolute m-0 b-0 w-100 text-center d-block px-2 py-3 text-white bg-leadTitle align-bottom">
                                        <?php the_title(); ?> 
                                    </h4>
                                </figure>
                            </a>
                         <?php endwhile; wp_reset_postdata(); ?>   


                         <?php 
                            $catId = new WP_Query(array(
                                'cat'               =>  2318, //changeable
                                'posts_per_page'    =>  3,
                                'order'             =>  'DESC'
                            ));
                        ?>
                         <?php while($catId->have_posts()):$catId->the_post(); ?>
                            <a href="<?php the_permalink() ?>">
                             <div class="row pb-1 mb-3 border-bottom">
                                 <div class="col-md-4 pr-0 wow slideInLeft">
                                         
                                            <figure>
                                                    <?php 
                                                        $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'740x400px');
                                                        if(!empty($lead_image)){ ?>
                                                        <img src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                                                        <?php } else { ?>
                                                            <img src="<?php echo get_template_directory_uri().'/assets/images/740x400px.jpg'?>" alt="<?php the_title();?>">   
                                                    <?php } ?>
                                                
                                            </figure>
                                 </div>
                                 <div class="col-md-8 wow slideInRight">
                                     <span class="d-block h5 text-el"> <?php the_title(); ?> </span>
                                     <p class="text-muted"> posted : <?php the_time('l, d F Y');?> </p>
                                 </div>
                             </div>
                            </a>
                        <?php endwhile; wp_reset_postdata(); ?>      
                      </div>


                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          
                          <?php 
                            $catId = new WP_Query(array(
                                'cat'               =>  2323, //changeable
                                'posts_per_page'    =>  1,
                                'order'             =>  'DESC'
                            ));
                        ?>
                        <?php while($catId->have_posts()):$catId->the_post(); ?>
                          <a href="<?php the_permalink() ?>">
                                <figure class="position-relative">
                                        <?php 
                                            $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'740x400px');
                                            if(!empty($lead_image)){ ?>
                                            <img src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri().'/assets/images/740x400px.jpg'?>" alt="<?php the_title();?>">   
                                        <?php } ?>
                                    
                                    <h4 class="position-absolute m-0 b-0 w-100 text-center d-block px-2 py-3 text-white bg-leadTitle align-bottom">
                                        <?php the_title(); ?> 
                                    </h4>
                                </figure>
                            </a>
                         <?php endwhile; wp_reset_postdata(); ?>   


                         <?php 
                            $catId = new WP_Query(array(
                                'cat'               =>  2323, //changeable
                                'posts_per_page'    =>  3,
                                'order'             =>  'DESC'
                            ));
                        ?>
                         <?php while($catId->have_posts()):$catId->the_post(); ?>
                            <a href="<?php the_permalink() ?>">
                             <div class="row pb-1 mb-3 border-bottom">
                                 <div class="col-md-4 pr-0">
                                         
                                            <figure>
                                                    <?php 
                                                        $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'740x400px');
                                                        if(!empty($lead_image)){ ?>
                                                        <img src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                                                        <?php } else { ?>
                                                            <img src="<?php echo get_template_directory_uri().'/assets/images/740x400px.jpg'?>" alt="<?php the_title();?>">   
                                                    <?php } ?>
                                                
                                            </figure>
                                 </div>
                                 <div class="col-md-8">
                                     <span class="d-block h5 text-el"> <?php the_title(); ?> </span>
                                     <p class="text-muted"> posted : <?php the_time('l, d F Y');?> </p>
                                 </div>
                             </div>
                            </a>
                        <?php endwhile; wp_reset_postdata(); ?>      
                      </div>


                      </div>
                    </div>
            
            <div class="col-md-4">

                <!-- space for advertisement start -->
                <div class="category_ad_space">
                    <?php if(function_exists('get_option_tree')):
                        if(get_option_tree('right_top_google_adsense')):
                    ?>
                        <?php get_option_tree('right_top_google_adsense', '', true);?>
                        <?php else:?>

                            <?php if(function_exists('get_option_tree')):
                                if(get_option_tree('website_category_single_page_right_top')):
                            ?>
                                <a href="<?php get_option_tree('website_category_single_page_right_top_link', '', true);?>" 
                                   target="_blank">
                                    <img src="<?php get_option_tree('website_category_single_page_right_top', '', true);?>" 
                                    alt="">
                                </a>
                            <?php else:?>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/350x350px.jpg" 
                                alt="">
                            <?php endif; endif?>            
                            <?php endif; endif?>
                            
                </div>
                <!-- space for advertisement end -->
                


                <div class="fb-page" data-href="https://www.facebook.com/Earn-N-Live-114007656661487/" data-tabs="message" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Earn-N-Live-114007656661487/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Earn-N-Live-114007656661487/">Earn N Live</a></blockquote></div>
            </div>
        </div>
    </div>
</section>