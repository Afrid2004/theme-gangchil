<!-- সর্বাধিক পঠিত-->
        <?php
            $last_more_news = new WP_Query(array( 
                                    'date_query' => array(
                                                           'after' => '1 week ago'
                                                        ),
                                    'posts_per_page' => 10, 
                                    'meta_key' => 'post_views_count', 
                                    'orderby' => 'meta_value_num', 
                                    'order' => 'DESC',
                            )
                );
            ?>

            <!--start last_part-->
            <div class="last_part">
                <h2> সর্বাধিক পঠিত </h2>
              
              <div class="latest_news">
                <ul>

                    <?php while($last_more_news->have_posts()):$last_more_news->the_post();?>

                        <li>
                            <a href="<?php the_permalink();?>">
                                <?php the_title();?>
                            </a>
                          
                          <?php if ( is_user_logged_in() ) {?>
                          
                            <span class="time_ago"> (<?php echo getPostViews(get_the_ID()); ?>) </span>
                          
                          <?php } ?>
                        </li>
                        <?php endwhile;?>
                </ul>
                </div>
            </div>
            <!--.end last_part-->