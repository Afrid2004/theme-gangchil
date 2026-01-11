<div class="mb-3">
    <?php if(function_exists('get_option_tree')):
        if(get_option_tree('2_no_single_google_adsense')):
    ?>
        <?php get_option_tree('2_no_single_google_adsense', '', true);?>
        <?php else:?>
            <?php if(function_exists('get_option_tree')):
                if(get_option_tree('2_no_single_page_ad')):
            ?>
                <a href="<?php get_option_tree('2_no_single_page_ad_link', '', true);?>" 
                   target="_blank">
                    <img class="img-fluid" src="<?php get_option_tree('2_no_single_page_ad', '', true);?>" 
                    alt="">
                </a>
            <?php else:?>
                <div class="d-none d-md-block">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x350px.jpg" alt="">
                </div>                    
            <?php endif; endif?>            
        <?php endif; endif?>
</div>