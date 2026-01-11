<?php
$wp_customize->add_section('npa_meta_keywords', array(
  'title'   => __('Meta Keywords'),
  'panel'   => 'npa_header_panel'
));


// Menubar Background Color
$wp_customize->add_setting('npa_meta_keywords_setting', array(
  'default'   => 'bangla news, current News, bangla newspaper, bangladesh newspaper, online paper, bangladeshi newspaper, bangla news paper, bangladesh newspapers, newspaper, all bangla news paper, bd news paper, news paper, bangladesh news paper, daily, bangla newspaper, daily news paper, bangladeshi news paper, bangla paper, all bangla newspaper, bangladesh news, daily newspaper, অনলাইন, পত্রিকা, বাংলাদেশ, আজকের পত্রিকা, আন্তর্জাতিক, অর্থনীতি, খেলা, বিনোদন, ফিচার, বিজ্ঞান ও প্রযুক্তি, চলচ্চিত্র, ঢালিউড, বলিউড, হলিউড, বাংলা গান, মঞ্চ, টেলিভিশন, অটোমোবাইল, মহাকাশ, গেমস, মাল্টিমিডিয়া, রাজনীতি, সরকার, অপরাধ, দুর্নীতি, আইন ও বিচার, পরিবেশ, দুর্ঘটনা, সংসদ, রাজধানী, শেয়ার বাজার, বাণিজ্য, পোশাক শিল্প, ক্রিকেট, ফুটবল, লাইভ স্কোর',
  'transport' => 'refresh',
  // 'sanitize_callback' => 'theme_slug_sanitize_js_code', //encode for DB insert
  // 'sanitize_js_callback' => 'theme_slug_escape_js_output' //ecape script for the textarea
));

$wp_customize->add_control('npa_meta_keywords_setting', array(
  'label'         => esc_html__('Meta Keywords', 'npa'),
  'description'   => esc_html__('Meta Keywords Paste Here'),
  'settings'      => 'npa_meta_keywords_setting',
  'section'       => 'npa_meta_keywords',
  'type'          => 'textarea'
));