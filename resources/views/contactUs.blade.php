@extends('app')
@section('title')

    <!-- Contact area end -->
@section('content')

    <section class="contact__area-6">

        <div class="container g-0 line pt-120 pb-110">
            @if (session('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <span class="line-3"></span>
            <div class="row">

                <div class="col-12 mx-auto">

                    <div class="sec-title-wrapper">
                        <h2 class="sec-title-2 animation__char_come text-center">Let’s get in touch</h2>
                    </div>
                </div>

            </div>
            <div class="row contact__btm">
                {{-- <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="contact__info">
                        <h3 class="sub-title-anim-top animation__word_come">Don't be afraid man ! <br>say hello</h3>
                        <ul>
                            <li><a href="tel:+(2)578365379">+(2) 578 - 365 - 379</a></li>
                            <li><a href="mailto:hello@example.com">hello@example.com</a></li>
                            <li><span>230 Norman Street New York, <br> QC (USA) H8R 1A1</span></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 mx-auto ">
                    <div class="contact__form">
                        <form action="{{ route('contactUsPost') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-xxl-6 col-xl-6 col-12">
                                    <input type="text" name="name" placeholder="Name *" required>
                                    @error('name')
                                        <div class="invalid-feedback" style="display:block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-12">
                                    <input type="email" name="email" placeholder="Email *" required>
                                    @error('email')
                                        <div class="invalid-feedback" style="display:block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <textarea name="message" placeholder="Messages *"></textarea>
                                    @error('message')
                                        <div class="invalid-feedback" style="display:block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="btn_wrapper">
                                        <button class="wc-btn-primary btn-hover btn-item"><span></span> Send <br>Messages <i
                                                class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .line::after {
            display: none !important;
        }
    </style>
@endsection
