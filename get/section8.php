<div class="container">
	<div class="row mb-md-4">

		<!-- 8 no category -->
		<div class="col-md-3 mb-3 mb-md-0">

<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 18 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_18'); // unique id of the framework
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
						<p class="text-uppercase bg-cat18 py-1 px-2 mb-2">
							<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
						</p>
					</div>
				</div>

				<div class="row pb-2">
					<div class="col-12">
						<?php while(have_posts()):the_post(); ?>
							<?php get_template_part('query/loop1'); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>

				<div class="row">
					<?php
						query_posts(array(
						    'cat'               =>  $catId, //changeable
						    'offset'			=> 1,
						    'posts_per_page'    =>  4,
						    'order'             =>  'DESC'
						));?>

					<div class="col-12">
						<?php while(have_posts()):the_post(); ?>
	                        <?php get_template_part('query/loop2'); ?>
	                    <?php endwhile; wp_reset_postdata(); ?>
					</div>

				</div>
		</div>

		<!-- 9 no category -->
		<div class="col-md-3 mb-3 mb-md-0">

<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 19 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_19'); // unique id of the framework
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
						<p class="text-uppercase bg-cat19 py-1 px-2 mb-2">
							<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
						</p>
					</div>
				</div>

				<div class="row pb-2">
					<div class="col-12">
						<?php while(have_posts()):the_post(); ?>
							<?php get_template_part('query/loop1'); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>

				<div class="row">
					<?php
					query_posts(array(
					    'cat'               =>  $catId, //changeable
					    'offset'			=> 1,
					    'posts_per_page'    =>  4,
					    'order'             =>  'DESC'
					));?>

					<?php while(have_posts()):the_post(); ?>

                        <div class="col-12">
                        	<?php get_template_part('query/loop2'); ?>
                        </div>

                    <?php endwhile; wp_reset_postdata(); ?>
				</div>
		</div>

		<!-- 10 no category -->
		<div class="col-md-3 mb-3 mb-md-0">
<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 20 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_20'); // unique id of the framework
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
						<p class="text-uppercase bg-cat20 py-1 px-2 mb-2">
							<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
						</p>
					</div>
				</div>

				<div class="row pb-2">
					<div class="col-12">
						<?php while(have_posts()):the_post(); ?>
							<?php get_template_part('query/loop1'); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>

				<div class="row">
					<?php
						query_posts(array(
						    'cat'               =>  $catId, //changeable
						    'offset'			=> 1,
						    'posts_per_page'    =>  4,
						    'order'             =>  'DESC'
						));?>

					<?php while(have_posts()):the_post(); ?>

                        <div class="col-12">
                        	<?php get_template_part('query/loop2'); ?>
                        </div>

                    <?php endwhile; wp_reset_postdata(); ?>
				</div>
		</div>

		<!-- 11 no category -->
		<div class="col-md-3 mb-3 mb-md-0">

<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 21 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_21'); // unique id of the framework
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
						<p class="text-uppercase bg-cat21 py-1 px-2 mb-2">
							<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?> </a>
						</p>
					</div>
				</div>

				<div class="row pb-2">
					<div class="col-12">
						<?php while(have_posts()):the_post(); ?>
							<?php get_template_part('query/loop1'); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>

				<div class="row">
					<?php
						query_posts(array(
						    'cat'               =>  $catId, //changeable
						    'offset'			=> 1,
						    'posts_per_page'    =>  4,
						    'order'             =>  'DESC'
						));?>

					<?php while(have_posts()):the_post(); ?>
                       <?php get_template_part('query/loop2'); ?>
                    <?php endwhile; wp_reset_postdata(); ?>
				</div>
		</div>

	</div>
</div>


