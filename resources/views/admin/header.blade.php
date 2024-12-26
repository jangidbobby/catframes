<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from mophy.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jul 2023 12:02:55 GMT -->

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
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('backend/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/vendor/chartist/css/chartist.min.css') }}">
    <!-- Vectormap -->
    <link href="{{ asset('backend/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

    <!-- Datatable -->
    <link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    {{-- <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> --}}
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{'dashbaord'}}" class="brand-logo">
                {{-- <img class="logo-abbr" src="front/image/catframes.svg" alt=""> --}}
                <img class="logo-compact" src="front/image/catframes.svg" alt="">
                <img class="brand-title" src="front/image/catframes.svg" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button"
                                    data-bs-toggle="dropdown">
                                    <div class="header-info">
                                        <span
                                            class="text-black">Hello,<strong>{{ session()->get('name') }}</strong></span>
                                        {{-- <p class="fs-12 mb-0">Super Admin</p> --}}
                                    </div>
                                    <img src="{{ asset('public/front/image/catframes.svg')}}" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    {{-- <a href="{{'profile'}}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a> --}}
                                    <a href="{{ url('signout') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
         <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="{{url('dashbaord')}}" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-regular fa-gear fw-bold"></i>
                            <span class="nav-text">Banner</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ 'add_banner' }}">Add Banner</a></li>
                            <li><a href="{{ 'manage_banner' }}">Manage Banner</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Service</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('add_category')}}">Add Categories</a></li>
                            <li><a href="{{ url('manage_category')}}">Manage Categories</a></li>
                            <li><a href="{{url('add_image')}}">Add image</a></li>
                            <li><a href="{{url('manage_image')}}">Manage image</a></li>
                            <li><a href="{{url('add_video')}}">Add video</a></li>
                            <li><a href="{{url('manage_video')}}">Manage video</a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Service</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{url('add_photo')}}">Add photo</a></li>
                        <li><a href="{{url('manage_photo')}}">Manage photo</a></li>
                        <li><a href="{{url('add_3d')}}">Add 3d</a></li>
                        <li><a href="{{url('manage_3d')}}">Manage 3d</a></li>
                        <li><a href="{{url('add_cgi')}}">Add CGI</a></li>
                        <li><a href="{{url('manage_cgi')}}">Manage CGI</a></li>
                    </ul>
                </li> -->
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa-regular fa-gear fw-bold"></i>
                    <span class="nav-text">What we are</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('add_what_we_are') }}">Add What We Are </a></li>
                    <li><a href="{{ url('manage_what_we_are') }}">Manage What We Are</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="fa-regular fa-gear fw-bold"></i>
                <span class="nav-text">Our work </span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ url('add_our_work') }}">Add Our Work & Blogs </a></li>
                <li><a href="{{ url('manage_our_work') }}">Manage Our Work & Blogs</a></li>
            </ul>
        </li>
        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
            <i class="fa-regular fa-gear fw-bold"></i>
            <span class="nav-text">Our clients</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{ url('add_clinets') }}">Add Our Clients </a></li>
            <li><a href="{{ url('manage_our_clients') }}">Manage Our Clients</a></li>
        </ul>
    </li>
                </ul>



            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" style="min-height:auto !importent; ">
