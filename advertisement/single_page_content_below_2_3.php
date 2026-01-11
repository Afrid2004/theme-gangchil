<div class="container px-md-0">
	<div class="row mb-md-4">

		<!-- 2 -->
		<div class="col-md-4 col-12 mb-md-0 mb-4">
			<?php if(function_exists('get_option_tree')):
		        if(get_option_tree('cb_2_no_single_google_adsense')):
		    ?>
		        <?php get_option_tree('cb_2_no_single_google_adsense', '', true);?>
		        <?php else:?>
		            <?php if(function_exists('get_option_tree')):
		                if(get_option_tree('cb_2_no_single_page_ad')):
		            ?>
		               <a href="<?php get_option_tree('cb_2_no_single_page_ad_link', '', true);?>" 
		                   target="_blank">
		                    <img class="img-fluid" src="<?php get_option_tree('cb_2_no_single_page_ad', '', true);?>" 
		                    alt="advertisement">
		                </a>
		            <?php else:?>
		            	<div class="d-none d-md-block">
		                	<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x120px.jpg" alt="advertisement">
						</div>		                	
		            <?php endif; endif?>            
		        <?php endif; endif?>
		</div>

		<!-- 3 -->
		<div class="col-md-4 col-12 mb-md-0 mb-4">
			<?php if(function_exists('get_option_tree')):
		        if(get_option_tree('cb_3_no_single_google_adsense')):
		    ?>
		        <?php get_option_tree('cb_3_no_single_google_adsense', '', true);?>
		        <?php else:?>
		            <?php if(function_exists('get_option_tree')):
		                if(get_option_tree('cb_3_no_single_page_ad')):
		            ?>
		               <a href="<?php get_option_tree('cb_3_no_single_page_ad_link', '', true);?>" 
		                   target="_blank">
		                    <img class="img-fluid" src="<?php get_option_tree('cb_3_no_single_page_ad', '', true);?>" 
		                    alt="advertisement">
		                </a>
		            <?php else:?>
		            	<div class="d-none d-md-block">
		                	<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x120px.jpg" alt="advertisement">
						</div>		                	
		            <?php endif; endif?>            
		        <?php endif; endif?>
		</div>

		<!-- 4 -->
		<div class="col-md-4 col-12 mb-md-0 mb-4">
			<?php if(function_exists('get_option_tree')):
		        if(get_option_tree('cb_4_no_single_google_adsense')):
		    ?>
		        <?php get_option_tree('cb_4_no_single_google_adsense', '', true);?>
		        <?php else:?>
		            <?php if(function_exists('get_option_tree')):
		                if(get_option_tree('cb_4_no_single_page_ad')):
		            ?>
		               <a href="<?php get_option_tree('cb_4_no_single_page_ad_link', '', true);?>" 
		                   target="_blank">
		                    <img class="img-fluid" src="<?php get_option_tree('cb_4_no_single_page_ad', '', true);?>" 
		                    alt="advertisement">
		                </a>
		            <?php else:?>
		            	<div class="d-none d-md-block">
		                	<img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x120px.jpg" alt="advertisement">
						</div>		                	
		            <?php endif; endif?>            
		        <?php endif; endif?>
		</div>



	</div>
</div>