<div class="row mb-2">

	<div class="col-5 pr-0">
		<?php
		$lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '111x92px');
		if (empty($lead_image)) { ?>
			<img src="<?php echo get_template_directory_uri() . '/assets/images/111x92px.jpg' ?>" alt="<?php the_title(); ?>">
		<?php } else { ?>
			<img class="fluid-img w-100" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">

		<?php } ?>
	</div>
	<div class="col-7">
		<div class="text-dark mb-0 pl-0">
			<h6> <a class="text-dark font-weight-bold" href="<?php the_permalink() ?>"> <?php echo short_title(5, '...' ); ?> </a> </h6>
		</div>

		<div class="text-dark mb-0">
			<?php echo excerpt('7'); ?>
		</div>
	</div>

</div>