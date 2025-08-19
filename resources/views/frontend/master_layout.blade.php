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
    <!-- color scheme -->
    <link id="colors" href="{{asset('assets/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" >
     {{-- <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css?v=5.0')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css?v=5.0')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chivo:wght@400;700;900&amp;family=Noto+Sans:wght@400;500;600;700;800&amp;display=swap"> --}}
  
    

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
                                        <li><a class="menu-item" href="#section-about">About</a></li>
                                        <li><a class="menu-item" href="{{route('blog')}}">Blogs</a></li>
                                        {{-- <li><a class="menu-item" href="#section-why-attend">Why Attend</a></li>
                                        <li><a class="menu-item" href="#section-speakers">Speakers</a></li>
                                        <li><a class="menu-item" href="#section-schedule">Schedule</a></li>
                                        <li><a class="menu-item" href="#section-tickets">Tickets</a></li>
                                        <li><a class="menu-item" href="#section-venue">Venue</a></li>
                                        <li><a class="menu-item" href="#section-faq">FAQ</a></li> --}}
                                        <li><a class="menu-item" href="news.html">Pages</a>
                                            <ul>
                                                <li><a class="menu-item" href="{{route('register_form')}}">Register</a></li>
                                                <li><a class="menu-item" href="{{route('login_form')}}">Login</a></li>
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="de-flex-col">
                                <a class="btn-main fx-slide w-100" href="{{route('login_form')}}"><span>Login</span></a>

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
    <footer class="text-light section-dark">
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

</body>

</html>