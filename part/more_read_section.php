<!-- সর্বাধিক পঠিত-->
<?php
    $last_more_news = new WP_Query(array( 
        'date_query' => array(
                               'after' => '1 week ago'
                            ),
        'posts_per_page' => 6, 
        'meta_key' => 'post_views_count', 
        'orderby' => 'meta_value_num', 
        'order' => 'DESC',
        )
    );
?>
   

<!--start last_part-->
<div class="last_part">
    <h2> সর্বাধিক পঠিত </h2>
    <ul>

        <?php while($last_more_news->have_posts()):$last_more_news->the_post();?>

            <li>
                <a href="<?php the_permalink();?>">
                    <?php the_title();?>
                </a>
                <span class="time_ago"> (<?php echo getPostViews(get_the_ID()); ?>) </span>
            </li>
            <?php endwhile;?>
    </ul>
</div>
<!--.end last_part-->