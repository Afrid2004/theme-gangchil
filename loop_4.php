<ul>
    <?php while(have_posts()):the_post();?>
        <li>
            <div class="arrow_sign">
                <span><i class="fa fa-angle-right"></i></span>       
            </div>
            
            <div class="title_line">
                <a href="<?php the_permalink();?>"> <?php the_title();?> </a>
            </div>
        </li>
    <?php endwhile;?>
</ul>