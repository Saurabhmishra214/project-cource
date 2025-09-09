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

    {{-- <div class="page-wrapper">

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
                        @foreach($plans as $plan)
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body bg-soft-blue text-center rounded-top">
                                    <i class="icofont-bird-wings d-inline-block mt-2 mb-3 display-4 text-blue"></i>                                    
                                </div><!--end card-body--> 
                                <div class="card-body mt-n52">
                                    <div class="text-center">
                                        <div class="py-2 px-3 shadow-sm d-inline-block rounded-pill card-bg">
                                            <h1 class="d-inline-block fw-bold mb-0">&#8377; {{ number_format($plan->amount, 2) }} </h1>
                                            <small class="font-12 text-muted">{{ $plan->mode }}</small>
                                        </div>   
                                        <h6 class="pt-3 pb-2 m-0 fs-18 fw-medium">{{ $plan->plantname }}</h6>
                                        <ul class="list-unstyled pricing-content text-center pt-2 border-0 mb-3">
                                            @if($plan->features && $plan->features->count() > 0)
                                            @foreach($plan->features as $feature)
                                                <li>{{ $feature->feature }}</li>
                                            @endforeach
                                            @endif
                                        </ul> 
                                        <hr class="hr-dashed">   
                                                                             
                                        <a href="#" class="btn btn-dark py-2 px-3 mt-2"><span>Know More</span></a>
                                    </div><!--end pricing Table-->              
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->
                        @endforeach                                       
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
        </div> --}}
        <!-- end page-wrapper -->

        <section id="section-hero" class="section-dark no-top no-bottom text-light jarallax relative mh-500 jarallax">
            <img src="{{asset('assets/images/frontend/background/7.webp')}}" class="jarallax-img" alt="">
            <div class="gradient-edge-bottom h-50"></div>
            <div class="sw-overlay op-5"></div>
            <div class="abs w-80 bottom-10 z-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-between gx-5">
                        <div class="col-lg-6">
                            <div class="relative wow mask-right">
                                <div class="text-start">
                                    <h1 class="fs-96 text-uppercase fs-sm-10vw mb-0 lh-1">Packages</h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 wow fadeInRight" data-wow-delay=".3s">
                            <p class="mb-0">Join thought leaders, developers, researchers, and founders as we explore how artificial intelligence is reshaping industries, creativity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-tickets" class="bg-dark section-dark text-light pt-80 relative" aria-label="section">
            <div class="container relative z-2">
                <div class="row gy-4 gx-5 justify-content-center">
                    <div class="col-lg-10">
                        <div class="row g-4">
                            <!-- ticket item begin -->
                            @foreach($plans as $plan)
                            <div class="col-md-6">
                                <div class="relative overflow-hidden h-100 border-white-op-3 rounded-1 bg-blur">
                                    <div class="gradient-edge-bottom color op-5"></div>
                                    <div class="p-40 pb-80 z-2">
                                        <div class="text-center">
                                            <h2 class="fs-40 mb-0">{{$plan->plantname}}</h2>
                                            <h3 class="id-color mb-4">&#8377; {{$plan->amount}}</h3>
                                            <h4>Benefits:</h4>
                                        </div>

                                        <div class="border-white-bottom-op-2 mb-4"></div>

                                        <ul class="ul-check mb-4">
                                            @if($plan->features && $plan->features->count())
                                                @foreach($plan->features as $feature)
                                                    <li>{{ $feature->feature }}</li>
                                                @endforeach
                                            @else
                                                <li>No features available</li>
                                            @endif
                                        </ul>
                                        <div class="text-center">
                                        <h4>Description:</h4>
                                        </div>
                                        <div class="border-white-bottom-op-2 mb-4"></div>
                                        <p class="text-align-justify">{{$plan->description}}</p>
                                    </div>
                                    <div class="abs abs-center p-40 pb-30 bottom-0 z-2 w-100 text-center">
                                        <div class="de-number">
                                            <a href="" class="btn btn-warning">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            @endforeach
                            <!-- ticket item end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection