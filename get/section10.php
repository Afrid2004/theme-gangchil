<section class="section10">
	<div class="container">
		<div class="row mb-md-4">
			<div class="col-md-6">

<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 25 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_25'); // unique id of the framework
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
						<p class="text-uppercase bg-cat24 py-1 px-2 mb-2">
							<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
						</p>
					</div>
				</div>

					<div id="pachmishaly" class="carousel slide mb-3" data-ride="carousel" data-interval="5000">

			            <?php
			            $active = 0;

			            while(have_posts()):the_post(); $active++ ?>

			                <?php if ($active == 1) : ?>
			                    <div class="carousel-item active">
			                        <?php  else : ?>
			                    <div class="carousel-item">
			                <?php endif; ?>

			                <div class="carousel-inner">
			                  <div class="imageBox position-relative">
			                      <a href="<?php the_permalink(); ?>">
			                        <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'542x348px');?>
			                             <?php if(!empty($lead_image)){ ?>
			                              <img class="img-fluid w-100" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
			                              <?php } else { ?>
			                                  <img src="<?php echo get_template_directory_uri().'/assets/images/542x348px.jpg'?>" alt="<?php the_title();?>">
			                       <?php } ?>
			                       <h5 class="position-absolute bottom-0 bg-tf text-white text-center p-2 w-100 mb-0"> <?php the_title(); ?> </h5>
			                      </a>
			                  </div>
			                   <a class="carousel-control-prev" href="#pachmishaly" role="button" data-slide="prev">
			                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			                      <span class="sr-only">Previous</span>
			                    </a>
			                    <a class="carousel-control-next" href="#pachmishaly" role="button" data-slide="next">
			                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
			                      <span class="sr-only">Next</span>
			                    </a>
			                </div>

			              </div>

			          <?php endwhile; ?>
			        </div>

			</div>


			<div class="col-md-6">

<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 26 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_26'); // unique id of the framework
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
							<p class="text-uppercase bg-cat26 py-1 px-2 mb-2">
								<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
							</p>
						</div>
					</div>

					<div id="photogallery" class="carousel slide mb-3" data-ride="carousel" data-interval="5500">

			            <?php
			            $active = 0;

			            while(have_posts()):the_post(); $active++ ?>

			                <?php if ($active == 1) : ?>
			                    <div class="carousel-item active">
			                        <?php  else : ?>
			                    <div class="carousel-item">
			                <?php endif; ?>

			                <div class="carousel-inner">
			                  <div class="imageBox position-relative">
			                      <a href="<?php the_permalink(); ?>">
			                        <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'542x348px');?>
			                             <?php if(!empty($lead_image)){ ?>
			                              <img class="img-fluid" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
			                              <?php } else { ?>
			                                  <img src="<?php echo get_template_directory_uri().'/assets/images/542x348px.jpg'?>" alt="<?php the_title();?>">
			                       <?php } ?>
			                       <h5 class="position-absolute bottom-0 bg-tf text-white text-center p-2 w-100 mb-0"> <?php the_title(); ?> </h5>
			                      </a>
			                  </div>
			                   <a class="carousel-control-prev" href="#photogallery" role="button" data-slide="prev">
			                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			                      <span class="sr-only">Previous</span>
			                    </a>
			                    <a class="carousel-control-next" href="#photogallery" role="button" data-slide="next">
			                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
			                      <span class="sr-only">Next</span>
			                    </a>
			                </div>

			              </div>

			          <?php endwhile; wp_reset_postdata(); ?>
			        </div>
			</div>

		</div>
	</div>
</section>