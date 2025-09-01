@extends('dashboard.master_layout')
@section('content')

<style>
.glow-gold {
    border: 3px solid #FFB300;
    background-color: transparent;
    width: 60%;
    color: #FFB300;
    font-weight: bold;
    border-radius: 9999px;
    padding: 0.5rem 1.5rem;
    font-size: 0.9rem;
    transition: all 0.3s ease-in-out;
    animation: glowPulse 2s infinite;
}

@keyframes glowPulse {
    0%, 100% {
        box-shadow: 0 0 15px rgba(255, 215, 0, 0.7), 0 0 30px rgba(255, 215, 0, 0.5);
    }
    50% {
        box-shadow: 0 0 25px rgba(255, 223, 0, 0.9), 0 0 50px rgba(255, 223, 0, 0.7);
    }
}
</style>

<main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
    <div class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-lg pb-11 mb-6 pt-[23px] pl-[29px] pr-[22px]">
        <div class="flex items-center justify-between border-b border-neutral dark:border-dark-neutral-border mb-[23px] pb-[16px]">
            <div class="text-base leading-5 text-gray-1100 font-semibold dark:text-gray-dark-1100">Gamify Challenges</div>
        </div>
        
        <!-- Today's Challenges Section -->
        <h2 class="text-2xl font-bold text-gray-1100 dark:text-gray-dark-1100 mb-6">Today’s Challenges</h2>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mb-12">
            @foreach ($todaysChallenges as $challenge)
            <div class="bg-[#0f1624] rounded-2xl shadow-xl overflow-hidden flex flex-col transform transition hover:scale-[1.02] hover:shadow-2xl">
                
                <!-- YouTube Thumbnail as a clickable link -->
                <a href="{{ $challenge->youtube_url }}" target="_blank" class="relative w-full h-48 rounded-lg overflow-hidden cursor-pointer">
                 <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg" 
                            alt="{{ $challenge->title }} thumbnail" 
                            class="w-full h-full object-cover">
                </a>

                <!-- Content -->
                <div class="p-5 flex-1 flex flex-col">
                    <span class="text-xs text-gray-400 uppercase tracking-wide">Posted by: {{ $challenge->postedBy->name ?? 'Admin' }}</span>
                    <div class="mt-3 flex justify-center">
                        <a href="{{ $challenge->youtube_url }}" target="_blank" class="glow-gold">WATCH NOW →</a>
                    </div>
                </div>
            </div>
            @endforeach
            @if ($todaysChallenges->isEmpty())
                <p class="text-gray-500 col-span-full text-center">No challenges posted today. Check back soon!</p>
            @endif
        </div>

        <!-- Recent Challenges Section -->
        <h2 class="text-2xl font-bold text-gray-1100 dark:text-gray-dark-1100 mb-6">Recent Challenges</h2>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($recentChallenges as $challenge)
            <div class="bg-[#0f1624] rounded-2xl shadow-xl overflow-hidden flex flex-col transform transition hover:scale-[1.02] hover:shadow-2xl">
                
                <!-- YouTube Thumbnail as a clickable link -->
                <a href="{{ $challenge->youtube_url }}" target="_blank" class="relative w-full h-48 rounded-lg overflow-hidden cursor-pointer">
                 <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg" 
                            alt="{{ $challenge->title }} thumbnail" 
                            class="w-full h-full object-cover">
                </a>

                <!-- Content -->
                <div class="p-5 flex-1 flex flex-col">
                    <span class="text-xs text-gray-400 uppercase tracking-wide">Posted by: {{ $challenge->postedBy->name ?? 'Admin' }}</span>
                    <div class="mt-3 flex justify-center">
                        <a href="{{ $challenge->youtube_url }}" target="_blank" class="glow-gold">WATCH NOW →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination for Recent Challenges -->
        <div class="mt-8 flex flex-col sm:flex-row justify-between items-center text-gray-700 dark:text-gray-200 px-4">
            <div class="mb-4 sm:mb-0 text-sm">
                Showing
                <span class="font-medium">{{ $recentChallenges->firstItem() }}</span>
                to <span class="font-medium">{{ $recentChallenges->lastItem() }}</span>
                of <span class="font-medium">{{ $recentChallenges->total() }}</span> results
            </div>

            <div class="flex items-center space-x-2">
                {{-- Previous --}}
                @if ($recentChallenges->onFirstPage())
                    <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Previous</span>
                @else
                    <a href="{{ $recentChallenges->previousPageUrl() }}" 
                    class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Previous</a>
                @endif

                {{-- Pagination Links --}}
                {{ $recentChallenges->links('pagination::tailwind') }}

                {{-- Next --}}
                @if ($recentChallenges->hasMorePages())
                    <a href="{{ $recentChallenges->nextPageUrl() }}" 
                    class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Next</a>
                @else
                    <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Next</span>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection
