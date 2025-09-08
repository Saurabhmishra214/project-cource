@extends('affiliate_dashboard.master_layout')
@section('content')
    
    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                            <h4 class="page-title">Earnings Dashboard</h4>
                                                
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                        <i class="iconoir-dollar-circle fs-4"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate">
                                        <p class="text-dark mb-0 fw-semibold fs-14">All Time</p>
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
                                        <p class="text-dark mb-0 fw-semibold fs-14">All time paid</p>
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
                                        <p class="text-dark mb-0 fw-semibold fs-14">Last 30 days </p>
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
                                        <p class="text-dark mb-0 fw-semibold fs-14">Last 7 days</p>
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
          
                <!--end row-->

            
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
            <!--Start Footer-->
            
            <footer class="footer text-center text-sm-start d-print-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-0 rounded-bottom-0">
                                <div class="card-body">
                                    <p class="text-muted mb-0">
                                        ©
                                        <script> document.write(new Date().getFullYear()) </script>
                                        Mifty
                                        <span
                                            class="text-muted d-none d-sm-inline-block float-end">
                                            Design with
                                            <i class="iconoir-heart-solid text-danger align-middle"></i>
                                            by Mannatthemes</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

@endsection