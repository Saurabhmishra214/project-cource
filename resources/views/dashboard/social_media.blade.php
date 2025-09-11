@extends('dashboard.master_layout')

@section('content')

    <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
          <div class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-2xl pt-12 pb-10 px-6 mb-10">
            <h3 class="leading-4 text-gray-1100 text-center mb-5 font-medium text-[16px] dark:text-gray-dark-1100">Add new media</h3>
            <div class="border-dashed border-2 text-center border-neutral mb-12 mx-auto cursor-pointer py-[26px] dark:border-dark-neutral-border max-w-[724px]"><img class="mx-auto inline-block mb-[15px]" src="{{ asset('assets/images/icons/icon-image.svg') }}" alt="image icon">
              <p class="text-sm leading-6 text-gray-500 font-normal mb-[5px]">Drop your image here, or browse</p>
              <p class="leading-6 text-gray-400 text-[13px]">JPG,PNG and GIF files are allowed</p>
            </div>
            <div class="grid grid-cols-1 gap-6 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2">
                @foreach ($socialMedias as $media)
                    <div class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border px-5 rounded-[7px] pt-[19px] pb-[17px]">
                        
                        {{-- Image (profile_url) --}}
                        <div class="mb-3">
                            <a href="{{ $media->account_link ?? '#' }}" target="_blank" rel="noopener noreferrer">
                                <img class="rounded" 
                                src="{{ $media->profile_url ?? asset('assets/images/cms-media-1.png') }}" 
                                alt="{{ $media->platform_name }}">
                            </a>
                            
                        </div>

                        {{-- Username & Platform --}}
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 text-[10px] leading-[15px] dark:text-gray-dark-500">
                                {{ $media->username ?? 'N/A' }}
                            </span>
                            <span class="text-gray-500 text-[10px] leading-[15px] dark:text-gray-dark-500">
                                {{ $media->platform_name ?? 'Unknown' }}
                            </span>
                        </div>

                        {{-- Followers Count --}}
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-gray-500 text-[10px] leading-[15px] dark:text-gray-dark-500">
                                Followers
                            </span>
                            <span class="text-gray-500 text-[10px] leading-[15px] dark:text-gray-dark-500">
                                {{ $media->followers_count ?? 0 }}
                            </span>
                        </div>

                    </div>
                @endforeach
            </div>

          </div>
          {{-- <div class="flex items-center gap-x-10">
            <div>
              <button class="btn text-sm h-fit min-h-fit capitalize leading-4 border-0 bg-color-brands font-semibold py-[11px] px-[18px] hover:bg-color-brands">1</button>
              <button class="btn text-sm h-fit min-h-fit capitalize leading-4 border-0 bg-transparent font-semibold text-gray-1100 py-[11px] px-[18px] hover:text-white hover:bg-color-brands dark:text-gray-dark-1100">2</button>
              <button class="btn text-sm h-fit min-h-fit capitalize leading-4 border-0 bg-transparent font-semibold text-gray-1100 py-[11px] px-[18px] hover:text-white hover:bg-color-brands dark:text-gray-dark-1100">3</button>
              <button class="btn text-sm h-fit min-h-fit capitalize leading-4 border-0 bg-transparent font-semibold text-gray-1100 py-[11px] px-[18px] hover:text-white hover:bg-color-brands dark:text-gray-dark-1100">4</button>
              <button class="btn text-sm h-fit min-h-fit capitalize leading-4 border-0 bg-transparent font-semibold text-gray-1100 py-[11px] px-[18px] hover:text-white hover:bg-color-brands dark:text-gray-dark-1100">5</button>
            </div><a class="items-center justify-center border rounded-lg border-neutral hidden gap-x-[10px] px-[18px] py-[11px] dark:border-dark-neutral-border sm:flex" href="#"> <span class="text-gray-400 text-xs font-semibold leading-[18px] dark:text-gray-dark-400">Next</span><img src="{{ asset('assets/images/icons/icon-arrow-right-long.svg') }}" alt="arrow right icon"></a>
          </div> --}}
      </main>

@endsection