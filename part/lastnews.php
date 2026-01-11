<div class="eNewsSticker">
    <h2> শিরোনাম </h2>
    
    <?php $newsticker = new WP_Query(array(
            'posts_per_pages'   =>  10,
            'order'             =>  'DESC'
        ));?>
    
	<ul id="webticker">
	    
	    <?php while($newsticker->have_posts()):$newsticker->the_post()?>
		    <li> <a href="<?php the_permalink()?>"> <?php the_title();?> </a> </li>
		  <?php endwhile;?>  
        <?php wp_reset_postdata();?>
    </ul>
</div>