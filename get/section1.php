<section class="section1">


	<div class="container">
		<!-- category no on off start -->
		<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
		<h3><span class="text-white badge bg-danger text-center"> 1 no category </span></h3>
		<?php }
				} ?>
		<!-- category no on off end -->

		<?php
				$catId = get_theme_mod('rjs_category_dropdown_1'); // unique id of the framework
				if (empty($catId)) {
					$catId = 1; //changeable
				}
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'posts_per_page'    =>  4,
					'order'             =>  'DESC'
				)); ?>
		<div class="row mb-md-4">
			<?php while(have_posts()):the_post(); ?>
			<div class="col-md-3 col-6 mb-3 mb-md-0 poff">
				<a href="<?php the_permalink(); ?>" class="d-flex flex-column flex-md-row border py-1 px-2">
					<div class="col-md-6 col-12 px-0">
						<?php 
	                                $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'400x250px');
	                                if(!empty($lead_image)){ ?>
						<img class="fluid-img mb-2 mb-md-0" src="<?php echo $lead_image[0]?>"
							alt="<?php the_title();?>">
						<?php } else { ?>
						<img src="<?php echo get_template_directory_uri().'/assets/images/400x250px.jpg'?>"
							alt="<?php the_title();?>">
						<?php } ?>
					</div>
					<div class="col-md-6 col-12 px-0 pl-md-2 d-flex align-items-center">
						<h6 class="text-dark mb-0">
							<?php echo short_title(6, '...'); ?>
						</h6>
					</div>
				</a>
			</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</section>