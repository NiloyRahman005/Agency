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
@endsection
