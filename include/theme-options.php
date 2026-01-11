<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'theme-text-domain' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'theme-text-domain' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'theme-text-domain' ) . '</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'category_name_f',
        'title'       => __( 'ক্যাটাগরি নির্বাচন করুন', 'theme-text-domain' )
      ),array(
        'id'          => 'header',
        'title'       => __( 'হেডার', 'theme-text-domain' )
      ),array(
        'id'          => 'footer',
        'title'       => __( 'পুটার', 'theme-text-domain' )
      ),
	  array(
        'id'          => 'home_page_ad',
        'title'       => __( 'হোম পেইজের সকল বিজ্ঞাপন', 'theme-text-domain' )
      ),
	  array(
        'id'          => 'category_single_page_right_top',
        'title'       => __( 'ক্যাটাগরি ও সিঙ্গেল পেইজের ডানপাশের উপরের বিজ্ঞাপন', 'theme-text-domain' )
      ),
	  array(
        'id'          => 'social_links',
        'title'       => __( 'সোস্যাল মিডিয়া লিংক', 'theme-text-domain' )
      )
    ),
    'settings'        => array( 

        //1_category
        array(
        'id'            =>  '1_category', //changeable
        'label'         =>  __('1_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        //2_category
        array(
        'id'            =>  '2_category', //changeable
        'label'         =>  __('2_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),

        //3_category
        array(
        'id'            =>  '3_category', //changeable
        'label'         =>  __('3_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 3_category
        array(
        'id'            =>  'bg-cat3', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //4_category
        array(
        'id'            =>  '4_category', //changeable
        'label'         =>  __('4_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 4_category
        array(
        'id'            =>  'bg-cat4', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //5_category
        array(
        'id'            =>  '5_category', //changeable
        'label'         =>  __('5_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),

        // color of 5_category
        array(
        'id'            =>  'bg-cat5', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //6_category
        array(
        'id'            =>  '6_category', //changeable
        'label'         =>  __('6_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 6_category
        array(
        'id'            =>  'bg-cat6', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //7_category
        array(
        'id'            =>  '7_category', //changeable
        'label'         =>  __('7_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 7_category
        array(
        'id'            =>  'bg-cat7', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //8_category
        array(
        'id'            =>  '8_category', //changeable
        'label'         =>  __('8_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 8_category
        array(
        'id'            =>  'bg-cat8', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //9_category
        array(
        'id'            =>  '9_category', //changeable
        'label'         =>  __('9_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 9_category
        array(
        'id'            =>  'bg-cat9', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //10_category
        array(
        'id'            =>  '10_category', //changeable
        'label'         =>  __('10_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 10_category
        array(
        'id'            =>  'bg-cat10', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),


        //11_category
        array(
        'id'            =>  '11_category', //changeable
        'label'         =>  __('11_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 11_category
        array(
        'id'            =>  'bg-cat11', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),


        //12_category
        array(
        'id'            =>  '12_category', //changeable
        'label'         =>  __('12_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 12_category
        array(
        'id'            =>  'bg-cat12', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //13_category
        array(
        'id'            =>  '13_category', //changeable
        'label'         =>  __('13_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 13_category
        array(
        'id'            =>  'bg-cat13', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //14_category
        array(
        'id'            =>  '14_category', //changeable
        'label'         =>  __('14_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 14_category
        array(
        'id'            =>  'bg-cat14', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),


        //15_category
        array(
        'id'            =>  '15_category', //changeable
        'label'         =>  __('15_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 15_category
        array(
        'id'            =>  'bg-cat15', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //16_category
        array(
        'id'            =>  '16_category', //changeable
        'label'         =>  __('16_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 16_category
        array(
        'id'            =>  'bg-cat16', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //17_category
        array(
        'id'            =>  '17_category', //changeable
        'label'         =>  __('17_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 17_category
        array(
        'id'            =>  'bg-cat17', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),
        //18_category
        array(
        'id'            =>  '18_category', //changeable
        'label'         =>  __('18_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 18_category
        array(
        'id'            =>  'bg-cat18', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //19_category
        array(
        'id'            =>  '19_category', //changeable
        'label'         =>  __('19_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 19_category
        array(
        'id'            =>  'bg-cat19', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //20_category
        array(
        'id'            =>  '20_category', //changeable
        'label'         =>  __('20_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 20_category
        array(
        'id'            =>  'bg-cat20', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //21_category
        array(
        'id'            =>  '21_category', //changeable
        'label'         =>  __('21_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 21_category
        array(
        'id'            =>  'bg-cat21', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //22_category
        array(
        'id'            =>  '22_category', //changeable
        'label'         =>  __('22_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 22_category
        array(
        'id'            =>  'bg-cat22', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //23_category
        array(
        'id'            =>  '23_category', //changeable
        'label'         =>  __('23_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 23_category
        array(
        'id'            =>  'bg-cat23', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //24_category
        array(
        'id'            =>  '24_category', //changeable
        'label'         =>  __('24_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 24_category
        array(
        'id'            =>  'bg-cat24', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //25_category
        array(
        'id'            =>  '25_category', //changeable
        'label'         =>  __('25_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 25_category
        array(
        'id'            =>  'bg-cat25', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //26_category
        array(
        'id'            =>  '26_category', //changeable
        'label'         =>  __('26_নাম্বার ক্যাটাগরি নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'type'          =>  'category-select',
        'section'       =>  'category_name_f'  
        ),
        // color of 26_category
        array(
        'id'            =>  'bg-cat26', //changeable
        'label'         =>  __('কালার নির্বাচন করুন...', 'theme-text-domain'), //changeable
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'category_name_f'  
        ),

        //website_main_logo
        array(
        'id'            =>  'website_main_logo',
        'label'         =>  __('মূল লোগো আপলোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('মূল লোগোর পরিমাপ- width: 350px, height: 120px')),   
        'type'          =>  'upload',
        'section'       =>  'header'
      ),          

        // header_bg_1
        array(
        'id'            =>  'header_bg_1',
        'label'         =>  __('তারিখ ও সোস্যাল আইকন বারের ব্যাকগ্রাউন্ড', 'theme-text-domain'),
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'header'  
        ),

        // header_bg_2
        array(
        'id'            =>  'header_bg_2',
        'label'         =>  __('মেইন লোগো ও দুটি বিজ্ঞাপনের ব্যাকগ্রাউন্ড', 'theme-text-domain'),
        'std'           => '#ffffff',
        'type'          =>  'colorpicker',
        'section'       =>  'header'  
        ),

        // header_bg_3
        array(
        'id'            =>  'header_bg_3',
        'label'         =>  __('মেনুবার ব্যাকগ্রাউন্ড', 'theme-text-domain'),
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'       =>  'header'  
        ),

        // menu_active_color_id
        array(
		'id'			=>	'menu_active_color_id',
		'label'			=>	__('মেনুর একটিভ ব্যাকগ্রাউন্ড নির্বাচন করুন এখান থেকে', 'theme-text-domain'),
        'std'           => '#FF0000',
        'type'          =>  'colorpicker',
        'section'		=>	'header'  
        ),
        array(
		'id'			=>	'menu_font__color_id',
		'label'			=>	__('মেনু ও ক্যাটাগরি নামের লেখার কালার পরিবর্তন করা যাবে এখান থেকে...', 'theme-text-domain'),
        'std'           => '#fff',
        'type'          =>  'colorpicker',
        'section'		=>	'header'  
        ),
        array(
		'id'			=>	'menu_ul_li_right_border_id',
		'label'			=>	__('মেনুর ডান পাশের বর্ডারের কালার', 'theme-text-domain'),
        'std'           => '#002A02',
        'type'          =>  'colorpicker',
        'section'		=>	'header'  
        ),
        array(
		'id'			=>	'menu_ul_li_left_border_id',
		'label'			=>	__('মেনুর বাম পাশের বর্ডারের কালার', 'theme-text-domain'),
        'std'           => '#33793E',
        'type'          =>  'colorpicker',
        'section'		=>	'header'  
        ),

        //bg-ticker
        array(
        'id'            =>  'bg-ticker',
        'label'         =>  __('শিরোনাম ব্যাকগ্রাউন্ড', 'theme-text-domain'),
        'std'           => '#ff0000',
        'type'          =>  'colorpicker',
        'section'       =>  'header'  
        ),
        //text-color-ticker
        array(
        'id'            =>  'text-color-ticker',
        'label'         =>  __('টেক্সট কালার', 'theme-text-domain'),
        'std'           => '#ffffff',
        'type'          =>  'colorpicker',
        'section'       =>  'header'  
        ),

        
        // footer main logo
        array(
        'id'            =>  'footer_main_logo',
        'label'         =>  __('পুটার মেইন লোগো আপলোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('মূল লোগোর পরিমাপ-  প্রস্থ 255px, দৈর্ঘ্য 125px')),   
        'type'          =>  'upload',
        'section'       =>  'footer'
      ),
      // footer editorial
        array(
        'id'            =>  'footer_editorial',
        'label'         =>  __('সম্পাদকে নাম', 'theme-text-domain'),
        'desc'          =>  sprintf(__('সম্পাদকে নাম')),   
        'type'          =>  'textarea',
        'section'       =>  'footer'
      ),
      // footer editorial
        array(
        'id'            =>  'footer_address',
        'label'         =>  __('ঠিকানা, ইমেইল ও ফোন নাম্বার', 'theme-text-domain'),
        'desc'          =>  sprintf(__('ঠিকানা ইমেইল ও ফোন নাম্বার')),   
        'type'          =>  'textarea',
        'section'       =>  'footer'
      ),
		
		// footer editorial2
        array(
        'id'            =>  'footer_address2',
        'label'         =>  __('ঠিকানা, ইমেইল ও ফোন নাম্বার', 'theme-text-domain'),
        'desc'          =>  sprintf(__('ঠিকানা ইমেইল ও ফোন নাম্বার')),   
        'type'          =>  'textarea',
        'section'       =>  'footer'
      ),

        // footer1_color_id
        array(
        'id'            =>  'footer1_color_id',
        'label'         =>  __('পুটার-1 background color পরিবর্তন করতে পারবেন এখান থেকে...', 'theme-text-domain'),
        'std'           => '#8dbfa5',
        'type'          =>  'colorpicker',
        'section'       =>  'footer'  
        ),

	  	// fotter_text_color_id
	  	array(
		'id'			=>	'fotter_text_color_id',
		'label'			=>	__(' পুটার-1 সম্পাদক ও ঠিকানা লেখার কালার পরিবর্তন করতে পারবেন এখান থেকে...', 'theme-text-domain'),
        'std'           => '#222222',
        'type'          =>  'colorpicker',
        'section'		=>	'footer'  
        ),

	  	// footer2_bg_color
	  	array(
		'id'			=>	'footer2_bg_color_id',
		'label'			=>	__(' পুটার-2 ব্যাকগ্রাউন্ড পরিবর্তন করতে পারবেন এখান থেকে...', 'theme-text-domain'),
        'std'           => '#006400',
        'type'          =>  'colorpicker',
        'section'		=>	'footer'  
        ),

	  	// footer2_text_color
	  	array(
		'id'			=>	'footer2_text_color',
		'label'			=>	__(' পুটার-2  লেখার কালার পরিবর্তন করতে পারবেন এখান থেকে...', 'theme-text-domain'),
        'std'           => '#ffffff',
        'type'          =>  'colorpicker',
        'section'		=>	'footer'  
        ),

      
      //1_no_add_home_page
	  array(
		'id'			=>	'1_no_home_page_ad_google_adsense',
		'label'			=>	__('1 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
		'desc'			=>	sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'1_no_home_page_ad',
		'label'			=>	__('1 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
		'desc'			=>	sprintf(__('পরিমাপ-  width: 350px, height: 120px')),	
		'type'			=>	'upload',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'1_no_home_page_ad_link',
		'label'			=>	__('1 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
		'desc'			=>	sprintf(__('যেমন-https://www.example.com')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
      
      
      //2_no_add_home_page
	  array(
		'id'			=>	'2_no_home_page_ad_google_adsense',
		'label'			=>	__('2 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
		'desc'			=>	sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'2_no_home_page_ad',
		'label'			=>	__('2 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
		'desc'            =>  sprintf(__('পরিমাপ-  width: 350px, height: 120px')),
		'type'			=>	'upload',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'2_no_home_page_ad_link',
		'label'			=>	__('2 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
		'desc'			=>	sprintf(__('যেমন-https://www.example.com')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
      
      
      //3_no_add_home_page
	  array(
		'id'			=>	'3_no_home_page_ad_google_adsense',
		'label'			=>	__('3 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
		'desc'			=>	sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'3_no_home_page_ad',
		'label'			=>	__('3 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
		'desc'			=>	sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),	
		'type'			=>	'upload',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'3_no_home_page_ad_link',
		'label'			=>	__('3 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
		'desc'			=>	sprintf(__('যেমন-https://www.example.com')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
      
      //4_no_add_home_page
	  array(
		'id'			=>	'4_no_home_page_ad_google_adsense',
		'label'			=>	__('4 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
		'desc'			=>	sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'4_no_home_page_ad',
		'label'			=>	__('4 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
		'desc'			=>	sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),	
		'type'			=>	'upload',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'4_no_home_page_ad_link',
		'label'			=>	__('4 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
		'desc'			=>	sprintf(__('যেমন-https://www.example.com')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
      
      //5_no_add_home_page
      array(
        'id'            =>  '5_no_home_page_ad_google_adsense',
        'label'         =>  __('5 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '5_no_home_page_ad',
        'label'         =>  __('5 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),
        'type'          =>  'upload',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '5_no_home_page_ad_link',
        'label'         =>  __('5 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),

      //6_no_add_home_page
	  array(
		'id'			=>	'6_no_home_page_ad_google_adsense',
		'label'			=>	__('6 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
		'desc'			=>	sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'6_no_home_page_ad',
		'label'			=>	__('6 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
		'desc'            =>  sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),	
		'type'			=>	'upload',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'6_no_home_page_ad_link',
		'label'			=>	__('6 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
		'desc'			=>	sprintf(__('যেমন-https://www.example.com')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
      
      //7_no_add_home_page
	  array(
		'id'			=>	'7_no_home_page_ad_google_adsense',
		'label'			=>	__('7 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
		'desc'			=>	sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'7_no_home_page_ad',
		'label'			=>	__('7 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
		'desc'            =>  sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),
		'type'			=>	'upload',
		'section'		=>	'home_page_ad'
	  ),
	  array(
		'id'			=>	'7_no_home_page_ad_link',
		'label'			=>	__('7 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
		'desc'			=>	sprintf(__('যেমন-https://www.example.com')),	
		'type'			=>	'text',
		'section'		=>	'home_page_ad'
	  ),
      
      //8_no_add_home_page
      array(
        'id'            =>  '8_no_home_page_ad_google_adsense',
        'label'         =>  __('8 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '8_no_home_page_ad',
        'label'         =>  __('8 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
        'desc'            =>  sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),
        'type'          =>  'upload',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '8_no_home_page_ad_link',
        'label'         =>  __('8 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      
      //9_no_add_home_page
      array(
        'id'            =>  '9_no_home_page_ad_google_adsense',
        'label'         =>  __('9 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '9_no_home_page_ad',
        'label'         =>  __('9 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
        'desc'            =>  sprintf(__('পরিমাপ-  width: 271px; height: 386px;')),
        'type'          =>  'upload',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '9_no_home_page_ad_link',
        'label'         =>  __('9 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      
      //10_no_add_home_page
      array(
        'id'            =>  '10_no_home_page_ad_google_adsense',
        'label'         =>  __('10 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '10_no_home_page_ad',
        'label'         =>  __('10 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
        'desc'            =>  sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),
        'type'          =>  'upload',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '10_no_home_page_ad_link',
        'label'         =>  __('10 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      
      //11_no_add_home_page
      array(
        'id'            =>  '11_no_home_page_ad_google_adsense',
        'label'         =>  __('11 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '11_no_home_page_ad',
        'label'         =>  __('11 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
        'desc'            =>  sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),
        'type'          =>  'upload',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '11_no_home_page_ad_link',
        'label'         =>  __('11 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      
      //12_no_add_home_page
      array(
        'id'            =>  '12_no_home_page_ad_google_adsense',
        'label'         =>  __('12 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '12_no_home_page_ad',
        'label'         =>  __('12 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
        'desc'            =>  sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),
        'type'          =>  'upload',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '12_no_home_page_ad_link',
        'label'         =>  __('12 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      
      //13_no_add_home_page
      array(
        'id'            =>  '13_no_home_page_ad_google_adsense',
        'label'         =>  __('13 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '13_no_home_page_ad',
        'label'         =>  __('13 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
        'desc'            =>  sprintf(__('পরিমাপ-  width: 260px; height: 95px;')),
        'type'          =>  'upload',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '13_no_home_page_ad_link',
        'label'         =>  __('13 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      
      //14_no_add_home_page
      array(
        'id'            =>  '14_no_home_page_ad_google_adsense',
        'label'         =>  __('14 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্স কোড', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '14_no_home_page_ad',
        'label'         =>  __('14 নাম্বার বিজ্ঞাপন আপলোড', 'theme-text-domain'),
        'desc'            =>  sprintf(__('পরিমাপ-  width: 353px; height: 330px;')),
        'type'          =>  'upload',
        'section'       =>  'home_page_ad'
      ),
      array(
        'id'            =>  '14_no_home_page_ad_link',
        'label'         =>  __('14 নাম্বার বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'home_page_ad'
      ),
      


      //single category page top left 1
      array(
        'id'            =>  '1_no_single_google_adsense',
        'label'         =>  __('ক্যাটাগরি ও সিঙ্গেল পেইজের বামপাশের ১ নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্সের কোড পেস্ট করুন এখানে...', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '1_no_single_page_ad',
        'label'         =>  __('বিজ্ঞাপন আপলোড করতে পারবেন এখান থেকে', 'theme-text-domain'),
        'desc'          =>  sprintf(__('পরিমাপ-  width: 725px; height: 425px বা তার চেয়েও বেশি')),  
        'type'          =>  'upload',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '1_no_single_page_ad_link',
        'label'         =>  __('বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),

      //single category page top left 2
      array(
        'id'            =>  'cb_2_no_single_google_adsense',
        'label'         =>  __('ক্যাটাগরি ও সিঙ্গেল পেইজের বামপাশের 2 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্সের কোড পেস্ট করুন এখানে...', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  'cb_2_no_single_page_ad',
        'label'         =>  __('বিজ্ঞাপন আপলোড করতে পারবেন এখান থেকে', 'theme-text-domain'),
        'desc'            =>  sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),  
        'type'          =>  'upload',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  'cb_2_no_single_page_ad_link',
        'label'         =>  __('বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),

      //single category page top left 3
      array(
        'id'            =>  'cb_3_no_single_google_adsense',
        'label'         =>  __('ক্যাটাগরি ও সিঙ্গেল পেইজের বামপাশের 3 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্সের কোড পেস্ট করুন এখানে...', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  'cb_3_no_single_page_ad',
        'label'         =>  __('বিজ্ঞাপন আপলোড করতে পারবেন এখান থেকে', 'theme-text-domain'),
        'desc'            =>  sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),  
        'type'          =>  'upload',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  'cb_3_no_single_page_ad_link',
        'label'         =>  __('বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),

      //single category page top left 4
      array(
        'id'            =>  'cb_4_no_single_google_adsense',
        'label'         =>  __('ক্যাটাগরি ও সিঙ্গেল পেইজের বামপাশের 4 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্সের কোড পেস্ট করুন এখানে...', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  'cb_4_no_single_page_ad',
        'label'         =>  __('বিজ্ঞাপন আপলোড করতে পারবেন এখান থেকে', 'theme-text-domain'),
        'desc'            =>  sprintf(__('পরিমাপ-  width: 350px; height: 120px;')),  
        'type'          =>  'upload',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  'cb_4_no_single_page_ad_link',
        'label'         =>  __('বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),



      
      //single category page below ad
	  array(
		'id'			=>	'2_no_single_google_adsense',
		'label'			=>	__('ক্যাটাগরি ও সিঙ্গেল পেইজের ডানপাশের ১ নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্সের কোড পেস্ট করুন এখানে...
', 'theme-text-domain'),
		'desc'			=>	sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),	
		'type'			=>	'text',
		'section'		=>	'category_single_page_right_top'
	  ),
	  array(
		'id'			=>	'2_no_single_page_ad',
		'label'			=>	__('বিজ্ঞাপন আপলোড করতে পারবেন এখান থেকে', 'theme-text-domain'),
		'desc'			=>	sprintf(__('পরিমাপ-  width: 730px; height: 100px বা তার চেয়েও বেশি')),	
		'type'			=>	'upload',
		'section'		=>	'category_single_page_right_top'
	  ),
	  array(
		'id'			=>	'2_no_single_page_ad_link',
		'label'			=>	__('বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
		'desc'			=>	sprintf(__('যেমন-https://www.example.com')),	
		'type'			=>	'text',
		'section'		=>	'category_single_page_right_top'
	  ),


      
      //single category page below ad 3
      array(
        'id'            =>  '3_no_single_google_adsense',
        'label'         =>  __('ক্যাটাগরি ও সিঙ্গেল পেইজের ডানপাশের ২ নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্সের কোড পেস্ট করুন এখানে...
', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '3_no_single_page_ad',
        'label'         =>  __('বিজ্ঞাপন আপলোড করতে পারবেন এখান থেকে', 'theme-text-domain'),
        'desc'          =>  sprintf(__('পরিমাপ-  width: 730px; height: 100px বা তার চেয়েও বেশি')),  
        'type'          =>  'upload',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '3_no_single_page_ad_link',
        'label'         =>  __('বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),
      
      
      
      //single category page below ad 4
      array(
        'id'            =>  '4_no_single_google_adsense',
        'label'         =>  __('ক্যাটাগরি ও সিঙ্গেল পেইজের ডানপাশে ৩ নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্সের কোড পেস্ট করুন এখানে...
', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '4_no_single_page_ad',
        'label'         =>  __('বিজ্ঞাপন আপলোড করতে পারবেন এখান থেকে', 'theme-text-domain'),
        'desc'          =>  sprintf(__('পরিমাপ-  width: 730px; height: 100px বা তার চেয়েও বেশি')),  
        'type'          =>  'upload',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '4_no_single_page_ad_link',
        'label'         =>  __('বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ), 
      
      //single category page below ad 5
      array(
        'id'            =>  '5_no_single_google_adsense',
        'label'         =>  __('ক্যাটাগরি ও সিঙ্গেল পেইজের ডানপাশে 5 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্সের কোড পেস্ট করুন এখানে...
', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '5_no_single_page_ad',
        'label'         =>  __('বিজ্ঞাপন আপলোড করতে পারবেন এখান থেকে', 'theme-text-domain'),
        'desc'          =>  sprintf(__('পরিমাপ-  width: 730px; height: 100px বা তার চেয়েও বেশি')),  
        'type'          =>  'upload',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '5_no_single_page_ad_link',
        'label'         =>  __('বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ), 
      
      //single category page below ad 6
      array(
        'id'            =>  '6_no_single_google_adsense',
        'label'         =>  __('ক্যাটাগরি ও সিঙ্গেল পেইজের ডানপাশে 6 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্সের কোড পেস্ট করুন এখানে...
', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '6_no_single_page_ad',
        'label'         =>  __('বিজ্ঞাপন আপলোড করতে পারবেন এখান থেকে', 'theme-text-domain'),
        'desc'          =>  sprintf(__('পরিমাপ-  width: 730px; height: 100px বা তার চেয়েও বেশি')),  
        'type'          =>  'upload',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '6_no_single_page_ad_link',
        'label'         =>  __('বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ), 
      
      //single category page below ad 7
      array(
        'id'            =>  '7_no_single_google_adsense',
        'label'         =>  __('ক্যাটাগরি ও সিঙ্গেল পেইজের ডানপাশে 7 নাম্বার বিজ্ঞাপনের গুগল অ্যাডসেন্সের কোড পেস্ট করুন এখানে...
', 'theme-text-domain'),
        'desc'          =>  sprintf(__('গুগল অ্যাডসেন্সের কোড এখানে পেস্ট করুন...')),   
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '7_no_single_page_ad',
        'label'         =>  __('বিজ্ঞাপন আপলোড করতে পারবেন এখান থেকে', 'theme-text-domain'),
        'desc'          =>  sprintf(__('পরিমাপ-  width: 730px; height: 100px বা তার চেয়েও বেশি')),  
        'type'          =>  'upload',
        'section'       =>  'category_single_page_right_top'
      ),
      array(
        'id'            =>  '7_no_single_page_ad_link',
        'label'         =>  __('বিজ্ঞাপনের লিংক দিন এখানে (যদি থাকে)', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'category_single_page_right_top'
      ),

      
        
	  //facebook
	  array(
		'id'			=>	'facebook',
		'label'			=>	__('ফেসবুক লিংক', 'theme-text-domain'),
		'desc'			=>	sprintf(__('যেমন-https://www.example.com')),	
		'type'			=>	'text',
		'section'		=>	'social_links'
	  ),

	  //twitter
	  array(
		'id'			=>	'twitter',
		'label'			=>	__('টুইটার লিংক', 'theme-text-domain'),
		'desc'			=>	sprintf(__('যেমন-https://www.example.com')),	
		'type'			=>	'text',
		'section'		=>	'social_links'
	  ),

      //linkedin
      array(
        'id'            =>  'linkedin',
        'label'         =>  __('লিংকডইন লিংক', 'theme-text-domain'),
        'desc'          =>  sprintf(__('যেমন-https://www.example.com')),    
        'type'          =>  'text',
        'section'       =>  'social_links'
      ),

	  //facebook
	  array(
		'id'			=>	'youtube',
		'label'			=>	__('ইউটিউব লিংক', 'theme-text-domain'),
		'desc'			=>	sprintf(__('যেমন-https://www.example.com')),	
		'type'			=>	'text',
		'section'		=>	'social_links'
	  ), 
        
        
        
	  
      array(
        'id'          => 'demo_background',
        'label'       => __( 'Background', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Background option type is for adding background styles to your theme either dynamically via the CSS option type below or manually with %s. The Background option type has filters that allow you to remove fields or change the defaults. For example, you can filter %s to remove unwanted fields from all Background options or an individual one. You can also filter %s. These filters allow you to fine tune the select lists for your specific needs.', 'theme-text-domain' ), '<code>ot_get_option()</code>', '<code>ot_recognized_background_fields</code>', '<code>ot_recognized_background_repeat</code>, <code>ot_recognized_background_attachment</code>, <code>ot_recognized_background_position</code>, ' . __( 'and', 'theme-text-domain' ) . ' <code>ot_type_background_size_choices</code>' ),
        'std'         => '',
        'type'        => 'background',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_border',
        'label'       => __( 'Border', 'theme-text-domain' ),
        'desc'        => __( 'The Border option type is used to set width, unit, style, and color values.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'border',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_box_shadow',
        'label'       => __( 'Box Shadow', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Box Shadow option type is used to set %s, %s, %s, %s, %s, and %s values.', 'theme-text-domain' ), '<code>inset</code>', '<code>offset-x</code>', '<code>offset-y</code>', '<code>blur-radius</code>', '<code>spread-radius</code>', '<code>color</code>' ),
        'std'         => '',
        'type'        => 'box-shadow',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_category_checkbox',
        'label'       => __( 'Category Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Category Checkbox option type displays a list of category IDs. It allows the user to check multiple category IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'category-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_category_select',
        'label'       => __( 'Category Select', 'theme-text-domain' ),
        'desc'        => __( 'The Category Select option type displays a list of category IDs. It allows the user to select only one category ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'category-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_checkbox',
        'label'       => __( 'Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Checkbox option type displays a group of choices. It allows the user to check multiple choices and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'Yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'demo_colorpicker',
        'label'       => __( 'Colorpicker', 'theme-text-domain' ),
        'desc'        => __( 'The Colorpicker option type saves a hexadecimal color code for use in CSS. Use it to modify the color of something in your theme.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_colorpicker_opacity',
        'label'       => __( 'Colorpicker Opacity', 'theme-text-domain' ),
        'desc'        => __( 'Colorpicker Opacity', 'option-tree-theme' ),
        'desc'        => sprintf( __( 'The Colorpicker Opacity option type saves an rgba color value for use in CSS. To add opacity to other colorpickers add the %s class to the %s array.', 'option-tree' ), '<code>ot-colorpicker-opacity</code>', '<code>$args</code>' ),
        'std'         => '',
        'type'        => 'colorpicker-opacity',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_css',
        'label'       => __( 'CSS', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf( __( 'The CSS option type is a textarea that when used properly can add dynamic CSS to your theme from within OptionTree. Unfortunately, due server limitations you will need to create a file named %s at the root level of your theme and change permissions using %s so the server can write to the file. I have had the most success setting this single file to %s but feel free to play around with permissions until everything is working. A good starting point is %s. When the server can save to the file, CSS will automatically be updated when you save your Theme Options.', 'theme-text-domain' ), '<code>dynamic.css</code>', '<code>chmod</code>', '<code>0777</code>', '<code>0666</code>' ) . '</p><p>' . sprintf( __( 'This example assumes you have an option with the ID of %1$s. Which means this option will automatically insert the value of %1$s into the %2$s when the Theme Options are saved.', 'theme-text-domain' ), '<code>demo_background</code>', '<code>dynamic.css</code>' ) . '</p>',
        'std'         => '#custom {
  {{demo_background}}
}',
        'type'        => 'css',
        'section'     => 'option_types',
        'rows'        => '20',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_custom_post_type_checkbox',
        'label'       => __( 'Custom Post Type Checkbox', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Custom Post Type Select option type displays a list of IDs from any available WordPress post type or custom post type. It allows the user to check multiple post IDs for use in a custom function or loop. Requires at least one valid %1$s in the %1$s field.', 'theme-text-domain' ), '<code>post_type</code>' ),
        'std'         => '',
        'type'        => 'custom-post-type-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => 'post',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_custom_post_type_select',
        'label'       => __( 'Custom Post Type Select', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Custom Post Type Select option type displays a list of IDs from any available WordPress post type or custom post type. It will return a single post ID for use in a custom function or loop. Requires at least one valid %1$s in the %1$s field.', 'theme-text-domain' ), '<code>post_type</code>' ),
        'std'         => '',
        'type'        => 'custom-post-type-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => 'post',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_date_picker',
        'label'       => __( 'Date Picker', 'theme-text-domain' ),
        'desc'        => __( 'The Date Picker option type is tied to a standard form input field which displays a calendar pop-up that allow the user to pick any date when focus is given to the input field. The returned value is a date formatted string.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'date-picker',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_date_time_picker',
        'label'       => __( 'Date Time Picker', 'theme-text-domain' ),
        'desc'        => __( 'The Date Time Picker option type is tied to a standard form input field which displays a calendar pop-up that allow the user to pick any date and time when focus is given to the input field. The returned value is a date and time formatted string.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'date-time-picker',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_dimension',
        'label'       => __( 'Dimension', 'theme-text-domain' ),
        'desc'        => __( 'The Dimension option type is used to set width and height values.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'dimension',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_gallery',
        'label'       => __( 'Gallery', 'theme-text-domain' ),
        'desc'        => __( 'The Gallery option type saves a comma separated list of image attachment IDs. You will need to create a front-end function to display the images in your theme.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'gallery',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_gallery_shortcode',
        'label'       => __( 'Gallery Shortcode', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Gallery option type can also be saved as a shortcode by adding %s to the class attribute. Using the Gallery option type in this manner will result in a better user experience as you\'re able to save the link, column, and order settings.', 'theme-text-domain' ), '<code>ot-gallery-shortcode</code>' ),
        'std'         => '',
        'type'        => 'gallery',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => 'ot-gallery-shortcode',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_google_fonts',
        'label'       => __( 'Google Fonts', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Google Fonts option type will dynamically enqueue any number of Google Web Fonts into the document %1$s. As well, once the option has been saved each font family will automatically be inserted into the %2$s array for the Typography option type. You can further modify the font stack by using the %3$s filter, which is passed the %4$s, %5$s, and %6$s parameters. The %6$s parameter is being passed from %7$s, so it will be the ID of a Typography option type. This will allow you to add additional web safe fonts to individual font families on an as-need basis.', 'theme-text-domain' ), '<code>HEAD</code>', '<code>font-family</code>', '<code>ot_google_font_stack</code>', '<code>$font_stack</code>', '<code>$family</code>', '<code>$field_id</code>', '<code>ot_recognized_font_families</code>' ),
        'std'         => array( 
          array(
            'family'    => 'opensans',
            'variants'  => array( '300', '300italic', 'regular', 'italic', '600', '600italic' ),
            'subsets'   => array( 'latin' )
          )
        ),
        'type'        => 'google-fonts',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_javascript',
        'label'       => __( 'JavaScript', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf( __( 'The JavaScript option type is a textarea that uses the %s code editor to highlight your JavaScript and display errors as you type.', 'theme-text-domain' ), '<code>ace.js</code>' ) . '</p>',
        'std'         => '',
        'type'        => 'javascript',
        'section'     => 'option_types',
        'rows'        => '20',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_link_color',
        'label'       => __( 'Link Color', 'theme-text-domain' ),
        'desc'        => __( 'The Link Color option type is used to set all link color states.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'link-color',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_list_item',
        'label'       => __( 'List Item', 'theme-text-domain' ),
        'desc'        => __( 'The List Item option type allows for a great deal of customization. You can add settings to the List Item and those settings will be displayed to the user when they add a new List Item. Typical use is for creating sliding content or blocks of code for custom layouts.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'demo_list_item_content',
            'label'       => __( 'Content', 'theme-text-domain' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'textarea-simple',
            'rows'        => '10',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'demo_measurement',
        'label'       => __( 'Measurement', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Measurement option type is a mix of input and select fields. The text input excepts a value and the select lets you choose the unit of measurement to add to that value. Currently the default units are %s, %s, %s, and %s. However, you can change them with the %s filter.', 'theme-text-domain' ), '<code>px</code>', '<code>%</code>', '<code>em</code>', '<code>pt</code>', '<code>ot_measurement_unit_types</code>' ),
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_numeric_slider',
        'label'       => __( 'Numeric Slider', 'theme-text-domain' ),
        'desc'        => __( 'The Numeric Slider option type displays a jQuery UI slider. It will return a single numerical value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'numeric-slider',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '-500,5000,100',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_on_off',
        'label'       => __( 'On/Off', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The On/Off option type displays a simple switch that can be used to turn things on or off. The saved return value is either %s or %s.', 'theme-text-domain' ), '<code>on</code>', '<code>off</code>' ),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_page_checkbox',
        'label'       => __( 'Page Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Page Checkbox option type displays a list of page IDs. It allows the user to check multiple page IDs for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'page-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_page_select',
        'label'       => __( 'Page Select', 'theme-text-domain' ),
        'desc'        => __( 'The Page Select option type displays a list of page IDs. It will return a single page ID for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'page-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_post_checkbox',
        'label'       => __( 'Post Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Post Checkbox option type displays a list of post IDs. It allows the user to check multiple post IDs for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'post-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_post_select',
        'label'       => __( 'Post Select', 'theme-text-domain' ),
        'desc'        => __( 'The Post Select option type displays a list of post IDs. It will return a single post ID for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'post-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_radio',
        'label'       => __( 'Radio', 'theme-text-domain' ),
        'desc'        => __( 'The Radio option type displays a group of choices. It allows the user to choose one and will return that value as a string for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'radio',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'maybe',
            'label'       => __( 'Maybe', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'demo_radio_image',
        'label'       => __( 'Radio Image', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'the Radio Images option type is primarily used for layouts. However, you can filter the image list using %s. As well, you can add your own custom images using the choices array.', 'theme-text-domain' ), '<code>ot_radio_images</code>' ),
        'std'         => 'right-sidebar',
        'type'        => 'radio-image',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_select',
        'label'       => __( 'Select', 'theme-text-domain' ),
        'desc'        => __( 'The Select option type is used to list anything you want that would be chosen from a select list.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => '',
            'label'       => __( '-- Choose One --', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'yes',
            'label'       => __( 'Yes', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'no',
            'label'       => __( 'No', 'theme-text-domain' ),
            'src'         => ''
          ),
          array(
            'value'       => 'maybe',
            'label'       => __( 'Maybe', 'theme-text-domain' ),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'demo_sidebar_select',
        'label'       => __( 'Sidebar Select', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf(  __( 'This option type makes it possible for users to select a WordPress registered sidebar to use on a specific area. By using the two provided filters, %s, and %s we can be selective about which sidebars are available on a specific content area.', 'theme-text-domain' ), '<code>ot_recognized_sidebars</code>', '<code>ot_recognized_sidebars_{$field_id}</code>' ) . '</p><p>' . sprintf( __( 'For example, if we create a WordPress theme that provides the ability to change the Blog Sidebar and we don\'t want to have the footer sidebars available on this area, we can unset those sidebars either manually or by using a regular expression if we have a common name like %s.', 'theme-text-domain' ), '<code>footer-sidebar-$i</code>' ) . '</p>',
        'std'         => '',
        'type'        => 'sidebar-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_social_links',
        'label'       => __( 'Social Links', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf( __( 'The Social Links option type utilizes a drag & drop interface to create a list of social links. There are a few filters that make extending this option type easy. You can set the %s filter to %s and turn off loading default values. Use the %s filter to change the default values that are loaded. To filter the settings array use the %s filter.', 'theme-text-domain' ), '<code>ot_type_social_links_load_defaults</code>', '<code>false</code>', '<code>ot_type_social_links_defaults</code>', '<code>ot_social_links_settings</code>' ) . '</p>',
        'std'         => '',
        'type'        => 'social-links',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_spacing',
        'label'       => __( 'Spacing', 'theme-text-domain' ),
        'desc'        => __( 'The Spacing option type is used to set spacing values such as padding or margin in the form of top, right, bottom, and left.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'spacing',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_tag_checkbox',
        'label'       => __( 'Tag Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Tag Checkbox option type displays a list of tag IDs. It allows the user to check multiple tag IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'tag-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_tag_select',
        'label'       => __( 'Tag Select', 'theme-text-domain' ),
        'desc'        => __( 'The Tag Select option type displays a list of tag IDs. It allows the user to select only one tag ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'tag-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_taxonomy_checkbox',
        'label'       => __( 'Taxonomy Checkbox', 'theme-text-domain' ),
        'desc'        => __( 'The Taxonomy Checkbox option type displays a list of taxonomy IDs. It allows the user to check multiple taxonomy IDs and will return that value as an array for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'taxonomy-checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => 'category,post_tag',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_taxonomy_select',
        'label'       => __( 'Taxonomy Select', 'theme-text-domain' ),
        'desc'        => __( 'The Taxonomy Select option type displays a list of taxonomy IDs. It allows the user to select only one taxonomy ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'taxonomy-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => 'category,post_tag',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_text',
        'label'       => __( 'Text', 'theme-text-domain' ),
        'desc'        => __( 'The Text option type is used to save string values. For example, any optional or required text that is of reasonably short character length.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_textarea',
        'label'       => __( 'Textarea', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Textarea option type is a large string value used for custom code or text in the theme and has a WYSIWYG editor that can be filtered to change the how it is displayed. For example, you can filter %s, %s, %s, and %s.', 'theme-text-domain' ), '<code>wpautop</code>', '<code>media_buttons</code>', '<code>tinymce</code>', '<code>quicktags</code>' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'option_types',
        'rows'        => '15',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_textarea_simple',
        'label'       => __( 'Textarea Simple', 'theme-text-domain' ),
        'desc'        => __( 'The Textarea Simple option type is a large string value used for custom code or text in the theme. The Textarea Simple does not have a WYSIWYG editor.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'option_types',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_textblock',
        'label'       => __( 'Textblock', 'theme-text-domain' ),
        'desc'        => __( 'The Textblock option type is used only on the Theme Option page. It will allow you to create & display HTML, but has no title above the text block. You can then use the Textblock to add a more detailed set of instruction on how the options are used in your theme. You would never use this in your themes template files as it does not save a value.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_textblock_titled',
        'label'       => __( 'Textblock Titled', 'theme-text-domain' ),
        'desc'        => __( 'The Textblock Titled option type is used only on the Theme Option page. It will allow you to create & display HTML, and has a title above the text block. You can then use the Textblock Titled to add a more detailed set of instruction on how the options are used in your theme. You would never use this in your themes template files as it does not save a value.', 'theme-text-domain' ),
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_typography',
        'label'       => __( 'Typography', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Typography option type is for adding typography styles to your theme either dynamically via the CSS option type above or manually with %s. The Typography option type has filters that allow you to remove fields or change the defaults. For example, you can filter %s to remove unwanted fields from all Background options or an individual one. You can also filter %s. These filters allow you to fine tune the select lists for your specific needs.', 'theme-text-domain' ), '<code>ot_get_option()</code>', '<code>ot_recognized_typography_fields</code>', '<code>ot_recognized_font_families</code>, <code>ot_recognized_font_sizes</code>, <code>ot_recognized_font_styles</code>, <code>ot_recognized_font_variants</code>, <code>ot_recognized_font_weights</code>, <code>ot_recognized_letter_spacing</code>, <code>ot_recognized_line_heights</code>, <code>ot_recognized_text_decorations</code> ' . __( 'and', 'theme-text-domain' ) . ' <code>ot_recognized_text_transformations</code>' ),
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_upload',
        'label'       => __( 'Upload', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Upload option type is used to upload any WordPress supported media. After uploading, users are required to press the "%s" button in order to populate the input with the URI of that media. There is one caveat of this feature. If you import the theme options and have uploaded media on one site the old URI will not reflect the URI of your new site. You will have to re-upload or %s any media to your new server and change the URIs if necessary.', 'theme-text-domain' ), apply_filters( 'ot_upload_text', __( 'Send to OptionTree', 'theme-text-domain' ) ), 'FTP' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_upload_attachment_id',
        'label'       => __( 'Upload Attachment ID', 'theme-text-domain' ),
        'desc'        => sprintf( __( 'The Upload option type can also be saved as an attachment ID by adding %s to the class attribute.', 'theme-text-domain' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => 'ot-upload-attachment-id',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}