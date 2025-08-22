<!DOCTYPE html>
<html lang="en" class="h-100">




<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Title -->
    <title>Gymove - CodeIgniter Fitness Admin Dashboard Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">

    <meta name="keywords"
        content="admin, admin dashboard, admin template, bootstrap, bootstrap 5, bootstrap 5 admin template, fitness, fitness admin, modern, responsive admin dashboard, codeigniter dashboard, sass, ui kit, web app">
    <meta name="description"
        content="Discover Gymove, the ultimate fitness solution that is designed to help you achieve a healthier lifestyle with its cutting-edge features and personalized programs. Gymove is a fully mobile-responsive admin dashboard template that provides the perfect blend of exercise, nutrition, and motivation. Begin your fitness journey today with Gymove and visit DexignZone for more information.">

    <meta property="og:title" content="Gymove  - CodeIgniter Fitness Admin Dashboard Template">
    <meta property="og:description"
        content="Discover Gymove, the ultimate fitness solution that is designed to help you achieve a healthier lifestyle with its cutting-edge features and personalized programs. Gymove is a fully mobile-responsive admin dashboard template that provides the perfect blend of exercise, nutrition, and motivation. Begin your fitness journey today with Gymove and visit DexignZone for more information.">
    <meta property="og:image" content="../social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/public/assets/images/favicon.png') }}">
    <link href="{{ asset('admin/public/assets/vendor/bootstrap-select/css/bootstrap-select.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('admin/public/assets/css/style.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img
                                                src="https://niloyrahman.top/Agency-3/Testing-2/logo.png" alt=""
                                                class="img-fluid" style="width:50%;"></a>
                                    </div>
                                    <h4 class="text-center mb-4">Admin</h4>
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            @if ($errors->has('email'))
                                                <div class="alert alert-danger alert-dismissible fade show mt-2">
                                                    <svg viewBox="0 0 24 24" width="24" height="24"
                                                        stroke="currentColor" stroke-width="2" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                                        <polygon
                                                            points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                        </polygon>
                                                        <line x1="15" y1="9" x2="9"
                                                            y2="15"></line>
                                                        <line x1="9" y1="9" x2="15"
                                                            y2="15"></line>
                                                    </svg>
                                                    <strong>Error!</strong> {{ $errors->first('email') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <label class="mb-1 form-label"> Email</label>
                                            <input type="email" class="form-control" name="email" value=""
                                                required>
                                        </div>
                                        <div class="mb-4 position-relative">
                                            <label class="mb-1 form-label">Password</label>
                                            <input type="password" id="dz-password" name="password" class="form-control"
                                                required>
                                            <span class="show-pass eye">

                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>

                                            </span>
                                            @if ($errors->has('password'))
                                                <div class="alert alert-danger alert-dismissible fade show mt-2">
                                                    <svg viewBox="0 0 24 24" width="24" height="24"
                                                        stroke="currentColor" stroke-width="2" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                                        <polygon
                                                            points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                        </polygon>
                                                        <line x1="15" y1="9" x2="9"
                                                            y2="15"></line>
                                                        <line x1="9" y1="9" x2="15"
                                                            y2="15"></line>
                                                    </svg>
                                                    <strong>Error!</strong> {{ $errors->first('password') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">

                                            <div class="form-group">
                                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary light btn-block">Sign Me
                                                In</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
 Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin/public/assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/public/assets/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/public/assets/js/deznav-init.js') }}"></script>
    <script src="{{ asset('admin/public/assets/js/custom.min.js') }}"></script>
</body>



</html>
