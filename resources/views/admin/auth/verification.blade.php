<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from mophy.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jul 2023 12:03:28 GMT -->

<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="keywords"
        content="admin, admin dashboard, admin template, analytics, bootstrap, bootstrap 5, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app">
    <meta name="description"
        content="Looking for a sleek and modern dashboard website template for a payment management system? Our template is perfect for digital payments, transaction history, and more. Elevate your admin dashboard with stunning visuals and user-friendly functionality. Try it out today!">
    <meta property="og:title" content="MOPHY : Payment Admin Dashboard  Bootstrap 5 Template">
    <meta property="og:description"
        content="Looking for a sleek and modern dashboard website template for a payment management system? Our template is perfect for digital payments, transaction history, and more. Elevate your admin dashboard with stunning visuals and user-friendly functionality. Try it out today!">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>CATFRAMES</title>

    <!-- Favicon icon -->
    <link rel="icon" type="{{ asset('image/png') }}" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="login-account">
        <div class="row h-100">
            <div class="col-lg-6 align-self-start">
                <div class="account-info-area"
                    style="background-image: url(images/Business-Continuity-Consulting-and-Management.gif)">
                    {{-- <div class="login-content">
						<p class="sub-title">Log in to your admin dashboard with your credentials</p>
						<h1 class="title">The Evolution of <span>Mophy</span></h1>
						<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
					</div> --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
                <div class="login-form">
                    <div class="login-head">
                        <h3 class="title">Verification</h3>
                    </div>
                    <p id="message_error" style="color:red;"></p>
                    <p id="message_success" style="color:green;"></p>
                    <form method="get" action="{{ route('verifiedOtp')}}" >
                        @csrf
                        <div class="mb-4">
                            <label class="mb-1 text-black">OTP</label>
                            <input type="hidden" name="email" value="{{ $email }}">
                            <input type="number" name="otp" class="form-control" placeholder="OTP">
                        </div>
                        <div class="text-center mb-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                        </div>

                        <button class="btn btn-primary" id="resendOtpVerification">Resend OTP</button>
                        <p class="time"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script>
            $('#resendOtpVerification').click(function() {
                $(this).text('Wait...');
                var userMail = @json($email);

                $.ajax({
                    url: "{{ route('resendOtp') }}",
                    type: "GET",
                    data: {
                        email: userMail
                    },
                    success: function(res) {
                        $('#resendOtpVerification').text('Resend Verification OTP');
                        if (res.success) {
                            timer();
                            $('#message_success').text(res.msg);
                            setTimeout(() => {
                                $('#message_success').text('');
                            }, 3000);
                        } else {
                            $('#message_error').text(res.msg);
                            setTimeout(() => {
                                $('#message_error').text('');
                            }, 3000);
                        }
                    }
                });

            });
        function timer() {
            var seconds = 30;
            var minutes = 1;

            var timer = setInterval(() => {

                if (minutes < 0) {
                    $('.time').text('');
                    clearInterval(timer);
                } else {
                    let tempMinutes = minutes.toString().length > 1 ? minutes : '0' + minutes;
                    let tempSeconds = seconds.toString().length > 1 ? seconds : '0' + seconds;

                    $('.time').text(tempMinutes + ':' + tempSeconds);
                }

                if (seconds <= 0) {
                    minutes--;
                    seconds = 59;
                }

                seconds--;

            }, 1000);
        }

        timer();
    </script>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>

</body>


<!-- Mirrored from mophy.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jul 2023 12:03:28 GMT -->

</html>
