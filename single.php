<?php get_header(); ?>

<!--start wrap-->
<div class="container">

    <!--start category_and_other-->
    <div class="row mb-2">

        <!--start per_templat_matter-->
        <div class="col-md-8">

            <?php get_template_part('include/breadcrumb'); ?>

            <?php while (have_posts()) : the_post(); ?>

                <!--start per_category_image_title_body-->
                <div class="w-100">
                    <?php
                    $subheading = get_field('subheading');
                    if (!empty($subheading)) { ?>
                        <div class="shoulder pb-2">
                            <h3> <?php echo $subheading; ?> </h3>
                        </div>
                    <?php } ?>
                    <h2> <?php the_title(); ?> </h2>
                    <?php setPostViews(get_the_ID()); ?>

                    <div class="bg-b10 py-2 px-3 d-inline-block w-100 mb-2">
                        <div class="float-left">
                            <?php
                            $reporter_name = get_field('reporter_name');
                            if (!empty($reporter_name)) { ?>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <?php echo $reporter_name; ?> &nbsp; <?php
                                                                    }

                                                                        ?>

                            <i class="fa fa-calendar" aria-hidden="true"> </i> <?php the_time('l, d F Y'); ?>

                        </div>
                        <div class="float-right">
                            <?php echo getPostViews(get_the_ID()); ?>
                        </div>
                    </div>


                    <!--start per_category_image_body-->
                    <div class="per_category_image_body">

                        <!--start per_category_image-->
                        <div class="single_category_image wow fadeIn">
                            <?php
                            $videolink = get_field('embed_code');
                            $fbVideo = get_field('fbVideo');
                            if (!empty($videolink)) { ?>
                                <!--start per_category_image-->
                                <div class="singlePage videoWrapper">
                                    <iframe class="w-100" src="<?php echo $videolink ?>?rel=0&autoplay=1&autohide=1&showinfo=0" frameborder="0"></iframe>
                                </div>
                                <!--//end per_category_image-->
                            <?php } elseif (!empty($fbVideo)) { ?>

                                <div class="fb-video" data-href="<?php echo $fbVideo; ?>" data-show-text="true" data-width="">
                                    
                                </div>

                            <?php
                            } elseif ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {
                                $singleimage =
                                    wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                            ?>

                                <img src="<?php echo $singleimage[0] ?>" alt="<?php the_title(); ?>">
                            <?php } else { ?>

                                <img src="<?php echo get_template_directory_uri() . '/assets/images/730x450px.jpg' ?>">

                            <?php } ?>

                            <?php
                            $caption = get_field('caption');
                            if (!empty($caption)) { ?>
                                <div class="single_caption">
                                    <p>
                                        <?php the_field('caption'); ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                        <!--//end per_category_image-->
                        <!--start per_category_body-->
                        <div class="text-justify wow fadeIn singleNews">
                            <?php the_content(); ?>
                        </div>
                        <!--.end per_category_body-->

                        <div class="row">
                            <div class="col-12">
                                <?php //get_template_part('advertisement/single_page_content_below_1'); ?>
                            </div>
                        </div>


                        <div class="user_initial">
                            <p> Posted <?php the_time(); ?> | <?php the_time('l, d F Y'); ?> </p>
                            <p> <?php bloginfo('name'); ?> | <?php the_author_posts_link(); ?> </p>
                        </div>

                        <?php get_template_part('part/more_read_part'); ?>

                    </div>
                    <!--.end per_category_image_body-->
                </div>
                <!--.end per_category_image_title_body-->
            <?php endwhile; ?>

            <?php get_template_part('advertisement/single_page_content_below_2_3'); ?>

        </div>
        <!--.end per_templat_matter-->

        <!--start namaz_writer_other-->
        <div class="col-md-4">
            <?php //get_template_part('advertisement/single_page_right_top_1'); ?>
            <div class="mb-4">
                <?php get_template_part('get/topMostLatest'); ?>
            </div>
            <?php //get_template_part('get/bangladeshMap'); ?>

            <?php //get_template_part('advertisement/single_page_right_top_2');
            //get_template_part('advertisement/single_page_right_top_3');
            //get_template_part('advertisement/single_page_right_top_4');
            //get_template_part('advertisement/single_page_right_top_5');
            //get_template_part('advertisement/single_page_right_top_6'); ?>

            <!--start writeup-->
            <div class="w-100">
                <p class="bg-cat3 py-1 px-2 text-white"> More news </p>

                <?php
                $category = get_the_category(); //get first current category ID
                $this_post = $post->ID; // get ID of current post
                $posts = get_posts('numberposts=10&order=DESC&category=' .
                    $category[0]->cat_ID . '&exclude=' .
                    $this_post);
                foreach ($posts as $post) { ?>

                    <div class="row border-bottom mb-2">
                        <a href=" <?php the_permalink(); ?> ">
                            <div class="col-md-3 pr-0 wow slideInLeft">
                                <figure class="figure mb-2">
                                    <a class="d-block" href="<?php the_permalink(); ?>">
                                        <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px'); ?>
                                        <?php if (!empty($lead_image)) { ?>
                                            <img class="img-fluid" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
                                        <?php } ?>
                                    </a>
                                </figure>

                            </div>

                            <div class="col-md-9 wow slideInRight">
                                <h2 class="h6"> <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?>
                                    </a> </h2>
                            </div>
                        </a>
                    </div>

                <?php }
                wp_reset_postdata(); ?>
                <!--.end writeup_image_body-->
            </div>
            <!--.end writeup-->
            <!--start writeup-->
            <div class="mb-4">
                <?php get_template_part('part/facebook'); ?>
            </div>

            <?php dynamic_sidebar('calender'); ?>

        </div>
        <!--.end namaz_writer_other-->
    </div>
    <!--.endcategory_and_other-->
</div>
<!--.end wrap-->
<?php get_footer();