@extends('dashboard.master_layout')

@section('content')
<main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
    <div class="border bg-[#15171e] border-[#313442] rounded-lg pb-11 mb-6 pt-[23px] pl-[29px] pr-[22px]">
        <div class="flex items-center justify-between border-b border-[#313442] mb-[23px] pb-[16px]">
            <div class="text-base leading-5 text-gray-1100 font-semibold dark:text-gray-dark-1100">Business Trainings</div>
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
            <div class="flex flex-col border border-[#313442] bg-[#1f2128] rounded-lg p-[22px]">
                {{-- Image ki jagah maine temporary div banaya hai jaisa ki image me dikh raha hai --}}
                <div class="w-full h-[150px] bg-gray-700 mb-[13px] rounded-md flex items-center justify-center text-white text-xs text-center">
                    Training Image Placeholder
                </div>
                {{-- Agar aapko actual images use karni hain to neeche wali line uncomment kar sakte hain --}}
                {{-- <img class="w-full h-auto mb-[13px] rounded-md" src="{{ $training->image_url }}" alt="{{ $training->title }} image"> --}}
                <div class="flex items-center justify-between mb-3">
                    <span class="text-sm font-semibold text-white bg-[#0f2146] rounded-full px-3 py-1">{{ $training->category }}</span>
                    <span class="text-xs text-gray-400 dark:text-gray-dark-500">
                        {{-- Yahan ek placeholder percentage add kiya hai jaisa ki image me hai --}}
                        0% complete
                    </span>
                    <a href="#" class="text-gray-500 dark:text-gray-dark-500">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 10.5C12.8284 10.5 13.5 11.1716 13.5 12C13.5 12.8284 12.8284 13.5 12 13.5C11.1716 13.5 10.5 12.8284 10.5 12C10.5 11.1716 11.1716 10.5 12 10.5Z" fill="currentColor"/>
                            <path d="M12 4.5C12.8284 4.5 13.5 5.17157 13.5 6C13.5 6.82843 12.8284 7.5 12 7.5C11.1716 7.5 10.5 6.82843 10.5 6C10.5 5.17157 11.1716 4.5 12 4.5Z" fill="currentColor"/>
                            <path d="M12 16.5C12.8284 16.5 13.5 17.1716 13.5 18C13.5 18.8284 12.8284 19.5 12 19.5C11.1716 19.5 10.5 18.8284 10.5 18C10.5 17.1716 11.1716 16.5 12 16.5Z" fill="currentColor"/>
                        </svg>
                    </a>
                </div>
                <h2 class="font-semibold text-gray-1100 text-[12px] leading-[18px] dark:text-gray-dark-1100 mb-[27px]">{{ $training->title }}</h2>
                <a href="{{ route('business.training.lesson', $training->id) }}" class="bg-transparent mt-auto border-transparent rounded-lg transition-all duration-200 group w-fit">
                    <div style="background-color:hsl(213.33deg 35.06% 15.1%);" class="border-[#313442] flex items-center gap-x-2 border rounded-lg py-2 px-[10px] group-hover:border-transparent">
                        <span class="text-white text-[12px] leading-[19px]" style="font-weight: 500;" >Start Course</span>
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
