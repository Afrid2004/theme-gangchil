<section class="section1">
	<div class="container">
		<div class="row mb-4">

			<!-- slider part -->
			<div class="col-md-6">
				<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
				<h3><span class="text-white badge bg-danger"> 2 no category </span></h3>
				<?php }
				} ?>
				<!-- category no on off end -->

				<?php
				$catId = get_theme_mod('rjs_category_dropdown_2'); // unique id of the framework
				if (empty($catId)) {
					$catId = 1; //changeable
				}
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'posts_per_page'    =>  5,
					'order'             =>  'DESC'
				)); ?>






				<div id="mainSlider" class="carousel slide mb-3" data-ride="carousel" data-interval="5000">

					<?php
					$active = 0;

					while (have_posts()) : the_post();
						$active++ ?>

						<?php if ($active == 1) : ?>
							<div class="carousel-item active">
							<?php else : ?>
								<div class="carousel-item">
								<?php endif; ?>

								<div class="carousel-inner">
									<div class="imageBox position-relative">
										<a href="<?php the_permalink(); ?>">
											<?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '542x348px'); ?>
											<?php if (!empty($lead_image)) { ?>
												<img class="img-fluid" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
											<?php } else { ?>
												<img src="<?php echo get_template_directory_uri() . '/assets/images/542x348px.jpg' ?>" alt="<?php the_title(); ?>">
											<?php } ?>
											<h5 class="position-absolute bottom-0 bg-tf text-white text-center p-2 w-100 mb-0"> <?php the_title(); ?> </h5>
										</a>
									</div>
									<a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>

								</div>

							<?php endwhile;
						wp_reset_postdata(); ?>
							</div>

				</div>

				<!-- top most last -->
				<div class="col-md-3 pl-md-0 mb-md-0 mb-3">
					<?php get_template_part('get/topMostLatest'); ?>
				</div>

				<!-- two news -->
				<div class="col-md-3 pl-md-0 editorAdvisorEditor position-relative">
					<div class="row d-flex d-flex-row">
						<div class="col-12 mb-3">
							
<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
				<h3><span class="text-white badge bg-danger"> 4 no category </span></h3>
				<?php }
				} ?>
				<!-- category no on off end -->

				<?php
				$catId = get_theme_mod('rjs_category_dropdown_4'); // unique id of the framework
				if (empty($catId)) {
					$catId = 1; //changeable
				}
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'posts_per_page'    =>  2,
					'order'             =>  'DESC'
				)); ?>





							<div class="row">
								<div class="col-12">
									<p class="text-uppercase bg-cat4 py-1 px-2 mb-2">
										<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
									</p>
								</div>
							</div>

							<?php
							while (have_posts()) : the_post(); ?>
								<a href="<?php the_permalink(); ?>">
									<div class="col-12 mb-2 px-0">
										<div class="imageBox position-relative">
											<?php
											$lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '272x148px');
											if (!empty($lead_image)) { ?>
												<img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
											<?php } else { ?>
												<img src="<?php echo get_template_directory_uri() . '/assets/images/272x148px.jpg' ?>" alt="<?php the_title(); ?>">
											<?php } ?>
											<h6 class="position-absolute bottom-0 bg-tf text-white text-center p-2 w-100 mb-0"> <?php the_title(); ?> </h6>
										</div>
									</div>
								</a>
							<?php endwhile;
							wp_reset_postdata(); ?>
						</div>

						<div class="col-12 bb45 position-absolute bottom-0 d-none d-sm-block"></div>

					</div>
				</div>

			</div>
		</div>

</section>