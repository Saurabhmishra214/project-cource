@extends('frontend.master_layout')
@section('content')

<section id="section-hero" class="section-dark no-top no-bottom text-light jarallax relative mh-800" data-video-src="mp4:video/1.mp4">
            <div class="gradient-edge-top op-6 h-50 color"></div>
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
            <div class="abs abs-centered z-2 w-80">
                <div class="container wow scaleIn" data-wow-duration="3s">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="subtitle">THE REAL WORLD BLOG</div>
                            <h1 class="fs-120 text-uppercase fs-sm-12vw mb-4 lh-1">THE REAL WORLD BLOG</h1>

                            <div class="d-block d-md-flex justify-content-center">
                                <div class="d-flex justify-content-center align-items-center mx-4">
                                    {{-- <i class="fa fa-calendar id-color me-3"></i> --}}
                                    <h4 class="mb-0">Learn about all the new features and updates inside and outside “The Real World”</h4>
                                </div>

                                <div class="d-flex justify-content-center align-items-center mx-4">
                                    {{-- <i class="fa fa-location-pin id-color me-3"></i> --}}
                                    {{-- <h4 class="mb-0">San Francisco, CA</h4> --}}
                                </div>
                            </div>

                            <div class="spacer-single"></div>

                            <a class="btn-main mx-2 fx-slide" href="#section-tickets"><span>Join Now</span></a>
                            {{-- <a class="btn-main btn-line mx-2 fx-slide" href="#section-schedule"><span>View Schedule</span></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-why-attend" class="section-dark text-light jarallax relative">
            <div class="gradient-edge-top op-6 h-50 color"></div>
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="subtitle wow fadeInUp mb-3">Discover</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">What You’ll Gain</h2>
                        {{-- <p class="lead mb-0 wow fadeInUp">Hear from global AI pioneers, industry disruptors, and bold thinkers shaping the future across every domain.</p> --}}
                    </div>
                </div>

                <div class="spacer-single"></div>

                {{-- old blog card --}}
                {{-- <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="hover">
                            <div class="bg-dark-2 relative rounded-1 overflow-hidden hover-bg-color hover-text-light wow scale-in-mask ">
                                <div class="abs p-40 bottom-0 z-2">
                                    <div class="relative wow fadeInUp">
                                        <h4>Cutting-Edge Knowledge</h4>
                                        <p class="mb-0">Stay ahead of the curve with insights from AI leaders shaping tomorrow’s technology.</p>
                                    </div>
                                </div>
                                {{-- <div class="gradient-edge-bottom h-100"></div> --}}
                             {{--   <img src="{{asset('assets/frontend/images/misc/s3.webp')}}" class="w-100 hover-scale-1-1" alt="">
                                <div class="abs w-100 h-100 start-0 top-0 hover-op-1 radial-gradient-color"></div>
                            </div>
                        </div>
                    </div>

                </div> --}}

                <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <img src="assets/images/extra/card/img-1.jpg" alt="" class="img-fluid rounded"/>
                                        <div class="mt-3">
                                            <span class="badge bg-purple-subtle text-purple px-2 py-1 fw-semibold ">Finance</span> |   
                                            <p class="mb-0 text-muted fs-12 d-inline-block">15 Sep 2024</p>
                                        </div> 
                                        <a href="" class="d-block fs-22 fw-semibold text-body my-2 text-truncate">How does cancer grow and spread?</a>
                                        <p class="text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="" class="thumb-md rounded-circle">
                                                </div>                                      
                                                <div class="flex-grow-1 ms-2 text-truncate text-start">
                                                    <h6 class="m-0 text-dark">Billy Pearson</h6>
                                                    <p class="mb-0 text-muted">by <a href="">admin</a></p>
                                                </div><!--end media-body-->
                                            </div>                                             
                                            <div class="align-self-center">
                                                <a href="#" class="btn btn-sm btn-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card-->               
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <img src="assets/images/extra/card/img-2.jpg" alt="" class="img-fluid rounded"/>
                                        <div class="mt-3 ">
                                            <span class="badge bg-purple-subtle text-purple px-2 py-1 fw-semibold ">Food</span> |   
                                            <p class="mb-0 text-muted fs-12 d-inline-block">31 Dec 2023</p>
                                        </div> 
                                        <a href="" class="d-block fs-22 fw-semibold text-body my-2 text-truncate">Where does psoriasis usually start?</a>
                                        <p class="text-muted">The standard chunk of Lorem Ipsum used since the reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-9.jpg" alt="" class="thumb-md rounded-circle">
                                                </div>                                      
                                                <div class="flex-grow-1 ms-2 text-truncate text-start">
                                                    <h6 class="m-0 text-dark">Harry Simpson</h6>
                                                    <p class="mb-0 text-muted">by <a href="">admin</a></p>
                                                </div><!--end media-body-->
                                            </div>                                             
                                            <div class="align-self-center">
                                                <a href="#" class="btn btn-sm btn-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card-->               
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <img src="assets/images/extra/card/img-3.jpg" alt="" class="img-fluid rounded"/>
                                        <div class="mt-3 ">
                                            <span class="badge bg-purple-subtle text-purple px-2 py-1 fw-semibold ">Health</span> |   
                                            <p class="mb-0 text-muted fs-12 d-inline-block">18 Oct 2024</p>
                                        </div> 
                                        <a href="" class="d-block fs-22 fw-semibold text-body my-2 text-truncate">What Can Yoga Do for Migraine Relief?</a>
                                        <p class="text-muted">When an unknown printer took a galley of type and scrambled generator on the Internet it to make a type specimen book. </p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="thumb-md rounded-circle">
                                                </div>                                      
                                                <div class="flex-grow-1 ms-2 text-truncate text-start">
                                                    <h6 class="m-0 text-dark">Larry Wells</h6>
                                                    <p class="mb-0 text-muted">by <a href="">admin</a></p>
                                                </div><!--end media-body-->
                                            </div>                                             
                                            <div class="align-self-center">
                                                <a href="#" class="btn btn-sm btn-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card-->               
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="assets/images/extra/card/img-4.jpg" alt="" class="img-fluid rounded"/>
                                        <div class="mt-3 ">
                                            <span class="badge bg-purple-subtle text-purple px-2 py-1 fw-semibold ">Nature</span> |   
                                            <p class="mb-0 text-muted fs-12 d-inline-block">12 Feb 2024</p>
                                        </div> 
                                        <a href="" class="d-block fs-22 fw-semibold text-body my-3 text-truncate">How Long Do Migraine Attacks Last? What to Expect</a>
                                        <p class="text-muted">It is a long established fact that a reader will be  distracted by the readable content of a page when looking at its layout.</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="thumb-md rounded-circle">
                                                </div>                                      
                                                <div class="flex-grow-1 ms-2 text-truncate text-start">
                                                    <h6 class="m-0 text-dark">Steven Warner</h6>
                                                    <p class="mb-0 text-muted">by <a href="">admin</a></p>
                                                </div><!--end media-body-->
                                            </div>                                             
                                            <div class="align-self-center">
                                                <a href="#" class="btn btn-sm btn-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card-->               
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="assets/images/extra/card/img-5.jpg" alt="" class="img-fluid rounded"/>
                                        <div class="mt-3 ">
                                            <span class="badge bg-purple-subtle text-purple px-2 py-1 fw-semibold ">Economic</span> |   
                                            <p class="mb-0 text-muted fs-12 d-inline-block">26 jun 2024</p>
                                        </div> 
                                        <a href="" class="d-block fs-22 fw-semibold text-body my-3 text-truncate">Your 5-Minute Read on Beating Stress</a>
                                        <p class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="thumb-md rounded-circle">
                                                </div>                                      
                                                <div class="flex-grow-1 ms-2 text-truncate text-start">
                                                    <h6 class="m-0 text-dark">Morgan Smith</h6>
                                                    <p class="mb-0 text-muted">by <a href="">admin</a></p>
                                                </div><!--end media-body-->
                                            </div>                                             
                                            <div class="align-self-center">
                                                <a href="#" class="btn btn-sm btn-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card-->               
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="assets/images/extra/card/img-6.jpg" alt="" class="img-fluid rounded"/>
                                        <div class="mt-3 ">
                                            <span class="badge bg-purple-subtle text-purple px-2 py-1 fw-semibold ">Fashion</span> |   
                                            <p class="mb-0 text-muted fs-12 d-inline-block">01 Aug 2024</p>
                                        </div> 
                                        <a href="" class="d-block fs-22 fw-semibold text-body my-3 text-truncate">World Oral Health Day 2023</a>
                                        <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority web page editors now have suffered</p>
                                        <hr class="hr-dashed">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="thumb-md rounded-circle">
                                                </div>                                      
                                                <div class="flex-grow-1 ms-2 text-truncate text-start">
                                                    <h6 class="m-0 text-dark">Cecil Herbert</h6>
                                                    <p class="mb-0 text-muted">by <a href="">admin</a></p>
                                                </div><!--end media-body-->
                                            </div>                                             
                                            <div class="align-self-center">
                                                <a href="#" class="btn btn-sm btn-primary">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>                                        
                                    </div><!--end blog-card-->               
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                                                      
                    </div><!--end row-->

            </div>
        </section>
    
@endsection