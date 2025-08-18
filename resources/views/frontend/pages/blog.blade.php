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

                <div class="row g-4">
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
                                <img src="{{asset('assets/frontend/images/misc/s3.webp')}}" class="w-100 hover-scale-1-1" alt="">
                                <div class="abs w-100 h-100 start-0 top-0 hover-op-1 radial-gradient-color"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    
@endsection