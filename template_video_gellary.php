<?php
/*
    Template Name: Video
*/

get_header();?>

    <!--start wrap-->
    <div class="wrap">
       
 <?php get_template_part('include/breadcrumb');?>
       
       
        <!--start template_photogellary-->
       <div class="template_photogellary">
           
            <!--start template_photogellary_box-->
           <div class="template_photogellary_box">
           
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'         => 'video', 
                    'posts_per_page'    =>  '20',        
                    'order'             => 'DESC',
                    'paged'             => $paged
                );

                query_posts($args); 
            ?>
            
           

            <?php 
                    $i=0;
                    while(have_posts()):the_post();?>      
                    <!--start per_photo-->
                    <div class="per_photo">
                       <!--start template_photogellary_image-->
                       <div class="template_photogellary_image">
                          
                        <iframe  src="<?php the_field('video');?>" 
                            style="border:none; 
                                    background:transparent; 
                                    overflow:hidden; 
                                    width:100%;">

                        </iframe>

                        <h3> <?php the_title();?> </h3>
                          
                       </div><!--//close template_photogellary_image-->

                    </div><!--//close per_photo-->
                    
            <?php 
                $i++;
                if($i % 4 == 0)
                {
                 echo "</div>";  
                echo '<div class="template_photogellary_box">';
                }
                endwhile; 
               ?>    
            
            </div><!--//colse template_photogellary_box-->
           
        <?php get_template_part('include/pagination');?>
           
       </div><!--//close template_photogellary-->
    </div>
    <!--.end wrap-->
<?php get_footer();?>