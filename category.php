<?php get_header();?>
<!--start wrap-->
<div class="container">
  <!--start category_and_other-->
  <div class="row mb-4">
    <!--start per_templat_matter-->
    <div class="col-md-8">
      <?php get_template_part('include/breadcrumb');?>
      <div class="row">
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post();?>
        <div class="col-md-4 col-6 wow zoomIn mb-3">
          <figure class="figure mb-2">
            <a class="d-block" href="<?php the_permalink(); ?>">
              <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'515x250');?>
              <?php if(!empty($lead_image)){ ?>
              <img class="img-fluid" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
              <?php } else { ?>
              <img src="<?php echo get_template_directory_uri().'/assets/images/515x250.jpg'?>"
                alt="<?php the_title();?>">
              <?php } ?>
            </a>
          </figure>
          <h2 class="h6"> <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
        </div>
        <?php endwhile; else:?>
        <div class="col-12">
          <p> sorry, there are no post yet, thanks... </p>
        </div>
        <?php endif;?>
      </div>
      <?php get_template_part('include/pagination');?>
      <div class="row mt-3">
        <div class="col-12">
          <?php get_template_part('advertisement/single_page_content_below_1');?>
        </div>
      </div>
    </div>
    <!--.end per_templat_matter-->

    <!--start namaz_writer_other-->
    <div class="col-md-4">
      <?php get_template_part('advertisement/single_page_right_top_1');?>
      <?php get_template_part('advertisement/bangladeshMap');?>

      <!--start writeup-->
      <div class="w-100">
        <p class="bg-b10 color-el py-1 px-2 text-uppercase"> more here </p>


        <?php
                                $category = get_the_category(); //get first current category ID
                                $this_post = $post->ID; // get ID of current post
                                $posts = get_posts('numberposts=10&order=DESC&category=' . 
                                                   $category[0]->cat_ID . '&exclude=' . 
                                                   $this_post);
                                foreach($posts as $post) { ?>

        <div class="row border-bottom mb-2">
          <a href=" <?php the_permalink(); ?> ">
            <div class="col-md-3 pr-0 wow slideInLeft">
              <figure class="figure mb-2">
                <a class="d-block" href="<?php the_permalink(); ?>">
                  <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'515x250');?>
                  <?php if(!empty($lead_image)){ ?>
                  <img class="img-fluid" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                  <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri().'/assets/images/515x250.jpg'?>"
                    alt="<?php the_title();?>">
                  <?php } ?>
                </a>
              </figure>

            </div>

            <div class="col-md-9 wow slideInRight">
              <h2 class="h6"> <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
            </div>
          </a>
        </div>

        <?php } wp_reset_postdata(); ?>
        <!--.end writeup_image_body-->
      </div>
      <!--.end writeup-->

      <?php dynamic_sidebar('calender');?>
      <?php get_template_part('advertisement/single_page_right_top_2');?>
      <?php get_template_part('advertisement/single_page_right_top_3');?>
      <?php get_template_part('advertisement/single_page_right_top_4');?>
      <?php get_template_part('advertisement/single_page_right_top_5');?>

      <?php get_template_part('advertisement/single_page_right_top_6');?>

      <?php get_template_part('part/facebookSingle');?>
    </div>
    <!--.end namaz_writer_other-->
  </div>
  <!--.endcategory_and_other-->
</div>
<!--.end wrap-->

<?php
$category = get_queried_object();
$cat_name = ! empty($category->name) ? $category->name : 'Latest';
?>

<!-- Newsletter Modal -->
<div id="newsletter-modal" class="newsletter-modal">
  <div class="newsletter-modal-content">
    <div class="text-right close-btn">
      <span id="newsletter-close" class="newsletter-close">&times;</span>
    </div>

    <div class="newsletter-wrap">
      <div class="newsletter-container">

        <div class="row align-items-center">
          <!-- LEFT IMAGE -->
          <div class="col-md-6 mb-2 mb-md-0 newsletter-image">
            <img src="<?php echo get_template_directory_uri().'/assets/images/newsletter.jpg'; ?>" alt="Newsletter">
          </div>

          <!-- RIGHT CONTENT -->
          <div class="col-md-6 newsletter-content">
            <h2>
              Get your <span><?php echo esc_html($cat_name); ?></span> newsletter
            </h2>

            <p>
              We’ll send self-care tips and latest updates straight to your inbox.
            </p>

            <!-- FORM (PLUGIN SHORTCODE) -->
            <div class="newsletter-form">
              <?php echo do_shortcode('[mc4wp_form id=32494]'); ?>
            </div>

          </div>

        </div>

      </div>
    </div>

  </div>
</div>



<?php get_footer();?>