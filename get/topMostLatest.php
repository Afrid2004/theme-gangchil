<div class="bg-cat3 text-white p-2">
	<span class="text-uppercase"> <?php echo 'Recent' ?> </span>
</div>

<div class="tab-content" id="myTabContent">



	<!-- last news -->
	<div>
		<?php
	  	query_posts(array(
		    'posts_per_page'    =>  10,
		    'order'             =>  'DESC',
		));?>
		<div id="contact1">
			<?php while(have_posts()):the_post(); ?>
			<div class="col-md p-1 mr-3 border-bottom">
				<div class="row">
					<a href="<?php the_permalink(); ?>" class="d-flex">
						<div class="col-4 pr-0">
							<?php
				                    $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'400x250px');
				                    if(!empty($lead_image)){ ?>
							<img class="fluid-img" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
							<?php } else { ?>
							<img src="<?php echo get_template_directory_uri().'/assets/images/400x250px.jpg'?>"
								alt="<?php the_title();?>">
							<?php } ?>
						</div>
						<div class="col-8">
							<h6 class="text-dark mb-0">
								<?php echo short_title(6, '...'); ?>
							</h6>
							<span class="text-muted small"> <?php echo time_ago();?> </span>
						</div>
					</a>
				</div>

			</div>
			<?php endwhile; wp_reset_postdata(); ?>

		</div>
	</div>
</div>