<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-NSNTQS6');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="keywords"
    content="Health and wellness, health tips, natural remedies, healthy lifestyle, Health insurance, fitness blogs, diet plans, mental health, parenting, food and supplements, Health & Eco Product Reviews, yoga and meditation, child development">

  <meta name="p:domain_verify" content="f3eba943c8cd2278f04c31628274f05a" />

  <title>
    <?php wp_title('|', true, 'right'); ?>
    <?php bloginfo('name'); ?>
  </title>

  <?php wp_head(); ?>

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6383212642884017"
    crossorigin="anonymous"></script>
</head>



<style>
/* ====================== new css start ====================== */

.header-1-bg-text-color {
  background-color: <?php echo get_theme_mod('date_and_search_bar_background_setting', '#006400');
  ?>;
  color: <?php echo get_theme_mod('date_and_search_bar_color_setting', '#ffffff');
  ?>;
}

.form-control,
.medialink {
  border: 1px solid <?php echo get_theme_mod('date_and_search_bar_color_setting', '#ffffff');
  ?>;
}

.serchButtonHeader i {
  color: <?php $npa_theme_text_color=get_theme_mod('date_and_search_bar_color_setting');
  ?>;
}


/* npa_theme_bg_cl */
.header_bg_3,
.npa_theme_bg_cl {
  background: <?php echo get_theme_mod('npa_menubar_bg_color_setting', '#006400')?>;
}

/* menu text color */
ul#faroqueId li a,
.header-bangla-date p,
.medialink a {
  color: <?php echo get_theme_mod('date_and_search_bar_color_setting', '#ffffff') ?>;
}

/* for all category */

/* cateogyr No 3 */

<?php for($i=2; $i < 27; $i++) {
  echo '.bg-cat'. $i ?> {
    background-color: <?php echo get_theme_mod("npa_category_bg_id_{$i}", "#006400");
    ?>
  }

  <?php echo '.bg-cat'. $i ?>li a,
  <?php echo '.bg-cat'. $i?>a {
    color: <?php echo get_theme_mod("npa_category_text_id_{$i}", "#ffffff");
    ?>
  }

  <?php
}

?>.bb45 {
  border-bottom: 5px solid <?php echo get_theme_mod("npa_category_bg_id_4", "#006400") ?>;
}

.footer-menubar-2-bg {
  background-color: <?php echo get_theme_mod('npa_footer_2_background_setting', '#D5D5D5');
  ?>;
}

.mr-last-child-0 {
  border: 1px solid <?php echo get_theme_mod('npa_footer_2_text_color_setting', '#000000');
  ?>;
}

.mr-last-child-0 a,
.footerDesign2Address ul li,
.footerDesign2Address ul li a {
  color: <?php echo get_theme_mod('npa_footer_2_text_color_setting', '#000000');
  ?>;
}

.footer-design-and-development-bg {
  background: red;
}

.footer-design-and-development,
.footer-design-and-development-text,
.footer-design-and-development-text a {
  color: white;
}

.widget_bddp_ac_widget {
  border: 1px solid <?php echo get_theme_mod('npa_archive_bg_color_setting', '#006400');
  ?>;
}


.header_bg_2 {
  background-color: <?php echo get_theme_mod('npa_main_logo_bg_color', '#ffffff');
  ?>
}


.main_menu ul li a {
  color: <?php echo get_theme_mod('npa_menubar_text_color_setting', '#ffffff');
  ?>
}

.current-menu-item>a {
  background: <?php echo get_theme_mod('npa_menubar_active_background_setting', '#FF0000');
  ?>
}

.main_menu ul li {
  border-left: <?php echo get_theme_mod('npa_menu_left_border', '#008900');
  ?>;
  border-right: <?php echo get_theme_mod('npa_menu_right_border', '#00510d');
  ?>;
}


.bg-ticker {
  background-color: <?php echo get_theme_mod('npa_scroll_bg', '#FF0000');
  ?>
}

ul#webticker li a {
  color: <?php echo get_theme_mod('npa_scroll_text_color', '#FFFFFF');
  ?>;
}

.footer-1-bg-text-color {
  background-color: <?php echo get_theme_mod('npa_footer_2_background_setting', '#f8f9fa');
  ?>;
}

.footerMatter h6 {
  color: <?php echo get_theme_mod('npa_footer_2_text_color_setting', '#000000');
  ?>;
}


.bg-footer {
  background-color: <?php echo get_theme_mod('npa_footer_dd_background_setting', '#006400');
  ?>;
  color: <?php echo get_theme_mod('npa_footer_dd_text_setting', '#FFFFFF');
  ?>;
}

/* ====================== new css end ====================== */






/* npa-bg-ticker */
.npa-bg-ticker {
  background:
    <?php $npa_scroll_bg=get_theme_mod('npa_scroll_bg');
  echo $npa_scroll_bg;
  ?>;
}

/* npa-ticker-text-color */
.tickerH.text-color-ticker,
#webticker .text-color-ticker a {
  color: white;
  <?php $npa_scroll_text_color=get_theme_mod('npa_scroll_text_color');
  echo $npa_scroll_text_color;
  ?>;
}












ul.dropdown-menu.show,
.npa_theme_bg_c2 {
  background: <?php echo get_theme_mod('npa_menubar_bg_color_setting', '#006400')?>;
}

.current-menu-item>a {
  background:
    <?php $npa_active_menu=get_theme_mod('npa_active_menu_bg');

  if ( !empty($npa_active_menu)) {
    echo $npa_active_menu;
  }

  ?>;
  color: <?php $npa_menubar_active_text_setting=get_theme_mod('npa_menubar_active_text_setting');

  if ( !empty($npa_menubar_active_text_setting)) {
    echo $npa_menubar_active_text_setting;
  }

  ?> !important;
}

ul#faroqueId li a:hover {
  background: <?php $npa_active_menu=get_theme_mod('npa_active_menu_bg');

  if ( !empty($npa_active_menu)) {
    echo $npa_active_menu;
  }

  ?>;
  transition: all 0.5s;
}


ul#faroqueId li {
  <?php $npa_menu_left_border=get_theme_mod('npa_menu_left_border');

  if ( !empty($npa_menu_left_border)) {
    echo 'border-left: 1px solid '. $npa_menu_left_border;
  }

  ?>;
  <?php $npa_menu_right_border=get_theme_mod('npa_menu_right_border');

  if ( !empty($npa_menu_right_border)) {
    echo 'border-right: 1px solid'. $npa_menu_right_border;
  }

  ?>;
}

.bg-calendar {
  background-color: <?php echo get_theme_mod('npa_archive_bg_color_setting', '#006400');
  ?>;
  color: <?php echo get_theme_mod('npa_archive_text_color_setting', '#FFFFFF');
  ?>;
}


/* category background color end */
nav.navbar {
  padding: 0;
}

ul#faroqueId li {
  margin-bottom: 0;
}
</style>

</head>

<body>
  <!--start faceboo head code-->

  <section class="headerearnnlive mb-md-2 d-none d-md-block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php //get_template_part('part/special_ad');?>
        </div>
      </div>
    </div>

    <div class="container-fluid header-1-bg-text-color wow slideInDown header_bg_1">
      <!--start for_search-->
      <div class="container">
        <div class="row py-1">
          <!--.end main_logo_add-->
          <div class="col-md-5 h6 mb-0 py-1">
            <p class="mb-0 pt-2">

              <?php 
								echo date("l | d F Y");
							?>

            </p>
          </div>
          <!--.end date_and_time-->

          <span class="col-4 py-1">
            <?php echo get_template_part('get/aboutusMedialinkContact'); ?>
          </span>

          <!--start top_search-->
          <div class="col-md-3">
            <?php get_search_form();?>
          </div>
          <!--.end top_search-->

        </div>
      </div>
    </div>
    <!--.end for_search-->

    <!--start main_logo_add-->
    <div class="container-fluid header_bg_2 py-2">
      <div class="container">
        <div class="row wow slideInDown my-2 align-items-center">
          <div class="col-md-4 main-logo-order d-flex">
            <div>
              <?php echo get_template_part('get/main_logo'); ?>
            </div>
          </div>

          <div class="col-md-8 double-ads-order">
            <div>
              <h5 class="mb-0 slogan">Trusted health and wellness for families worldwide
              </h5>
            </div>
            <div class="row">
              <?php //get_template_part('advertisement/ad_1'); ?>
              <?php //get_template_part('advertisement/ad_2'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--start main_menu_box-->
    <div class="container-fluid mb-3 header_bg_3" id="mainMenuW">
      <!--start main_menu-->
      <div class="container main_menu wow flipInX">
        <ul>
          <?php
                        wp_nav_menu(array(
                            'theme_location'    =>__('topMenu')
                        ));
                    ?>
        </ul>
      </div>
      <!--.end main_menu-->
    </div>
    <!--.end main_menu_box-->
    <?php //get_template_part('get/ticker');?>
  </section>



  <section class="mobileVersion d-block d-md-none">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center header_bg_1 py-1 mb-3">
        <?php echo get_template_part('get/aboutusMedialinkContact'); ?>
      </div>

      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-2 text-center" data-target="#searchBoxM" data-toggle="collapse" aria-expanded="true">
          <i class="fa fa-search border border-dark rounded p-2" aria-hidden="true"></i>

        </div>
        <div class="col-8 mb-md-0">
          <?php echo get_template_part('get/main_logo'); ?>
        </div>

        <div class="col-2 text-center pl-0" data-target="#mainMenuResponsive" data-toggle="collapse"
          aria-expanded="true">
          <i class="fa fa-bars border border-dark rounded p-2" aria-hidden="true"></i>
        </div>

      </div>

      <div class="row">
        <?php //get_template_part('advertisement/ad_1'); ?>
        <?php //get_template_part('advertisement/ad_2'); ?>
      </div>

      <div class="row mb-3">
        <div class="w-100">
          <?php //get_template_part('get/ticker2');?>
        </div>
      </div>

      <div class="row m-auto header_bg_1 mb-3 collapse" id="searchBoxM">
        <?php get_search_form();?>
      </div>

      <div class="row m-auto header_bg_1 mb-3 collapse" id="mainMenuResponsive">
        <!--start main_menu-->
        <div class="main_menu">
          <ul>
            <?php
                        wp_nav_menu(array(
                            'theme_location'    =>__('topMenu')
                        ));
                    ?>
          </ul>
        </div>
        <!--.end main_menu-->
      </div>
    </div>
  </section>