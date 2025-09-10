<!DOCTYPE html>
<html lang="en">

<head>
    <title>Real World</title>
    <link rel="icon" href="" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="AIvent" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{asset('assets/css/vendors.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" >
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/video-slider/video-style.css') }}"> --}}
    <!-- color scheme -->
    <link id="colors" href="{{asset('assets/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" >
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

     {{-- <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css?v=5.0')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css?v=5.0')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chivo:wght@400;700;900&amp;family=Noto+Sans:wght@400;500;600;700;800&amp;display=swap"> --}}

    <!-- App css -->
     <link href="{{asset('assets/css/affiliate/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/cards/webinar.css')}}" rel="stylesheet" type="text/css" />
     {{-- <link href="{{asset('assets/css/cards/video_cards.css')}}" rel="stylesheet" type="text/css" /> --}}
     <link href="{{asset('assets/css/affiliate/icons.min.css')}}" rel="stylesheet" type="text/css" />
     {{-- <link href="{{asset('assets/css/wealth_card.css')}}" rel="stylesheet" type="text/css" /> --}}
     <link href="{{asset('assets/css/affiliate/app.min.css')}}" rel="stylesheet" type="text/css" />
     <link href="{{asset('assets/css/affiliate/style.css')}}" rel="stylesheet" type="text/css" />

    <style>
        .myVideoSwiper {
        width: 100%;
        padding: 60px 0;
        overflow: visible; /* ✅ allows side cards to be visible */
        }

        .myVideoSwiper .swiper-slide {
        width: 350px; /* ✅ fixed card width */
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.4s ease;
        }

        .video-card {
        width: 100%;
        height: 220px;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        transition: all 0.4s ease;
        }

        .video-card video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        }

        /* Middle card highlight */
        .myVideoSwiper .swiper-slide-active .video-card {
        transform: scale(1.15);
        box-shadow: 0 12px 35px rgba(0,0,0,0.6);
        opacity: 1;
        z-index: 2;
        }

        /* Side cards */
        .myVideoSwiper .swiper-slide-prev .video-card,
        .myVideoSwiper .swiper-slide-next .video-card {
        transform: scale(0.9);
        opacity: 0.6;
        z-index: 1;
        }

    </style>
    

</head>

<body class="dark-scheme">

    <div id="wrapper">

        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>

        <!-- page preloader begin -->
        {{-- <div id="de-loader"></div> --}}
        <!-- page preloader close -->

        <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="index.html">
                                        <img class="logo-main" src="images/logo.webp" alt="" >
                                        <img class="logo-scroll" src="images/logo.webp" alt="" >
                                        <img class="logo-mobile" src="images/logo.webp" alt="" >
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>

                            <div class="de-flex-col">
                                <div class="de-flex-col header-col-mid">
                                    <ul id="mainmenu">
                                        <li><a class="menu-item active" href="{{route('home')}}">Home</a></li>
                                        {{-- <li><a class="menu-item" href="#section-about">About</a></li>  --}}
                                        <li><a class="menu-item" href="{{route('blog')}}">Blogs</a></li>
                                        <li><a class="menu-item" href="{{route('pricing')}}">Pricing</a></li>
                                        {{-- <li><a class="menu-item" href="#section-why-attend">Why Attend</a></li>
                                        <li><a class="menu-item" href="#section-speakers">Speakers</a></li>
                                        <li><a class="menu-item" href="#section-schedule">Schedule</a></li>
                                        <li><a class="menu-item" href="#section-tickets">Tickets</a></li>
                                        <li><a class="menu-item" href="#section-venue">Venue</a></li>
                                        <li><a class="menu-item" href="#section-faq">FAQ</a></li> --}}
                                        <li><a class="menu-item" href="#">Courses</a>
                                            <ul>
                                                <li><a class="menu-item" href="{{ route('courses.automation') }}">Automation Business</a>
                                                        {{-- <ul>
                                                            <li><a class="menu-item" href="">C1</a></li>
                                                            <li><a class="menu-item" href="">C2</a></li>
                                                        </ul> --}}
                                                </li>
                                                <li><a class="menu-item" href="{{ route('courses.hustlers') }}">Hustlers Campus</a></li>
                                            </ul>
                                        </li>
                                        
                                        
                                     <li>
                                        <a class="menu-item" href="#">Pages</a>
                                        <ul>
                                            @if(Auth::check())
                                                <li>
                                                    @if(Auth::user()->role === 'admin')
                                                        <a class="menu-item" href="{{ route('admin.dashboard') }}">
                                                            Admin Dashboard
                                                        </a>
                                                    @else
                                                        <a class="menu-item" href="{{ route('user.dashboard') }}">
                                                            User Dashboard
                                                        </a>
                                                    @endif
                                                </li>
                                                <li>
                                                    <a class="menu-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            @else
                                                <li><a class="menu-item" href="{{ route('register_form') }}">Register</a></li>
                                                <li><a class="menu-item" href="{{ route('login_form') }}">Login</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="de-flex-col">
                         @if(Auth::check())
                            @if(Auth::user()->role === 'admin')
                                <a class="btn-main fx-slide w-100" href="{{ route('admin.dashboard') }}">
                                    <span>Admin Dashboard</span>
                                </a>
                            @else
                                <a class="btn-main fx-slide w-100" href="{{ route('user.dashboard') }}">
                                    <span>User Dashboard</span>
                                </a>
                            @endif
                        @else
                            <a class="btn-main fx-slide w-100" href="{{ route('login_form') }}">
                                <span>Login</span>
                            </a>
                        @endif

                                                        
                                                        
                                <div class="menu_side_area">
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        @yield('content')

    </div>


        <!-- footer begin -->
    <footer class="section-dark text-light jarallax relative">
            {{-- <div class="gradient-edge-top op-6 h-50 color"></div> --}}
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-12">
                    <div class="d-lg-flex align-items-center justify-content-between text-center">
                        <div>
                            <h3 class="fs-20">Address</h3>
                            121 AI Blvd, San Francisco<br>
                            BCA 94107
                        </div>
                        <div>
                            <img src="images/logo.webp" class="w-150px" alt=""><br>
                            <div class="social-icons mb-sm-30 mt-4">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>

                            </div>

                        </div>
                        <div>
                            <h3 class="fs-20">Contact Us</h3>
                            T. +1 123 456 789<br>
                            M. contact@aivent.com
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        Copyright 2025 - AIvent by Designesia
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    
    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="{{asset('assets/js/designesia.js')}}"></script>
    <script src="{{asset('assets/js/countdown-custom.js')}}"></script>
    <script src="{{asset('assets/js/custom-marquee.js')}}"></script>
    <script>
    var swiper = new Swiper(".myVideoSwiper", {
    slidesPerView: "auto",
    centeredSlides: true,
    spaceBetween: 30,  
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    on: {
        slideChangeTransitionEnd: function () {
        // Pause all videos
        document.querySelectorAll(".video-card video").forEach(v => v.pause());

        // Play only the active one
        let activeVideo = document.querySelector(".swiper-slide-active video");
        if (activeVideo) activeVideo.play();
        }
    }
    });

    // Play first video initially
    let firstVideo = document.querySelector(".swiper-slide-active video");
    if (firstVideo) firstVideo.play();



    </script>

<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>

    {{-- <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="{{asset('assets/js/affiliate/pages/index.init.js')}}"></script>

    <script src="{{asset('assets/libs/fullcalendar/index.global.min.js')}}"></script>
    <script src="{{asset('assets/js/affiliate/pages/calendar.init.js')}}"></script> --}}
    <script src="{{asset('assets/js/affiliate/app.js')}}"></script>
    {{-- <script src="assets/js/affiliate/app.js"></script> --}}
    <script>
        const tobii = new Tobii()
    </script>

</body>

</html>