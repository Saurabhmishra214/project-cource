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
        
        {{-- Yahan hum data ko dynamically display karenge --}}
        {{-- Grid class ko `lg:grid-cols-3` tak hi rakha hai taaki ek row mein teen cards dikhein --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($courses as $course)
    <div class="bg-[#0f1624]  shadow-xl overflow-hidden flex flex-col transform transition hover:scale-[1.02] hover:shadow-2xl">
        
        {{-- Video Section --}}
        <div class="relative rounded-lg overflow-hidden">
            <video id="video{{ $course->id }}" 
                class="w-full h-48 object-cover" 
                preload="metadata" 
                muted>
                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            </video>

            {{-- Custom Controls --}}
            <div class=class="absolute inset-0 flex items-center justify-center 
                bg-black/40 opacity-0 group-hover:opacity-100 
                transition-opacity duration-300 z-10">
                <div class="flex gap-4">
                    {{-- Play / Pause --}}
                    <button onclick="togglePlay({{ $course->id }})"
                        class="bg-white/20 hover:bg-white/40 rounded-full p-3 text-white shadow-lg">
                        ▶
                    </button>

                    {{-- Mute --}}
                    <button onclick="toggleMute({{ $course->id }})"
                        class="bg-white/20 hover:bg-white/40 rounded-full p-3 text-white shadow-lg">
                        🔊
                    </button>

                    {{-- Fullscreen --}}
                    <button onclick="goFullscreen({{ $course->id }})"
                        class="bg-white/20 hover:bg-white/40 rounded-full p-3 text-white shadow-lg">
                        ⛶
                    </button>
                </div>
            </div>
        </div>


        {{-- Content --}}
        <div class="p-5 flex-1 flex flex-col border-b border-l border-r border-[#b8860b]">
            <span class="text-xs text-gray-400 uppercase tracking-wide">{{ $course->category }}</span>
            <h2 class="text-white font-semibold text-lg leading-snug mt-1">{{ $course->title }}</h2>
            <p class="text-gray-300 text-sm mt-2 line-clamp-2">{{ $course->description }}</p>

            {{-- Glowing Join Now Button --}}
            <div class="mt-3 flex justify-center">
                <a href="{{ $course->link }}" class="glow-gold">JOIN NOW →</a>
            </div>
            
        </div>
    </div>
    @endforeach
</div>



    </div>
</main>

<script>
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
</script>
@endsection
