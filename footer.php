<section class="container-fluid footer-1-bg-text-color py-4">
  <div class="container">
    <div class="row d-flex align-items-top">
      <div class="col-md-3 mb-3 mb-md-0">
        <?php echo get_template_part('get/main_logo'); ?>
        <div class="footerMatter mt-3">
          <h6 class="font-weight-bold"> <?php echo get_theme_mod('npa_position_1_setting', 'Editor');?> </h6>
          <h6 class="mb-2"> <?php echo get_theme_mod('npa_position_name_1_setting', 'এস এ ফারুক');?> </h6>
        </div>
      </div>

      <!-- Temporary Address -->
      <div class="col-md-1 footerMatter">
        <h6 class="font-weight-bold"> <?php echo get_theme_mod('npa_position_2_setting', 'Editor');?> </h6>
        <h6 class="mb-2"> <?php echo get_theme_mod('npa_position_name_2_setting', 'Saiful Alam');?> </h6>
      </div>

      <div class="col-md-8 footerMatter">
        <div class="row">
          <div class="col-md-4">
            <?php 
              function footer_left_menu_fallback(){
            ?>
            <ul class="navbar-nav footer-link">
              <li class="nav-item py-1"><a href="#" class="nav-link text-dark p-0">Home</a></li>
              <li class="nav-item py-1"><a href="#" class="nav-link text-dark p-0">About us</a></li>
              <li class="nav-item py-1"><a href="#" class="nav-link text-dark p-0">Contact us</a></li>

            </ul>
            <?php } 
              wp_nav_menu(array(
                'theme_location'    => 'footer-menu-left',
                'menu_class'        => 'navbar-nav footer-link',
                'container'         =>  false,
                'depth'             =>  0,
                'fallback_cb'       => 'footer_left_menu_fallback'
              ));
            ?>
          </div>
          <div class="col-md-4">
            <?php 
              function footer_mid_menu_fallback(){
            ?>
            <ul class="navbar-nav">
              <li class="nav-item py-1"><a href="#" class="nav-link text-dark p-0">Cookies Policy</a></li>
              <li class="nav-item py-1"><a href="#" class="nav-link text-dark p-0">Disclaimer</a></li>
              <li class="nav-item py-1"><a href="#" class="nav-link text-dark p-0">Medical Disclaimer</a></li>
            </ul>
            <?php } 
              wp_nav_menu(array(
                'theme_location'    => 'footer-menu-mid',
                'menu_class'        => 'navbar-nav',
                'container'         => false,
                'depth'             => 0,
                'fallback_cb'       => 'footer_mid_menu_fallback'
              ));
            ?>
          </div>
          <div class="col-md-4">
            <?php 
              function footer_right_menu_fallback(){
            ?>
            <ul class="navbar-nav">
              <li class="nav-item py-1"><a href="#" class="nav-link text-dark p-0">Privacy Policy</a></li>
              <li class="nav-item py-1"><a href="#" class="nav-link text-dark p-0">Terms and Conditions</a></li>
              <li class="nav-item py-1"><a href="#" class="nav-link text-dark p-0">Our Writers Panel </a></li>
            </ul>
            <?php } 
              wp_nav_menu(array(
                'theme_location'    => 'footer-menu-right',
                'menu_class'        => 'navbar-nav',
                'container'         => false,
                'depth'             => 0,
                'fallback_cb'       => 'footer_right_menu_fallback'
              ));
            ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="container-fluid bg-footer footer2_color_id">
  <div class="container">
    <div class="row py-2">
      <div class="col-4 mx-auto">
        <p class="mb-0 text-center"> Development by : <a class="text-white" href="https://webnewsdesign.com/"
            target="_blank"> webnewsdesign.com </a> </p>

      </div>
    </div>
  </div>
</section>
<?php wp_footer(); ?>
</body>

</html>