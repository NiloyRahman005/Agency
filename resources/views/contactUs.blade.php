@extends('app')
@section('title')


    <!-- Contact area end -->
@section('content')
    @push('head')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css" />
    @endpush

    <section class="contact__area-6">
        {{-- <h2>Enter Your Phone Number</h2>
        <form id="phoneForm">
            <label for="phone">Phone Number:</label><br>
            <input id="phone" type="tel" required>
            <div id="country-name"></div>
            <button type="submit">Submit</button>
        </form> --}}



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
                                    <input type="text" name="full_name" placeholder="Full Name *" required>
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
                                {{-- <div class="col-12 mb-2">

                                    <input id="phone" type="tel" required class="form-control w-100">
                                    <div id="country-name"></div>
                                </div> --}}
                                <div class="row g-3">
                                    <div class="col-12 mb-5">
                                        <input id="phone" type="tel" class="form-control w-100" name="phone"
                                            required>
                                        <input type="hidden" id="country_name" name="country_code">
                                        <div id="country-name" class="mt-3"></div>
                                        <div id="phone-error" style="color:red; font-size:14px; display:none;"></div>

                                        @error('phone')
                                            <div class="invalid-feedback" style="display:block">{{ $message }}</div>
                                        @enderror
                                    </div>
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

        .iti {
            width: 100%;
        }
    </style>
    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
        <script>
            const input = document.querySelector("#phone");
            const errorDiv = document.getElementById("phone-error");

            // intl-tel-input
            const iti = window.intlTelInput(input, {
                initialCountry: "bd",
                preferredCountries: ["bd", "in", "us", "gb"],
                separateDialCode: true,
                autoPlaceholder: "polite",
                formatOnDisplay: true,
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
            });

            function updateCountry() {
                const data = iti.getSelectedCountryData();
                document.getElementById("country-name").textContent = "Selected Country: " + data.name;
                document.getElementById("country_name").value = data.name;
            }
            input.addEventListener("countrychange", updateCountry);
            updateCountry();

            // Phone Validation Function
            function validatePhone() {
                const value = input.value.trim();
                const cleaned = value.replace(/-/g, ""); // remove dashes

                // Rule 1 & 2: only numbers and "-"
                if (!/^[0-9-]+$/.test(value)) {
                    errorDiv.textContent = "Phone can only contain digits and '-'";
                    errorDiv.style.display = "block";
                    return false;
                }

                // Rule 3: digits length between 8 and 15
                if (cleaned.length < 8 || cleaned.length > 15) {
                    errorDiv.textContent = "Phone must be between 8 and 15 digits.";
                    errorDiv.style.display = "block";
                    return false;
                }

                // Valid
                errorDiv.style.display = "none";
                return true;
            }

            // Live validation while typing
            input.addEventListener("input", validatePhone);

            // Final validation before form submit
            document.querySelector("form").addEventListener("submit", function(e) {
                if (!validatePhone()) {
                    e.preventDefault();
                }
            });
        </script>
    @endpush
@endsection
