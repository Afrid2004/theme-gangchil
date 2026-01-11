<!--start epaper_small_part-->
        <div class="epaper_small_part">
            
            
            
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'         => 'magazineview', 
                    'posts_per_page'    =>  '12',        
                    'order'             => 'DESC',
                    'paged'             => $paged
                );

                query_posts($args); 
            ?>
            

            <!--start minus_epaper_small_part-->
            <div class="minus_epaper_small_part">
                <?php while(have_posts()):the_post();?>
                    <!--start epaper_single-->
                    <div class="epaper_single gallery">
                            <?php the_post_thumbnail('epapner_image_size_small');?>
                        <p> <?php the_title();?> </p>
                        
                        
                        <a href="<?php the_field('e_paper_link');?>" target="_blank">

                            <span class="clickforview">
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </span>
                        </a>

                    </div>
                    <!--//end epaper_single-->
                    <?php endwhile;?>
                    
                    
                    
            </div>
            <!--//end minus_epaper_small_part-->
            <?php get_template_part('include/pagination');?>
        </div>
        <!--//end epaper_small_part-->