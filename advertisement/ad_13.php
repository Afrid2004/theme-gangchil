<?php if(function_exists('get_option_tree')):
    if(get_option_tree('13_no_home_page_ad_google_adsense')):
?>
    <?php get_option_tree('13_no_home_page_ad_google_adsense', '', true);?>
        <?php else:?>
            <?php if(function_exists('get_option_tree')):
                if(get_option_tree('13_no_home_page_ad')):
            ?>
                <a href="<?php get_option_tree('13_no_home_page_ad_link', '', true);?>" 
                   target="_blank">
                    <img class="img-fluid" src="<?php get_option_tree('13_no_home_page_ad', '', true);?>" 
                    alt="advertisement">
                </a>
            <?php else:?>
                <div class="d-none d-md-block">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/260x95px.jpg" alt="advertisement">
                </div>
        <?php endif; endif?>
<?php endif; endif?>