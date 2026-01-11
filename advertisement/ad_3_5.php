<div class="container">
	<div class="row mb-md-4">

		<!-- 3 -->
		<div class="col-md-4 col-12 mb-md-0 mb-4">
			<?php if(function_exists('get_option_tree')):
		        if(get_option_tree('3_no_home_page_ad_google_adsense')):
		    ?>
	        <?php get_option_tree('3_no_home_page_ad_google_adsense', '', true);?>
	        <?php else:?>
	            <?php if(function_exists('get_option_tree')):
	                if(get_option_tree('3_no_home_page_ad')):
	            ?>
	                <a href="<?php get_option_tree('3_no_home_page_ad_link', '', true);?>" 
	                   target="_blank">
	                    <img class="img-fluid" src="<?php get_option_tree('3_no_home_page_ad', '', true);?>" 
	                    alt="advertisement">
	                </a>
	            <?php else:?>
	            	
	                <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x120px.jpg" alt="">
	            
	            <?php endif; endif?>            
	        <?php endif; endif?>
		</div>

		<!-- 4 -->
		<div class="col-md-4 col-12 mb-md-0 mb-4">
			<?php if(function_exists('get_option_tree')):
		        if(get_option_tree('4_no_home_page_ad_google_adsense')):
		    ?>
	        <?php get_option_tree('4_no_home_page_ad_google_adsense', '', true);?>
	        <?php else:?>
	            <?php if(function_exists('get_option_tree')):
	                if(get_option_tree('4_no_home_page_ad')):
	            ?>
	                <a href="<?php get_option_tree('4_no_home_page_ad_link', '', true);?>" 
	                   target="_blank">
	                    <img class="img-fluid" src="<?php get_option_tree('4_no_home_page_ad', '', true);?>" 
	                    alt="advertisement">
	                </a>
	            <?php else:?>
	            	
	                <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x120px.jpg" 
	                alt="">
	            
	            <?php endif; endif?>            
	        <?php endif; endif?>
		</div>

		<!-- 5 -->
		<div class="col-md-4 col-12 mb-md-0 mb-4">
			<?php if(function_exists('get_option_tree')):
		        if(get_option_tree('5_no_home_page_ad_google_adsense')):
		    ?>
	        <?php get_option_tree('5_no_home_page_ad_google_adsense', '', true);?>
	        <?php else:?>
	            <?php if(function_exists('get_option_tree')):
	                if(get_option_tree('5_no_home_page_ad')):
	            ?>
	                <a href="<?php get_option_tree('5_no_home_page_ad_link', '', true);?>" 
	                   target="_blank">
	                    <img class="img-fluid" src="<?php get_option_tree('5_no_home_page_ad', '', true);?>" 
	                    alt="advertisement">
	                </a>
	            <?php else:?>
	            	
	                <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x120px.jpg" 
	                alt="">
	            
	            <?php endif; endif?>            
	        <?php endif; endif?>
		</div>
	</div>
</div>