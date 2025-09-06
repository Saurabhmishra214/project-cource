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
    } 
    
    .video-card {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: auto;
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
    min-height: 200px;         
    /* aspect-ratio: 16/9;  */
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
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    -o-object-fit: cover;
    /* object-fit: cover; */
    }

    .video-card-content {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 200px;
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
    }
    
    .video-card-image-inner {
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

    /* Background blur when modal is active */
  body.modal-open {
    overflow: hidden;
  }
  body.modal-open #section-why-attend {
    filter: blur(6px);
    pointer-events: none;
    user-select: none;
  }

  /* Modal container */
  .video-modal {
    position: fixed;
    inset: 0;
    display: none;
    justify-content: center;
    align-items: center;
    background: rgba(0, 0, 0, 0.75);
    backdrop-filter: blur(4px);
    z-index: 9999;
    padding: 20px;
    object-fit: cover;
  }
  .video-modal.active {
    display: flex;
  }

  /* Modal content */
  .video-modal-content {
    position: relative;
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    width: 90%;
    max-width: 800px;
    animation: modalFadeIn 0.3s ease-out;
  }

  /* Video iframe */
  .video-modal-content video {
    width: 100%;
    height: 100%;
    display: block;
    border: none;
  }

  /* Close button */
  .close-modal {
    position: absolute;
    top: 12px;
    right: 12px;
    background: rgba(0, 0, 0, 0.7);
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: background 0.3s ease;
  }
  .close-modal:hover {
    background: rgba(0, 0, 0, 0.9);
  }
  .close-modal svg {
    width: 20px;
    height: 20px;
    stroke: #fff;
    pointer-events: none;
  }


  @keyframes modalFadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
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
                            <div class="subtitle">Our Business Campus Shows You How To</div>
                            <h1 class="fs-100 text-uppercase fs-sm-12vw mb-4 lh-1">BECOME A SMOOTH AND SKILLED BUSINESS OPERATOR</h1>

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

                               <div class="mt-3 flex justify-center">
<a href="{{ route('course.lesson', ['courseId' => $course->id]) }}" target="_blank" class="glow-gold">JOIN NOW →</a>            </div>
          </div>
                    </div>
                </div>
            </div>
        </section>

    {{-- <section id="section-why-attend" class="section-dark text-light jarallax relative">
            {{-- <div class="gradient-edge-top op-6 h-50 color"></div> --}}
            {{-- <div class="gradient-edge-bottom"></div> --}}
           {{-- <div class="sw-overlay op-8"></div>
            <div class="container">

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
        </div>
    </div>
    </section> --}}

    <section id="section-why-attend" class="section-dark text-light jarallax relative">
        <div class="sw-overlay op-8"></div>
        <div class="container">
            <div class="row g-4">
            <!-- Video Card -->
            @foreach ($videos as $video )
            <div class="col-lg-4 col-md-6">
                <div role="listitem" class="w-dyn-item">
                <a href="javascript:void(0)" class="video-card w-inline-block openVideoModal" data-video="{{ $video->snippet_url }}" data-full-length="{{ $video->image_url }}">

                    <div class="video-card-image-wrapper">
                    <div class="video-card-image-inner">
                        <div class="tagline">{{ $video->category }}</div>
                    </div>
                    </div>
                    <div class="video-card-content">
                    <h3>{{ $video->title }}</h3>
                    <p>{{ $video->description }}</p>
                    {{-- <div class="video-card-length">00:00</div> --}}
                    <div class="card-play-button-small openVideoModal" data-video="{{ $video->image_url }}">
                        <img src="{{ asset('assets/images/cards/5e1f80f9fbdfd472b86cd8ec_play-icon.svg') }}" alt="Play" class="icon-small">
                    </div>
                    </div>
                </a>
                </div>
            </div>
            @endforeach
            </div>
        </div>
        </section>

        <!-- Video Modal -->
        <div class="video-modal" id="videoModal">
        <div class="video-modal-content">
            <button class="close-modal" id="closeVideoModal">
            <!-- SVG Close Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
            <video id="videoFrame" controls autoplay muted playsinline style="width:100%;height:100%;">
            <source src="" type="video/mp4">
            Something went wrong. Your browser does not support embedded videos.
            </video>
        </div>
        </div>

        <script>
        const modal = document.getElementById('videoModal');
        const closeBtn = document.getElementById('closeVideoModal');
        const videoFrame = document.getElementById('videoFrame');
        let videoTimeout;

        // Calculate and show full video length on card
        document.querySelectorAll('.openVideoModal').forEach(card => {
            const videoURL = card.dataset.video;
            const lengthDiv = card.querySelector('.video-card-length');

            const tempVideo = document.createElement('video');
            tempVideo.src = videoURL;

            tempVideo.addEventListener('loadedmetadata', () => {
                const minutes = Math.floor(tempVideo.duration / 60);
                const seconds = Math.floor(tempVideo.duration % 60);
                lengthDiv.textContent = `${minutes}:${seconds.toString().padStart(2,'0')}`;
            });
            
            card.addEventListener('click', () => {
                videoFrame.querySelector('source').src = videoURL;
                videoFrame.load();
                videoFrame.play();

                modal.classList.add('active');
                document.body.classList.add('modal-open');

                // Stop after 10 seconds
                // clearTimeout(videoTimeout);
                // videoTimeout = setTimeout(() => {
                //     videoFrame.pause();
                // }, 10000); // 10 seconds
            });
        });

        // Close modal
        function closeModal() {
            modal.classList.remove('active');
            document.body.classList.remove('modal-open');
            videoFrame.pause();
            videoFrame.removeAttribute('src');
            videoFrame.load();
            // clearTimeout(videoTimeout);
        }

        closeBtn.addEventListener('click', closeModal);

        // Close modal when clicking outside content
        modal.addEventListener('click', e => {
            if (e.target === modal) closeModal();
        });


        </script>

        

@endsection