@extends('frontend.master_layout')
@section('content')

<style>
    .page-wrapper {
    margin-left: -250px; /* default for desktop (when sidebar is visible) */
    transition: margin-left 0.3s ease;
}

/* Tablet and below */
@media (max-width: 991px) {
    .page-wrapper {
        margin-left: 0; /* reset on smaller screens */
    }
}

/* Mobile */
@media (max-width: 575px) {
    .page-wrapper {
        margin-left: 0;
        padding: 0 10px; /* optional: some spacing inside */
    }
}

</style>

    <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                                <h1 class=" ">Pick your plan. Unlock your potential.</h1>                             
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->                   
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-soft-blue text-center rounded-top">
                                    <i class="icofont-bird-wings d-inline-block mt-2 mb-3 display-4 text-blue"></i>                                    
                                </div><!--end card-body--> 
                                <div class="card-body mt-n52">
                                    <div class="text-center">
                                        <div class="py-2 px-3 shadow-sm d-inline-block rounded-pill card-bg">
                                            <h1 class="d-inline-block fw-bold mb-0">$39.00</h1>
                                            <small class="font-12 text-muted">/month</small>
                                        </div>   
                                        <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Basic plan</h6>
                                        <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                            <li>30GB Disk Space</li>
                                            <li>30 Email Accounts</li>
                                            <li>30GB Monthly Bandwidth</li>
                                            <li>06 Subdomains</li>
                                            <li>10 Domains</li>
                                        </ul> 
                                        <hr class="hr-dashed">   
                                                                             
                                        <a href="#" class="btn btn-dark py-2 px-3 mt-2"><span>Get Started</span></a>
                                    </div><!--end pricing Table-->              
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-soft-pink text-center rounded-top">
                                    <i class="icofont-woman-bird d-inline-block mt-2 mb-3 display-4 text-pink"></i>                                    
                                </div><!--end card-body--> 
                                <div class="card-body mt-n52">
                                    <div class="text-center">
                                        <div class="py-2 px-3 shadow-sm d-inline-block rounded-pill card-bg">
                                            <h1 class="d-inline-block fw-bold mb-0">$49.00</h1>
                                            <small class="font-12 text-muted">/month</small>
                                        </div>   
                                        <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Premium Plan</h6>
                                        <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                            <li>30GB Disk Space</li>
                                            <li>30 Email Accounts</li>
                                            <li>30GB Monthly Bandwidth</li>
                                            <li>06 Subdomains</li>
                                            <li>10 Domains</li>
                                        </ul> 
                                        <hr class="hr-dashed">   
                                                                             
                                        <a href="#" class="btn btn-dark py-2 px-3 mt-2"><span>Get Started</span></a>
                                    </div><!--end pricing Table-->              
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-soft-success text-center rounded-top">
                                    <i class="icofont-elk d-inline-block mt-2 mb-3 display-4 text-success"></i>                                    
                                </div><!--end card-body--> 
                                <div class="card-body mt-n52">
                                    <div class="text-center">
                                        <div class="py-2 px-3 shadow-sm d-inline-block rounded-pill card-bg">
                                            <h1 class="d-inline-block fw-bold mb-0">$69.00</h1>
                                            <small class="font-12 text-muted">/month</small>
                                        </div>   
                                        <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Plus Plan</h6>
                                        <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                            <li>30GB Disk Space</li>
                                            <li>30 Email Accounts</li>
                                            <li>30GB Monthly Bandwidth</li>
                                            <li>06 Subdomains</li>
                                            <li>10 Domains</li>
                                        </ul> 
                                        <hr class="hr-dashed">   
                                                                             
                                        <a href="#" class="btn btn-dark py-2 px-3 mt-2"><span>Get Started</span></a>
                                    </div><!--end pricing Table-->              
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-soft-warning text-center rounded-top">
                                    <i class="icofont-fire-burn d-inline-block mt-2 mb-3 display-4 text-warning"></i>                                    
                                </div><!--end card-body--> 
                                <div class="card-body mt-n52">
                                    <div class="text-center">
                                        <div class="py-2 px-3 shadow-sm d-inline-block rounded-pill card-bg">
                                            <h1 class="d-inline-block fw-bold mb-0">$199.00</h1>
                                            <small class="font-12 text-muted">/month</small>
                                        </div>   
                                        <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">Master Plan</h6>
                                        <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                            <li>30GB Disk Space</li>
                                            <li>30 Email Accounts</li>
                                            <li>30GB Monthly Bandwidth</li>
                                            <li>06 Subdomains</li>
                                            <li>10 Domains</li>
                                        </ul> 
                                        <hr class="hr-dashed">   
                                                                             
                                        <a href="#" class="btn btn-dark py-2 px-3 mt-2"><span>Get Started</span></a>
                                    </div><!--end pricing Table-->              
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