@extends('dashboard.master_layout')
@section('content')
    <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
            <div class="flex items-end justify-between mb-[37px]">
                <div>
                    <h2
                        class="capitalize text-gray-1100 font-bold text-[28px] leading-[35px] dark:text-gray-dark-1100 mb-[13px]">
                        Assets</h2>
                    <div class="flex items-center text-xs text-gray-500 gap-x-[11px]">
                        <div class="flex items-center gap-x-1"><img src="assets/images/icons/icon-home-2.svg"
                                alt="home icon"><a class="capitalize" href="index.html">home</a></div><img
                            src="assets/images/icons/icon-arrow-right.svg" alt="arrow right icon"><span
                            class="capitalize text-color-brands">Your Cards</span>
                    </div>
                </div>
                <div class="flex items-center gap-x-2"> <img src="assets/images/icons/icon-calendar-1.svg"
                        alt="calendar icon">
                    <time class="text-xs text-gray-500">Feb 15, 2022 - Feb 21, 2022</time>
                </div>
            </div>
            <div
                class="rounded-2xl border border-neutral bg-neutral-bg dark:border-dark-neutral-border dark:bg-dark-neutral-bg mb-10 p-[25px] pb-[30px]">
                <div class="flex items-center justify-between mb-4">
                    <p class="text-subtitle-semibold font-semibold text-gray-1100 dark:text-gray-dark-1100">Choose your
                        section</p>
                    <div class="dropdown dropdown-end ml-auto translate-x-4 z-10">
                        <label class="cursor-pointer dropdown-label flex items-center justify-between py-2 px-4"
                            tabindex="0"><img class="cursor-pointer" src="assets/images/icons/icon-toggle.svg"
                                alt="toggle icon">
                        </label>
                    </div>
                </div>
                <div class="w-full bg-neutral h-[1px] dark:bg-dark-neutral-border mb-[42px]"></div>
                <div class="grid items-center gap-6 grid-cols-1 mb-10 lg:grid-cols-2 xl:grid-cols-3">
<a href="{{route('product.index')}}" class="block">
    <div
        class="rounded-lg pt-6 pb-6 flex flex-col items-center justify-center text-white px-[15px] bg-[#4654AB] text-center 
        cursor-pointer hover:bg-[#3a4792] transition">
        
        <!-- Icon -->
        <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18" />
            </svg>
        </div>

        <!-- Title -->
        <h3 class="text-lg font-semibold mb-2">Section 1</h3>

        <!-- Description -->
        <p class="text-sm opacity-80 leading-relaxed">
            In Section – Templates, Software, Bundles Etc.
        </p>
    </div>
</a>


                    <div
                        class="rounded-lg pt-6 pb-6 flex flex-col items-center justify-center text-white px-[15px] bg-[#4654AB] text-center">

                        <!-- Icon -->
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>

                        <!-- Title -->
                        <h3 class="text-lg font-semibold mb-2">Section 2</h3>

                        <!-- Description -->
                        <p class="text-sm opacity-80 leading-relaxed">
                            In Section – Templates, Software, Bundles Etc.
                        </p>

                    </div>
                    <div
                        class="rounded-lg pt-6 pb-6 flex flex-col items-center justify-center text-white px-[15px] bg-[#4654AB] text-center">

                        <!-- Icon -->
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </div>

                        <!-- Title -->
                        <h3 class="text-lg font-semibold mb-2">Section 3</h3>

                        <!-- Description -->
                        <p class="text-sm opacity-80 leading-relaxed">
                            In Section – Templates, Software, Bundles Etc.
                        </p>

                    </div>
                    <div
                        class="rounded-lg pt-6 pb-6 flex flex-col items-center justify-center text-white px-[15px] bg-[#4654AB] text-center">

                        <!-- Icon -->
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83l-2.83 2.83a2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0l-2.83-2.83a2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83l2.83-2.83a2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33h.23a1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0l2.83 2.83a2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82z">
                                </path>
                            </svg>
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
                    <button
                        class="rounded-lg bg-neutral text-gray-1100 px-6 font-semibold dark:text-gray-dark-1100 dark:bg-dark-neutral-border py-[11px] text-[14px] leading-[21px]">+
                        Add new card</button>
                </div>

    </main>
@endsection
