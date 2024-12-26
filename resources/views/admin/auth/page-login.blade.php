<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from mophy.dexignzone.com/xhtml/page-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jul 2023 12:04:36 GMT -->
<head>

     <!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="admin, admin dashboard, admin template, analytics, bootstrap, bootstrap 5, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app">
	<meta name="description" content="Looking for a sleek and modern dashboard website template for a payment management system? Our template is perfect for digital payments, transaction history, and more. Elevate your admin dashboard with stunning visuals and user-friendly functionality. Try it out today!">
	<meta property="og:title" content="MOPHY : Payment Admin Dashboard  Bootstrap 5 Template">
	<meta property="og:description" content="Looking for a sleek and modern dashboard website template for a payment management system? Our template is perfect for digital payments, transaction history, and more. Elevate your admin dashboard with stunning visuals and user-friendly functionality. Try it out today!">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>CATFRAMES</title>

	<!-- Favicon icon -->
	<link rel="icon" type="{{ asset('backend/image/png')}}" sizes="16x16" href="images/favicon.png">
	
   <link href="{{ asset('backend/css/style.css')}}" rel="stylesheet">

</head>
<body class="h-100">
    <div class="login-account">
		<div class="row h-100 justify-content-center">
		
			<div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
				<div class="login-form">
					<div class="login-head">
						<h3 class="title">Welcome Back</h3>
					</div>
					<h6 class="login-title"><span>Login</span></h6>
					<form action="{{ route('user-login') }}" method="POST">
						@csrf				
						<div class="mb-4">
							<label class="mb-1 text-black">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Enter Your Email">
							@if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
						</div>
						<div class="mb-4">
							<label class="mb-1 text-black">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Password">
							@if ($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
							@endif
						</div>
						<div class="form-row d-flex justify-content-between mt-4 mb-2">
							<div class="mb-4">
								<a href="{{'forget-password'}}" class="btn-link text-primary">Forgot Password?</a>
							</div>
						</div>
						<div class="text-center mb-4">
							<button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('backend/vendor/global/global.min.js')}}"></script>
		<script src="{{ asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('backend/js/custom.min.js')}}"></script>
    	<script src="{{ asset('backend/js/deznav-init.js')}}"></script>

</body>


<!-- Mirrored from mophy.dexignzone.com/xhtml/page-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jul 2023 12:04:36 GMT -->
</html>