@extends('app')
@section('content')
    <main>

        <!-- Hero area start -->
        <section class="hero__area-3">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="hero__inner-3">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title">
                                    @if (isset($sectionSubTitle->sec_sub_title))
                                        {{ $sectionSubTitle->sec_sub_title }}
                                    @else
                                        The
                                    @endif

                                </h2>
                                <h3 class="sec-title title-left">
                                    @if (isset($sectionTitle->sec_title))
                                        {{ $sectionTitle->sec_title }}
                                    @else
                                        Ta-ask
                                    @endif
                                </h3>
                                <!-- <h3 class="sec-title title-right">Ask</h3> -->
                            </div>
                            @if (isset($content))
                                <div class="hero__text-3">

                                    <h3 class="hero__text-animation">{{ $content->title ?? 'Please Give The Title' }}</h3>
                                    <p class="hero__text-animation">
                                        {{ $content->content ?? 'Please Give The Content' }}
                                    </p>
                                </div>
                                <div class="scroll-down">
                                    <button><img src="assets/imgs/icon/arrow-down-sm.png" alt="arrow icon"></button>
                                </div>
                            @else
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            @if (isset($video->video) && public_path($video->video))
                <div class="wrapper">

                    <div class="video-info">
                        <div class="video-intro">
                            <input id="video_check" type="checkbox">
                            <div class="intro-title">
                                <h4 class="video-title">Watch <span>video intro</span></h4>
                                <h4 class="video-title close-video-title">Close <span>video intro</span></h4>
                            </div>
                            <div class="video">
                                <video src="{{ asset($video->video) }}" loop muted autoplay playsinline></video>
                            </div>

                        </div>
                    </div>
                </div>
            @else
            @endif


            <div class="hero3-img-ani">
                @if (isset($banner->banner) && public_path($banner->banner))
                    <img src="{{ asset($banner->banner) }}" alt="Hero Image" class="hero3-img">
                @endif

            </div>
        </section>




        <section class="info-cards-section">
            <div class="info-cards">
                @forelse($secondSection as $secondSection)
                    <div class="info-card fade_left">
                        <h4>{{ $secondSection->title }}</h4>
                        <p>
                            {{ $secondSection->content }}
                        </p>
                    </div>
                @empty
                @endforelse


            </div>
        </section>





        {{-- <div class="container-fluid mx-auto">
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
        </script> --}}


        <div class="container-fluid vh-100 d-flex align-items-center justify-content-center bg-dark">
            <div class="row w-100">
                <div class="col-12">
                    <div class="global-operations-container ">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 text-section">
                                <div class="content-wrapper">
                                    <p class="subtitle text-uppercase mb-3">WE HAVE</p>
                                    <h1 class="main-title mb-4">Global operations</h1>
                                    <p class="description mb-4">
                                        NEXT Group is a team of 450 people from diverse backgrounds,
                                        operating from 5 different countries, including UAE, Malaysia,
                                        Bangladesh, Sri Lanka & Cyprus.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 image-section">
                                <div class="cycling-container">
                                    <div class="image-wrapper">
                                        <img id="cycling-image" src="/image.png" alt="Country Image"
                                            class="country-image" />
                                        <div class="image-overlay">
                                            <span class="location-prefix">in</span>
                                            <h2 id="cycling-text" class="country-name">Bangladesh</h2>
                                        </div>
                                    </div>
                                    <div class="country-list">
                                        @forelse($globalOperations as $key => $global)
                                            <div class="country-item @if ($key === 0) active @endif"
                                                data-country="{{ $global->country_name }}">
                                                {{ $global->country_name }}
                                            </div>
                                        @empty
                                            <p>No countries available.</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            $(document).ready(function() {
                // Countries to cycle through
                const countries = [
                    @foreach ($globalOperations as $global)
                        "{{ $global->country_name }}",
                    @endforeach
                ];

                // Country images - replace with actual images if available
                const countryImages = {
                    @foreach ($globalOperations as $global)
                        "{{ $global->country_name }}": "{{ asset($global->image) }}",
                    @endforeach
                };

                let currentIndex = 0;
                let cyclingInterval;
                let isManualSelection = false;

                function updateDisplay(index, animate = true) {
                    const country = countries[index];
                    const $image = $("#cycling-image");
                    const $text = $("#cycling-text");
                    const $countryItems = $(".country-item");

                    // Update active state
                    $countryItems.removeClass("active cycling");
                    $countryItems.eq(index).addClass("active");

                    if (animate) {
                        $countryItems.eq(index).addClass("cycling");

                        // Fade out image by adding class
                        $image.addClass("fading-out");

                        // Reset text position before animating
                        $text.css({
                            opacity: 0,
                            transform: "translateY(20px)" // Reset vertical position to avoid overlap
                        });

                        // Animate text fade out and slide down before update
                        $text
                            .stop(true, true)
                            .animate({
                                opacity: 0
                            }, 400, function() {
                                // Change image source & text after fade out
                                $image.attr("src", countryImages[country]);
                                $text.text(country);

                                // Fade in image
                                $image.removeClass("fading-out");

                                // Animate text fade in and slide up using transform for smooth movement
                                $text.css({
                                    opacity: 0,
                                    transform: "translateY(20px)"
                                }).animate({
                                    opacity: 1,
                                    transform: "translateY(0px)" // Reset to original position
                                }, 800, function() {
                                    setTimeout(() => {
                                        $countryItems.eq(index).removeClass("cycling");
                                    }, 800);
                                });
                            });
                    } else {
                        // Immediate update without animation
                        $image.attr("src", countryImages[country]);
                        $text.text(country);
                        $text.css({
                            opacity: 1,
                            transform: "translateY(0)" // Ensure text starts from the top without offset
                        });
                    }
                }

                function startCycling() {
                    cyclingInterval = setInterval(() => {
                        if (!isManualSelection) {
                            currentIndex = (currentIndex + 1) % countries.length;
                            updateDisplay(currentIndex);
                        }
                    }, 3000); // Every 3 seconds
                }

                function stopCycling() {
                    if (cyclingInterval) {
                        clearInterval(cyclingInterval);
                    }
                }

                // Manual selection
                $(".country-item").on("click", function() {
                    const selectedCountry = $(this).data("country");
                    const selectedIndex = countries.indexOf(selectedCountry);

                    if (selectedIndex !== -1) {
                        isManualSelection = true;
                        currentIndex = selectedIndex;
                        updateDisplay(currentIndex);

                        stopCycling();

                        // Resume auto cycling after 5 seconds
                        setTimeout(() => {
                            isManualSelection = false;
                            startCycling();
                        }, 5000);
                    }
                });

                // Hover effects on country items
                $(".country-item")
                    .on("mouseenter", function() {
                        if (!$(this).hasClass("active")) {
                            $(this).css("transform", "translateX(5px)");
                        }
                    })
                    .on("mouseleave", function() {
                        if (!$(this).hasClass("active")) {
                            $(this).css("transform", "translateX(0)");
                        }
                    });

                // Initialize display without animation
                updateDisplay(0, false);

                // Start cycling
                startCycling();

                // Pause cycling when page is hidden
                $(document).on("visibilitychange", function() {
                    if (document.hidden) {
                        stopCycling();
                    } else if (!isManualSelection) {
                        startCycling();
                    }
                });

                // Responsive adjustments (optional)
                $(window).on("resize", function() {
                    const windowWidth = $(window).width();
                    if (windowWidth < 768) {
                        $(".global-operations-container").addClass("mobile-layout");
                    } else {
                        $(".global-operations-container").removeClass("mobile-layout");
                    }
                });
            });
        </script>


        <style>
            .global-operations-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 2rem;
                background-color: #171717;
                border-radius: 20px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            }

            .text-section {
                padding: 2rem;
            }

            .subtitle {
                font-size: 0.9rem;
                font-weight: 600;
                letter-spacing: 2px;
                color: #888;
                margin-bottom: 1rem;
            }

            .main-title {
                font-size: 3.5rem;
                font-weight: 300;
                line-height: 1.1;
                margin-bottom: 2rem;
                color: white;
            }

            .description {
                font-size: 1.1rem;
                line-height: 1.6;
                color: #ccc;
                max-width: 500px;
            }

            .image-section {
                padding: 2rem;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .cycling-container {
                width: 100%;
                max-width: 500px;
            }

            .image-wrapper {
                position: relative;
                width: 100%;
                height: 300px;
                border-radius: 15px;
                overflow: hidden;
                margin-bottom: 2rem;
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
            }

            .country-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: opacity 0.8s ease, transform 0.8s ease;
                opacity: 1;
                transform: scale(1);
            }

            .country-image.fading-out {
                opacity: 0;
                transform: scale(1.1);
            }

            .image-overlay {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
                padding: 2rem;
                color: white;
            }

            .location-prefix {
                font-size: 1.2rem;
                font-weight: 300;
                opacity: 0.8;
                display: block;
                margin-bottom: 0.5rem;
            }

            .country-name {
                font-size: 2.5rem;
                font-weight: 600;
                margin: 0;
            }

            .country-list {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
                width: 100%;
            }

            .country-item {
                padding: 0.8rem 1.2rem;
                background-color: rgba(255, 255, 255, 0.1);
                border-radius: 8px;
                cursor: pointer;
                transition: all 0.3s ease;
                font-weight: 500;
                border: 2px solid transparent;
                backdrop-filter: blur(10px);
                color: #fff;
            }

            .country-item:hover {
                background-color: rgba(255, 255, 255, 0.2);
                transform: translateX(5px);
            }

            .country-item.active {
                background-color: rgba(100, 108, 255, 0.3);
                border-color: #646cff;
                color: #646cff;
                font-weight: 600;
            }

            .country-item.cycling {
                animation: pulse 0.6s ease-in-out;
            }

            @keyframes pulse {

                0%,
                100% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.05);
                }
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .global-operations-container {
                    padding: 1rem;
                    margin: 1rem;
                }

                .main-title {
                    font-size: 2.5rem;
                }

                .text-section,
                .image-section {
                    padding: 1rem;
                }

                .image-wrapper {
                    height: 250px;
                }

                .country-name {
                    font-size: 2rem;
                }

                .country-list {
                    flex-direction: row;
                    overflow-x: auto;
                }

                .country-item {
                    margin-right: 10px;
                }
            }

            @media (max-width: 576px) {
                .main-title {
                    font-size: 2rem;
                }

                .country-name {
                    font-size: 1.5rem;
                }

                .image-wrapper {
                    height: 200px;
                }

                .country-item {
                    font-size: 0.9rem;
                }
            }
        </style>






        <!-- Blog area end -->
        <section class="portfolio__service service-v5 pt-140 pb-140 blog__animation">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                        <h2 class="sec-title animation__char_come">
                            Our Services
                        </h2>
                    </div>

                </div>
                <div class="portfolio__service-list">
                    <div class="row">
                        @forelse($ourServices as $ourService)
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                <div class="portfolio__service-item">
                                    <a href="{{ route('ourServiceDetails', $ourService->title) }}">
                                        <h3 class="ps-title">{{ $ourService->title ?? '' }}</h3>
                                    </a>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

        <section class="roll__area-2">
            <div class="swiper roll__slider swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper roll__wrapper">

                    {{-- <div class="swiper-slide roll__slide" data-link="industry_details.html">
                        <h2>Interaction</h2>
                    </div>
                    <div class="swiper-slide roll__slide" data-link="industry_details.html">
                        <h2>Element</h2>
                    </div> --}}
                    @forelse($brands as $brand)
                        <div class="swiper-slide roll__slide" data-link="industry_details.html">
                            <h2>{{ $brand->brand_name }}</h2>
                        </div>
                    @empty
                    @endforelse


                </div>
            </div>
        </section>


        <section class="roll__area-3">
            <div dir="rtl"
                class="swiper roll__slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-rtl">
                <div class="swiper-wrapper roll__wrapper">
                    @forelse($brands as $brand)
                        <div class="swiper-slide roll__slide" data-link="industry_details.html">
                            <h2>{{ $brand->brand_name }}</h2>
                        </div>
                    @empty
                    @endforelse



                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </section>

    </main>
    <style>
        .dark .hero__text-animation {
            color: #fff;
        }
    </style>
@endsection
