<div class="container">
	<div class="row mb-4">

	

		<!-- 9 no category -->
		<div class="col-md-3 mb-3 mb-md-0">

			<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 9 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_9'); // unique id of the framework
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
					<p class="text-uppercase bg-cat10 py-1 px-2 mb-2">
						<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>">
							<?php echo get_cat_name($catId); ?> </a>
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
						));
					?>

				<div class="col-12">
					<?php while(have_posts()):the_post(); ?>
					<?php get_template_part('query/loop2'); ?>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>

			</div>
		</div>

		<!-- 10 no category -->
		<div class="col-md-3 mb-3 mb-md-0">
			<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 10 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_10'); // unique id of the framework
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
					<p class="text-uppercase bg-cat11 py-1 px-2 mb-2">
						<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>">
							<?php echo get_cat_name($catId); ?> </a>
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
						));
					?>

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
			<h3><span class="text-white badge bg-danger"> 11 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_11'); // unique id of the framework
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
					<p class="text-uppercase bg-cat12 py-1 px-2 mb-2">
						<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>">
							<?php echo get_cat_name($catId); ?> </a>
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
						));
					?>

				<?php while(have_posts()):the_post(); ?>

				<div class="col-12">
					<?php get_template_part('query/loop2'); ?>
				</div>

				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>

		<!-- 12 no category -->
		<div class="col-md-3 mb-3 mb-md-0">

			<?php
				if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) { ?>
			<h3><span class="text-white badge bg-danger"> 12 no category </span></h3>
			<?php }
				} ?>
			<!-- category no on off end -->

			<?php
				$catId = get_theme_mod('rjs_category_dropdown_12'); // unique id of the framework
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
					<p class="text-uppercase bg-cat13 py-1 px-2 mb-2">
						<a class="text-white catTitleFontsize" href="<?php echo get_category_link($catId); ?>">
							<?php echo get_cat_name($catId); ?> </a>
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
						));
					?>
				<?php while(have_posts()):the_post(); ?>
				<div class="col-12">
					<?php get_template_part('query/loop2'); ?>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>

	</div>
</div>