<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('adminbackend') }}/assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="{{ asset('adminbackend') }}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{ asset('adminbackend') }}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('adminbackend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('adminbackend') }}/assets/css/app.css" rel="stylesheet">
	<link href="{{ asset('adminbackend') }}/assets/css/icons.css" rel="stylesheet">
	<title> Admin Forget Password</title>
</head>

<body class="bg-forgot">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card forgot-box">
				<div class="card-body">
					<div class="p-4 rounded  border">
						<div class="text-center">
							<img src="{{ asset('adminbackend') }}/assets/images/icons/forgot-2.png" width="120" alt="" />
						</div>
						<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
						<p class="text-muted">Enter your registered email ID to reset the password</p>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="my-4">
                                <label class="form-label">Email ID</label>
                                <input type="text" class="form-control form-control-lg" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>

                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-primary btn-lg">Send</button>
                                <a href="/admin/login" class="btn btn-light btn-lg">
                                    <i class='bx bx-arrow-back me-1'></i>Back to Login</a>
                            </div>
                        </form>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>
