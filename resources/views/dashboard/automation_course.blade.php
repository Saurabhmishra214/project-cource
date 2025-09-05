@extends('dashboard.master_layout')
@section('content')

<style>
.glow-gold {
  border: 3px solid linear-gradient(90deg, #FFD700, #FFC107, #FFB300);
  background-color: transparent;
  width: 60%;
  color: #FFB300;
  font-weight: bold;
  border-radius: 9999px;
  padding: 0.5rem 1.5rem;
  font-size: 0.9rem;
  /* box-shadow: 0 0 20px rgba(255, 215, 0, 0.7), 0 0 40px rgba(255, 215, 0, 0.5); */
  transition: all 0.3s ease-in-out;
  animation: glowPulse 2s infinite;
}

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

/* .glow-gold:hover {
  box-shadow: 0 0 30px rgba(255, 223, 0, 0.9), 0 0 60px rgba(255, 223, 0, 0.7);
}

@keyframes glowPulse {
  0%, 100% {
    box-shadow: 0 0 15px rgba(255, 215, 0, 0.7), 0 0 30px rgba(255, 215, 0, 0.5);
  }
  50% {
    box-shadow: 0 0 25px rgba(255, 223, 0, 0.9), 0 0 50px rgba(255, 223, 0, 0.7);
  }
} */
</style>
<main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
    <div class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-lg pb-11 mb-6 pt-[23px] pl-[29px] pr-[22px]">
        <div class="flex items-center justify-between border-b border-neutral dark:border-dark-neutral-border mb-[23px] pb-[16px]">
            <div class="text-base leading-5 text-gray-1100 font-semibold dark:text-gray-dark-1100">Available Courses</div>
            <div class="dropdown dropdown-end ml-auto translate-x-4 z-10">
                <label class="cursor-pointer dropdown-label flex items-center justify-between py-2 px-4" tabindex="0">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 12H20M4 6H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </label>
                <ul class="dropdown-content" tabindex="0">
                    <div class="relative menu rounded-box dropdown-shadow min-w-[126px] bg-neutral-bg mt-[10px] pt-[14px] pb-[7px] px-4 border border-neutral-border dark:text-gray-dark-500 dark:border-dark-neutral-border dark:bg-dark-neutral-bg">
                        <div class="border-solid border-b-8 border-x-transparent border-x-8 border-t-0 absolute w-[14px] top-[-7px] border-b-transparent right-[18px]"></div>
                        <li class="text-normal mb-[7px]"><a class="flex items-center bg-transparent p-0 gap-[7px]" href="#"> <span class="text-gray-500 text-[11px] leading-4 hover:text-gray-700">Sales report</span></a>
                        </li>
                        <li class="text-normal mb-[7px]"><a class="flex items-center bg-transparent p-0 gap-[7px]" href="#"> <span class="text-gray-500 text-[11px] leading-4 hover:text-gray-700">Export report</span></a>
                        </li>
                        <li class="text-normal mb-[7px]"><a class="flex items-center bg-transparent p-0 gap-[7px]" href="#"> <span class="text-gray-500 text-[11px] leading-4 hover:text-gray-700">Profit manage</span></a>
                        </li>
                        <li class="text-normal mb-[7px]"><a class="flex items-center bg-transparent p-0 gap-[7px]" href="#"> <span class="text-gray-500 text-[11px] leading-4 hover:text-gray-700">Revenue report</span></a>
                        </li>
                        <div class="w-full bg-neutral h-[1px] my-[7px] dark:bg-dark-neutral-border"></div>
                        <li class="text-normal mb-[7px]"><a class="flex items-center bg-transparent p-0 gap-[7px]" href="#remove"> <span class="text-red text-[11px] leading-4">Remove widget</span></a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        
  <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach ($courses as $course)
      <div class="bg-[#0f1624] rounded-2xl shadow-xl overflow-hidden flex flex-col transform transition hover:scale-[1.02] hover:shadow-2xl">
          
          <div class="relative w-full h-48 rounded-lg overflow-hidden">
              {{-- Background Thumbnail --}}
              <img src="{{ asset('assets/images/angular-course.png') }}" 
                  alt="{{ $course->title }}" 
                  class="w-full h-full object-cover">

              {{-- Play Button Overlay --}}
              <div class="card-play-button-small openVideoModal" data-video="{{ $course->video_url }}">
              <img src="{{ asset('assets/images/play-button.png') }}" 
                  alt="Play Button"
                  class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 
                        w-16 h-16 opacity-80 hover:opacity-100 transition cursor-pointer icon-small">
              </div>
          </div>



          {{-- Content (unchanged) --}}
          <div class="p-5 flex-1 flex flex-col">
              <span class="text-xs text-gray-400 uppercase tracking-wide">{{ $course->category }}</span>
              <h2 class="text-white font-semibold text-lg leading-snug mt-1">{{ $course->title }}</h2>
              <p class="text-gray-300 text-sm mt-2 line-clamp-2">{{ $course->description }}</p>

              <div class="mt-3 flex justify-center">
                  <a href="{{ $course->link }}" target="_blank" class="glow-gold">JOIN NOW →</a>
              </div>
          </div>
      </div>
      @endforeach
  </div>
  <!-- Modal -->
  {{-- <div id="videoModal" class="hidden fixed inset-0 flex items-center justify-center bg-black/70 z-50">
    <div class="bg-[#0f1624] rounded-2xl shadow-2xl max-w-3xl w-full relative overflow-hidden">
        
        <!-- Close Button -->
        <button  onclick="closeModal('{{ $course->image_url }}')"
            class="absolute top-4 right-4 text-white hover:text-red-400 transition p-2 rounded-full bg-white/10 hover:bg-white/20">
            <!-- Lucide / Heroicon Close (X) -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                fill="none" viewBox="0 0 24 24" stroke-width="2" 
                stroke="currentColor" class="w-6 h-6" >
              <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M6 18L18 6M6 6l12 12"  />
            </svg>
        </button>

        <!-- Video -->
        <video id="modalVideo" controls autoplay class="w-full rounded-b-2xl">
            <source id="modalVideoSource" src="" type="video/mp4">
        </video>
    </div>
  </div> --}}


<div class="mt-8 flex flex-col sm:flex-row justify-between items-center text-gray-700 dark:text-gray-200 px-4">
    <div class="mb-4 sm:mb-0 text-sm">
        Showing
        <span class="font-medium">{{ $courses->firstItem() }}</span>
        to <span class="font-medium">{{ $courses->lastItem() }}</span>
        of <span class="font-medium">{{ $courses->total() }}</span> results
    </div>

    <div class="flex items-center space-x-2">
        {{-- Previous --}}
        @if ($courses->onFirstPage())
            <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Previous</span>
        @else
            <a href="{{ $courses->previousPageUrl() }}" 
               class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Previous</a>
        @endif

        {{-- Page Numbers --}}
        @foreach ($courses->links()->elements as $element)
            @if (is_string($element))
                <span class="px-4 py-2 text-gray-300">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $courses->currentPage())
                        <span class="px-4 py-2 rounded-lg bg-orange-400 text-black dark:bg-orange-500 dark:text-white font-semibold shadow-sm">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 rounded-lg text-white bg-gray-700 hover:bg-gray-800">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($courses->hasMorePages())
            <a href="{{ $courses->nextPageUrl() }}" 
               class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Next</a>
        @else
            <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Next</span>
        @endif
    </div>
</div>





    </div>
</main>
<!-- Video Modal -->
        <div class="video-modal" id="videoModal">
        <div class="video-modal-content">
            <button class="close-modal" id="closeVideoModal">
            <!-- SVG Close Icon -->
            {{-- <svg xmlns="" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg> --}}
            </button>
            <video id="videoFrame" controls autoplay muted playsinline style="width:100%;height:100%;">
            <source src="" type="video/mp4">
            Something went wrong. Your browser does not support embedded videos.
            </video>
        </div>
        </div>

{{-- <script>
function togglePlay(id) {
  let video = document.getElementById("video" + id);
  if (video.paused) video.play();
  else video.pause();
}

function toggleMute(id) {
  let video = document.getElementById("video" + id);
  video.muted = !video.muted;
}

function goFullscreen(id) {
  let video = document.getElementById("video" + id);
  if (video.requestFullscreen) {
    video.requestFullscreen();
  } else if (video.webkitRequestFullscreen) { // Safari
    video.webkitRequestFullscreen();
  }
}
</script> --}}
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
