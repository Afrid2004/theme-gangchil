<div class="container">
	<div class="row mx-1 h6 webtickers bg-ticker">
		<div class="col-md-1 col-3 text-white justify-content-center py-2"> শিরোনাম </div>
		<div class="col-md-11 col-9">
			<?php $newsticker = new WP_Query(array(
	            'posts_per_pages'   =>  10,
	            'order'             =>  'DESC',
				'cat'				=> -51

	        ));?>
			<ul id="webticker">
			    <?php while($newsticker->have_posts()):$newsticker->the_post()?>
				    <li> <a class="text-color-ticker" href="<?php the_permalink()?>"> <?php the_title();?> </a> </li>
				  <?php endwhile;?>
		        <?php wp_reset_query();?>
			</ul>
		</div>
	</div>
</div>