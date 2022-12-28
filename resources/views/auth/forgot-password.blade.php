{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--	<!-- Required meta tags -->--}}
{{--	<meta charset="utf-8">--}}
{{--	<meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--	<!--favicon-->--}}
{{--	<link rel="icon" href="{{ asset('adminbackend') }}/assets/images/favicon-32x32.png" type="image/png" />--}}
{{--	<!-- loader-->--}}
{{--	<link href="{{ asset('adminbackend') }}/assets/css/pace.min.css" rel="stylesheet" />--}}
{{--	<script src="{{ asset('adminbackend') }}/assets/js/pace.min.js"></script>--}}
{{--	<!-- Bootstrap CSS -->--}}
{{--	<link href="{{ asset('adminbackend') }}/assets/css/bootstrap.min.css" rel="stylesheet">--}}
{{--	<link href="{{ asset('adminbackend') }}/assets/css/app.css" rel="stylesheet">--}}
{{--	<link href="{{ asset('adminbackend') }}/assets/css/icons.css" rel="stylesheet">--}}
{{--	<title> Admin Forget Password</title>--}}
{{--</head>--}}

{{--<body class="bg-forgot">--}}
{{--	<!-- wrapper -->--}}
{{--	<div class="wrapper">--}}
{{--		<div class="authentication-forgot d-flex align-items-center justify-content-center">--}}
{{--			<div class="card forgot-box">--}}
{{--				<div class="card-body">--}}
{{--					<div class="p-4 rounded  border">--}}
{{--						<div class="text-center">--}}
{{--							<img src="{{ asset('adminbackend') }}/assets/images/icons/forgot-2.png" width="120" alt="" />--}}
{{--						</div>--}}
{{--						<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>--}}
{{--						<p class="text-muted">Enter your registered email ID to reset the password</p>--}}

{{--                        <form method="POST" action="{{ route('password.email') }}">--}}
{{--                            @csrf--}}
{{--                            <div class="my-4">--}}
{{--                                <label class="form-label">Email ID</label>--}}
{{--                                <input type="text" class="form-control form-control-lg" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--                            </div>--}}

{{--                            <div class="d-grid gap-2">--}}
{{--                                <button type="button" class="btn btn-primary btn-lg">Send</button>--}}
{{--                                <a href="/admin/login" class="btn btn-light btn-lg">--}}
{{--                                    <i class='bx bx-arrow-back me-1'></i>Back to Login</a>--}}
{{--                            </div>--}}
{{--                        </form>--}}

{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}
{{--	<!-- end wrapper -->--}}
{{--</body>--}}

{{--</html>--}}


    <!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register - Easy Shop Online Store </title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css?v=5.3') }}" />
</head>

<body>

<!-- Quick view -->
@include('frontend.body.header')
<!--End header-->

<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span>  My Account
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-12 m-auto">
                    <div class="row">
                        <div class="heading_s1">
                            <img class="border-radius-15" src="{{ asset('frontend/assets/imgs/page/reset_password.svg') }}" alt="" />
                            <h2 class="mb-15 mt-15">Email Password Reset</h2>
                            <p class="mb-30">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <div class="login_wrap widget-taber-content background-white">
                                <div class="padding_eight_all bg-white">

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" id="email" required="" name="email" placeholder="Email *" />
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-heading btn-block hover-up" name="login">Email Password Reset Link</button>
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
</main>

@include('frontend.body.footer')
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center">
                <img src="{{ asset('frontend/assets/imgs/theme/loading.gif') }}" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- Vendor JS-->
<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{ asset('frontend/assets/js/main.js?v=5.3') }}"></script>
<script src="{{ asset('frontend/assets/js/shop.js?v=5.3') }}"></script>
</body>

</html>
