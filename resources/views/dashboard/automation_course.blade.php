@extends('dashboard.master_layout')
@section('content')
<main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
    <div class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-lg pb-11 mb-6 pt-[23px] pl-[29px] pr-[22px]">
              <div class="flex items-center justify-between border-b border-neutral dark:border-dark-neutral-border mb-[23px] pb-[16px]">
                <div class="text-base leading-5 text-gray-1100 font-semibold dark:text-gray-dark-1100">Available Courses</div>
                <div class="dropdown dropdown-end ml-auto translate-x-4 z-10">
                  <label class="cursor-pointer dropdown-label flex items-center justify-between py-2 px-4" tabindex="0"><img class="cursor-pointer" src="assets/images/icons/icon-toggle.svg" alt="toggle icon">
                  </label>
                  <ul class="dropdown-content" tabindex="0">
                    <div class="relative menu rounded-box dropdown-shadow min-w-[126px] bg-neutral-bg mt-[10px] pt-[14px] pb-[7px] px-4 border border-neutral-border  dark:text-gray-dark-500 dark:border-dark-neutral-border dark:bg-dark-neutral-bg">
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
              <div class="grid grid-cols-1 gap-x-6 gap-y-[26px] sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"><a class="flex flex-col border bg-neutral-bg border-neutral rounded-lg p-[22px] dark:bg-dark-neutral-bg dark:border-dark-neutral-border" href="#"><img class="mb-[13px]" src="assets/images/crm-bg-1.png" alt="background">
                  <div class="flex justify-between mb-[9px]"><span class="leading-4 text-gray-500 text-[10.5958px] dark:text-gray-dark-500">Courtney Henry</span>
                    <time class="leading-4 text-gray-500 text-[10.5958px] dark:text-gray-dark-500">06 September</time>
                  </div>
                  <h2 class="font-semibold text-gray-1100 text-[12px] leading-[18px] dark:text-gray-dark-1100 mb-[27px]">Starting your traveling blog with Vasco</h2>
                  <button class="bg-neutral-bg mt-auto border-transparent rounded-lg transition-all duration-200 group w-fit dark:bg-dark-neutral-bg border-[4px] dark:hover:border-dark-neutral-border hover:border-neutral">
                    <div class="border-neutral flex items-center gap-x-2 border rounded-lg py-2 dark:border-dark-neutral-border px-[10px] group-hover:border-transparent"><img src="assets/images/icons/icon-edit-2.svg" alt="edit icon"><span class="text-gray-1100 dark:text-gray-dark-1100 text-[12px] leading-[19px]">View now</span></div>
                  </button></a>
                  
                  
            </div>
</main>
@endsection