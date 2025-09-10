@extends('dashboard.master_layout')

@section('content')



<style>
    /* Mobile View */
@media (max-width: 640px) {
  .training-card {
    padding: 14px !important;       /* kam padding mobile ke liye */
  }

  .training-card h2 {
    font-size: 14px !important;     /* chhoti screen par title thoda bada readable */
    line-height: 20px !important;
    margin-bottom: 16px !important; /* kam gap */
  }

  .training-card .category-badge {
    font-size: 11px !important;
    padding: 4px 8px !important;
  }

  .training-card .progress-text {
    font-size: 11px !important;
  }

  .training-card a div {
    padding: 8px 12px !important;
  }

  .training-card a span {
    font-size: 12px !important;
  }
}

</style>


<main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
    <div class="border bg-[#15171e] border-[#313442] rounded-lg pb-11 mb-6 pt-[23px] pl-[29px] pr-[22px]">
        <div class="flex items-center justify-between border-b border-[#313442] mb-[23px] pb-[16px]">
            <div class="text-base leading-5 text-gray-1100 font-semibold dark:text-gray-dark-1100">Business Trainings</div>
       
        </div>
        
        <div class="flex items-center justify-between flex-wrap gap-5 mb-[27px]">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 w-full">
                <a style="background-color:hsl(41.22deg 75.16% 70%);" class="flex items-center justify-between p-4 border border-transparent rounded-lg w-full" href="#">
                    <p class="text-sm leading-4 text-dark font-bold">Categories</p>
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a class="flex items-center justify-between p-4 bg-[#0f2146] border border-transparent rounded-lg w-full" style="background-color:hsl(213.33deg 35.06% 15.1%);" href="#">
                    <p class="text-sm leading-4 text-white font-bold">In Progress</p>
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a class="flex items-center justify-between p-4 bg-[#0f2146] border border-transparent rounded-lg w-full" href="#" style="background-color:hsl(213.33deg 35.06% 15.1%);">
                    <p class="text-sm leading-4 text-white font-bold" >Bookmarks</p>
                    <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-x-6 gap-y-[26px] sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($trainings as $training)
            {{-- Card ka design reference image ke hisaab se update kiya gaya hai --}}
       <div class="training-card flex flex-col border border-[#313442] bg-[#1f2128] rounded-lg p-[22px]">
    <div class="w-full h-[150px] bg-gray-700 mb-[13px] rounded-md flex items-center justify-center text-white text-xs text-center">
        Training Image Placeholder
    </div>

    <div class="flex items-center justify-between mb-3">
        <span class="category-badge text-sm font-semibold text-white bg-[#0f2146] rounded-full px-3 py-1">
            {{ $training->category }}
        </span>
        <span class="progress-text text-xs text-gray-400 dark:text-gray-dark-500">
            0% complete
        </span>
        <a href="#" class="text-gray-500 dark:text-gray-dark-500">
            <!-- 3 dot icon -->
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="6" r="1.5"/>
                <circle cx="12" cy="12" r="1.5"/>
                <circle cx="12" cy="18" r="1.5"/>
            </svg>
        </a>
    </div>

    <h2 class="font-semibold text-gray-1100 text-[12px] leading-[18px] dark:text-gray-dark-1100 mb-[27px]">
        {{ $training->title }}
    </h2>

    <a href="{{ $training->link }}" class="bg-transparent mt-auto border-transparent rounded-lg transition-all duration-200 group w-fit">
        <div style="background-color:hsl(213.33deg 35.06% 15.1%);" class="border-[#313442] flex items-center gap-x-2 border rounded-lg py-2 px-[10px] group-hover:border-transparent">
            <span class="text-white text-[12px] leading-[19px]" style="font-weight: 500;">Start Course</span>
        </div>
    </a>
</div>

            @endforeach

            
        </div>

        <div class="mt-3 flex flex-col  sm:flex-row justify-between items-center text-gray-700 dark:text-gray-200 px-4">
    <div class="mb-4 sm:mb-0 text-sm">
        Showing
        <span class="font-medium">{{ $trainings->firstItem() }}</span>
        to <span class="font-medium">{{ $trainings->lastItem() }}</span>
        of <span class="font-medium">{{ $trainings->total() }}</span> results
    </div>

    <div class="flex items-center space-x-2">
        {{-- Previous --}}
        @if ($trainings->onFirstPage())
            <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Previous</span>
        @else
            <a href="{{ $trainings->previousPageUrl() }}" 
               class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Previous</a>
        @endif

        {{-- Page Numbers --}}
        @foreach ($trainings->links()->elements as $element)
            @if (is_string($element))
                <span class="px-4 py-2 text-gray-300">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $trainings->currentPage())
                        <span class="px-4 py-2 rounded-lg bg-orange-400 text-black dark:bg-orange-500 dark:text-white font-semibold shadow-sm">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 rounded-lg text-white bg-gray-700 hover:bg-gray-800">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($trainings->hasMorePages())
            <a href="{{ $trainings->nextPageUrl() }}" 
               class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Next</a>
        @else
            <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Next</span>
        @endif
    </div>
</div>

    </div>
</main>

@endsection
