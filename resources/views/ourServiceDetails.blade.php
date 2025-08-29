@extends('app')
@section('title', $ourService->title ?? 'Default Title')
@section('content')



    <!-- Development area start -->
    <section class="development__area">
        <div class="container g-0  pt-130 ">
            <!-- <div class="line-3"></div> -->
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-5 col-md-5 mb-5 text-center">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title animation__char_come">{{ $ourService->title ?? '' }}</h2>
                    </div>
                </div>

                @if (isset($ourService->image))
                    <div class="col-12">
                        <div class="development__img">
                            <img src="{{ asset('service/' . basename($ourService->image)) }}" alt="Development Image"
                                data-speed="auto">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Development area end -->


    <!-- Workflow area start -->
    <section class="workflow__area-6">
        <div class="container g-0  pb-130">

            <div class="workflow__wrapper-6">
                <div class="row g-4">
                    <!-- Service Item -->

                    @forelse($ourService->features as $ourFeatures)
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="service-card  p-4 h-100 shadow rounded">
                                <!-- <h5 class="mb-3 fw-bold ps-title">Data Entry & Management</h5> -->
                                <h3 class="ps-title pb-2">{{ $ourFeatures->title }}</h3>
                                <p>
                                    {{ $ourFeatures->content }}
                                </p>
                            </div>
                        </div>
                    @empty
                    @endforelse





                </div>
            </div>

        </div>
    </section>
    <!-- Workflow area end -->







    <!-- CTA area start -->

    <!-- CTA area end -->


    <style>
        .service-card {

            color: #333;
            border: 1px solid #efefef;
            transition: all 0.35s ease;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
            background: #e63946;
            border-color: transparent;
            color: #fff !important;
        }

        .service-card:hover h3,
        .service-card:hover p {
            color: #fff !important;
        }

        .dark .ps-title {
            color: white;
        }

        .dark p {
            color: white;
        }

        .development__img img {
            height: 100% !important;
            background-size: cover;
            background-position: center;
        }
    </style>
@endsection
