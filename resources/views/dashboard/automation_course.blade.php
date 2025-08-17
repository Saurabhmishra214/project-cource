@extends('dashboard.master_layout')
@section('content')
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
        <div class="grid grid-cols-1 gap-x-6 gap-y-[26px] sm:grid-cols-2 lg:grid-cols-3">
            {{-- Loop chala rahe hain `$courses` collection par --}}
            @foreach ($courses as $course)
            <a class="flex flex-col border bg-neutral-bg border-neutral rounded-lg p-[22px] dark:bg-dark-neutral-bg dark:border-dark-neutral-border" href="{{ $course->link }}">
                {{-- Course ki image --}}
                <img class="mb-[13px]" src="{{ $course->image_url }}" alt="{{ $course->title }}">
                
                <div class="flex justify-between mb-[9px]">
                    {{-- Course ki category --}}
                    <span class="leading-4 text-gray-500 text-[10.5958px] dark:text-gray-dark-500">{{ $course->category }}</span>
                    {{-- Yahan aap date ya koi aur data dikha sakte hain --}}
                    <time class="leading-4 text-gray-500 text-[10.5958px] dark:text-gray-dark-500">
                        {{-- example: {{ $course->created_at->format('d F') }} --}}
                    </time>
                </div>
                
                {{-- Course ka title --}}
                <h2 class="font-semibold text-gray-1100 text-[12px] leading-[18px] dark:text-gray-dark-1100 mb-[27px]">{{ $course->title }}</h2>
                
                {{-- View now button --}}
                <button class="bg-neutral-bg mt-auto border-transparent rounded-lg transition-all duration-200 group w-fit dark:bg-dark-neutral-bg border-[4px] dark:hover:border-dark-neutral-border hover:border-neutral">
                    <div class="border-neutral flex items-center gap-x-2 border rounded-lg py-2 dark:border-dark-neutral-border px-[10px] group-hover:border-transparent">
                        {{-- Edit icon ko inline SVG se badal diya gaya hai --}}
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.8333 3.375L10.625 1.16667L2.91667 8.875L1.16667 12.8333L5.125 11.0833L12.8333 3.375Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="text-gray-1100 dark:text-gray-dark-1100 text-[12px] leading-[19px]">View now</span>
                    </div>
                </button>
            </a>
            @endforeach
        </div>
    </div>
</main>
@endsection
