(function ($) {
  //for sticky menubar
  var s = $("#fixedheadertop"),
    mainMenu = $("#mainMenuW"),
    pos = mainMenu.position();
  $(window).scroll(function () {
    var windowpos = $(window).scrollTop();
    if (windowpos > pos.top + 40) {
      s.addClass("d-block");
    } else {
      s.removeClass("d-block");
    }
  });

  //responsive menu
  $(".r_menu").click(function () {
    $(".main_menu, .main_menu p ").slideToggle();
  });

  //newsticker
  $("#webticker").bxSlider({
    minSlides: 1,
    maxSlides: 4,
    slideWidth: "auto",
    slideMargin: 10,
    ticker: true,
    speed: 100000,
    useCSS: false,
    tickerHover: true,
  });

  //newsticker 2
  $("#webticker2").bxSlider({
    minSlides: 1,
    maxSlides: 4,
    slideWidth: "auto",
    slideMargin: 10,
    ticker: true,
    speed: 100000,
    useCSS: false,
    tickerHover: true,
  });

  //still_font
  $(".still_font").click(function () {
    $(".per_category_image_title_body > h3").animate(
      {
        "font-size": "18px",
      },
      500
    );
    $("h4").animate(
      {
        "font-size": "30px",
      },
      500
    );
    $(".fix .source_date p").animate(
      {
        "font-size": "15px",
      },
      500
    );
    $(".single_category_body > p").animate(
      {
        "font-size": "17px",
      },
      500
    );

    $(".reporter_name_date > h5, .single_body p").animate(
      {
        "font-size": "16px",
      },
      500
    );

    $(".more_read_date_time > h4").animate(
      {
        "font-size": "13px",
      },
      500
    );
  });

  //font_decrease
  $(".font_decrease").click(function () {
    $(
      ".per_category_image_title_body > h3, .per_category_image_title_body > h4, .fix .source_date p, .single_category_body > p"
    ).animate(
      {
        "font-size": "-=2px",
      },
      500
    );
  });

  //font_increase
  $(".font_increase").click(function () {
    $(
      ".per_category_image_title_body > h3, .per_category_image_title_body > h4, .fix .source_date p, .single_category_body > p"
    ).animate(
      {
        "font-size": "+=2px",
      },
      500
    );
  });
})(jQuery);
