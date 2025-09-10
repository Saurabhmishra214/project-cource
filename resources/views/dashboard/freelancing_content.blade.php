@extends('dashboard.master_layout')



@section('content')
<style>
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
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive adjustments for mobile view */
    /* Mobile: 0 - 639px */
    @media (max-width: 639px) {
        .job-card {
            flex-direction: column !important; /* vertical stack */
            padding: 12px;
        }

        .job-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
            margin-bottom: 12px;
        }

        .job-header img {
            width: 100%;
            max-width: 120px;
            height: auto;
            margin-bottom: 8px;
        }

        .job-footer {
            flex-direction: column;
            gap: 8px;
            margin-top: 12px;
        }

        .job-skills {
            justify-content: flex-start;
        }
        
        /* Adjustments to the main page layout */
        .grid.grid-cols-1.gap-x-6.gap-y-6 {
            gap-x: 16px; /* Reduced gap for mobile */
            gap-y: 16px;
            padding: 16px; /* Reduced padding */
        }
        
        .flex.items-center.justify-between.mb-\[19px\] {
            flex-direction: column; /* Stack header elements */
            align-items: flex-start;
            gap: 16px;
        }

        .flex.items-center.gap-x-2.flex-wrap {
            flex-wrap: wrap; /* Allow filters to wrap */
        }
        
        .list-grid-btn {
            width: 50%; /* Make buttons take up half the width */
            text-align: center;
            justify-content: center;
        }
    }
    

    @media (max-width: 767px) {
    /* Main Header Section */
    .header-container {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
    }

    /* Inner Container for Title & Filter */
    .header-inner {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }

    /* Filter Section */
    .filter-section {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
        gap: 8px; /* Reduced gap for a tighter layout */
    }

    /* Filter Form and its contents */
    .filter-form {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
        gap: 8px; /* Reduced gap for a tighter layout */
    }

    .filter-form select,
    .filter-form button {
        width: 100%;
    }
    
    /* List/Grid Buttons */
    .list-grid-buttons {
        width: 100%;
    }

    .list-grid-buttons a {
        flex: 1; /* Make buttons take equal space */
        justify-content: center; /* Center content inside buttons */
    }
}
</style>
    
    <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
        <div class="flex items-center justify-between mb-[19px] header-container">
    <div class="flex items-center justify-between header-inner">
        <div>
            <h2 class="capitalize text-gray-1100 font-bold text-[28px] leading-[35px] dark:text-gray-dark-1100 mb-[13px]">
                All Jobs
            </h2>
            <div class="flex items-center text-xs text-gray-500 gap-x-[11px]">
                <a href="{{ url('/') }}">
                    <div class="flex items-center gap-x-1">
                        <img src="assets/images/icons/icon-home-2.svg" alt="home icon">
                        <span class="capitalize">home</span>
                    </div>
                </a>

                <img src="assets/images/icons/icon-arrow-right.svg" alt="arrow right icon">
                <span class="capitalize text-color-brands">All Jobs</span>
            </div>
        </div>

        <div class="flex items-center gap-x-2 filter-section">
            <form action="" method="GET" class="flex items-center gap-x-2 filter-form">
                <div class="relative w-full">
                    <select name="skill" id="skill-filter" class="w-full px-[17px] py-[14px] border-neutral bg-neutral rounded-2xl text-xs text-[#8083A3] appearance-none dark:bg-dark-neutral-border dark:border-dark-neutral-border">
                        <option value="">All Skills</option>
                        @foreach($allSkills as $skill)
                            <option value="{{ $skill->id }}" {{ request('skill') == $skill->id ? 'selected' : '' }}>
                                {{ $skill->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-[#8083A3]">
                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                        </svg>
                    </div>
                </div>
                <button type="submit" class="list-grid-btn flex items-center gap-x-2 rounded-2xl bg-blue-600 px-[17px] py-[14px] text-white">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    <span class="text-xs">Filter</span>
                </button>
            </form>
        </div>
    </div>

    <div class="flex list-grid-buttons">
        <a class="list-grid-btn flex items-center gap-x-2 rounded-l-2xl bg-neutral px-[17px] py-[14px] dark:bg-dark-neutral-border" href="product-list.html">
            <img src="assets/images/icons/icon-row-vertical.svg" alt="row vertical icon">
            <span class="text-xs text-[#8083A3]">List</span>
        </a>
        <a class="list-grid-btn flex items-center gap-x-2 rounded-r-2xl bg-neutral active px-[17px] py-[14px] dark:bg-dark-neutral-border" href="product-grid.html">
            <img src="assets/images/icons/icon-grid.svg" alt="grid icon">
            <span class="text-xs text-[#8083A3]">Grid</span>
        </a>
    </div>
</div>
          <div class="flex items-center gap-x-6">
  <div class="flex-1">
    {{-- Grid layout for job cards --}}
    <div class="grid grid-cols-1 gap-x-6 gap-y-6 border p-6 bg-neutral-bg rounded-2xl border-neutral mb-9 
                 dark:bg-dark-neutral-bg dark:border-dark-neutral-border pb-[24px] xl:grid-cols-3 lg:grid-cols-2">
      
      {{-- Job data ko display karne ke liye loop chala rahe hain --}}
@foreach ($jobs as $job)
    <a class="block border border-neutral bg-neutral-bg rounded-lg p-5 dark:border-dark-neutral-border dark:bg-dark-neutral-bg hover:shadow-md transition" href="#">

        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 mb-4">
            <img class="border border-neutral rounded-full dark:border-dark-neutral-border w-[60px] h-[60px] object-cover"
                 src="https://placehold.co/60x60/e2e8f0/1a202c?text={{ substr($job->company_name, 0, 1) }}" alt="company logo">
            <div class="flex-1">
                <h3 class="text-base font-semibold text-gray-900 dark:text-gray-dark-900">{{ $job->title }}</h3>
                <p class="text-xs text-gray-500 dark:text-gray-dark-500">{{ $job->company_name }} • {{ $job->location }}</p>
            </div>
        </div>

        <div class="flex gap-2 flex-wrap mb-4">
            @foreach ($job->skills as $skill)
                <span class="px-2 py-1 text-xs bg-gray-200 dark:bg-gray-700 rounded-md">{{ $skill->name }}</span>
            @endforeach
        </div>

        <p class="text-gray-500 dark:text-gray-dark-500 text-sm leading-[18px] border-b border-neutral dark:border-dark-neutral-border pb-3 mb-3">
            {{ $job->description }}
        </p>

        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 mt-4">
            {{-- Buttons on a single line for all screens --}}
            <div class="flex items-center gap-3">
                <div class="card-play-button-small openVideoModal" data-video="{{ asset('storage/' . $job->summary_video) }}">
                    <button style="background-color: white;color:black;"
                            class="px-4 py-2 text-xs font-semibold bg-color-brands rounded-lg hover:bg-opacity-90">
                        Learn
                    </button>
                </div>
                <button style="background-color: white;color:black;"
                        class="px-4 py-2 text-xs font-semibold bg-color-brands rounded-lg hover:bg-opacity-90"
                        onclick="window.location='{{ route('applyjob.form', ['job' => $job->id]) }}'">
                    Apply
                </button>
            </div>
            
            {{-- Duration and Pay on a single line for all screens --}}
            <div class="flex items-center gap-4">
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-dark-500">Duration</p>
                    <p class="text-sm font-semibold text-gray-900 dark:text-gray-dark-900">{{ $job->duration }}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-dark-500">Pay</p>
                    <p class="text-sm font-semibold text-gray-900 dark:text-gray-dark-900">{{ $job->pay }}</p>
                </div>
            </div>
        </div>
    </a>
@endforeach
    </div>
  </div>


  
</div>


<div class="mt-8 flex flex-col sm:flex-row justify-between items-center text-gray-700 dark:text-gray-200 px-4">
    <div class="mb-4 sm:mb-0 text-sm">
        Showing
        <span class="font-medium">{{ $jobs->firstItem() }}</span>
        to <span class="font-medium">{{ $jobs->lastItem() }}</span>
        of <span class="font-medium">{{ $jobs->total() }}</span> results
    </div>

    <div class="flex items-center space-x-2">
        {{-- Previous --}}
        @if ($jobs->onFirstPage())
            <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Previous</span>
        @else
            <a href="{{ $jobs->previousPageUrl() }}" 
               class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Previous</a>
        @endif

        {{-- Page Numbers --}}
        @foreach ($jobs->links()->elements as $element)
            @if (is_string($element))
                <span class="px-4 py-2 text-gray-300">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $jobs->currentPage())
                        <span class="px-4 py-2 rounded-lg bg-orange-400 text-black dark:bg-orange-500 dark:text-white font-semibold shadow-sm">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 rounded-lg text-white bg-gray-700 hover:bg-gray-800">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($jobs->hasMorePages())
            <a href="{{ $jobs->nextPageUrl() }}" 
               class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Next</a>
        @else
            <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Next</span>
        @endif
    </div>
</div>
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



{{-- Static modals and other content (unchanged) --}}
@endsection

<!-- Head section me (CSS ke sath) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        @if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    });
</script>
@endif



@if(session('error'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('error') }}",
        });
    });
</script>
@endif
