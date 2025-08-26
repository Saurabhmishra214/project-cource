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
                            <div class="subtitle">Our Hustler Campus Shows You How To</div>
                            <h1 class="fs-100 text-uppercase fs-sm-12vw mb-4 lh-1">TURN RAW HUSTLE INTO UNSTOPPABLE SUCCESS</h1>

                            <div class="d-block d-md-flex justify-content-center">
                                <div class="d-flex justify-content-center align-items-center mx-4">
                                    {{-- <i class="fa fa-calendar id-color me-3"></i> --}}
                                    <h4 class="mb-0">It’s time for you to become someone who can make money rain from the sky.</h4>
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

@endsection