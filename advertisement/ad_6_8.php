<div class="container">
	<div class="row mb-md-4">

		<!-- 6 -->
		<div class="col-md-4 col-12 mb-md-0 mb-4">
			<?php if(function_exists('get_option_tree')):
		        if(get_option_tree('6_no_home_page_ad_google_adsense')):
		    ?>
	        <?php get_option_tree('6_no_home_page_ad_google_adsense', '', true);?>
	        <?php else:?>
	            <?php if(function_exists('get_option_tree')):
	                if(get_option_tree('6_no_home_page_ad')):
	            ?>
	                <a href="<?php get_option_tree('6_no_home_page_ad_link', '', true);?>" 
	                   target="_blank">
	                    <img class="img-fluid" src="<?php get_option_tree('6_no_home_page_ad', '', true);?>" 
	                    alt="">
	                </a>
	            <?php else:?>
	            	
		                <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x120px.jpg" 
		                alt="">
		            
	            <?php endif; endif?>            
	        <?php endif; endif?>
		</div>

		<!-- 7 -->
		<div class="col-md-4 col-12 mb-md-0 mb-4">
			<?php if(function_exists('get_option_tree')):
		        if(get_option_tree('7_no_home_page_ad_google_adsense')):
		    ?>
	        <?php get_option_tree('7_no_home_page_ad_google_adsense', '', true);?>
	        <?php else:?>
	            <?php if(function_exists('get_option_tree')):
	                if(get_option_tree('7_no_home_page_ad')):
	            ?>
	                <a href="<?php get_option_tree('7_no_home_page_ad_link', '', true);?>" 
	                   target="_blank">
	                    <img class="img-fluid" src="<?php get_option_tree('7_no_home_page_ad', '', true);?>" 
	                    alt="">
	                </a>
	            <?php else:?>
	            	
	                	<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x120px.jpg" 
	                alt="">
	            
	            <?php endif; endif?>            
	        <?php endif; endif?>
		</div>

		<!-- 8 -->
		<div class="col-md-4 col-12 mb-md-0 mb-4">
			<?php if(function_exists('get_option_tree')):
		        if(get_option_tree('8_no_home_page_ad_google_adsense')):
		    ?>
	        <?php get_option_tree('8_no_home_page_ad_google_adsense', '', true);?>
	        <?php else:?>
	            <?php if(function_exists('get_option_tree')):
	                if(get_option_tree('8_no_home_page_ad')):
	            ?>
	                <a href="<?php get_option_tree('8_no_home_page_ad_link', '', true);?>" 
	                   target="_blank">
	                    <img class="img-fluid" src="<?php get_option_tree('8_no_home_page_ad', '', true);?>" 
	                    alt="">
	                </a>
	            <?php else:?>
	            	
	                <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x120px.jpg" 
	                alt="">
	            
	            <?php endif; endif?>            
	        <?php endif; endif?>
		</div>


	</div>
</div>