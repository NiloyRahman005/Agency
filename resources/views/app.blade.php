<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Axtra HTML5 Template">

    <title>Home - Digital Marketing</title>
    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <!-- All CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('resposnive.css') }}">

</head>

<body>
    <!-- Cursor Animation -->
    <div class="cursor1"></div>
    <div class="cursor2"></div>


    <!-- Preloader -->
    <div class="preloader">
        <div class="loading">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
        </div>
    </div>


    <!-- Switcher Area Start -->
    <div class="switcher__area">
        <div class="switcher__icon">
            <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
            <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <div class="switcher__items">
            <div class="switcher__item">
                <div class="switch__title-wrap">
                    <h2 class="switcher__title">Cursor</h2>
                </div>
                <div class="switcher__btn">
                    <select name="cursor-style" id="cursor_style">
                        <option value="1">default</option>
                        <option selected value="2">animated</option>
                    </select>
                </div>
            </div>

            <div class="switcher__item">
                <div class="switch__title-wrap">
                    <h2 class="switcher__title">mode</h2>
                </div>
                <div class="switcher__btn mode-type wc-col-2">
                    <button class="active" data-mode="light">light</button>
                    <button data-mode="dark">dark</button>
                </div>
            </div>

            <div class="switcher__item">
                <div class="switch__title-wrap">
                    <h2 class="switcher__title">Language Support</h2>
                </div>
                <div class="switcher__btn lang_dir wc-col-2">
                    <button class="active" data-mode="ltr">LTR</button>
                    <button data-mode="rtl">RTL</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Switcher Area End -->



    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>


    <!-- Go Top Button -->
    <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


    <!-- Header area start -->
    <header class="header__area-3">
        <div class="header__inner-3">
            <div class="header__logo-2">
                <!-- <a href="index.html" class="logo-dark"><img src="assets/imgs/logo/logo-black.png" alt="Site Logo"></a>
        <a href="index.html" class="logo-light"><img src="assets/imgs/logo/site-logo-white-2.png" alt="Site Logo"></a> -->

                <a href="index.html" class="logo-dark">
                    <img src="logo.png" alt="Site Logo" class="responsive-logo">
                </a>
                <a href="index.html" class="logo-light">
                    <img src="logo.png" alt="Site Logo" class="responsive-logo">
                </a>
            </div>

            <div class="header__nav-2">
                <ul class="main-menu-3 menu-anim">
                    <li class="has-megamenu"><a href="#">home</a></li>
                    <li><a href="index-woocommerce.html">Services</a>
                        <ul class="main-dropdown">
                            <li><a href="service-details.html">Back Office</a></li>
                            <li><a href="service-details.html">Customer Support</a></li>
                            <li><a href="service-details.html">Manage Office</a></li>


                        </ul>
                    </li>
                    <li class="has-megamenu"><a href="about.html">Ta-ask Story</a></li>
                    <li class="has-megamenu"><a href="blog.html">Blog</a></li>

                    <li class="has-megamenu"><a href="contact.html">Contact Us</a></li>



                </ul>
            </div>
            <div class="header__nav-icon-3">
                <button class="search-icon" id="search_icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                <button class="search-icon" id="search_close"><i class="fa-solid fa-xmark"></i></button>
                <button id="open_offcanvas"><img src="assets/imgs/icon/menu-black.png" alt="Menubar Icon"></button>
            </div>
        </div>
    </header>


    <div class="header__search">
        <form action="#">
            <input type="text" name="s" id="s" placeholder="Search..">
        </form>
    </div>
    <!-- Header area end -->


    <!-- Offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__body">
            <div class="offcanvas__left">
                <div class="offcanvas__logo">
                    <a href="index.html"><img src="logo.png" alt="Offcanvas Logo"></a>
                </div>
                <div class="offcanvas__social">
                    <h3 class="social-title">Follow Us</h3>
                    <ul>
                        <li><a href="#">Dribbble</a></li>
                        <li><a href="#">Behance</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
                <div class="offcanvas__links">
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="career.html">Career</a></li>
                        <li><a href="blog.html">blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas__mid">
                <div class="offcanvas__menu-wrapper">
                    <nav class="offcanvas__menu">
                        <ul class="menu-anim">
                            <li><a>home</a>

                            </li>
                            <li>
                                <a>Services</a>
                                <ul>
                                    <li><a href="index-woocommerce.html">Back Office</a></li>
                                    <li><a href="index-woocommerce.html">Customer Support</a></li>

                                </ul>
                            </li>
                            <li>
                                <a>About US</a>

                            </li>
                            <li><a>Contact Us</a>

                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <div class="offcanvas__right">
                <div class="offcanvas__search">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search keyword">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="offcanvas__contact">
                    <h3>Get in touch</h3>
                    <ul>
                        <li><a href="tel:02094980547">+(02) - 094 980 547</a></li>
                        <li><a href="mailto:info@extradesign.com">info@extradesign.com</a></li>
                        <li>230 Norman Street New York, QC (USA) H8R 1A1</li>
                    </ul>
                </div>
                <img src="assets/imgs/shape/11.png" alt="shape" class="shape-1">
                <img src="assets/imgs/shape/12.png" alt="shape" class="shape-2">
            </div>
            <div class="offcanvas__close">
                <button type="button" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </div>
    </div>
    <!-- Offcanvas area end -->


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>

                <!-- Hero area start -->
                <section class="hero__area-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="hero__inner-3">
                                    <div class="sec-title-wrapper">
                                        <h2 class="sec-sub-title">The</h2>
                                        <h3 class="sec-title title-left">Ta-Ask</h3>
                                        <!-- <h3 class="sec-title title-right">Ask</h3> -->
                                    </div>
                                    <div class="hero__text-3">
                                        <h3 class="hero__text-animation">Startups - Fortune 500s</h3>
                                        <p class="hero__text-animation">We help ambitious startups, scale‑ups, and
                                            Fortune 500s streamline
                                            operations, elevate customer experience, and improve your overall business
                                            performance without
                                            breaking the bank.</p>
                                    </div>
                                    <div class="scroll-down">
                                        <button><img src="assets/imgs/icon/arrow-down-sm.png"
                                                alt="arrow icon"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="video-info">
                            <div class="video-intro">
                                <input id="video_check" type="checkbox">
                                <div class="intro-title">
                                    <h4 class="video-title">Watch <span>video intro</span></h4>
                                    <h4 class="video-title close-video-title">Close <span>video intro</span></h4>
                                </div>
                                <div class="video">
                                    <video src="assets/video/hero-3.mp4" loop muted autoplay playsinline></video>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="hero3-img-ani">
                        <img src="assets/imgs/hero/3/1.jpg" alt="Hero Image" class="hero3-img">
                    </div>
                </section>


                <!-- Brand area start -->
                <section class="brand__area">
                    <div class="container pt-140 pb-140">
                        <div class="row">
                            <div class="col-xxl-12">
                                <h2 class="brand__title-3 title-anim">We worked with global largest brands
                                </h2>
                                <div class="brand__list-3">
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="assets/imgs/brand/1.png" alt="Brand Logo">
                                    </div>
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="assets/imgs/brand/2.png" alt="Brand Logo">
                                    </div>
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="assets/imgs/brand/3.png" alt="Brand Logo">
                                    </div>
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="assets/imgs/brand/4.png" alt="Brand Logo">
                                    </div>
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="assets/imgs/brand/5.png" alt="Brand Logo">
                                    </div>
                                    <div class="brand__item-2 fade_bottom">
                                        <img src="assets/imgs/brand/6.png" alt="Brand Logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Brand area end -->


                <!-- <section class="service__area-7 pt-130">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12">
                <div class="service__items-7 animation_service_7">
                  <div class="service__item-7"
                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <a href="service-details.html">
                      <h3 class="service__title-7">The Ta‑ask Story </span></h3>
                    </a>
                    <p>From one bold vision to 150+ eloquent agents, Ta‑ask was built to help companies scale without
                      sacrificing quality. We deliver CX excellence, streamlined back‑office ops, and managed services
                      that keep you competitive.
                    </p>

                  </div>

                  <div class="service__item-7"
                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <a href="service-details.html">
                      <h3 class="service__title-7">The Ta‑ask Story </span></h3>
                    </a>
                    <p>From one bold vision to 150+ eloquent agents, Ta‑ask was built to help companies scale without
                      sacrificing quality. We deliver CX excellence, streamlined back‑office ops, and managed services
                      that keep you competitive.
                    </p>

                  </div>
                  <div class="service__item-7"
                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <a href="service-details.html">
                      <h3 class="service__title-7">Serving 12+ Industries </h3>
                    </a>
                    <p>From e‑commerce to fintech, healthcare to travel, we deliver tailored outsourcing solutions that
                      solve industry‑specific challenges and unlock growth.
                    </p>

                  </div>
                  <div class="service__item-7"
                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <a href="service-details.html">
                      <h3 class="service__title-7">We Hire the Best, Keep the Best </h3>
                    </a>
                    <p>Elite professionals trained to your workflows, fluent in your customer’s language, and committed
                      to long‑term excellence.
                    </p>

                  </div>
                  <div class="service__item-7"
                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <a href="service-details.html">
                      <h3 class="service__title-7">From Startups to Fortune 500s</h3>
                    </a>
                    <p>Trusted by fast‑growing innovators and global enterprises alike to power mission‑critical
                      operations.
                    </p>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </section> -->


                <section class="info-cards-section">
                    <div class="info-cards">
                        <div class="info-card fade_left">
                            <h4>The Ta‑ask Story</h4>
                            <p> From one bold vision to 150+ eloquent agents, Ta‑ask was built to help companies scale
                                without
                                sacrificing quality. We deliver CX excellence, streamlined back‑office ops, and managed
                                services that
                                keep you competitive.
                            </p>
                        </div>

                        <div class="info-card fade_left">
                            <h2>Serving 12+ Industries</h2>
                            <p>From e‑commerce to fintech, healthcare to travel, we deliver tailored outsourcing
                                solutions that solve
                                industry‑specific challenges and unlock growth.</p>
                        </div>

                        <div class="info-card fade_left">
                            <h2>We Hire the Best, Keep the Best</h2>
                            <p>Elite professionals trained to your workflows, fluent in your customer’s language, and
                                committed to
                                long‑term excellence.</p>
                        </div>

                        <div class="info-card fade_left">
                            <h2>From Startups to Fortune 500s</h2>
                            <p>Trusted by fast‑growing innovators and global enterprises alike to power mission‑critical
                                operations.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- <section class="portfolio__area-2">
          <div class="container g-0 line pt-100 pb-140">
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper text-anim">
                  <h2 class="sec-title-3 title-anim" style="perspective: 400px;">
                    We Are Global
                  </h2>
                  <p class="sec-text" style="perspective: 400px;font-size: 20px;">
                    Wherever Your Business Goes, We're Already There
                    At Ta-ask, we're strategically positioned at the pulse points of global commerce. From our vibrant
                    headquarters in
                    Potter Bar, UK, we power your operations seamlessly through our dynamic offices in the bustling hub
                    of Dubai, UAE and
                    the innovation-rich landscape of South East Asia.

                  </p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="swiper portfolio__slider-2 swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-82646e86c972a1073" aria-live="off"
              style="transition-duration: 0ms;">
              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4"
                role="group" aria-label="5 / 5"
                style="width: 1905px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/2/5.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="portfolio-details.html">Lionpro <span>Agency</span></a>
                    </h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="portfolio-details.html" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group"
                aria-label="1 / 5"
                style="width: 1905px; opacity: 1; transform: translate3d(-1905px, 0px, 0px); transition-duration: 0ms;">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/2/1.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="portfolio-details.html">Lionpro <span>Agency</span></a>
                    </h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="portfolio-details.html" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 5"
                style="width: 1905px; opacity: 1; transform: translate3d(-3810px, 0px, 0px); transition-duration: 0ms;">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/2/2.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"><a href="portfolio-details.html">crodyflw <span>Website</span></a>
                    </h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="portfolio-details.html" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 5"
                style="width: 1905px; opacity: 1; transform: translate3d(-5715px, 0px, 0px); transition-duration: 0ms;">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/2/3.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="portfolio-details.html">developers
                        <span>digital</span></a></h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="portfolio-details.html" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 5"
                style="width: 1905px; opacity: 1; transform: translate3d(-7620px, 0px, 0px); transition-duration: 0ms;">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/2/4.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="portfolio-details.html">Lionpro
                        <span>marketeers</span></a></h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="portfolio-details.html" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="4"
                role="group" aria-label="5 / 5"
                style="width: 1905px; opacity: 1; transform: translate3d(-9525px, 0px, 0px); transition-duration: 0ms;">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/2/5.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="portfolio-details.html">Lionpro <span>Agency</span></a>
                    </h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="portfolio-details.html" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0"
                role="group" aria-label="1 / 5"
                style="width: 1905px; opacity: 0; transform: translate3d(-11430px, 0px, 0px); transition-duration: 0ms;">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/2/1.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="portfolio-details.html">Lionpro <span>Agency</span></a>
                    </h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="portfolio-details.html" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="portfolio__slider-2-pagination--">
              <div
                class="swiper-pagination circle-pagination right swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                <button class="swiper-pagination-bullet" tabindex="0">
                  <svg class="circle-progress">
                    <circle class="circle-origin" r="24.5" cx="25" cy="25"></circle>
                  </svg><span></span>
                </button>

                <button class="swiper-pagination-bullet" tabindex="0">
                  <svg class="circle-progress">
                    <circle class="circle-origin" r="24.5" cx="25" cy="25"></circle>
                  </svg><span></span>
                </button>

                <button class="swiper-pagination-bullet" tabindex="0">
                  <svg class="circle-progress">
                    <circle class="circle-origin" r="24.5" cx="25" cy="25"></circle>
                  </svg><span></span>
                </button>

                <button class="swiper-pagination-bullet" tabindex="0">
                  <svg class="circle-progress">
                    <circle class="circle-origin" r="24.5" cx="25" cy="25"></circle>
                  </svg><span></span>
                </button>

                <button class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                  aria-current="true">
                  <svg class="circle-progress">
                    <circle class="circle-origin" r="24.5" cx="25" cy="25"></circle>
                  </svg><span></span>
                </button>
              </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
          </div>
        </section> -->



                <div class="container-fluid mx-auto">
                    <div class="global-section">
                        <!-- <p class="text-uppercase small">We Have</p> -->
                        <h1>WE'RE GLOBAL</h1>
                        <p>
                            Wherever Your Business Goes, We're Already There

                            At Ta-ask, we're strategically positioned at the pulse points of global commerce. From our
                            vibrant
                            headquarters in Potter Bar, UK, we power your operations seamlessly through our dynamic
                            offices in the
                            bustling hub of Dubai, UAE and the innovation-rich landscape of South East Asia.

                        </p>
                        <div class="row align-items-center mt-4">
                            <!-- Left column -->
                            <div class="col-md-4 text-center text-md-start">
                                <p class="small mb-1">in</p>
                                <div class="scroll-image-wrapper mx-auto mx-md-0">
                                    <div class="scroll-image-list">
                                        <img src="https://media.istockphoto.com/id/955628078/photo/malaysia-kuala-lumpur-skyline.jpg?s=612x612&w=0&k=20&c=-5QQlJ2zJQ7m4h1hxPjCL-yV5LXQ52uGx9OgaKYaBrs="
                                            data-country="Cyprus">
                                        <img src="https://www.worldatlas.com/r/w1200/upload/1e/19/60/dhaka-bangladesh.jpg"
                                            data-country="Malaysia">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSaMbai_UWjt_tWc0l4KC7cqo2bt11zZCrFI_t17gNmiHBWRq3ZParO2hjsjQLwOZk7y8&usqp=CAU"
                                            data-country="Bangladesh">
                                    </div>
                                </div>
                            </div>

                            <!-- Right column -->
                            <div class="col-md-8 country-list" id="country_list">
                                <p data-country="Cyprus">Cyprus</p>
                                <p data-country="Malaysia">Malaysia</p>
                                <p data-country="Bangladesh">Bangladesh</p>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        // Grab the last .global-section
                        let sections = document.querySelectorAll(".global-section");
                        let section = sections[sections.length - 1]; // last one

                        let countryList = section.querySelector("#country_list");
                        let countries = ["Cyprus", "Malaysia", "Bangladesh"];
                        let index = 0;

                        function highlightCountry() {
                            // Remove 'active' from all
                            countryList.querySelectorAll("p").forEach(function(p) {
                                p.classList.remove("active");
                            });

                            // Add 'active' to the current
                            let activeItem = countryList.querySelector(`p[data-country="${countries[index]}"]`);
                            if (activeItem) {
                                activeItem.classList.add("active");
                            }

                            // Move to the next
                            index = (index + 1) % countries.length;
                        }

                        highlightCountry(); // initial
                        setInterval(highlightCountry, 5000);
                    });
                </script>





                <!-- About area start -->
                <!-- <section class="about__area-3">
          <div class="container pt-140 pb-110">
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="about__img-3">
                  <img src="assets/imgs/about/3/1.jpg" alt="About Thumbnail" data-speed="auto">
                </div>
              </div>

              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title title-anim">Who We Are</h2>
                  <h3 class="sec-title title-anim">We are leading digital marketing agency.</h3>
                </div>
                <div class="sec-text-wrapper">
                  <div class="sec-text text-anim">
                    <p>We’re a team of strategic mdigital marketing working globally with largest brands, We believe
                      that
                      progress only happens when you refused to play things safe. We combine ideas and behaviors, and
                      insights with design, technological data to produce brand experiences that customers love our
                      services.</p>
                    <div class="btn_wrapper">
                      <a class="wc-btn-light btn-hover btn-item" href="about.html"><span></span> Explore Us <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
                <!-- About area end -->


                <!-- Service area start -->
                <!-- <section class="service__area-3 pb-150">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper pt-130 text-anim">
                  <h2 class="sec-sub-title title-anim">Services</h2>
                  <h3 class="sec-title title-anim">Our marketing <br> Services</h3>
                  <p>Consumers today rely heavily on digital means to research products.
                    We
                    research a brand of bldend
                    engaging with it, according to the meanwhile, 51% of consumers say they use Google to research
                    products before buying.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xx-12">
                <div class="service__list-3">
                  <div class="service__item-3 service_animation">
                    <h3><a href="service-details.html" class="service__title-3">Search Engine <br>Optimization</a>
                    </h3>
                    <div class="service__content-3">
                      <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                      </p>
                      <ul class="">
                        <li>+ Logo Design</li>
                        <li>+ Advertisement</li>
                        <li>+ Promotion</li>
                      </ul>
                    </div>
                    <div class="service__btn-3">
                      <div class="btn_wrapper">
                        <a href="service-details.html" class="wc-btn-black btn-hover btn-item"><span></span> Details
                          <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>

                    <div class="service__hover-3" style="background-image: url(assets/imgs/service/3/1.jpg);"></div>
                  </div>

                  <div class="service__item-3 service_animation">
                    <h3><a href="service-details.html" class="service__title-3 ">Email <br>Marketing</a></h3>
                    <div class="service__content-3">
                      <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                      </p>
                      <ul class="">
                        <li>+ Logo Design</li>
                        <li>+ Advertisement</li>
                        <li>+ Promotion</li>
                      </ul>
                    </div>
                    <div class="service__btn-3">
                      <div class="btn_wrapper">
                        <a href="service-details.html" class="wc-btn-black btn-hover btn-item"><span></span> Details
                          <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>

                    <div class="service__hover-3" style="background-image: url(assets/imgs/service/3/2.png);"></div>
                  </div>

                  <div class="service__item-3 service_animation">
                    <h3 class=""><a href="service-details.html" class="service__title-3">COntent
                        <br>Marketing</a></h3>
                    <div class="service__content-3">
                      <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                      </p>
                      <ul class="">
                        <li>+ Logo Design</li>
                        <li>+ Advertisement</li>
                        <li>+ Promotion</li>
                      </ul>
                    </div>
                    <div class="service__btn-3">
                      <div class="btn_wrapper">
                        <a href="service-details.html" class="wc-btn-black btn-hover btn-item"><span></span> Details
                          <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>

                    <div class="service__hover-3" style="background-image: url(assets/imgs/service/3/3.png);"></div>
                  </div>

                  <div class="service__item-3 service_animation">
                    <h3 class=""><a href="service-details.html" class="service__title-3">Social
                        <br>Marketing</a></h3>
                    <div class="service__content-3">
                      <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                      </p>
                      <ul class="">
                        <li>+ Logo Design</li>
                        <li>+ Advertisement</li>
                        <li>+ Promotion</li>
                      </ul>
                    </div>
                    <div class="service__btn-3">
                      <div class="btn_wrapper">
                        <a href="service-details.html" class="wc-btn-black btn-hover btn-item"><span></span> Details
                          <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>

                    <div class="service__hover-3" style="background-image: url(assets/imgs/service/3/4.png);"></div>
                  </div>

                  <div class="service3__img-wrap">
                    <div class="service3__img"></div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section> -->
                <!-- Service area end -->


                <!-- Portfolio area start -->
                <!-- <section class="portfolio__area-3">
          <div class="container pt-100 pb-150">
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title title-anim">Featured <br>Work</h2>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xxl-12">
                <div class="swiper portfolio__slider-3">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="portfolio__slide-3">
                        <a href="service-details.html">
                          <h3 class="portfolio__title-3">Benjon <span>Website</span> 2012</h3>
                          <img src="assets/imgs/portfolio/3/2.jpg" alt="Portfolio Image">
                        </a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="portfolio__slide-3">
                        <a href="service-details.html">
                          <h3 class="portfolio__title-3">Benjon <span>Website</span> 2012</h3>
                          <img src="assets/imgs/portfolio/3/1.jpg" alt="Portfolio Image">
                        </a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="portfolio__slide-3">
                        <a href="service-details.html">
                          <h3 class="portfolio__title-3">Benjon <span>Website</span> 2012</h3>
                          <img src="assets/imgs/portfolio/3/3.jpg" alt="Portfolio Image">
                        </a>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="portfolio__slide-3">
                        <a href="service-details.html">
                          <h3 class="portfolio__title-3">Benjon <span>Website</span> 2012</h3>
                          <img src="assets/imgs/portfolio/3/4.jpg" alt="Portfolio Image">
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-pagination"></div>

                  <div class="swiper-btn">
                    <div class="pp-prev"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="pp-next"><i class="fa-solid fa-arrow-right"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
                <!-- Portfolio area end -->


                <!-- Testimonial area start -->
                <!-- <section class="testimonial__area-3">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12">
                <div class="swiper testimonial__slider-3">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial__slide-3">
                      <p>When we talk about Alts, we do not mean a typical business partner, but rather a team that
                        collaborates with us daily, always there for us when we encounter difficulties and celebrate
                        achievements. We see in Alts our best ally for success!</p>
                      <h2 class="client__name-3">Maria D. Halk</h2>
                      <h3 class="client__role-3">Managing Director</h3>
                    </div>
                    <div class="swiper-slide testimonial__slide-3">
                      <p>When we talk about Alts, we do not mean a typical business partner, but rather a team that
                        collaborates with us daily, always there for us when we encounter difficulties and celebrate
                        achievements. We see in Alts our best ally for success!</p>
                      <h2 class="client__name-3">Maria D. Halk</h2>
                      <h3 class="client__role-3">Managing Director</h3>
                    </div>
                    <div class="swiper-slide testimonial__slide-3">
                      <p>When we talk about Alts, we do not mean a typical business partner, but rather a team that
                        collaborates with us daily, always there for us when we encounter difficulties and celebrate
                        achievements. We see in Alts our best ally for success!</p>
                      <h2 class="client__name-3">Maria D. Halk</h2>
                      <h3 class="client__role-3">Managing Director</h3>
                    </div>
                    <div class="swiper-slide testimonial__slide-3">
                      <p>When we talk about Alts, we do not mean a typical business partner, but rather a team that
                        collaborates with us daily, always there for us when we encounter difficulties and celebrate
                        achievements. We see in Alts our best ally for success!</p>
                      <h2 class="client__name-3">Maria D. Halk</h2>
                      <h3 class="client__role-3">Managing Director</h3>
                    </div>
                    <div class="swiper-slide testimonial__slide-3">
                      <p>When we talk about Alts, we do not mean a typical business partner, but rather a team that
                        collaborates with us daily, always there for us when we encounter difficulties and celebrate
                        achievements. We see in Alts our best ally for success!</p>
                      <h2 class="client__name-3">Maria D. Halk</h2>
                      <h3 class="client__role-3">Managing Director</h3>
                    </div>
                  </div>
                  <div class="next-button swipper-btn"><i class="fa-solid fa-arrow-left"></i></div>
                  <div class="prev-button swipper-btn"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial__images-3 animation_image_zoom">
            <img src="assets/imgs/testimonial/3/1.jpg" alt="testimonial Image" class="testimonial3__img">
            <img src="assets/imgs/testimonial/3/2.jpg" alt="testimonial Image" class="testimonial3__img-2">
            <img src="assets/imgs/testimonial/3/3.jpg" alt="testimonial Image" class="testimonial3__img-3">
            <img src="assets/imgs/testimonial/3/4.jpg" alt="testimonial Image" class="testimonial3__img-4">
            <img src="assets/imgs/testimonial/3/5.jpg" alt="testimonial Image" class="testimonial3__img-5">
            <img src="assets/imgs/testimonial/3/6.jpg" alt="testimonial Image" class="testimonial3__img-6">
          </div>
        </section> -->
                <!-- Testimonial area end -->


                <!-- Workflow area start -->
                <!-- <section class="workflow__area-3">
          <div class="workflow__wrapper-3">
            <div class="choose-wrapper wf_panel">
              <div class="container">
                <div class="row">
                  <div class="col-xxl-12">
                    <div class="choose-title-wrapper">
                      <h2 class="choose-title title-anim">why <br> choose us</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="research__area wf_panel pt-150">
              <div class="container inner_content">
                <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="sec-title-wrapper">
                      <h2 class="sec-sub-title">why <br>choose us</h2>
                      <h3 class="sec-title">Keword,Research Strategy, Survey, & Analytics</h3>
                      <p>Attention, we take out our round glasses and our sweater with elbow patches to go back to the
                        origins of the user experience: the first mention of the user and its importance was born in
                        the
                      </p>
                    </div>
                    <ul class="research__tools">
                      <li><a href="#">Google</a></li>
                      <li><a href="#">pinterest</a></li>
                      <li><a href="#">Instagram</a></li>
                    </ul>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="research__list">
                      <div class="research__item">
                        <div class="research__number">
                          <span>60%</span>
                        </div>
                        <div class="research__info">
                          <h4 class="research__title">Strategy</h4>
                          <p>Your marketing strategy optimizing performances doesn’t have to be a guessing game.</p>
                        </div>
                      </div>

                      <div class="research__item">
                        <div class="research__number">
                          <span>95%</span>
                        </div>
                        <div class="research__info">
                          <h4 class="research__title">Audience</h4>
                          <p>Your marketing strategy optimizing performances doesn’t have to be a guessing game.</p>
                        </div>
                      </div>

                      <div class="research__item">
                        <div class="research__number">
                          <span>70%</span>
                        </div>
                        <div class="research__info">
                          <h4 class="research__title">Keyword</h4>
                          <p>Your marketing strategy optimizing performances doesn’t have to be a guessing game.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="counter__area-3 wf_panel">
              <div class="container">
                <div class="row">
                  <div class="col-xxl-12">
                    <div class="sec-title-wrapper">
                      <h2 class="sec-sub-title">Why <br>Choose Us</h2>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="counter__wrapper-3">
                      <div class="counter__item-3">
                        <h2 class="counter__number">25k</h2>
                        <p>Project <br>completed</p>
                      </div>
                      <div class="counter__item-3">
                        <h2 class="counter__number">8k</h2>
                        <p>Happy <br>customers</p>
                      </div>
                      <div class="counter__item-3">
                        <h2 class="counter__number">15</h2>
                        <p>Years <br>experiences</p>
                      </div>
                      <div class="counter__item-3">
                        <h2 class="counter__number">98</h2>
                        <p>Awards <br>achievement</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="counter__img-3">
                      <img src="assets/imgs/thumb/counter-3.png" alt="Counter Image">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          
            <div class="cta__area-3 wf_panel">
              <div class="container pt-150 pb-150">
                <div class="row">
                  <div class="col-xxl-12">
                    <div class="cta__content-3">
                      <p class="cta__sub-title-2">Have you project in mind?</p>
                      <h2 class="cta__title-2">Let’s make something great together!</h2>
                      <div class="btn_wrapper">
                        <a href="contact.html" class="wc-btn-black btn-hover btn-item"><span></span>Contact <br>with
                          us <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        

          </div>
        </section> -->
                <!-- Workflow area end -->



                <!-- Price area start -->
                <!-- <section class="price__area pt-130 pb-140">
          <div class="container">
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title title-anim">Pricing Table</h2>
                  <h3 class="sec-title title-anim">Be kind to your <br>mind</h3>
                </div>
                <div class="faq__list-3">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Design should enrich our day
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>Our design services starts and ends with a best-in-class experience strategy that builds
                            brands. Through a process of iteration and prototyping design interfaces that bring joy to
                            people</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Bring their individual experience and creative
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>This is the second item's accordion body. It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These
                            classes.</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Human centred design to challenges
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>Our design services starts and ends with a best-in-class experience strategy that builds
                            brands. Through a process of iteration and prototyping design interfaces that bring joy to
                            people</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Design should enrich our day
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>Our design services starts and ends with a best-in-class experience strategy that builds
                            brands. Through a process of iteration and prototyping design interfaces that bring joy to
                            people</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          Developing core web applications
                        </button>
                      </h2>
                      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>Our design services starts and ends with a best-in-class experience strategy that builds
                            brands. Through a process of iteration and prototyping design interfaces that bring joy to
                            people</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="price__table">
                  <div class="price__item animation_from_bottom">
                    <div class="price__icon"><span><i class="fa-solid fa-check"></i></span></div>
                    <div class="price__info">
                      <h2 class="price__type">Yearly</h2>
                      <h3 class="price__title">14 days free</h3>
                      <p>Subscription fee is $129.99 USD and automatically renews each year.</p>
                    </div>
                    <div class="price__amount">
                      <h4 class="best-value">Best Value</h4>
                      <p>$129<span> .99</span></p>
                    </div>
                  </div>

                  <div class="price__item animation_from_top">
                    <div class="price__icon"><span><i class="fa-solid fa-check"></i></span></div>
                    <div class="price__info">
                      <h2 class="price__type">Monthly</h2>
                      <h3 class="price__title">7 days free</h3>
                      <p>Subscription fee is $12.99 USD and automatically renews each year.</p>
                    </div>
                    <div class="price__amount">
                      <p>$12<span> .99</span></p>
                    </div>
                  </div>
                </div>
                <div class="price__btn btn_wrapper">
                  <a href="contact.html" class="wc-btn-black btn-hover btn-item"><span></span> Try it <br>Free Now <i
                      class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </section> -->
                <!-- Price area end -->


                <!-- Blog area start -->
                <!-- <section class="blog__area-3 pb-140 blog__animation">
          <div class="container">
            <div class="row ">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper text-anim pt-130">
                  <h2 class="sec-sub-title">Recent Blog</h2>
                  <h3 class="sec-title title-anim">Read Updated <br>Journal</h3>
                  <p>Read our blog and try to see everything from every perspective. Our passion lies in making
                    everything
                    accessible and aesthetic for everyone. </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6">
                <article class="blog__item-3">
                  <div class="blog__img-wrapper-3">
                    <a href="blog-details.html">
                      <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/3/1.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="assets/imgs/blog/3/1.jpg" alt="BLog Thumbnail">
                      </div>
                    </a>
                  </div>
                  <div class="blog__info-3">
                    <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                    <h5><a href="blog-details.html" class="blog__title-3">How to bring fold to your startup
                        company with
                        Axtra</a></h5>
                    <a href="blog-details.html" class="blog__btn">Read More <span><i
                          class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </article>
              </div>

              <div class="col-xxl-6 col-xl-6 col-lg-6">
                <article class="blog__item-3">
                  <div class="blog__img-wrapper-3">
                    <a href="blog-details.html">
                      <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/3/2.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="assets/imgs/blog/3/2.jpg" alt="BLog Thumbnail">
                      </div>
                    </a>
                  </div>
                  <div class="blog__info-3">
                    <h4 class="blog__meta"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                    <h5><a href="blog-details.html" class="blog__title-3">How to manage a talented and
                        successful design
                        team</a></h5>
                    <a href="blog-details.html" class="blog__btn">Read More <span><i
                          class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </article>
              </div>

            </div>
          </div>
        </section> -->
                <!-- Blog area end -->
                <section class="portfolio__service service-v5 pt-140 pb-140 blog__animation">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                                <h2 class="sec-title animation__char_come">
                                    Our Services

                                </h2>
                            </div>
                            <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                                <div class="sec-text">
                                    <p>Static and dynamic secure code review can prevent a 0day before your product is
                                        even
                                        released. We
                                        can integrate with your dev environment</p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio__service-list">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                    <div class="portfolio__service-item">
                                        <a href="service-details.html">
                                            <h3 class="ps-title">Customer Care</h3>
                                            <ul>
                                                <li>+ WordPress</li>
                                                <li>+ Python</li>
                                                <li>+ PHP &amp; Laravel</li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                    <div class="portfolio__service-item">
                                        <a href="service-details.html">
                                            <h3 class="ps-title">Data Services</h3>
                                            <ul>
                                                <li>+ WordPress</li>
                                                <li>+ Python</li>
                                                <li>+ PHP &amp; Laravel</li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                    <div class="portfolio__service-item">
                                        <a href="service-details.html">
                                            <h3 class="ps-title">Sales Enablement</h3>
                                            <ul>
                                                <li>+ WordPress</li>
                                                <li>+ Python</li>
                                                <li>+ PHP &amp; Laravel</li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xxl-43 col-xl-3 col-lg-3 col-md-3">
                                    <div class="portfolio__service-item">
                                        <a href="service-details.html">
                                            <h3 class="ps-title">Other Services</h3>
                                            <ul>
                                                <li>+ WordPress</li>
                                                <li>+ Python</li>
                                                <li>+ PHP &amp; Laravel</li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <section class="roll__area-2">
                    <div class="swiper roll__slider swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper roll__wrapper">

                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Interaction</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Element</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Digital Solution</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Strategy</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Branding</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Agency</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Interaction</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Digital Solution</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Development</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Studio</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Strategy</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Branding</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Agency</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Typhography</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Design</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Interaction</h2>
                            </div>

                        </div>
                    </div>
                </section>


                <section class="roll__area-3">
                    <div dir="rtl"
                        class="swiper roll__slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl">
                        <div class="swiper-wrapper roll__wrapper">

                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Interaction</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Element</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Digital Solution</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Strategy</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Branding</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Agency</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Interaction</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Digital Solution</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Development</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Studio</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Strategy</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Branding</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Agency</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Typhography</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Design</h2>
                            </div>
                            <div class="swiper-slide roll__slide" data-link="industry_details.html">
                                <h2>Interaction</h2>
                            </div>

                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </section>

            </main>

            <script>
                document.querySelectorAll('.swiper-slide').forEach(function(slide) {
                    slide.addEventListener('click', function() {
                        var targetLink = this.getAttribute('data-link');
                        window.location.href = targetLink;
                    });
                });
            </script>

            <!-- Footer area start -->
            <footer class="footer__area-3">
                <div class="footer__top-3">
                    <div class="footer__top-wrapper-3">
                        <div class="footer__logo-3 pt-120">
                            <img src="logo.png" alt="Footer Logo">
                            <p>When do they work well, and when do they on us and finally, when do we actually need how
                                can we avoid
                                them.</p>
                        </div>
                        <div class="footer__social-3">
                            <ul>
                                <li><a href="#">facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Linkedin</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </div>
                        <div class="footer__contact-3">
                            <a class="end" href="contact.html">Let’s talk</a>
                        </div>
                    </div>
                </div>

                <div class="footer__btm-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                <div class="footer__copyright-3">
                                    <!-- <p>© 2022 - 2025 | Alrights reserved by <a href="https://wealcoder.com/" target="_blank">Wealcoder</a>
                  </p> -->
                                </div>
                            </div>
                            <div class="col-xxl-8 col-xl-8 col-lg-8">
                                <div class="footer__nav-2">
                                    <ul class="footer-menu-2 menu-anim">
                                        <li><a href="about.html">The Ta-ask Story</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="career.html">Career</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer area end -->


        </div>
    </div>



    <!-- All JS files -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/js/chroma.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vanilla-tilt.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>




</html>
