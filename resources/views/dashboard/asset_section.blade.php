@extends('dashboard.master_layout')
@section('content')

    <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
          <div class="flex items-end justify-between mb-[37px]">
            <div>
              <h2 class="capitalize text-gray-1100 font-bold text-[28px] leading-[35px] dark:text-gray-dark-1100 mb-[13px]">Assets</h2>
              <div class="flex items-center text-xs text-gray-500 gap-x-[11px]">
                <div class="flex items-center gap-x-1"><img src="assets/images/icons/icon-home-2.svg" alt="home icon"><a class="capitalize" href="index.html">home</a></div><img src="assets/images/icons/icon-arrow-right.svg" alt="arrow right icon"><span class="capitalize text-color-brands">Your Cards</span>
              </div>
            </div>
            <div class="flex items-center gap-x-2"> <img src="assets/images/icons/icon-calendar-1.svg" alt="calendar icon">
              <time class="text-xs text-gray-500">Feb 15, 2022 - Feb 21, 2022</time>
            </div>
          </div>
          <div class="rounded-2xl border border-neutral bg-neutral-bg dark:border-dark-neutral-border dark:bg-dark-neutral-bg mb-10 p-[25px] pb-[30px]">
            <div class="flex items-center justify-between mb-4">
              <p class="text-subtitle-semibold font-semibold text-gray-1100 dark:text-gray-dark-1100">Choose your section</p>
              <div class="dropdown dropdown-end ml-auto translate-x-4 z-10">
                <label class="cursor-pointer dropdown-label flex items-center justify-between py-2 px-4" tabindex="0"><img class="cursor-pointer" src="assets/images/icons/icon-toggle.svg" alt="toggle icon">
                </label>
              </div>
            </div>
            <div class="w-full bg-neutral h-[1px] dark:bg-dark-neutral-border mb-[42px]"></div>
            <div class="grid items-center gap-6 grid-cols-1 mb-10 lg:grid-cols-2 xl:grid-cols-3">
            <div class="rounded-lg pt-6 pb-6 flex flex-col items-center justify-center text-white px-[15px] bg-[#4654AB] text-center">
                
                <!-- Icon -->
                <div class="mb-4">
                <img src="assets/images/section-1-icon.png" alt="section icon" class="w-[60px] h-[60px] mx-auto">
                </div>

                <!-- Title -->
                <h3 class="text-lg font-semibold mb-2">Section 1</h3>

                <!-- Description -->
                <p class="text-sm opacity-80 leading-relaxed">
                In Section – Templates, Software, Bundles Etc.
                </p>

            </div>
            <div class="rounded-lg pt-6 pb-6 flex flex-col items-center justify-center text-white px-[15px] bg-[#4654AB] text-center">
                
                <!-- Icon -->
                <div class="mb-4">
                <img src="assets/images/section-1-icon.png" alt="section icon" class="w-[60px] h-[60px] mx-auto">
                </div>

                <!-- Title -->
                <h3 class="text-lg font-semibold mb-2">Section 2</h3>

                <!-- Description -->
                <p class="text-sm opacity-80 leading-relaxed">
                In Section – Templates, Software, Bundles Etc.
                </p>

            </div>
            <div class="rounded-lg pt-6 pb-6 flex flex-col items-center justify-center text-white px-[15px] bg-[#4654AB] text-center">
                
                <!-- Icon -->
                <div class="mb-4">
                <img src="assets/images/section-1-icon.png" alt="section icon" class="w-[60px] h-[60px] mx-auto">
                </div>

                <!-- Title -->
                <h3 class="text-lg font-semibold mb-2">Section 3</h3>

                <!-- Description -->
                <p class="text-sm opacity-80 leading-relaxed">
                In Section – Templates, Software, Bundles Etc.
                </p>

            </div>
            <div class="rounded-lg pt-6 pb-6 flex flex-col items-center justify-center text-white px-[15px] bg-[#4654AB] text-center">
                
                <!-- Icon -->
                <div class="mb-4">
                <img src="assets/images/section-1-icon.png" alt="section icon" class="w-[60px] h-[60px] mx-auto">
                </div>

                <!-- Title -->
                <h3 class="text-lg font-semibold mb-2">Section 4</h3>

                <!-- Description -->
                <p class="text-sm opacity-80 leading-relaxed">
                In Section – Templates, Software, Bundles Etc.
                </p>

            </div>
            </div>

             <div class="flex items-center justify-center">
              <button class="rounded-lg bg-neutral text-gray-1100 px-6 font-semibold dark:text-gray-dark-1100 dark:bg-dark-neutral-border py-[11px] text-[14px] leading-[21px]">+ Add new card</button>
            </div>
        
      </main>
    
@endsection