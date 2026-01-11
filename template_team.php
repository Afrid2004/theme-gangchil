<?php 
	get_header();
	/*
		Template Name: Team
	*/

		$team = new WP_Query(array(
			'post_type'			=> 'team',
			'posts_per_page'	=>	-1,
			'order'				=> 'DESC',
			'oderby'			=> 'menu_order'
		));
?>



<div class="container">
	<?php get_template_part('include/breadcrumb'); ?>
	<div class="row">
		
		<?php while($team->have_posts()):$team->the_post(); ?>

			<div class="col-md-3 col-6 wow zoomIn">
				<figure class="position-relative">
                        <?php 
                            $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'300x300px');
                            if(!empty($lead_image)){ ?>
                            <img src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri().'/assets/images/300x300px.jpg'?>" alt="<?php the_title();?>">   
                        <?php } ?>
                    
                    <p class="position-absolute m-0 b-0 w-100 text-center d-block px-2 py-3 text-white bg-leadTitle align-bottom h6">
                        <?php the_title(); ?> 
							<br>
                        <?php 
	                    	$position = get_field('position'); 
	                    	if (!empty($position)) { ?>
	                    		<?php echo $position; ?>
	                    	<?php } ?>

                    </p>

                  

                </figure>
			</div>

		<?php endwhile; wp_reset_postdata(); ?>	

	</div>
</div>

<?php 
	get_footer();
?>