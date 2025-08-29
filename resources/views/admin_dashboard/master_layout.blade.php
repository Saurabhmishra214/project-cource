<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark">

<head>


    <meta charset="utf-8" />

    <title>Dashboard | Mifty - Admin & Dashboard Template</title>


    <title>Affiliate Panel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<!-- Latest Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- FullCalendar -->
<!-- FullCalendar -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

<!-- Core CSS -->
<link href="{{ asset('assets/css/affiliate/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/affiliate/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/affiliate/app.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Extra CSS -->
<link href="{{ asset('assets/css/cards/webinar.css') }}" rel="stylesheet" type="text/css" />

<!-- Vanilla DataTables -->
<link rel="stylesheet" href="{{ asset('assets/libs/vanilla-datatables/vanilla-dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/vanilla-datatables-editable/datatable.editable.min.css') }}">

<!-- Simple DataTables -->
<link href="{{ asset('assets/libs/simple-datatables/style.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <style>
        .nav-link.collapsed .fa-chevron-down {
            transform: rotate(0deg);
            transition: transform 0.3s;
        }

        .nav-link[aria-expanded="true"] .fa-chevron-down {
            transform: rotate(180deg);
        }

        .startbar .startbar-menu .navbar-nav .nav-item .nav-link::after {
    content: "\F134"; /* यह एक बूटस्ट्रैप आइकॉन का कोड है */
    font-family: "bootstrap-icons";
    font-size: 14px;
    margin-left: auto;
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    transition: transform 0.2s;
}

.startbar .startbar-menu .navbar-nav .nav-item .nav-link:not(.collapsed)::after {
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
}
        
.nav-link.collapsed::after {
    display: none !important;  /* Bootstrap ka default arrow/box hat gaya */
    content: none !important;
}

.nav-link {
    padding-right: 0.75rem !important;  /* default Bootstrap arrow ke liye jyada padding hoti hai */
}
.nav-link::after {
    display: none !important; /* arrow/box hat gaya */
}

.nav-link.collapsed::after {
    content: "\f078"; /* Font Awesome down arrow (▼) ya Bootstrap Icon */
    font-family: "Font Awesome 6 Free"; 
    font-weight: 900;
    float: right;
    transition: transform 0.3s ease;
}

/* jab collapse open ho */
.nav-link[aria-expanded="true"]::after {
    transform: rotate(-180deg); /* arrow rotate ho jayega */
}

.nav-link.collapsed::after {
    content: "›";   /* Right arrow */
    float: right;
    font-size: 14px;
    transition: transform 0.3s ease;
}
.nav-link[aria-expanded="true"]::after {
    transform: rotate(90deg); /* right → down */
}

.toggle-arrow {
    transition: transform 0.3s ease;
}
.nav-link[aria-expanded="true"] .toggle-arrow {
    transform: rotate(90deg); /* right → down */
}

.nav-link .dropdown-icon {
  transition: transform 0.3s ease;
}

.nav-link[aria-expanded="true"] .dropdown-icon {
  transform: rotate(90deg);
}



    </style>
</head>

<body class="dark">



    <!-- Top Bar Start -->
    <div class="topbar d-print-none">
        <div class="container-fluid">
            <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">


                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                    <li>
                        <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                            <i class="iconoir-menu"></i>
                        </button>
                    </li>
                    <li class="mx-2 welcome-text">
                        <h5 class="mb-0 fw-semibold text-truncate">Good Morning, James!</h5>
                        <!-- <h6 class="mb-0 fw-normal text-muted text-truncate fs-14">Here's your overview this week.</h6> -->
                    </li>
                </ul>
                <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0"
                                placeholder="Search here...">
                            <button type="submit"><i class="iconoir-search"></i></button>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <img src="{{ asset('assets/images/affiliate/flags/us_flag.jpg') }}" alt=""
                                class="thumb-sm rounded-circle">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img
                                    src="{{ asset('assets/images/affiliate/flags/us_flag.jpg') }}" alt=""
                                    height="15" class="me-2">English</a>
                            <a class="dropdown-item" href="#"><img
                                    src="{{ asset('assets/images/affiliate/flags/spain_flag.jpg') }}" alt=""
                                    height="15" class="me-2">Spanish</a>
                            <a class="dropdown-item" href="#"><img
                                    src="{{ asset('assets/images/affiliate/flags/germany_flag.jpg') }}" alt=""
                                    height="15" class="me-2">German</a>
                            <a class="dropdown-item" href="#"><img
                                    src="{{ asset('assets/images/affiliate/flags/french_flag.jpg') }}" alt=""
                                    height="15" class="me-2">French</a>
                        </div>
                    </li><!--end topbar-language-->

                    <li class="topbar-item">
                    
                    </li>

                    <li class="dropdown topbar-item">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false" data-bs-offset="0,19">
                            <i class="iconoir-bell"></i>
                            <span class="alert-badge"></span>
                        </a>
                        <div class="dropdown-menu stop dropdown-menu-end dropdown-lg py-0">

                            <h5 class="dropdown-item-text m-0 py-3 d-flex justify-content-between align-items-center">
                                Notifications <a href="#" class="badge text-body-tertiary badge-pill">
                                    <i class="iconoir-plus-circle fs-4"></i>
                                </a>
                            </h5>
                            <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified mb-1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-0 active" data-bs-toggle="tab" href="#All"
                                        role="tab" aria-selected="true">
                                        All <span
                                            class="badge bg-primary-subtle text-primary badge-pill ms-1">24</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-0" data-bs-toggle="tab" href="#Projects" role="tab"
                                        aria-selected="false" tabindex="-1">
                                        Projects
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link mx-0" data-bs-toggle="tab" href="#Teams" role="tab"
                                        aria-selected="false" tabindex="-1">
                                        Team
                                    </a>
                                </li>
                            </ul>
                            <div class="ms-0" style="max-height:230px;" data-simplebar>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="All" role="tabpanel"
                                        aria-labelledby="all-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-wolf fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed
                                                    </h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing and
                                                        industry.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">10 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-apple-swift fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Meeting with designers
                                                    </h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">40 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-birthday-cake fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">UX 3 Task complete.</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed
                                                    </h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                    <div class="tab-pane fade" id="Projects" role="tabpanel"
                                        aria-labelledby="projects-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">40 min ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-birthday-cake fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">UX 3 Task complete.</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed
                                                    </h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-user fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                    </div>
                                    <div class="tab-pane fade" id="Teams" role="tabpanel"
                                        aria-labelledby="teams-tab" tabindex="0">
                                        <!-- item-->
                                        <a href="#" class="dropdown-item py-3">
                                            <small class="float-end text-muted ps-2">1 hr ago</small>
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                    <i class="iconoir-drone fs-4"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2 text-truncate">
                                                    <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed
                                                    </h6>
                                                    <small class="text-muted mb-0">It is a long established fact that a
                                                        reader.</small>
                                                </div><!--end media-body-->
                                            </div><!--end media-->
                                        </a><!--end-item-->
                                     
                                    </div>
                                </div>

                            </div>
                            <!-- All-->
                            <a href="pages-notifications.html" class="dropdown-item text-center text-dark fs-13 py-2">
                                View All <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown topbar-item">

                        <a href="{{ route('admin.profile') }}">
                            <img src="{{ asset('assets/images/affiliate/users/avatar-1.jpg') }}" alt=""
                                class="thumb-md rounded-circle">

                        </a>
                      
                    </li>
                </ul><!--end topbar-nav-->
            </nav>
            <!-- end navbar-->
        </div>
    </div>
    </div>

    <!-- Top Bar End -->
    <!-- leftbar-tab-menu -->
    <div class="startbar d-print-none">
        <!--start brand-->
        <div class="brand">
            <a href="index.html" class="logo">
                <span>
                    <img src="{{ asset('assets/images/affiliate/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span class="">
                    <img src="{{ asset('assets/images/affiliate/logo-light.png') }}" alt="logo-large"
                        class="logo-lg logo-light">
                    <img src="{{ asset('assets/images/affiliate/logo-dark.png') }}" alt="logo-large"
                        class="logo-lg logo-dark">
                </span>
            </a>
        </div>
      
      <div class="startbar-menu">
  <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
    <div class="d-flex align-items-start flex-column w-100">

      <!-- Navigation -->
      <ul class="navbar-nav mb-auto w-100">
        <li class="menu-label mt-2">
          <span>Navigation</span>
        </li>

        <!-- Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="iconoir-report-columns menu-icon"></i>
            <span>Dashboard</span>
            <span class="badge text-bg-warning ms-auto">08</span>
          </a>
        </li><!--end nav-item-->

        <!-- Automation Courses -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex justify-content-between align-items-center"
             href="#sidebarCourses" data-bs-toggle="collapse" role="button" aria-expanded="false">
            <div class="d-flex align-items-center">
              <i class="iconoir-light-bulb-on menu-icon"></i>
              <span class="ms-2">Automation Courses</span>
            </div>
            <i class="bi bi-chevron-right dropdown-icon"></i>
          </a>
          <div class="collapse" id="sidebarCourses">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="{{route('courses.add')}}" class="nav-link">Add Courses</a></li>
              <li class="nav-item"><a href="{{route('courses.list')}}" class="nav-link">List Courses</a></li>
            </ul>
          </div>
        </li><!--end nav-item-->

        <!-- Business Trainings -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex justify-content-between align-items-center"
             href="#sidebarTrainings" data-bs-toggle="collapse" role="button" aria-expanded="false">
            <div class="d-flex align-items-center">
              <i class="iconoir-community menu-icon"></i>
              <span class="ms-2">Business Trainings</span>
            </div>
            <i class="bi bi-chevron-right dropdown-icon"></i>
          </a>
          <div class="collapse" id="sidebarTrainings">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="{{route('businesstrainings.create')}}" class="nav-link">Add Trainings</a></li>
              <li class="nav-item"><a href="{{route('businesstrainings.list')}}" class="nav-link">List Trainings</a></li>
            </ul>
          </div>
        </li><!--end nav-item-->

        <!-- Digital Products -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex justify-content-between align-items-center"
             href="#" data-bs-toggle="collapse" role="button" aria-expanded="false">
            <div class="d-flex align-items-center">
              <i class="iconoir-light-bulb-on menu-icon"></i>
              <span class="ms-2">Digital Products</span>
            </div>
            <i class="bi bi-chevron-right dropdown-icon"></i>
          </a>
          <div class="collapse" id="sidebarCourses">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="{{route('digitalproduct.add')}}" class="nav-link">Add Products</a></li>
              {{-- <li class="nav-item"><a href="{{route('products.list')}}" class="nav-link">List Products</a></li> --}}
            </ul>
          </div>
        </li><!--end nav-item-->

        <!-- Software Assets -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex justify-content-between align-items-center"
             href="#sidebarCourses" data-bs-toggle="collapse" role="button" aria-expanded="false">
            <div class="d-flex align-items-center">
              <i class="iconoir-light-bulb-on menu-icon"></i>
              <span class="ms-2">Software Assets</span>
            </div>
            <i class="bi bi-chevron-right dropdown-icon"></i>
          </a>
          <div class="collapse" id="sidebarCourses">
            <ul class="nav flex-column">
              {{-- <li class="nav-item"><a href="{{route('software.add')}}" class="nav-link">Add Softwares</a></li>
              <li class="nav-item"><a href="{{route('software.list')}}" class="nav-link">List Softwares</a></li> --}}
            </ul>
          </div>
        </li><!--end nav-item-->

        <!-- Freelancing Arena -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex justify-content-between align-items-center"
             href="#sidebarFreelancing" data-bs-toggle="collapse" role="button" aria-expanded="false">
            <div class="d-flex align-items-center">
              <i class="iconoir-calendar menu-icon"></i>
              <span class="ms-2">Freelancing Arena</span>
            </div>
            <i class="bi bi-chevron-right dropdown-icon"></i>
          </a>
          <div class="collapse" id="sidebarFreelancing">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="{{route('freelancing.create')}}" class="nav-link">Add Jobs</a></li>
              <li class="nav-item"><a href="{{route('freelancing.index')}}" class="nav-link">List Jobs</a></li>
            </ul>
          </div>
        </li><!--end nav-item-->

        <!-- Blogs Arena -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex justify-content-between align-items-center"
             href="#sidebarBlogs" data-bs-toggle="collapse" role="button" aria-expanded="false">
            <div class="d-flex align-items-center">
              <i class="iconoir-paste-clipboard menu-icon"></i>
              <span class="ms-2">Blogs Arena</span>
            </div>
            <i class="bi bi-chevron-right dropdown-icon"></i>
          </a>
          <div class="collapse" id="sidebarBlogs">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="{{route('blogs.create')}}" class="nav-link">Add Blogs</a></li>
              <li class="nav-item"><a href="{{route('blogs.index')}}" class="nav-link">List Blogs</a></li>
            </ul>
          </div>
        </li><!--end nav-item-->

        <!-- Affiliate Trainings -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex justify-content-between align-items-center"
             href="#sidebarAffiliateTrainings" data-bs-toggle="collapse" role="button" aria-expanded="false">
            <div class="d-flex align-items-center">
              <i class="iconoir-cube-hole menu-icon"></i>
              <span class="ms-2">Affiliate Trainings</span>
            </div>
            <i class="bi bi-chevron-right dropdown-icon"></i>
          </a>
          <div class="collapse" id="sidebarAffiliateTrainings">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="{{route('affiliatetrainings.add')}}" class="nav-link">Add Trainings</a></li>
              <li class="nav-item"><a href="{{route('affiliatetrainings.list')}}" class="nav-link">List Trainings</a></li>
            </ul>
          </div>
        </li><!--end nav-item-->

        <!-- Live Webinar -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex justify-content-between align-items-center"
             href="#sidebarWebinar" data-bs-toggle="collapse" role="button" aria-expanded="false">
            <div class="d-flex align-items-center">
              <i class="iconoir-video-camera menu-icon"></i>
              <span class="ms-2">Live Webinar</span>
            </div>
            <i class="bi bi-chevron-right dropdown-icon"></i>
          </a>
          <div class="collapse" id="sidebarWebinar">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="{{route('livewebinar.create')}}" class="nav-link">Add Webinars</a></li>
              <li class="nav-item"><a href="{{route('livewebinar.index')}}" class="nav-link">List Webinars</a></li>
            </ul>
          </div>
        </li><!--end nav-item-->

        <!-- Rewards & Ranks -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex justify-content-between align-items-center"
             href="#sidebarRewards" data-bs-toggle="collapse" role="button" aria-expanded="false">
            <div class="d-flex align-items-center">
              <i class="iconoir-trophy menu-icon"></i>
              <span class="ms-2">View Rewards & Ranks</span>
            </div>
            <i class="bi bi-chevron-right dropdown-icon"></i>
          </a>
          <div class="collapse" id="sidebarRewards">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="analytics-customers.html" class="nav-link">View</a></li>
            </ul>
          </div>
        </li><!--end nav-item-->

        <!-- Roles & Permissions -->
        <li class="nav-item">
          <a class="nav-link collapsed d-flex justify-content-between align-items-center"
             href="#sidebarRoles" data-bs-toggle="collapse" role="button" aria-expanded="false">
            <div class="d-flex align-items-center">
              <i class="iconoir-fingerprint-lock-circle menu-icon"></i>
              <span class="ms-2">Roles & Permissions</span>
            </div>
            <i class="bi bi-chevron-right dropdown-icon"></i>
          </a>
          <div class="collapse" id="sidebarRoles">
            <ul class="nav flex-column">
              <li class="nav-item"><a href="analytics-customers.html" class="nav-link">Add Role</a></li>
              <li class="nav-item"><a href="analytics-reports.html" class="nav-link">Provide Permission</a></li>
            </ul>
          </div>
        </li><!--end nav-item-->

      </ul>
    </div>
  </div>
</div>


                </div>
            </div><!--end startbar-collapse-->
        </div><!--end startbar-menu-->
    </div><!--end startbar-->
    <div class="startbar-overlay d-print-none"></div>
    <!-- end leftbar-tab-menu-->

    @yield('content')

<!-- Core JS -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

<!-- ApexCharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
<script src="{{ asset('assets/js/affiliate/pages/index.init.js') }}"></script>

<!-- FullCalendar -->
<script src="{{ asset('assets/libs/fullcalendar/index.global.min.js') }}"></script>
<script src="{{ asset('assets/js/affiliate/pages/calendar.init.js') }}"></script>

<!-- Vanilla DataTables -->
<script src="{{ asset('assets/libs/vanilla-datatables/vanilla-dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/vanilla-datatables-editable/datatable.editable.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/editable.init.js') }}"></script>

<!-- Simple DataTables -->
<script src="{{ asset('assets/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/js/pages/datatable.init.js') }}"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Affiliate App -->
<script src="{{ asset('assets/js/affiliate/app.js') }}"></script>

<!-- Main App -->
<script src="{{ asset('assets/js/app.js') }}"></script>




</body>

</html>
