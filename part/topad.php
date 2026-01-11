<div class="top_add">
    <?php if(function_exists('get_option_tree')):
        if(get_option_tree('website_top_ad_google_adsense')):
    ?>
        <?php get_option_tree('website_top_ad_google_adsense', '', true);?>
        <?php else:?>

			<?php if(function_exists('get_option_tree')):
				if(get_option_tree('website_top_ad')):
			?>
				<a href="<?php get_option_tree('website_top_ad_link', '', true);?>" 
				   target="_blank">
					<img src="<?php get_option_tree('website_top_ad', '', true);?>" alt="">
				</a>
			<?php else:?>
				<img src="<?php echo get_template_directory_uri();?>/assets/images/logo_right_ad.png" alt="">
			<?php endif; endif?>            
			<?php endif; endif?>
            
</div>