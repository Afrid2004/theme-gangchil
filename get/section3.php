<section class="section3">
	<div class="container">
		<div class="row mb-4">




<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
				<h3><span class="text-white badge bg-danger"> 5 no category </span></h3>
				<?php }
				} ?>
				<!-- category no on off end -->

				<?php
				$catId = get_theme_mod('rjs_category_dropdown_5'); // unique id of the framework
				if (empty($catId)) {
					$catId = 1; //changeable
				}
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'posts_per_page'    =>  12,
					'order'             =>  'DESC'
				)); ?>






			<div class="col-md-12">
				<div class="row">
					<div class="col-12">
						<p class="text-uppercase bg-cat6 py-1 px-2 mb-2">
							<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
						</p>
					</div>
				</div>

				<div class="row">

					<?php while (have_posts()) : the_post(); ?>
						<div class="col-md-3 mb-3 col-6 poff">
							<a href="<?php the_permalink(); ?>" class="d-flex flex-column">
								<span class="pb-2">
									<?php
									$lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px');
									if (!empty($lead_image)) { ?>
										<img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
									<?php } else { ?>
										<img src="<?php echo get_template_directory_uri() . '/assets/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
									<?php } ?>
								</span>

								<h6 class="text-dark mb-0">
									<?php the_title(); ?>
								</h6>

							</a>
						</div>
					<?php endwhile;
					wp_reset_postdata(); ?>

				</div>
			</div>

		</div>
	</div>
</section>