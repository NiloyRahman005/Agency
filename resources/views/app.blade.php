<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Axtra HTML5 Template">

    <!-- Primary Meta Tags -->
    <title>{{ $seo['title'] ?? '' }} @yield('title')</title>
    <meta name="title" content="{{ $seo['title'] ?? '' }}">
    <meta name="description" content="{{ $seo['description'] ?? '' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? '' }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $seo['url'] ?? url()->current() }}">
    <meta property="og:title" content="{{ $seo['title'] ?? '' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
    <meta property="og:image" content="{{ $seo['image'] ?? asset('assets/imgs/logo/favicon.png') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $seo['url'] ?? url()->current() }}">
    <meta name="twitter:title" content="{{ $seo['title'] ?? '' }}">
    <meta name="twitter:description" content="{{ $seo['description'] ?? '' }}">
    <meta name="twitter:image" content="{{ $seo['image'] ?? asset('assets/imgs/logo/favicon.png') }}">

    <link rel="canonical" href="{{ $seo['url'] ?? url()->current() }}">

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
    <?php
    $logo = App\Models\Logo::first();
    
    $logoPath = public_path($logo->logo); // full system path
    
    $ourServices = App\Models\OurServices::all();
    
    $linkLists = App\Models\socialLink::all();
    
    ?>
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

                <a href="{{ url('/') }}" class="logo-dark">
                    @if ($logo && $logo->logo && file_exists($logoPath))
                        <img src="{{ asset($logo->logo) }}" alt="Site Logo" class="responsive-logo">
                    @else
                        <span class="text-danger">Logo not found</span>
                    @endif
                </a>

                <a href="{{ url('/') }}" class="logo-light">
                    @if ($logo && $logo->logo && file_exists($logoPath))
                        <img src="{{ asset($logo->logo) }}" alt="Site Logo" class="responsive-logo">
                    @else
                        <span class="text-danger">Logo not found</span>
                    @endif
                </a>
            </div>

            <div class="header__nav-2">
                <ul class="main-menu-3 menu-anim">
                    <li class="has-megamenu"><a href="{{ route('index') }}">home</a></li>
                    <li><a href="#">Services</a>
                        <ul class="main-dropdown">
                            @forelse($ourServices as $ourService)
                                <li><a
                                        href="{{ route('ourServiceDetails', $ourService->title) }}">{{ $ourService->title ?? '' }}</a>
                                </li>
                            @empty
                            @endforelse




                        </ul>
                    </li>
                    <li class="has-megamenu"><a href="{{ route('Ta-ask-Story') }}">Ta-ask Story</a></li>
                    <li class="has-megamenu"><a href="{{ route('blog') }}">Blog</a></li>

                    <li class="has-megamenu"><a href="{{ route('contactUs') }}">Contact Us</a></li>



                </ul>
            </div>
            <div class="header__nav-icon-3">
                <button class="search-icon" id="search_icon"><i class="fa-solid fa-magnifying-glass"></i></button>
                <button class="search-icon" id="search_close"><i class="fa-solid fa-xmark"></i></button>
                <button id="open_offcanvas"><img src="{{ asset('assets/imgs/icon/menu-black.png') }}"
                        alt="Menubar Icon"></button>
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

                    <a href="index.html">
                        @if ($logo && $logo->logo && file_exists($logoPath))
                            {{-- <img src="{{ asset($logo->logo) }}" alt="Site Logo" class="responsive-logo"> --}}
                            <img src="{{ asset($logo->logo) }}" alt="Offcanvas Logo">
                        @else
                        @endif
                    </a>
                </div>
                <div class="offcanvas__social">
                    <h3 class="social-title">Follow Us</h3>
                    <ul>
                        @forelse($linkLists as $linkedListsss)
                            <li><a href="{{ $linkedListsss->link }}">{{ $linkedListsss->name }}</a></li>
                        @empty
                        @endforelse

                    </ul>
                </div>

            </div>
            <div class="offcanvas__mid">
                <div class="offcanvas__menu-wrapper">
                    <nav class="offcanvas__menu">
                        <ul class="menu-anim">
                            <li><a href="{{ url('/') }}">home</a>

                            </li>
                            <li>
                                <a>Services</a>
                                <ul>
                                    @forelse($ourServices as $ourService)
                                        <li><a
                                                href="{{ route('ourServiceDetails', $ourService->title) }}">{{ $ourService->title ?? '' }}</a>
                                        </li>
                                    @empty
                                    @endforelse

                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('Ta-ask-Story') }}">Ta-Ask Story</a>

                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Blog</a>

                            </li>
                            <li>
                                <a href="{{ route('contactUs') }}">Contact Us</a>

                            </li>



                        </ul>
                    </nav>
                </div>
            </div>
            <div class="offcanvas__right">
                {{-- <div class="offcanvas__search">
                    <form action="#">
                        <input type="text" name="search" placeholder="Search keyword">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div> --}}
                {{-- <div class="offcanvas__contact">
                    <h3>Get in touch</h3>
                    <ul>
                        <li><a href="tel:02094980547">+(02) - 094 980 547</a></li>
                        <li><a href="mailto:info@extradesign.com">info@extradesign.com</a></li>
                        <li>230 Norman Street New York, QC (USA) H8R 1A1</li>
                    </ul>
                </div> --}}
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
            @yield('content')

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
                            @if ($logo && $logo->logo && file_exists($logoPath))
                                <img src="{{ asset($logo->logo) }}" alt="Footer Logo">
                            @endif

                            {{-- <p>When do they work well, and when do they on us and finally, when do we actually need how
                                can we avoid
                                them.</p> --}}
                        </div>
                        <div class="footer__social-3">
                            <ul>
                                @forelse($linkLists as $linkLists)
                                    <li><a href="{{ $linkLists->link }}">{{ $linkLists->name }}</a></li>
                                @empty
                                @endforelse


                            </ul>
                        </div>
                        <div class="footer__contact-3">
                            <a class="end" href="{{ route('contactUs') }}">Let’s talk</a>
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
                                        <li><a href="{{ route('Ta-ask-Story') }}">The Ta-ask Story</a></li>
                                        <li><a href="{{ route('contactUs') }}">contact</a></li>
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
