<div class="container">
	<div class="row mb-5">

        <!-- cat 1 -->
		<div class="col-md-4">
            <?php $categoryId = 2326; ?>
			<div class="text-uppercase bg-b10 py-1 px-2 mb-3 h5"> 
                <a class="text-el" href="<?php echo get_category_link(2326); ?>"> 
                    <?php echo get_cat_name(2326) ?> 
                </a> 
            </div>
			<?php 
                $catQuery = new WP_Query(array(
                    'cat'               =>  2326, //changeable
                    'posts_per_page'    =>  1,
                    'order'             =>  'DESC'
                ));
            ?>
            <?php while($catQuery->have_posts()):$catQuery->the_post(); ?>
                <?php echo get_template_part('get/loop1'); ?>
            <?php endwhile; wp_reset_postdata(); ?>

        	<?php 
                $catQuery = new WP_Query(array(
                    'cat'               =>  2326, //changeable
                    'posts_per_page'    =>  4,
                    'offset'			=>	1,
                    'order'             =>  'DESC'
                ));
            ?>

			<?php while($catQuery->have_posts()):$catQuery->the_post(); ?>
                <?php echo get_template_part('get/loop2'); ?>
            <?php endwhile; wp_reset_postdata(); ?>
		</div>

        <!-- cat 2 -->
        <div class="col-md-4">
            <?php $categoryId = 2324; ?>
            <div class="text-uppercase bg-b10 py-1 px-2 mb-3 h5"> 
                <a class="text-el" href="<?php echo get_category_link(2324); ?>"> 
                    <?php echo get_cat_name(2324) ?> 
                </a> 
            </div>
            <?php 
                $catQuery = new WP_Query(array(
                    'cat'               =>  2324, //changeable
                    'posts_per_page'    =>  1,
                    'order'             =>  'DESC'
                ));
            ?>
            <?php while($catQuery->have_posts()):$catQuery->the_post(); ?>
                <?php echo get_template_part('get/loop1'); ?>
            <?php endwhile; wp_reset_postdata(); ?>

            <?php 
                $catQuery = new WP_Query(array(
                    'cat'               =>  2324, //changeable
                    'posts_per_page'    =>  4,
                    'offset'            =>  1,
                    'order'             =>  'DESC'
                ));
            ?>

            <?php while($catQuery->have_posts()):$catQuery->the_post(); ?>
                <?php echo get_template_part('get/loop2'); ?>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <!-- cat 2 -->
        <div class="col-md-4">
            <?php $catQuery = 2327; ?>
            <div class="text-uppercase bg-b10 py-1 px-2 mb-3 h5"> 
                <a class="text-el" href="<?php echo get_category_link(2327); ?>"> 
                    <?php echo get_cat_name(2327) ?> 
                </a> 
            </div>
            <?php 
                $catQuery = new WP_Query(array(
                    'cat'               =>  2327, //changeable
                    'posts_per_page'    =>  1,
                    'order'             =>  'DESC'
                ));
            ?>
            <?php while($catQuery->have_posts()):$catQuery->the_post(); ?>
                <?php echo get_template_part('get/loop1'); ?>
            <?php endwhile; wp_reset_postdata(); ?>

            <?php 
                $catQuery = new WP_Query(array(
                    'cat'               =>  2327, //changeable
                    'posts_per_page'    =>  4,
                    'offset'            =>  1,
                    'order'             =>  'DESC'
                ));
            ?>

            <?php while($catQuery->have_posts()):$catQuery->the_post(); ?>
                <?php echo get_template_part('get/loop2'); ?>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
	
	</div>
</div>