<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>CATFRAMES</title>
        <link rel="icon" type="image/x-icon" href="image/fav.svg">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;700;800;900&display=swap" rel="stylesheet">
        <link href="{{ asset('front/css/swiper.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('front/css/fancybox.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('front/css/aos.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('front/css/style.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>

        
            <div class="logo-section px-lg-5 p-0">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="logo">
                                <a class="d-lg-none d-block" href="{{'/'}}"><img src="{{ asset('public/front/image/mobile-logo.svg')}}" alt="catframes-mobile"></a>
                            </div>
                        </div>
                         <div class="col-6 d-lg-none d-block">
                            <div class="logo d-flex justify-content-end">
                                <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation" href="#"><img src="{{ asset('front/image/burger.svg')}}" alt="catframes"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <header>
        <nav class="navbar navbar-expand-lg px-lg-5 px-2 d-lg-block d-none align-items-center">
  <div class="container-fluid flex-lg-row flex-row-reverse px-lg-0">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand d-block" href="#">
      <a class="d-lg-block d-none" href="{{'/'}}"><img src="{{ asset('front/image/catframes-icon.svg')}}" alt="catframes"></a>
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
        <!-- <li class="nav-item dropdown1">
          <a class="nav-link1 dropdown-toggle1 text-uppercase" href="{{'projects'}}"   aria-expanded="false">
            Projects<img class="ms-2" src="front/image/angle-down.svg">

          </a> -->
          <!-- <ul class="dropdown-menu1 list-unstyled">
            <li><a class="dropdown-item text-uppercase" href="{{'beauty-and-personal-care'}}">Beauty and Personal Care</a></li>
            <li><a class="dropdown-item text-uppercase" href="{{'electronics'}}">Electronics</a></li> -->
             <!--<li><a class="dropdown-item text-uppercase" href="{{'fashion'}}">fashion</a></li>-->
          <!-- </ul>
       
         </li> -->
        <li class="nav-item dropdown1">
          <a class="nav-link1 dropdown-toggle1 text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services<img class="ms-2" src="{{ asset('front/image/angle-down.svg')}}">

          </a>
          <ul class="dropdown-menu1 list-unstyled">
            <li><a class="dropdown-item text-uppercase" href="{{url('photos')}}">Photos</a></li>
            <li><a class="dropdown-item text-uppercase" href="{{url('videos')}}"> Videos</a></li>
            <!-- <li><a class="dropdown-item text-uppercase" href="{{'3d'}}"> 3D</a></li>
            <li><a class="dropdown-item text-uppercase" href="{{'cgi'}}"> CGI</a></li> -->
          </ul>
       
         </li>
         <li class="nav-item">
          <a class="nav-link text-uppercase" aria-current="page" href="{{ url('about_us')}}">About</a>
        </li>
        
<li class="nav-item">
          <a class="nav-link text-uppercase" href="{{ url('contact_us')}}">Contact Us</a>
        </li>
      </ul>

      
   
    </div>
  </div>
</nav>
</header>