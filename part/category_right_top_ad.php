<div class="category_ad_space">
    <?php if(function_exists('get_option_tree')):
        if(get_option_tree('right_top_google_adsense')):
    ?>
        <?php get_option_tree('right_top_google_adsense', '', true);?>
        <?php else:?>

			<?php if(function_exists('get_option_tree')):
				if(get_option_tree('website_category_single_page_right_top')):
			?>
				<a href="<?php get_option_tree('website_category_single_page_right_top_link', '', true);?>" 
				   target="_blank">
					<img src="<?php get_option_tree('website_category_single_page_right_top', '', true);?>" 
					alt="">
				</a>
			<?php else:?>
				<img src="<?php echo get_template_directory_uri();?>/assets/images/350x350px.jpg" 
				alt="">
			<?php endif; endif?>            
			<?php endif; endif?>
            
</div>