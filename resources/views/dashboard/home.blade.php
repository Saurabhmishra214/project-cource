@extends('dashboard.master_layout')
@section('content')

<main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
<h2 class="capitalize text-gray-1100 font-bold text-[28px] leading-[35px] dark:text-gray-dark-1100 mb-[13px]">
    Welcome, {{ Auth::user()->name }}
</h2>
          <div class="flex justify-between flex-col gap-y-2 sm:flex-row mb-[34px]">
            <div class="flex items-center text-xs gap-x-[11px]">
              <div class="flex items-center gap-x-1"><img src="assets/images/icons/icon-home-2.svg" alt="home icon"><span class="capitalize text-gray-500 dark:text-gray-dark-500">Home</span></div><img src="assets/images/icons/icon-arrow-right.svg" alt="arrow right icon"><span class="capitalize text-color-brands">Dashboard</span>
            </div>
            <div class="items-center gap-x-2 flex"><img src="assets/images/icons/icon-calendar-1.svg" alt="calendar icon">
              <time class="text-xs text-gray-500 dark:text-gray-dark-500">Feb 15, 2022 - Feb 21, 2022</time>
            </div>
          </div>
          <section>
      <div class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border p-7 rounded-2xl mb-6">
    <div class="grid grid-cols-1 gap-x-[22.75px] gap-y-[24.21px] xl:grid-cols-3 lg:grid-cols-2">

        {{-- Completed Courses --}}
        <div class="flex flex-col gap-y-4 bg-neutral-bg border border-neutral-accent p-5 rounded-2xl dark:bg-dark-neutral-bg dark:border-dark-neutral-border">
            <div class="flex items-center justify-between"> 
                <div class="flex gap-x-2 items-center">
                    <img class="p-2 rounded-lg bg-green" src="{{ asset('assets/images/icons/icon-bag-happy.svg') }}" alt="bag happy icon">
                    <span class="text-gray-1100 font-bold dark:text-gray-dark-1100 text-[16px] leading-[16px]">Completed Courses</span>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-gray-500 text-xs dark:text-gray-dark-500">Courses</span>
                <div class="flex items-center gap-x-[7px]">
                    <span class="text-green font-medium text-[16px] leading-[16px]">{{ $completedCourses }}</span>
                </div>
            </div>
        </div>

        {{-- Products Sell --}}
        <div class="flex flex-col gap-y-4 bg-neutral-bg border border-neutral-accent p-5 rounded-2xl dark:bg-dark-neutral-bg dark:border-dark-neutral-border">
            <div class="flex items-center justify-between"> 
                <div class="flex gap-x-2 items-center">
                    <img class="p-2 rounded-lg bg-blue" src="{{ asset('assets/images/icons/icon-messages-2.svg') }}" alt="messages icon">
                    <span class="text-gray-1100 font-bold dark:text-gray-dark-1100 text-[16px] leading-[16px]">Products Sell</span>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-gray-500 text-xs dark:text-gray-dark-500">Items</span>
                <div class="flex items-center gap-x-[7px]">
                    <span class="text-green font-medium text-[16px] leading-[16px]">{{ $productsSell ?? 0 }}</span>
                </div>
            </div>
        </div>

        {{-- Your Rank --}}
        <div class="flex flex-col gap-y-4 bg-neutral-bg border border-neutral-accent p-5 rounded-2xl dark:bg-dark-neutral-bg dark:border-dark-neutral-border">
            <div class="flex items-center justify-between"> 
                <div class="flex gap-x-2 items-center">
                    <img class="p-2 rounded-lg bg-violet" src="{{ asset('assets/images/icons/icon-folder-2.svg') }}" alt="folder icon">
                    <span class="text-gray-1100 font-bold dark:text-gray-dark-1100 text-[16px] leading-[16px]">Your Rank</span>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-gray-500 text-xs dark:text-gray-dark-500">Completion %</span>
                <div class="flex items-center gap-x-[7px]">
                    <span class="text-green font-medium text-[16px] leading-[16px]">{{ $rankPercentage }}%</span>
                </div>
            </div>
        </div>

    </div>
</div>
                      <div class="flex flex-col gap-y-4 bg-neutral-bg border border-neutral-accent p-5 rounded-2xl dark:bg-dark-neutral-bg dark:border-dark-neutral-border">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col text-white px-5 py-2">                      
                                          <h4 class="">Total Earnings</h4>                      
                                          <h6 class="">4534</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div id="apex_line1" class="apex-charts"></div>            
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                      </div> <!--end row-->


  
            
            
        <!--<footer class="mt-[37px]">-->
        <!--  <div class="w-full bg-neutral h-[1px] dark:bg-dark-neutral-border mb-[25px]"></div>-->
        <!--  <div class="flex items-center justify-between text-desc text-gray-400 flex-wrap gap-5 dark:text-gray-dark-400">-->
        <!--    <div class="flex items-center gap-2 flex-wrap">-->
        <!--      <p> <span>© 2022 -</span><span class="text-color-brands">&nbsp;Frox</span><span>&nbsp;Dashboard</span></p>-->
        <!--      <div class="bg-color-brands rounded-full hidden w-[2px] h-[2px] md:block"></div>-->
        <!--      <p> <span>Made by</span><a class="text-color-brands" href="https://alithemes.com" target="_blank">&nbsp;AliThemes</a></p>-->
        <!--    </div>-->
        <!--    <div class="flex items-center gap-[15px]"><a class="transition-colors duration-300 hover:text-color-brands" href="#">About</a><a class="transition-colors duration-300 hover:text-color-brands" href="#">Careers</a><a class="transition-colors duration-300 hover:text-color-brands" href="#">Policy</a><a class="transition-colors duration-300 hover:text-color-brands" href="#">Contact</a></div>-->
        <!--  </div>-->
        <!--</footer>-->
      </main>


@endsection