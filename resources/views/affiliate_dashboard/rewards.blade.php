@extends('affiliate_dashboard.master_layout')
@section('content')

     <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                            <h4 class="page-title">Rewards & Ranks</h4>
                            <div class="">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Mifty</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Rewards</li>
                                </ol>
                            </div>                            
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->
                {{-- <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                        <i class="iconoir-dollar-circle fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate">
                                        <p class="text-dark mb-0 fw-semibold fs-14">Total Revenue</p>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success">8.5%</span>
                                            Increase from last month</p>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                                <div class="row d-flex justify-content-center">
                                    <div class="col">                                        
                                        <h3 class="mt-2 mb-0 fw-bold">$8365.00</h3>
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <img src="assets/images/extra/line-chart.png" alt="" class="img-fluid">
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 bg-info-subtle text-info thumb-md rounded-circle">
                                        <i class="iconoir-cart fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate">
                                        <p class="text-dark mb-0 fw-semibold fs-14">New Order</p>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success">1.7%</span>
                                            Increase from last month</p>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                                <div class="row d-flex justify-content-center">
                                    <div class="col">                                        
                                        <h3 class="mt-2 mb-0 fw-bold">865</h3>
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <img src="assets/images/extra/bar.png" alt="" class="img-fluid">
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 bg-warning-subtle text-warning thumb-md rounded-circle">
                                        <i class="iconoir-percentage-circle fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate">
                                        <p class="text-dark mb-0 fw-semibold fs-14">Sessions</p>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-danger">0.7%</span>
                                            Decrease from last month</p>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                                <div class="row d-flex justify-content-center">
                                    <div class="col">                                        
                                        <h3 class="mt-2 mb-0 fw-bold">155</h3>
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <img src="assets/images/extra/donut.png" alt="" class="img-fluid">
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 bg-danger-subtle text-danger thumb-md rounded-circle">
                                        <i class="iconoir-hexagon-dice fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate">
                                        <p class="text-dark mb-0 fw-semibold fs-14">Avg. Order value</p>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success">2.7%</span>
                                            Increase from last month</p>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                                <div class="row d-flex justify-content-center">
                                    <div class="col">                                        
                                        <h3 class="mt-2 mb-0 fw-bold">$12550.00</h3>
                                    </div>
                                    <!--end col-->
                                    <div class="col align-self-center">
                                        <img src="assets/images/extra/tree.png" alt="" class="img-fluid">
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->                    
                </div>
                <!--end row--> --}}
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Monthly Avg. Income</h4>                      
                                    </div><!--end col-->
                                    <div class="col-auto"> 
                                        <div class="dropdown">
                                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icofont-calendar fs-5 me-1"></i> All Time<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">This Week</a>
                                                <a class="dropdown-item" href="#">This Month</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                            </div>
                                        </div>               
                                    </div><!--end col-->
                                </div>  <!--end row-->                                  
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div id="apex_bar" class="apex-charts"></div>                                
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Customers</h4>                      
                                    </div><!--end col-->
                                    <div class="col-auto">                                    
                                        <div class="img-group d-flex">
                                            <a class="user-avatar position-relative d-inline-block" href="#">
                                                <img src="assets/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                            </a>
                                            <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                <img src="assets/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                            </a>
                                            <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                <img src="assets/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                            </a>
                                            <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                <img src="assets/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                            </a>
                                            <a href="" class="user-avatar position-relative d-inline-block ms-1">
                                                <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+6</span>
                                            </a>                    
                                        </div>                 
                                    </div><!--end col-->
                                </div>  <!--end row-->                                  
                            </div>
                            <div class="card-body pt-0">
                                <div id="customers" class="apex-charts"></div> 
                                <div class="bg-light py-3 px-2 mb-0 mt-3 text-center rounded">                                                                                       
                                    <h6 class="mb-0"><i class="icofont-calendar fs-5 me-1"></i>  01 January 2024 to 31 December 2024</h6>                                                                       
                                </div> 
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div> <!--end col--> 
                </div>
                <!--end row-->

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Top Selling by Country</h4>                      
                                    </div><!--end col-->
                                    <div class="col-auto"> 
                                        <div class="dropdown">
                                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Monthly
                                            </a>
                                            {{-- <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                                <a class="dropdown-item" href="#">This Year</a>
                                            </div> --}}
                                        </div>               
                                    </div><!--end col-->
                                </div>  <!--end row-->                                  
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr class="">                                                        
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/flags/us_flag.jpg" class="me-2 align-self-center thumb-md rounded" alt="profile">
                                                        <div class="flex-grow-1 text-truncate"> 
                                                            <h6 class="m-0 text-truncate">Name</h6>
                                                            {{-- <div class="d-flex align-items-center">
                                                                <div class="progress bg-primary-subtle w-100" style="height:4px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar bg-primary" style="width: 85%"></div>
                                                                </div> 
                                                                <small class="flex-shrink-1 ms-1">85%</small>
                                                            </div>                                                                                     --}}
                                                        </div><!--end media body-->
                                                    </div><!--end media-->
                                                </td>
                                                <td  class="px-0 text-end"><span class="text-body ps-2 align-self-center text-end fw-medium">$5860.00</span></td>  
                                            </tr><!--end tr-->  
                                                 
                                        </tbody>
                                    </table> <!--end table-->                                               
                                </div><!--end /div-->                           
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div> <!--end col--> 
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Top Selling by Country</h4>                      
                                    </div><!--end col-->
                                    <div class="col-auto"> 
                                        <div class="dropdown">
                                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Overall
                                            </a>
                                            {{-- <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                                <a class="dropdown-item" href="#">This Year</a>
                                            </div> --}}
                                        </div>               
                                    </div><!--end col-->
                                </div>  <!--end row-->                                  
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr class="">                                                        
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/flags/us_flag.jpg" class="me-2 align-self-center thumb-md rounded" alt="profile">
                                                        <div class="flex-grow-1 text-truncate"> 
                                                            <h6 class="m-0 text-truncate">Name</h6>
                                                            {{-- <div class="d-flex align-items-center">
                                                                <div class="progress bg-primary-subtle w-100" style="height:4px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar bg-primary" style="width: 85%"></div>
                                                                </div> 
                                                                <small class="flex-shrink-1 ms-1">85%</small>
                                                            </div>                                                                                     --}}
                                                        </div><!--end media body-->
                                                    </div><!--end media-->
                                                </td>
                                                <td  class="px-0 text-end"><span class="text-body ps-2 align-self-center text-end fw-medium">$5860.00</span></td>  
                                            </tr><!--end tr-->  
                                                 
                                        </tbody>
                                    </table> <!--end table-->                                               
                                </div><!--end /div-->                           
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div> <!--end col--> 
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">                      
                                        <h4 class="card-title">Top Selling by Country</h4>                      
                                    </div><!--end col-->
                                    <div class="col-auto"> 
                                        <div class="dropdown">
                                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Weekly
                                            </a>
                                            {{-- <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                                <a class="dropdown-item" href="#">This Year</a>
                                            </div> --}}
                                        </div>               
                                    </div><!--end col-->
                                </div>  <!--end row-->                                  
                            </div><!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr class="">                                                        
                                                <td class="px-0">
                                                    <div class="d-flex align-items-center">
                                                        <img src="assets/images/flags/us_flag.jpg" class="me-2 align-self-center thumb-md rounded" alt="profile">
                                                        <div class="flex-grow-1 text-truncate"> 
                                                            <h6 class="m-0 text-truncate">Name</h6>
                                                            {{-- <div class="d-flex align-items-center">
                                                                <div class="progress bg-primary-subtle w-100" style="height:4px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar bg-primary" style="width: 85%"></div>
                                                                </div> 
                                                                <small class="flex-shrink-1 ms-1">85%</small>
                                                            </div>                                                                                     --}}
                                                        </div><!--end media body-->
                                                    </div><!--end media-->
                                                </td>
                                                <td  class="px-0 text-end"><span class="text-body ps-2 align-self-center text-end fw-medium">$5860.00</span></td>  
                                            </tr><!--end tr-->  
                                                 
                                        </tbody>
                                    </table> <!--end table-->                                               
                                </div><!--end /div-->                           
                            </div><!--end card-body--> 
                        </div><!--end card--> 
                    </div> <!--end col--> 
                             
                </div><!--end row-->
            </div><!-- container -->

            <!--Start Rightbar-->
            <!--Start Rightbar/offcanvas-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                <div class="offcanvas-header border-bottom justify-content-between">
                  <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                  <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">  
                    <h6>Account Settings</h6>
                    <div class="p-2 text-start mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch1">
                            <label class="form-check-label" for="settings-switch1">Auto updates</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                            <label class="form-check-label" for="settings-switch2">Location Permission</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch3">
                            <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->
                    <h6>General Settings</h6>
                    <div class="p-2 text-start mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch4">
                            <label class="form-check-label" for="settings-switch4">Show me Online</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                            <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                        </div><!--end form-switch-->
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="settings-switch6">
                            <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                        </div><!--end form-switch-->
                    </div><!--end /div-->               
                </div><!--end offcanvas-body-->
            </div>
            <!--end Rightbar/offcanvas-->
            <!--end Rightbar-->
            
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

@endsection
