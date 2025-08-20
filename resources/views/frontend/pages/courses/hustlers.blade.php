@extends('frontend.master_layout')
@section('content')
<style>
    *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
    }
    section{
        position: relative;
        width: 100%;
        height: 100vh;
    }
    section video{
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    section .navigation{
        position: absolute;
        padding: 1px;
        bottom: 5%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 100;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px;
        width: 150px;
    }

    section .navigation li{
        list-style: none;
        cursor: pointer;
        border-radius: 4px;
        margin: 1px;
        border: 1px solid #fff;
        opacity: 0.7;
    }

    section .navigation li img{
        transition: 0.5s;
    }
    section .navigation li img:hover{
        height: 150px;
        width: 200px;
        border: 2px solid #fff;
    }
</style>
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

        <section class="section-dark no-top no-bottom text-light jarallax relative mh-800" data-video-src="mp4:video/1.mp4">
            <div class="gradient-edge-top op-6 h-50 color"></div>
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
		<video id="slider" autoplay muted loop>
			<source src="video/video1.mp4" type="video/mp4">
		</video>
		<ul class="navigation">
			<li onclick="videoselector('{{ asset('assets/video/video1.mp4') }}')"><img src="{{ asset('assets/images/frontend/video1.png') }}" height="100px" width="150px"></li>
			<li onclick="videoselector('{{ asset('assets/video/video2.mp4') }}')"><img src="{{ asset('assets/images/frontend/video2.png') }}" height="100px" width="150px"></li>
			<li onclick="videoselector('{{ asset('assets/video/video3.mp4') }}')"><img src="{{ asset('assets/images/frontend/video3.png') }}" height="100px" width="150px"></li>
			<li onclick="videoselector('{{ asset('assets/video/video4.mp4') }}')"><img src="{{ asset('assets/images/frontend/video4.png') }}" height="100px" width="150px"></li>
		</ul>
	</section>

    <script type="text/javascript">
		function videoselector (videoLink) {
			document.getElementById('slider').src=videoLink;
		}
	</script>

@endsection