<?php get_header();?>
    <!--start wrap-->
    <div class="container">
        <!--start category_and_other-->
        <div class="row mb-2">
            <!--start per_templat_matter-->
            <div class="col-md-8">
                <?php get_template_part('include/breadcrumb');?>
                <?php while(have_posts()):the_post(); ?>
					<?php the_content(); ?>	
				<?php endwhile; ?>
            </div>

            <div class="col-md-4">
	            <?php get_template_part('advertisement/single_page_right_top_1');?>    
	            <div class="mb-4">
	            	<?php get_template_part('get/topMostLatest');?>
	            </div>

	            <div class="mb-4">
	              <?php get_template_part('part/facebookSingle');?>
	            </div>
	            <?php dynamic_sidebar('calender');?>
            </div>
            <!--.end namaz_writer_other-->
        </div>
        <!--.endcategory_and_other-->
    </div>
    <!--.end wrap-->
    <?php get_footer();?>