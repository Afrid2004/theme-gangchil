<div class="col-md-12">
    <?php if(function_exists('get_option_tree')):
        if(get_option_tree('1_no_home_page_ad_google_adsense')):
    ?>
        <?php get_option_tree('1_no_home_page_ad_google_adsense', '', true);?>
        <?php else:?>
            <?php if(function_exists('get_option_tree')):
                if(get_option_tree('1_no_home_page_ad')):
            ?>
                <a href="<?php get_option_tree('1_no_home_page_ad_link', '', true);?>"
                   target="_blank">
                    <img class="img-fluid" src="<?php get_option_tree('1_no_home_page_ad', '', true);?>"
                    alt="">
                </a>
            <?php else:?>
                <div class="d-none d-md-block">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/350x120px.jpg"
                alt="">
                </div>
            <?php endif; endif?>
        <?php endif; endif?>
</div>