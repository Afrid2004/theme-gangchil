<section class="section7">
	<div class="container">
		<div class="row">
			<div class="col-md-3">

<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 15 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_15'); // unique id of the framework
				if (empty($catId)) {
					$catId = 1; //changeable
				}
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'posts_per_page'    =>  1,
					'order'             =>  'DESC'
				)); ?>





				<div class="row">
					<div class="col-12">
						<span class="text-uppercase bg-cat15 py-1 px-2 mb-2 d-block">
							<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
						</span>
					</div>
				</div>

				<div class="row mb-3 mb-md-0">
					<?php while(have_posts()):the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<div class="col-12">
								<div class="imageBox">
									<?php
				                        $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'400x250px');
				                        if(!empty($lead_image)){ ?>
				                        <img class="fluid-img" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
				                        <?php } else { ?>
				                            <img src="<?php echo get_template_directory_uri().'/assets/images/400x250px.jpg'?>" alt="<?php the_title();?>">
				                    <?php } ?>
									<h6 class="bottom-0 text-dark text-center p-2 w-100 mb-0"> <?php the_title(); ?> </h6>
								</div>
		                    </div>
		                   </a>
						<?php endwhile; wp_reset_postdata(); ?>
				</div>

				
<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 16 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_16'); // unique id of the framework
				if (empty($catId)) {
					$catId = 1; //changeable
				}
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'posts_per_page'    =>  1,
					'order'             =>  'DESC'
				)); ?>




				<div class="row">
					<div class="col-12">
						<span class="text-uppercase bg-cat16 py-1 px-2 mb-2 d-block">
							<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
						</span>
					</div>
				</div>
				<div class="row mb-3 mb-md-0">
					<?php while(have_posts()):the_post(); ?>
						<a href="<?php the_permalink(); ?>">
							<div class="col-12 mb-2">
								<div class="imageBox">
									<?php
				                        $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'400x250px');
				                        if(!empty($lead_image)){ ?>
				                        <img class="fluid-img" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
				                        <?php } else { ?>
				                            <img src="<?php echo get_template_directory_uri().'/assets/images/400x250px.jpg'?>" alt="<?php the_title();?>">
				                    <?php } ?>
									<h6 class="bottom-0 text-dark text-center p-2 w-100 mb-0"> <?php the_title(); ?> </h6>
								</div>
		                    </div>
						</a>
						<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>

			<!-- slider part -->
			<div class="col-md-6">

<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 17 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_17'); // unique id of the framework
				if (empty($catId)) {
					$catId = 1; //changeable
				}
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'posts_per_page'    =>  5,
					'order'             =>  'DESC'
				)); ?>




				<div class="row">
					<div class="col-12">
						<p class="text-uppercase bg-cat17 py-1 px-2 mb-2">
							<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
						</p>
					</div>
				</div>

				<div id="photoGallery" class="carousel slide mb-3" data-ride="carousel" data-interval="5000">
		            <?php
		            $active = 0;

		            while(have_posts()):the_post(); $active++ ?>
		                <?php if ($active == 1) : ?>
		                    <div class="carousel-item active">
		                        <?php  else : ?>
		                    <div class="carousel-item">
		                <?php endif; ?>
		                <div class="carousel-inner">
		                  <div class="imageBox">
		                      <a href="<?php the_permalink(); ?>">
		                        <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'542x348px');?>
		                             <?php if(!empty($lead_image)){ ?>
		                              <img class="img-fluid" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
		                              <?php } else { ?>
		                                  <img src="<?php echo get_template_directory_uri().'/assets/images/542x348px.jpg'?>" alt="<?php the_title();?>">
		                       <?php } ?>
		                       <h5 class="text-dark text-center p-2 w-100 mb-0"> <?php the_title(); ?> </h5>
		                      </a>
		                  </div>
		                   <a class="carousel-control-prev" href="#photoGallery" role="button" data-slide="prev">
		                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		                      <span class="sr-only">Previous</span>
		                    </a>
		                    <a class="carousel-control-next" href="#photoGallery" role="button" data-slide="next">
		                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
		                      <span class="sr-only">Next</span>
		                    </a>
		                </div>
		              </div>
		          <?php endwhile; ?>
		        </div>
			</div>
			<div class="col-md-3 pl-0 mb-3 mb-md-0 text-center">
				<?php get_template_part('part/facebook'); ?>
			</div>
		</div>
	</div>
</section>