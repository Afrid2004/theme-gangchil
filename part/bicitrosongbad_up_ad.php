<div class="advertisement_box">
    <?php if(function_exists('get_option_tree')):
        if(get_option_tree('website_bicitrosongbad_up_ad')):
    ?>
        <a href="<?php if(get_option_tree('website_category_single_page_right_top_link', '', true));?>" target="_blank">
            <img src="<?php if(get_option_tree('website_bicitrosongbad_up_ad', '', true));?>" alt=" ">
        </a>
        <?php else:?>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/space_for_ad250x250px.jpg" alt="">
            <?php endif; endif;?>
</div>