<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Immediate Matrix</title>
    <meta
      name="description"
      content="Immediate Matrix App Platform is a trading platform that will allow you to make money from the fluctuations of cryptocurrencies. Review of the application from financial experts. Find out how and how much you can earn with a revolutionary trading app!"
    />
    <link rel="icon" type="icon" href="fav.ico" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/swiper.min.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/checkbox-svg.css" />
    <link rel="stylesheet" href="css/intlTelInput.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/swiper.min.js"></script>
  </head>
  <body>
    <div class="advertorialWrp"></div>
    <header class="header">
      <div class="container">
        <div class="header_wrp">
          <div class="header_logoWrp" style="align-items: center">
            <h1
              style="
                font-size: 28px;
                font-weight: bold;
                color: #fff;
                margin-top: 6px;
              "
            >
              Immediate Matrix
            </h1>
          </div>
          <div class="header_widgetWrp swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="widget_item swiper-slide">
                <img
                  src="images/widget-avatar-7-min.jpg"
                  alt="User photo"
                  loading="lazy"
                  class="widget_img"
                />
                <div class="widget_inner">
                  <p class="widget_text">
                    <span class="widget_name">Rachele</span> gives
                    <span class="widget_city">Valencia</span>
                  </p>
                  <p class="widget_text">
                    Just made:
                    <span class="widget_profit"
                      ><span class="currency">€</span>264</span
                    >
                  </p>
                  <p class="widget_payment">Real-time payment</p>
                </div>
              </div>
              <div class="widget_item swiper-slide">
                <img
                  src="images/widget-avatar-8-min.jpg"
                  alt="User photo"
                  loading="lazy"
                  class="widget_img"
                />
                <div class="widget_inner">
                  <p class="widget_text">
                    <span class="widget_name">Šárka</span> gives
                    <span class="widget_city">Prague</span>
                  </p>
                  <p class="widget_text">
                    Just made:
                    <span class="widget_profit"
                      ><span class="currency">€</span>962</span
                    >
                  </p>
                  <p class="widget_payment">Real-time payment</p>
                </div>
              </div>
              <div class="widget_item swiper-slide">
                <img
                  src="images/widget-avatar-9-min.jpg"
                  alt="User photo"
                  loading="lazy"
                  class="widget_img"
                />
                <div class="widget_inner">
                  <p class="widget_text">
                    <span class="widget_name">Peter</span> gives
                    <span class="widget_city">Berlin</span>
                  </p>
                  <p class="widget_text">
                    Just made:
                    <span class="widget_profit"
                      ><span class="currency">€</span>782</span
                    >
                  </p>
                  <p class="widget_payment">Real-time payment</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="hero">
      <div class="container">
        <div class="hero_inner">
          <div class="hero_part1">
            <h2 class="hero_subtitle">BITCOIN DOES</h2>
            <h2 class="hero_title">RICH PEOPLE</h2>
            <p class="hero_text">
              With the help of a free calculator, you can now calculate the
              earnings that Immediate matrix allows you to earn in less than a
              few days."
            </p>
            <button class="hero_btn scrollToCalc">
              CALCULATE YOUR PROFITS
            </button>

            <div class="hero_statsWrp"></div>
          </div>
          <div class="hero_partWrp">
            <div class="hero_part2">
              <img src="images/phone1.png" loading="lazy" alt="phone" />
            </div>

            <div class="hero_part3">
              <form
                method="post"
                action=""
                class="form__item"
                id="myform"
              >
                <div class="preloader"></div>
                <p class="form__subtitle">CHANGE YOUR LIFE!</p>
               

                <div class="input__wrapper">
                  <input
                    class="form__input"
                    type="text"
                    name="first_name"
                    autocomplete="off"
                    required=""
                    placeholder="First Name"
                  />
                  
                </div>

                <div class="input__wrapper">
                  <input
                    class="form__input"
                    type="text"
                    name="last_name"
                    autocomplete="off"
                    required=""
                    placeholder="Last Name"
                  />
                 
                </div>

                <div class="input__wrapper">
                  <input
                    class="form__input"
                    type="email"
                    name="email"
                    autocomplete="off"
                    required=""
                    placeholder="E-mail"
                  />
                 
                </div>

                <div class="input__wrapper">
                  <input
                    type="tel"
                    name="phone"
                    autocomplete="off"
                    required=""
                    placeholder=""
                    class="form__input phone"
                  />
                </div>
                                <input type="hidden" class="phonecc" name="phonecc" value="">

  <div class="input__wrapper">
 <button class="Btn form__submit" type="submit">
                  REGISTRATION
                </button>
  </div>
               

                
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="calculator">
      <div class="container">
        <h3 class="calculator__title">CALCULATE POSSIBLE PROFITS</h3>
        <p class="calculator__subtitle">
          Choose how much and how long you want to invest to see your potential
          profits.
        </p>
        <div class="calculator__wrapper">
          <div class="calculator__inner">
            <div class="controls">
              <div class="control__wrapper">
                <h3 class="control__name">You can earn:</h3>
                <input
                  class="control__input control__dep"
                  type="text"
                  value=""
                />
                <div class="control__range">
                  <span><span class="currency">€</span>250</span>
                  <span><span class="currency">€</span>10 000</span>
                </div>
              </div>

              <div class="control__wrapper days">
                <h3 class="control__name">Investment period:</h3>
                <input
                  class="control__input control__days"
                  type="text"
                  value="45"
                />
                <div class="control__range">
                  <span>From 1 day</span>
                  <span>Within 3 months</span>
                </div>
              </div>
            </div>

            <div class="output">
              <span class="output__sum">
                <h3 class="output__title">You can earn</h3>
                <p class="output__earn">
                  <span class="currency">€</span>1 302 000
                </p>
              </span>

              <div class="output__inner">
                <div class="output__wrapper">
                  <h3 class="output__subtitle">Profitability</h3>

                  <p class="output__value output__profitability">1 800%</p>
                </div>

                <div class="output__wrapper">
                  <h3 class="output__subtitle revenue">Revenue</h3>

                  <p class="output__value output__revenue">
                    <span class="currency">€</span>1 296 750
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="map">
      <div class="container">
        <h2 class="map_title">
          SO USERS AROUND THE WORLD ARE MAKING MONEY RIGHT NOW
        </h2>
        <p class="map_text">
          People from 164 countries use Immediate Matrix every day
        </p>
        <div class="tableWrp">
          <div class="table">
            <div class="table_wrapper">
              <div class="table_row table_row-title">
                <h4 class="column column_title">Name</h4>
                <h4 class="column column_title">Country</h4>
                <h4 class="column column_title">Profit</h4>
                <h4 class="column column_title">Cryptocurrency</h4>
                <h4 class="column column_title">Trade Time</h4>
                <h4 class="column column_title">Result</h4>
              </div>
              <div class="table_template"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="earn">
      <div class="container">
        <h2 class="earn_title">
          EARN MONEY WITH YOUR SMARTPHONE, COMPUTER OR TABLET
        </h2>
        <p class="earn_text">Use Immediate matrix wherever you are.</p>
        <div class="earn_wrp">
          <img src="images/photo4.jpg" loading="lazy" alt="" class="earn_img" />
          <div class="earn_inner">
            <h3 class="earn_subtitle">
              Immediately after registration you can start earning with
              Immediate Matrix.
            </h3>
            <p class="earn_subtext">
              Earnings are accessible to everyone and do not require special
              knowledge and skills. You can log in using your tablet. computer
              or smartphone. Don't miss your chance to become rich - start
              today.
            </p>
            <div class="earn_listWrp">
              <hr class="earn_hr" />
              <ul class="earn_list">
                <li class="earn_item">
                  <img
                    src="images/shield.svg"
                    alt="shield"
                    loading="lazy"
                  />Automated trading software
                </li>
                <li class="earn_item">
                  <img
                    src="images/shield.svg"
                    alt="shield"
                    loading="lazy"
                  />Available on all gadgets
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="review">
      <div class="container">
        <h2 class="review_title">USER EXPERIENCES WITH IMMEDIATE MATRIX</h2>
        <p class="review_text">
          Depending on how much credit you top up and how long you've been using
          Immediate Matrix, you can expect different results.
        </p>
        <div class="review_slider swiper mySwiperReview">
          <div class="swiper-wrapper">
            <div class="review_item swiper-slide">
              <div class="sliderItem_imgWrp">
                <img src="images/proof-avatar-3.jpg" loading="lazy" alt="" />
              </div>
              <div class="sliderItem_textWrp">
                <div class="">
                  <h4 class="sliderItem_name">Scarlet May</h4>
                  <h4 class="sliderItem_city">Coventry</h4>
                  <p class="sliderItem_text">
                    I learned about Immediate matrix from the newspaper. I
                    immediately registered and invested €250. It's been a month,
                    but I'm still excited about this software. My minimum
                    starting capital miraculously changed to €6500!|
                  </p>
                </div>
                <p class="sliderItem_profit">
                  Profit: over <span class="currency">€</span>10k
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section class="features">
      <div class="container">
        <h2 class="features_title">
          WORLD'S #1 PROVEN AND RELIABLE MONEY MAKING SOFTWARE
        </h2>
        <p class="features_text">Main functions of Immediate Matrix</p>
        <div class="features_inner">
          <div class="features_item item1">
            <div class="features_itemContent">
              <h3 class="features_subtitle">Unmatched accuracy</h3>
              <p class="features_subtext">
                It is the only trading app in the world with 99.4% accuracy.
                Thanks to this, users from all over the world trust it to
                increase their capital.
              </p>
            </div>
          </div>
          <div class="features_item item2">
            <div class="features_itemContent">
              <h3 class="features_subtitle">Advanced technology</h3>
              <p class="features_subtext">
                The best and most experienced developers have created Immediate
                Matrix software. It leads the market by 0.01 seconds.
                Experienced traders understand that this is a huge advantage
                that makes the software the most effective trading program in
                the world.
              </p>
            </div>
          </div>
          <div class="features_item item3">
            <div class="features_itemContent">
              <h3 class="features_subtitle">Award winning appp</h3>
              <p class="features_subtext">
                The app has won many awards. The International Trade Commission
                thus recognized the software as the best among all business
                applications.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="hero">
      <div class="container">
        <div class="hero_inner">
          <div class="hero_part1">
            <h2 class="hero_subtitle">BITCOIN DOES</h2>
            <h2 class="hero_title">RICH PEOPLE</h2>
            <p class="hero_text">
              With the help of a free calculator, you can now calculate the
              earnings that Immediate matrix allows you to earn in less than a
              few days."
            </p>

            <div class="hero_statsWrp"></div>
          </div>
          <div class="hero_partWrp">
            <div class="hero_part2">
              <img src="images/phone1.png" loading="lazy" alt="phone" />
            </div>

            <div class="hero_part3">
            <form
                method="post"
                
                class="form__item"
                id="myform2"
              >
                <div class="preloader"></div>
                <p class="form__subtitle">CHANGE YOUR LIFE!</p>
               

                <div class="input__wrapper">
                  <input
                    class="form__input"
                    type="text"
                    name="first_name"
                    autocomplete="off"
                    required=""
                    placeholder="First Name"
                  />
                  
                </div>

                <div class="input__wrapper">
                  <input
                    class="form__input"
                    type="text"
                    name="last_name"
                    autocomplete="off"
                    required=""
                    placeholder="Last Name"
                  />
                 
                </div>

                <div class="input__wrapper">
                  <input
                    class="form__input"
                    type="email"
                    name="email"
                    autocomplete="off"
                    required=""
                    placeholder="E-mail"
                  />
                 
                </div>

                <div class="input__wrapper">
                  <input
                    type="tel"
                    name="phone"
                    autocomplete="off"
                    required=""
                    placeholder=""
                    class="form__input phone"
                  />
                </div>
                                <input type="hidden" class="phonecc" name="phonecc" value="">

  <div class="input__wrapper">
 <button class="Btn form__submit" type="submit">
                  REGISTRATION
                </button>
  </div>
               

                
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal modalFinish" id="finishPopup" style="display: none">
      <div class="modalFinish_head">
        <div class="modalFinish_head_wrapper">
          <img src="images/atention.svg" alt="i" class="modalFinish_atention" />
          <span class="modalFinish_headText">
            <span class="lead-name">[Lead Name]</span>, expect a call from your
            Personal Manager and check your email after activation. You can
            access to the platform from your email, which you have indicated in
            the registration form.
          </span>
        </div>
      </div>
      <div class="modalFinish_body modal--body">
        <div class="modalFinish_images">
          <img
            src="images/finish-manager.png"
            alt=""
            class="modalFinish_img_manager"
            loading="lazy"
          />
        </div>
        <div class="modalFinish_text">
          <p class="modalFinish_subText">
            Welcome to board! <br />
            I AM YOUR <br class="mob" /><span class="modalFinish_colored">
              PERSONAL MANAGER
            </span>
          </p>
          <div class="modalFinish_btnWrapper">
            <a href="" class="btn btn_finish btn-send-thanks"
              >ACTIVATE YOUR ACCOUNT NOW!</a
            >
          </div>
        </div>
      </div>
    </div>

    <link rel="stylesheet" href="css/calculator.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/live-result.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.min.css" />
    <link rel="stylesheet" href="css/modal.css" />

    <script src="js/intlTelInput.js"></script>
    <script src="js/index.js"></script>
    <script src="js/getdetector.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/utils.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/ion.rangeSlider.min.js"></script>
    <script src="js/live-result.js"></script>
    <script src="js/script.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 15,
        allowTouchMove: false,
        autoplay: {
          delay: 3000,
        },
        loop: true,
        breakpoints: {
          1023: {
            slidesPerView: 3,
          },
        },
      });
      var swiperRewiev = new Swiper(".mySwiperReview", {
        effect: "fade",
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        loop: true,
        slidesPerView: "1",
      });

      $(".mySwiperReview").each(function (elem, target) {
        var swp = target.swiper;
        $(this).hover(
          function () {
            swp.autoplay.stop();
          },
          function () {
            swp.autoplay.start();
          }
        );
      });
    </script>
  </body>
</html>
