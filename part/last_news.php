<?php $lastNews = new WP_Query(array(
    'cat'               =>  -2256,
    'posts_per_page'    =>  100,
    'order'             =>  'DESC'
));?>

    <!--start last_part-->
    <div class="last_part">
        <h2> সর্বশেষ খবর </h2>
        <!--start latest_news-->
        <div class="latest_news">
            <ul>
                <?php while($lastNews->have_posts()):$lastNews->the_post();?>
                    <li>
                        <a href="<?php the_permalink();?>">
                            <?php the_title();?>
                        </a>
						<span class="time_ago"> <?php echo time_ago();?> </span>
                    </li>
                    <?php endwhile;?>
            </ul>
        </div>
        <!--.end latest_news-->
    </div>
    <!--.end last_part-->