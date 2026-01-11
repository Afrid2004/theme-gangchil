<?php
/*
		Template Name:Our Family
	*/
get_header();
?>

<div class="container">
<?php get_template_part('include/breadcrumb');?>
	<div class="row">
		<?php
		$family = new WP_Query(array(
			'post_type'         => 'family',
			'posts_per_page'    =>  -1,
			'order'             => 'ASC',
		));
		?>
		<?php while ($family->have_posts()) : $family->the_post(); { ?>
				<div class="col-md-3 col-6 mb-md-4 mb-3 borderChai">
					<?php $family_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '275x362'); ?>
					<?php if (!empty($family_image)) { ?>
						<img class="img-fluid mb-2 rounded-circle" src="<?php echo $family_image[0] ?>" alt="<?php the_title(); ?>">
					<?php } else { ?>
						<img class="img-fluid mb-2 rounded-circle" src="<?php echo get_template_directory_uri() . '/assets/images/275x362.jpg' ?>" alt="<?php the_title(); ?>">
					<?php } ?>
					<h5 class="text-center"> <?php the_title(); ?> </h5>
					<h6 class="text-center"> <?php the_field('position'); ?> </h6>
				</div>
		<?php } endwhile; ?>
	</div>
</div>

<!--.end wrap-->
<?php get_footer(); ?>