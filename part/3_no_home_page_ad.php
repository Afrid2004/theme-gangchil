<div class="category_ad_space">
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
					<img src="<?php get_option_tree('3_no_home_page_ad', '', true);?>" 
					alt="">
				</a>
			<?php else:?>
				<img src="<?php echo get_template_directory_uri();?>/assets/images/biggapon.gif" 
				alt="">
			<?php endif; endif?>            
			<?php endif; endif?>
            
</div>