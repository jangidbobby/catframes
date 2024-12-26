<footer class="b-dark mt-5 pt-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <div class="widget">
                            <h5>Services</h5>
                            <ul class="list-unstyled">
                                <li><a href="{{ 'photos' }}">Photos</a></li>
                                <li><a href="{{ 'videos' }}">Videos</a></li>
                                <!--<li><a href="{{ '3d' }}">3D</a></li>-->
                                <!--<li><a href="{{ 'cgi' }}">CGI</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="widget">
                            <h5>About </h5>
                            <ul class="list-unstyled">
                                <li><a href="{{ 'about_us' }}">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget-social">
                    <h5>Contact</h5>
                    <ul class="list-unstyled d-flex">
                        <li><a href="https://www.instagram.com/talesbycatframes" target="_blank"><img
                                    src="front/image/insta.svg"></a></li>
                        <li><a href="https://www.linkedin.com/company/catframes-studios/about/" target="_blank"><img
                                    src="front/image/linkedin.svg"></a></li>
                    </ul>
                    <div class="contact-info d-flex flex-column text-white">
                        <span><a href="tel:9152258075"><img class="me-2" src="front/image/call.svg"
                                    alt="">9152258075</a></span>
                        <span><a href="mailto:contact@catframes.in"><img class="me-2" src="front/image/email.svg"
                                    alt="">contact@catframes.in</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-lg-5 pt-4">
            <div class="col-lg-12 text-center copyright text-white py-3 border-top">
                <span>Copyright © 2023 Catframes. All Rights Reserved.</span>
            </div>
        </div>
    </div>
</footer>
<div class="offcanvas offcanvas-end b-dark text-white" data-bs-backdrop="static" tabindex="-1" id="offcanvasDarkNavbar"
    aria-labelledby="offcanvasDarkNavbarLabel">
    <div class="offcanvas-header">
        <div class="logo">
            <a class="" href="#"><img src="{{ asset('public/front/image/mobile-logo-white.svg') }}"
                    alt="catframes-mobile"></a>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex justify-content-between" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Services<img src="{{ asset('public/front/image/angle-down-white.svg')}} alt="">
                </a>
                <ul class="dropdown-menu dropdown-menu-dark position-relative menu-relative">
                    <li><a class="dropdown-item" href="{{ url('photos') }}">Photos</a></li>
                    <li><a class="dropdown-item" href="{{ url('videos') }}">Videos</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('about_us') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('contact_us') }}">Contact Us</a>
            </li>

        </ul>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('front/js/bootstrap.bundle.js') }}" type="text/javascript"></script>
<!-- <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
<script src="{{ asset('front/js/swiper.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/fancybox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/aos.js') }}" type="text/javascript"></script>
<script>
    AOS.init();
</script>
</body>

</html>
