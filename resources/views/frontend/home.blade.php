@extends('frontend.master_layout')
@section('content')
<style>
    .video-card-horizontal {
    display: -ms-grid;
    display: grid;
    /* overflow: hidden; */
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-auto-columns: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    -ms-grid-columns: 0.65fr 1fr;
    grid-template-columns: 0.65fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
    border-radius: 10px;
    background-color: #e8edf4;
    -webkit-transition: box-shadow 250ms ease-in-out, -webkit-transform 250ms ease-in-out;
    transition: box-shadow 250ms ease-in-out, -webkit-transform 250ms ease-in-out;
    transition: box-shadow 250ms ease-in-out, transform 250ms ease-in-out;
    transition: box-shadow 250ms ease-in-out, transform 250ms ease-in-out, -webkit-transform 250ms ease-in-out;
    color: #666a70;
    text-decoration: none;
    cursor: pointer;
        }

    .video-card-horizontal:hover {
    box-shadow: 0 10px 20px -10px rgba(29, 16, 67, 0.25);
    -webkit-transform: translate(0px, -3px);
    -ms-transform: translate(0px, -3px);
    transform: translate(0px, -3px);
    color: #666a70;
    } .video-card {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    border-radius: 10px;
    background-color: #e8edf4;
    -webkit-transition: box-shadow 150ms ease-in, -webkit-transform 150ms ease-in;
    transition: box-shadow 150ms ease-in, -webkit-transform 150ms ease-in;
    transition: box-shadow 150ms ease-in, transform 150ms ease-in;
    transition: box-shadow 150ms ease-in, transform 150ms ease-in, -webkit-transform 150ms ease-in;
    text-decoration: none;
    cursor: pointer;
    }

    .video-card:hover {
    box-shadow: 0 5px 12px -9px rgba(0, 0, 0, 0.6);
    -webkit-transform: translate(0px, -12px);
    -ms-transform: translate(0px, -12px);
    transform: translate(0px, -12px);
    }

    .video-card-image-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    /* overflow: hidden; */
    height: auto;         
    aspect-ratio: 16/9; 
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    border-bottom: 6px solid #6937ff;
    border-radius: 10px 10px 0px 0px;
    background-image: url("/assets/images/frontend/misc/c1.webp");
    background-position: 50% 50%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    -o-object-fit: cover;
    object-fit: cover;
    }

    .video-card-content {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    min-height: 200px;
    padding: 36px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    }.video-card-image-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding: 36px;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-align-self: stretch;
    -ms-flex-item-align: stretch;
    align-self: stretch;
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    background-color: rgba(19, 11, 44, 0.6);
    }

    .video-length {
    margin-top: auto;
    }

    .video-card-link {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    color: #666a70;
    text-decoration: none;
    }

    .video-card-link:hover {
    color: #666a70;
    }

    .video-card-length {
    margin-top: auto;
    color: #130b2c;
    font-weight: 700;
    }

    .card-play-button-small {
    position: absolute;
    left: 36px;
    top: -25px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 45px;
    height: 45px;
    min-height: 45px;
    min-width: 45px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 10px;
    background-color: #fff;
    font-size: 14px;
    font-weight: 700;
    }
</style>

<section id="section-hero" class="section-dark no-top no-bottom text-light jarallax relative mh-800" data-video-src="mp4:{{asset('assets/video/2.mp4')}}">
            <div class="gradient-edge-top op-6 h-50 color"></div>
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
            <div class="abs abs-centered z-2 w-80">
                <div class="container wow scaleIn" data-wow-duration="3s">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="subtitle">JUST LIKE A VIDEO GAME YOU NEED TO</div>
                            <h1 class="fs-120 text-uppercase fs-sm-12vw mb-4 lh-1">Level Up Every area of Your Life</h1>

                            <div class="d-block d-md-flex justify-content-center">
                                <div class="d-flex justify-content-center align-items-center mx-4">
                                    {{-- <i class="fa fa-calendar id-color me-3"></i> --}}
                                    <p class="mb-0">This isn’t just another course. It’s a complete platform designed to sharpen your mind, habits, health, and income, so you grow in every area that matters.</p>
                                </div>

                                {{-- <div class="d-flex justify-content-center align-items-center mx-4">
                                    <i class="fa fa-location-pin id-color me-3"></i>
                                    <h4 class="mb-0">San Francisco, CA</h4>
                                </div> --}}
                            </div>

                            <div class="spacer-single"></div>

                            <a class="btn-main mx-2 fx-slide" href="{{route('register_form')}}"><span>Join {{ $global['site_name'] ?? '' }} Now</span></a>
                            {{-- <a class="btn-main btn-line mx-2 fx-slide" href="#section-schedule"><span>View Schedule</span></a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="abs w-100 start-0 bottom-0 z-3">
                <div class="container">
                    <div class="sm-hide border-white-op-3 p-40 py-4 rounded-1 bg-blur relative overflow-hidden wow fadeInUp">
                        <div class="gradient-edge-bottom color start-0 h-50 op-5"></div>
                        <div class="row g-4 justify-content-between align-items-center relative z-2">
                            <div class="col-lg-3">
                                <h2 class="mb-0">Hurry Up!</h2>
                                {{-- <h4 class="mb-0">Book Your Seat Now</h4> --}}
                            </div>
                            <div class="col-lg-4">
                                <div id="defaultCountdown" class="pt-2"></div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-flex">
                                    {{-- <i class="fs-60 icofont-google-map id-color"></i> --}}
                                    <div class="ms-3">
                                        {{-- <h4 class="mb-0">121 AI Blvd,<br>San Francisco BCA 94107</h4> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-dark p-0" aria-label="section">
            <div class="bg-color text-light d-flex py-4 lh-1 rot-2">
              <div class="de-marquee-list-1 wow fadeInLeft" data-wow-duration="3s">
                <span class="fs-60 mx-3">Next Intelligence</span>
                <span class="fs-60 mx-3 op-2">/</span>
                <span class="fs-60 mx-3">Future Now</span>
                 <span class="fs-60 mx-3 op-2">/</span>
                <span class="fs-60 mx-3">Empowering Innovation</span>
                 <span class="fs-60 mx-3 op-2">/</span>
                <span class="fs-60 mx-3">Smarter Tomorrow</span>
                 <span class="fs-60 mx-3 op-2">/</span>
                <span class="fs-60 mx-3">Think Forward</span>
                 <span class="fs-60 mx-3 op-2">/</span>
                <span class="fs-60 mx-3">Cognitive Shift</span>
                 <span class="fs-60 mx-3 op-2">/</span>
              </div>
            </div>

            <div class="bg-color-2 text-light d-flex py-4 lh-1 rot-min-1 mt-min-20">
              <div class="de-marquee-list-2 wow fadeInRight" data-wow-duration="3s">
                <span class="fs-60 mx-3">Next Intelligence</span>
                <span class="fs-60 mx-3 op-2">/</span>
                <span class="fs-60 mx-3">Future Now</span>
                 <span class="fs-60 mx-3 op-2">/</span>
                <span class="fs-60 mx-3">Empowering Innovation</span>
                 <span class="fs-60 mx-3 op-2">/</span>
                <span class="fs-60 mx-3">Smarter Tomorrow</span>
                 <span class="fs-60 mx-3 op-2">/</span>
                <span class="fs-60 mx-3">Think Forward</span>
                 <span class="fs-60 mx-3 op-2">/</span>
                <span class="fs-60 mx-3">Cognitive Shift</span>
                 <span class="fs-60 mx-3 op-2">/</span>
              </div>
            </div>
        </section>

        <section id="section-pillars" class="section-dark text-light jarallax relative">
            <div class="gradient-edge-top op-6 h-50 color"></div>
            <div class="sw-overlay op-8"></div>
            <div class="container">
                <div class="row g-4 text-center">

                <!-- Card 1 -->
                <div class="col-lg-4">
                    <article class="pillar-card relative w-full h-104 rounded-lg overflow-hidden shadow-lg transform transition duration-500 hover:scale-105">
  
                    <!-- wrapper for hover zoom -->
                    <div class="w-full h-full overflow-hidden">
                        <img style="width:100%; height:100%; object-fit:cover; transition:0.5s;" 
                        onmouseover="this.style.transform='scale(1.1)'" 
                        onmouseout="this.style.transform='scale(1)'" 
                        src="{{ asset('assets/images/affiliate/card1.jfif') }}">
                    </div>

                    <!-- overlay -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-4 text-left">
                        <h3 class="text-xl font-bold text-yellow-400">YouTube Profits</h3>
                        <p class="text-sm text-gray-200">Learn proven strategies to monetize YouTube in 2025.</p>
                        <button class="mt-3 px-4 py-2 bg-yellow-400 text-black font-semibold rounded-md hover:bg-yellow-300 transition">
                        Read More
                        </button>
                    </div>
                    </article>

                </div>

                <!-- Card 2 -->
                <div class="col-lg-4">
                    <article class="pillar-card h-104 relative rounded-lg overflow-hidden shadow-lg transform transition duration-500 hover:scale-105">
                    <img style="width:100%; height:100%; object-fit:cover; transition:0.5s;" 
                        onmouseover="this.style.transform='scale(1.1)'" 
                        onmouseout="this.style.transform='scale(1)'" 
                        src="{{ asset('assets/images/affiliate/card1.jfif') }}">

                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-4 text-left">
                        <h3 class="text-2xl font-bold text-yellow-400">Business Takeover</h3>
                        <p class="text-sm text-gray-200">Systems & mentorship to grow your business fast.</p>
                        <button class="mt-3 px-4 py-2 bg-yellow-400 text-black font-semibold rounded-md hover:bg-yellow-300 transition">Read More</button>
                    </div>
                    </article>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4">
                    <article class="pillar-card h-96 relative rounded-lg overflow-hidden shadow-lg transform transition duration-500 hover:scale-105">
                    <img style="width:100%; height:100%; object-fit:cover; transition:0.5s;" 
                        onmouseover="this.style.transform='scale(1.1)'" 
                        onmouseout="this.style.transform='scale(1)'" 
                        src="{{ asset('assets/images/affiliate/card1.jfif') }}">
                        
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-4 text-left">
                        <h3 class="text-2xl font-bold text-yellow-400">AI-Powered Skills</h3>
                        <p class="text-sm text-gray-200">Master AI to multiply your results.</p>
                        <button class="mt-3 px-4 py-2 text-black font-semibold rounded-md hover:bg-yellow-300 transition">Read More</button>
                    </div>
                    </article>
                </div>

                </div>
            </div>
        </section>



        {{-- <section id="section-about" class="section-dark text-light jarallax relative">
            <div class="gradient-edge-top op-6 h-50 color"></div>
            {{-- <div class="gradient-edge-bottom"></div> --}}
            {{-- <div class="sw-overlay op-8"></div>
            <div class="container">
                <div class="row  gx-5 align-items-center justify-content-between">
                    <div class="col-lg-6">
                          <div class="me-lg-5 pe-lg-5 py-5 my-5">
                              <div class="subtitle wow fadeInUp" data-wow-delay=".2s">About Us</div>
                              <h2 class="wow fadeInUp" data-wow-delay=".4s">A global campus designed for the doers of tomorrow</h2>
                              <p class="wow fadeInUp" data-wow-delay=".6s">Join thought leaders, developers, researchers, and founders as we explore how artificial intelligence is reshaping industries, creativity, and the future
                              of work.</p>

                              <ul class="ul-check">
                                  <li class="wow fadeInUp" data-wow-delay=".8s">Vital Life Lessons</li>
                                  <li class="wow fadeInUp" data-wow-delay=".9s">Private Network</li>
                                  <li class="wow fadeInUp" data-wow-delay="1s">Access To Multi-Millionaires</li>
                              </ul>

                          </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="wow scaleIn">
                            <img src="{{ asset('assets/images/frontend/misc/c1.webp') }}" class="w-100 rotate-animation" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}


         <section id="section-why-attend" class="section-dark text-light jarallax relative">
            {{-- <div class="gradient-edge-top op-6 h-50 color"></div> --}}
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
            <div class="container">
                <div class="row g-4">
                     
                        <div class="col-lg-5 offset-lg-1 align-self-center">
                                            <div class="p-3">
                                                <div class="subtitle wow fadeInUp">ONE YEAR IS ALL YOU NEED </div>
                                                <h1 class=" wow fadeInUp" data-wow-delay=".2s">LOCK IN FOR THE NEXT YEAR</h1>
                                                <p class=" wow fadeInUp">You can get rich with just one year of focus... But only if you invest focus in the right business models using the right information.
                                                    In The Real World you will get access to multimillionaire professors who will give you a step-by-step path to reach your goals as fast as humanly possible.
                                                </p>
                                                <button type="button" class="btn btn-primary" href="{{ route('register_form') }}">Join Now</button>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-5 offset-lg-1 text-center">
    
                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('assets/images/affiliate/extra/card/img-2.jpg') }}" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="assets/images/extra/card/img-1.jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="assets/images/extra/card/img-3.jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                </div>
            </div>
         </section>
         <section id="section-why-attend" class="section-dark text-light jarallax relative">
            {{-- <div class="gradient-edge-top op-6 h-50 color"></div> --}}
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="subtitle wow fadeInUp mb-3">THE REAL WORLD CAMPUSES</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">10+ WEALTH CREATION METHODS</h2>
                        <p class="lead mb-0 wow fadeInUp">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti earum assumenda dolores.</p>
                    </div>
                </div>

                <div class="spacer-single"></div>

                <div class="row g-4">

                <!-- Video Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div role="listitem" class="w-dyn-item">
                    <a href="/video/the-box-model" class="video-card w-inline-block">
                        <div class="video-card-image-wrapper">
                        <div class="video-card-image-inner">
                            <div class="tagline">Vlogs</div>
                        </div>
                        </div>
                        <div class="video-card-content">
                        <h3>The box model</h3>
                        <div class="video-card-length">1:54</div>
                        <div class="card-play-button-small">
                            <img src="{{ asset('assets/images/cards/5e1f80f9fbdfd472b86cd8ec_play-icon.svg') }}" alt="" class="icon-small">
                        </div>
                        </div>
                    </a>
                    </div>
                </div>

                <!-- Video Card 2 -->
                {{-- <div class="col-lg-4 col-md-6">
                    <div role="listitem" class="w-dyn-item">
                    <a href="/video/another-video" class="video-card w-inline-block">
                        <div class="video-card-image-wrapper"
                            style="background-image:url('https://cdn.prod.website-files.com/...another-video.jpg')">
                        <div class="video-card-image-inner">
                            <div class="tagline">Tutorial</div>
                        </div>
                        </div>
                        <div class="video-card-content">
                        <h3>Another Video</h3>
                        <div class="video-card-length">3:21</div>
                        <div class="card-play-button-small">
                            <img src="{{ asset('assets/images/cards/5e1f80f9fbdfd472b86cd8ec_play-icon.svg') }}" alt="" class="icon-small">
                        </div>
                        </div>
                    </a>
                    </div>
                </div> --}}

                <!-- Repeat more col-lg-4 col-md-6 for additional videos -->

                </div>

            </div>
        </section> 

        <section class="bg-dark section-dark text-light pt-80 relative jarallax" aria-label="section">
            <img src="{{ asset('assets/images/frontend/background/2.webp') }}" class="jarallax-img" alt="">
            <div class="gradient-edge-top"></div>
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
            <div class="container relative z-4">
                <div class="row align-items-center g-5">
                    <div class="col-md-4">
                        <div class="relative w-100 d-inline-block pe-5">
                            <div class="abs bg-color w-80px h-80px rounded-1 text-center end-0 z-2 wow scaleIn">
                                <i class="icofont-quote-left text-white fs-40 d-block pt-3"></i>
                            </div>
                            <img src="{{ asset('assets/images/frontend/misc/s9.webp') }}" class="w-100 rounded-1 wow scale-in-mask" alt="">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <h3 class="fs-32 mb-4 wow fadeInUp">“Artificial intelligence is advancing rapidly, and while it offers immense opportunity, it also poses significant risks. If not properly regulated and aligned with human values, AI could become a fundamental threat to civilization.”</h3>

                        <span>Elon Musk</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-speakers" class="section-dark text-light jarallax relative">
            <div class="gradient-edge-top op-6 h-50 color"></div>
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 relative z-3">
                          <div class="text-center">
                              <div class="subtitle wow fadeInUp" data-wow-delay=".0s">TESTIMONIALS</div>
                              <h2 class="wow fadeInUp" data-wow-delay=".2s">OUR STUDENTS ARE WINNING</h2>
                              {{-- <p class="lead wow fadeInUp">Whether it's a quick refresh or a deep clean transformation, our expert touch leaves your home or office shining.</p> --}}
                          </div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="hover relative rounded-1 overflow-hidden wow fadeIn scale-in-mask">
                            <img src="{{ asset('assets/images/frontend/team/1.webp') }}" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs w-100 h-100 start-0 top-0 hover-op-1 radial-gradient-color"></div>
                            <div class="abs w-100 start-0 bottom-0 z-3">
                                <div class="bg-blur p-4 m-4 rounded-1 text-light text-center relative z-2">
                                    <h3 class="mb-0">Joshua Henry</h3>
                                    <span>Chief AI Scientist, OpenAI</span>
                                </div>
                                <div class="gradient-edge-bottom h-100 op-8"></div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4">
                        <div class="hover relative rounded-1 overflow-hidden wow fadeIn scale-in-mask">
                            <img src="{{ asset('assets/images/frontend/team/2.webp') }}" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs w-100 h-100 start-0 top-0 hover-op-1 radial-gradient-color"></div>
                            <div class="abs w-100 start-0 bottom-0 z-3">
                                <div class="bg-blur p-4 m-4 rounded-1 text-light text-center relative z-2">
                                    <h3 class="mb-0">Leila Zhang</h3>
                                    <span>VP of Machine Learning, Google</span>
                                </div>
                                <div class="gradient-edge-bottom h-100 op-8"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="hover relative rounded-1 overflow-hidden wow fadeIn scale-in-mask">
                            <img src="{{ asset('assets/images/frontend/team/3.webp') }}" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs w-100 h-100 start-0 top-0 hover-op-1 radial-gradient-color"></div>
                            <div class="abs w-100 start-0 bottom-0 z-3">
                                <div class="bg-blur p-4 m-4 rounded-1 text-light text-center relative z-2">
                                    <h3 class="mb-0">Carlos Rivera</h3>
                                    <span>Founder & CEO, NeuralCore</span>
                                </div>
                                <div class="gradient-edge-bottom h-100 op-8"></div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>

        <section class="bg-dark section-dark pt-80 relative jarallax" aria-label="section">
            <img src="{{ asset('assets/images/frontend/background/1.webp') }}" class="jarallax-img" alt="">
            {{-- <div class="gradient-edge-top"></div> --}}
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
            <div class="container">
                <div class="row g-4">

                    <div class="col-md-12 wow fadeInUp">
                        <div class="owl-6 no-alpha owl-carousel owl-theme wow mask-right">
                            <img src="{{ asset('assets/images/frontend/logo-light/1.webp') }}" class="w-100 px-4" alt="">
                            <img src="{{ asset('assets/images/frontend/logo-light/2.webp') }}" class="w-100 px-4" alt="">
                            <img src="{{ asset('assets/images/frontend/logo-light/3.webp') }}" class="w-100 px-4" alt="">
                            <img src="{{ asset('assets/images/frontend/logo-light/4.webp') }}" class="w-100 px-4" alt="">
                            <img src="{{ asset('assets/images/frontend/logo-light/5.webp') }}" class="w-100 px-4" alt="">
                            <img src="{{ asset('assets/images/frontend/logo-light/6.webp') }}" class="w-100 px-4" alt="">
                            <img src="{{ asset('assets/images/frontend/logo-light/7.webp') }}" class="w-100 px-4" alt="">
                            <img src="{{ asset('assets/images/frontend/logo-light/8.webp') }}" class="w-100 px-4" alt="">
                            <img src="{{ asset('assets/images/frontend/logo-light/9.webp') }}" class="w-100 px-4" alt="">
                            <img src="{{ asset('assets/images/frontend/logo-light/10.webp') }}" class="w-100 px-4" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="section-schedule" class="section-dark text-light jarallax relative">
            <div class="gradient-edge-top op-6 h-50 color"></div>
            {{-- <div class="gradient-edge-bottom"></div> --}}
            {{--<div class="sw-overlay op-8"></div>
            <div class="container">
              <div class="row g-4 gx-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Event Schedule</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">5 Days of AI Excellence</h2>
                </div>
              </div>
              <div class="row g-4 gx-5 justify-content-center wow fadeInUp">
                <div class="col-lg-12">
                    <div class="de-tab plain">
                        <ul class="d-tab-nav mb-4 pb-4 d-flex justify-content-between">
                            <li class="active-tab">
                                <h3>Day 1</h3>
                                Oct 1, 2025
                            </li>
                            <li>
                                <h3>Day 2</h3>
                                Oct 2, 2025
                            </li>
                            <li>
                                <h3>Day 3</h3>
                                Oct 3, 2025
                            </li>
                            <li>
                                <h3>Day 4</h3>
                                Oct 5, 2025
                            </li>
                            <li>
                                <h3>Day 5</h3>
                                Oct 5, 2025
                            </li>
                        </ul>
                        <ul class="d-tab-content pt-3 wow fadeInUp">   
                            <!-- day 1 -->                        
                            <li>
                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            08:00 – 10:00 AM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/1.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Joshua Henry</h5>
                                                    AI Research Lead, DeepTech Labs
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Opening Keynote – The State of AI 2025</h3>
                                            <p class="fs-15 mb-0">Kick off the event with an insightful overview of where artificial intelligence is headed. Ava will explore breakthroughs, global shifts, and what’s next in deep learning, generative models, and AI ethics.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            12:00 – 14:00 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/2.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Leila Zhang</h5>
                                                    VP of Machine Learning, Google
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Building Human-Centered AI Products</h3>
                                            <p class="fs-15 mb-0">This session covers how to design AI solutions that prioritize usability, fairness, and real-world impact. Bring your laptop—hands-on UX exercises included.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            16:00 – 18:00 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/3.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Carlos Rivera</h5>
                                                    Founder & CEO, NeuralCore
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: AI Policy & Regulation – A Global Overview</h3>
                                            <p class="fs-15 mb-0">Learn how nations and organizations are approaching AI governance, including frameworks for data privacy, bias mitigation, and accountability in model deployment.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            20:00 – 22:00 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/4.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Maria Gonzalez</h5>
                                                    Founder & CEO, SynthCore AI
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Building a Startup with AI at the Core</h3>
                                            <p class="fs-15 mb-0">Marco shares his journey launching an AI-first startup. Discover tips on tech stacks, team-building, funding, and scaling responsibly.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->
                            </li>

                            <!-- day 2 -->
                            <li>
                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            09:00 – 10:30 AM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/5.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Leila Zhang</h5>
                                                    Head of AI Strategy, VisionFlow
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Ethical AI — From Theory to Practice</h3>
                                            <p class="fs-15 mb-0">Explore how leading companies are implementing fairness, accountability, and transparency in real-world AI systems across healthcare and finance.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            11:00 – 12:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/6.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Lisa Zhang</h5>
                                                    AI Ethics Researcher, FairAI Group
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Bias in Data — Hidden Dangers in AI Pipelines</h3>
                                            <p class="fs-15 mb-0">Lisa dives deep into the causes of bias in training data and showcases methods to detect and mitigate harm before deployment.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            14:00 – 15:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/7.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Markus Blom</h5>
                                                    CTO, SynthMind AI
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Generative Models Beyond Text</h3>
                                            <p class="fs-15 mb-0">A practical tour of the next generation of multimodal models generating images, video, and even 3D environments with AI.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            16:00 – 17:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/8.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Priya Natarajan</h5>
                                                    Lead Engineer, CogniWare
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Workshop: Building AI-Powered Interfaces</h3>
                                            <p class="fs-15 mb-0">Learn how to embed conversational AI into web and mobile apps using modern open-source frameworks and API-first design.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                            </li>

                            <!-- day 3 -->
                            <li>
                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            09:00 – 10:30 AM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/9.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Sofia Romero</h5>
                                                    ML Engineer, NeuronEdge
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Transformers in 2025 — What's Next?</h3>
                                            <p class="fs-15 mb-0">A technical session diving into the future of transformer architectures, memory optimization, and scaling challenges.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            11:00 – 12:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/10.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Tomás Eriksson</h5>
                                                    Founder, RealSim AI
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Synthetic Data Generation for Training</h3>
                                            <p class="fs-15 mb-0">Tomás shares tools and techniques for creating high-quality synthetic datasets that speed up training and reduce risk.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            14:00 – 15:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/11.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Aisha Mensah</h5>
                                                    Senior AI Strategist, Datavine
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Panel: AI Regulation & Global Policy Outlook</h3>
                                            <p class="fs-15 mb-0">Top voices discuss the global AI policy landscape, upcoming legislation, and how it will shape the future of AI deployment.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            16:00 – 17:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/12.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Leo Tanaka</h5>
                                                    Robotics Engineer, MetaForm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Embodied AI in Robotics</h3>
                                            <p class="fs-15 mb-0">Discover how AI is powering next-gen robotics for manufacturing, logistics, and autonomous mobility through real-time interaction models.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                            </li>

                            <!-- day 4 -->
                            <li>
                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            09:00 – 10:30 AM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/13.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Nina Köhler</h5>
                                                    Chief Product Officer, SynthOS
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: AI in Product Design — From Concept to Launch</h3>
                                            <p class="fs-15 mb-0">Nina shares how AI is revolutionizing product development, from ideation to real-time user feedback integration.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            11:00 – 12:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/14.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Emmanuel Ruiz</h5>
                                                    CEO, NextCore Analytics
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Scaling AI Infrastructure for Enterprise</h3>
                                            <p class="fs-15 mb-0">Explore key considerations when deploying and managing scalable, secure, and cost-effective AI systems in the enterprise space.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            14:00 – 15:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/15.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Isabelle Chen</h5>
                                                    Head of Language Models, LumoAI
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Multilingual AI — Global Challenges & Innovations</h3>
                                            <p class="fs-15 mb-0">How modern LLMs are overcoming linguistic bias, translation errors, and dialect diversity in global applications.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            16:00 – 17:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/16.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Connor Walsh</h5>
                                                    Cloud AI Architect, SkyStack
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Workshop: Building AI Pipelines in the Cloud</h3>
                                            <p class="fs-15 mb-0">Hands-on session building a full AI workflow using serverless tech, vector databases, and model deployment strategies.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->
                                
                            </li>

                            <!-- day 5 -->
                            <li>
                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            09:00 – 10:30 AM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/17.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Elena Greco</h5>
                                                    Ethics Advisor, Global AI Forum
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Ethical Design in AI — A Human-Centered Approach</h3>
                                            <p class="fs-15 mb-0">A deep dive into responsible AI, highlighting bias mitigation, fairness, transparency, and global implications of autonomous systems.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            11:00 – 12:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/18.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Marcus Dlamini</h5>
                                                    Founder, EduAI Labs
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Personalized Learning with AI</h3>
                                            <p class="fs-15 mb-0">Explore how AI-driven platforms are transforming education with adaptive learning paths and dynamic content delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="border-white-bottom-op-2 pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            14:00 – 15:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/19.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Lara Nguyen</h5>
                                                    GenAI Director, NovaSynth
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Session: Creative AI — From Text to Video</h3>
                                            <p class="fs-15 mb-0">Lara demonstrates how generative AI is transforming content creation, with real-time demos in video, audio, and image generation.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                                <!-- schedule item begin -->
                                <div class="pb-5 mb-5">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-2">
                                            16:00 – 17:30 PM
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center">
                                                <img src="images/team/20.webp" class="w-100px rounded-1 me-4" alt="">
                                                <div>
                                                    <h5 class="mb-0">Dr. Hassan Al-Mansour</h5>
                                                    Lead Data Scientist, FutureVision
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Closing Keynote: AI & Humanity — Co-Evolution or Collapse?</h3>
                                            <p class="fs-15 mb-0">A visionary closing on AI’s long-term trajectory, human-AI collaboration, and the existential questions we must answer now.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- schedule item end -->

                            </li>

                        </ul>
                    </div>
                </div>
              </div>
            </div>
        </section> --}}

        <section id="section-tickets" class="section-dark text-light jarallax relative" aria-label="section">
            {{-- <div class="gradient-edge-top op-6 h-50 color"></div> --}}
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
            <img src="images/background/7.webp" class="jarallax-img" alt="">
            <div class="gradient-edge-top"></div>
            <div class="gradient-edge-bottom"></div>
            <div class="sw-overlay op-7"></div>

            <div class="container relative z-2">
                <div class="row g-4 gx-5 justify-content-center">
                  <div class="col-lg-6 text-center">
                      <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">EXCLUSIVE FEATURES</div>
                      <h2 class="wow fadeInUp" data-wow-delay=".2s">GET ACCESS TO</h2>
                      <p class="lead wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, beatae?</p>
                  </div>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme owl-3-dots wow mask-right">
                            <!-- ticket item begin -->
                            <div class="item">
                                <div class="d-ticket">
                                    <img src="{{ asset('assets/images/frontend/logo.webp') }}" class="w-80px mb-4" alt="">
                                    <img src="{{ asset('assets/images/frontend/misc/barcode.webp') }}" class="w-20 p-2 abs abs-middle end-0 me-2" alt="">
                                    <img src="{{ asset('assets/images/frontend/logo-big-white.webp') }}" class="w-40 abs abs-centered me-4 op-2" alt="">
                                    <h2>STEP-BY-STEP LEARNING</h2>
                                    {{-- <h4 class="mb-4">$299</h4> --}}
                                    {{-- <div class="fs-14">October 1 to 5 - 10:00 AM</div> --}}
                                </div>

                                <div class="relative overflow-hidden">
                                    <div class="py-4 z-2">
                                        <ul class="ul-check mb-4">
                                            <li>Easy to follow program for financial success</li>
                                            <li>New high income skills constantly added</li>
                                            {{-- <li>Networking opportunities.</li> --}}
                                            <li>Learn with our hyper advanced application</li>
                                        </ul>
                                    </div>

                                    {{-- <a class="btn-main fx-slide w-100" href="tickets.html"><span>Buy Ticket</span></a> --}}
                                    
                                </div>
                            </div>
                            <!-- ticket item end -->

                            <!-- ticket item begin -->
                            <div class="item">
                                <div class="d-ticket s2">
                                    <img src="{{ asset('assets/images/frontend/logo.webp') }}" class="w-80px mb-4" alt="">
                                    <img src="{{ asset('assets/images/frontend/misc/barcode.webp') }}" class="w-20 p-2 abs abs-middle end-0 me-2" alt="">
                                    <img src="{{ asset('assets/images/frontend/logo-big-white.webp') }}" class="w-40 abs abs-centered me-4 op-2" alt="">
                                    <h2>DAILY LIVE SESSIONS</h2>
                                    {{-- <h4 class="mb-4">$1199</h4>
                                    <div class="fs-14">October 1 to 5 - 10:00 AM</div> --}}
                                </div>
                                <div class="relative">
                                    <div class="py-4 z-2">
                                        <ul class="ul-check mb-4">
                                            <li>Daily live sessions with millionaire coaches</li>
                                            <li>Scale from Zero to $10k/month as fast as possible</li>
                                            {{-- <li>Personalized session scheduling.</li> --}}
                                            <li>Network with 155,000+ students</li>
                                        </ul>
                                    </div>
                                </div>

                                <a class="btn-main fx-slide w-100" href="{{ route('register_form') }}"><span>Join Now</span></a>
                            </div>
                            <!-- ticket item end -->

                            <!-- ticket item begin -->
                            <div class="item">
                                <div class="d-ticket">
                                    <img src="{{ asset('assets/images/frontend/logo.webp') }}" class="w-80px mb-4" alt="">
                                    <img src="{{ asset('assets/images/frontend/misc/barcode.webp') }}" class="w-20 p-2 abs abs-middle end-0 me-2" alt="">
                                    <img src="{{ asset('assets/images/frontend/logo-big-white.webp') }}" class="w-40 abs abs-centered me-4 op-2" alt="">
                                    <h2>AN EXCLUSIVE COMMUNITY</h2>
                                    {{-- <h4 class="mb-4">$699</h4>
                                    <div class="fs-14">October 1 to 5 - 10:00 AM</div> --}}
                                </div>
                                <div class="relative">
                                    <div class="py-4 z-2">
                                        <ul class="ul-check mb-4">
                                            <li>Mentors are hyper-successful experts in their field</li>
                                            <li>Get mentored every step of your journey</li>
                                            <li>Network with 155,000+ students</li>
                                            {{-- <li>VIP swag bag and exclusive content.</li> --}}
                                        </ul>
                                    </div>
                                </div>

                                {{-- <a class="btn-main fx-slide w-100" href="{{ route('register_form') }}"><span>Join Now</span></a> --}}
                            </div>
                            <!-- ticket item end -->

                            

                            {{-- <!-- ticket item begin -->
                            <div class="item">
                                <div class="d-ticket s2">
                                    <img src="images/logo.webp" class="w-80px mb-4" alt="">
                                    <img src="images/misc/barcode.webp" class="w-20 p-2 abs abs-middle end-0 me-2" alt="">
                                    <img src="images/logo-big-white.webp" class="w-40 abs abs-centered me-4 op-2" alt="">
                                    <h2>Exclusive Access</h2>
                                    <h4 class="mb-4">$2499</h4>
                                    <div class="fs-14">October 1 to 5 - 10:00 AM</div>
                                </div>
                                <div class="relative">
                                    <div class="py-4 z-2">
                                        <ul class="ul-check mb-4">
                                            <li>All Full Access Pass benefits.</li>
                                            <li>Private one-on-one sessions with speakers.</li>
                                            <li>Priority access to all events and workshops.</li>
                                            <li>Exclusive VIP gala and after-party invitations.</li>
                                        </ul>
                                    </div>
                                </div>

                                <a class="btn-main fx-slide w-100" href="tickets.html"><span>Buy Ticket</span></a>
                            </div>
                            <!-- ticket item end -->

                            <!-- ticket item begin -->
                            <div class="item">
                                <div class="d-ticket s3">
                                    <img src="images/logo.webp" class="w-80px mb-4" alt="">
                                    <img src="images/misc/barcode.webp" class="w-20 p-2 abs abs-middle end-0 me-2" alt="">
                                    <img src="images/logo-big-white.webp" class="w-40 abs abs-centered me-4 op-2" alt="">
                                    <h2>Student</h2>
                                    <h4 class="mb-4">$149</h4>
                                    <div class="fs-14">October 1 to 5 - 10:00 AM</div>
                                </div>
                                <div class="relative">
                                    <div class="py-4 z-2">
                                        <ul class="ul-check mb-4">
                                            <li>Access to keynotes and workshops.</li>
                                            <li>Student-specific networking events.</li>
                                            <li>Discounted online resources post-event.</li>
                                            <li>Special student meetups for networking.</li>
                                        </ul>
                                    </div>
                                </div>

                                <a class="btn-main fx-slide w-100" href="tickets.html"><span>Buy Ticket</span></a>
                            </div>
                            <!-- ticket item end -->

                            <!-- ticket item begin -->
                            <div class="item">
                                <div class="d-ticket s3">
                                    <img src="images/logo.webp" class="w-80px mb-4" alt="">
                                    <img src="images/misc/barcode.webp" class="w-20 p-2 abs abs-middle end-0 me-2" alt="">
                                    <img src="images/logo-big-white.webp" class="w-40 abs abs-centered me-4 op-2" alt="">
                                    <h2>Virtual</h2>
                                    <h4 class="mb-4">$99</h4>
                                    <div class="fs-14">October 1 to 5 - 10:00 AM</div>
                                </div>
                                <div class="relative">
                                    <div class="py-4 z-2">
                                        <ul class="ul-check mb-4">
                                            <li>Live-streamed keynotes and workshops.</li>
                                            <li>On-demand access to recorded sessions.</li>
                                            <li>Interactive Q&A with speakers.</li>
                                            <li>Virtual networking and digital swag.</li>
                                        </ul>
                                    </div>
                                </div>

                                <a class="btn-main fx-slide w-100" href="tickets.html"><span>Buy Ticket</span></a>
                            </div>
                            <!-- ticket item end --> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="section-venue" class="section-dark text-light jarallax relative" aria-label="section">
            {{-- <div class="gradient-edge-top op-6 h-50 color"></div> --}}
            {{-- <div class="gradient-edge-bottom"></div> --}}
            {{--<div class="sw-overlay op-8"></div>
          <div class="container relative z-2">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Event Location</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Location & Venue</h2>
                    <p class="lead wow fadeInUp" data-wow-delay=".6s">Join us in the heart of innovation at San Francisco Tech Pavilion—surrounded by top hotels, transit, and culture.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-sm-6">
                    <img src="images/misc/l1.webp" class="w-100 rounded-1 wow scale-in-mask" alt="">
                </div>

                <div class="col-sm-6">
                    <img src="images/misc/l2.webp" class="w-100 rounded-1 wow scale-in-mask" alt="">
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center wow fadeInUp" data-wow-delay=".2s">
                        <i class="fs-60 id-color icofont-google-map"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Address</h4>
                            <p>121 AI Blvd, San Francisco, CA 94107</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center wow fadeInUp" data-wow-delay=".4s">
                        <i class="fs-60 id-color icofont-phone"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Phone</h4>
                            <p>Call: +1 123 456 789</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center wow fadeInUp" data-wow-delay=".6s">
                        <i class="fs-60 id-color icofont-envelope"></i>
                        <div class="ms-3">
                            <h4 class="mb-0">Email</h4>
                            <p>contact@aivent.com</p>
                        </div>
                    </div>
                </div>
            </div>

          </div>
        </section> --}}

        <section  id="section-faq" class="section-dark text-light jarallax relative" aria-label="section">
            {{-- <div class="gradient-edge-top op-6 h-50 color"></div> --}}
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".0s">Everything You Need to Know</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Frequently Asked Questions</h2>
                    </div>

                    <div class="col-lg-7">
                        <div class="accordion s2 wow fadeInUp">
                            <div class="accordion-section">
                                <div class="accordion-section-title" data-tab="#accordion-a1">
                                    What is the AI Summit 2025?
                                </div>
                                <div class="accordion-section-content" id="accordion-a1">
                                    The AI Summit 2025 is a premier event gathering leading AI experts, thought leaders, and innovators. It features keynotes, workshops, panels, and networking opportunities focusing on the latest advancements in artificial intelligence.
                                </div>

                                <div class="accordion-section-title" data-tab="#accordion-a2">
                                    When and where will the event be held?
                                </div>
                                <div class="accordion-section-content" id="accordion-a2">
                                    The AI Summit 2025 will take place from **[Event Dates]** at **[Event Location]**. More details about the venue and directions will be provided closer to the event.
                                </div>

                                <div class="accordion-section-title" data-tab="#accordion-a3">
                                    How can I register for the event?
                                </div>
                                <div class="accordion-section-content" id="accordion-a3">
                                    You can register for the AI Summit 2025 through our official website. Simply choose your ticket type and fill out the registration form.
                                </div>

                                <div class="accordion-section-title" data-tab="#accordion-a4">
                                    What ticket options are available?
                                </div>
                                <div class="accordion-section-content" id="accordion-a4">
                                    We offer a range of ticket options, including Standard, VIP, Full Access Pass, Student, and Virtual tickets. You can find more details about each ticket type on our [Tickets Page](#).
                                </div>

                                <div class="accordion-section-title" data-tab="#accordion-a5">
                                    Can I transfer my ticket to someone else?
                                </div>
                                <div class="accordion-section-content" id="accordion-a5">
                                    Tickets are non-transferable. If you are unable to attend, please contact our support team for assistance.
                                </div>

                                <div class="accordion-section-title" data-tab="#accordion-a6">
                                    Will there be virtual participation?
                                </div>
                                <div class="accordion-section-content" id="accordion-a6">
                                    Yes! For those who can’t attend in person, we offer a **Virtual Ticket**. This provides access to live-streamed sessions, workshops, and networking opportunities online.
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark section-dark text-light pt-80 relative jarallax" aria-label="section">
            <img src="{{ asset('assets/images/frontend/background/3.webp') }}" class="jarallax-img" alt="">
            {{-- <div class="gradient-edge-top"></div> --}}
            {{-- <div class="gradient-edge-bottom"></div> --}}
            <div class="sw-overlay op-8"></div>
          <div class="container relative z-2">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".0s">LOCK IN YOUR PRICE</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">PRICE INCREASE IS IMMINENT</h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                      Hundreds of thousands of students have already joined The Real World and are on their way to financial freedom.
                    </p>
                </div>
            </div>

            <form class="row justify-content-center">
              <div class="col-md-6 col-lg-4 mb-3 wow fadeInUp" data-wow-delay=".6s">
                <input type="email" class="form-control form-control-lg text-center" placeholder="Enter Your Email Address" required>
              </div>
              <div class="col-auto mb-3 wow fadeInUp" data-wow-delay=".6s">
                <button type="submit" class="btn bg-color text-light btn-lg px-4">SIGN UP</button>
              </div>

              <div class="col-12 text-center wow fadeInUp" data-wow-delay=".8s">
                <div class="form-check d-flex justify-content-center mb-2">
                  <input class="form-check-input me-2" type="checkbox" value="" id="updatesCheck" checked>
                  <label class="form-check-label" for="updatesCheck">
                    Keep me updated on other news and exclusive offers
                  </label>
                </div>
                <p class="small text-muted wow fadeInUp" data-wow-delay="1s">
                  Note: You can opt-out at any time. See our <a href="#" class="text-decoration-underline">Privacy Policy</a> and <a href="#" class="text-decoration-underline">Terms</a>.
                </p>
              </div>
            </form>
          </div>
        </section>


@endsection