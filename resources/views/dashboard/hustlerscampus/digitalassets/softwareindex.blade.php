@extends('dashboard.master_layout')

@section('content')

    <style>
        .btn-product {
            background-color: rgb(255, 189, 58);
            color: black;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .btn-product:hover {
            background-color: rgb(240, 175, 50);
        }

        /* Styles for the custom message box */
        #message-box {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 12px 24px;
            border-radius: 8px;
            color: white;
            text-align: center;
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        #message-box.show {
            opacity: 1;
        }

        /* Hide the hidden input field */
        .hidden-input {
            position: absolute;
            left: -9999px;
            width: 1px;
            height: 1px;
        }

        @media screen and (max-width: 640px) {
    .software-card {
        flex-direction: column;
    }

    .software-card img {
        height: 150px;
    }

    .software-card-body h2 {
        font-size: 15px;
    }

    .software-card-body p {
        font-size: 12px;
    }

    .software-price {
        font-size: 16px;
    }

    .software-buttons button,
    .software-buttons a {
        flex: 1 1 100%;
        font-size: 13px;
    }
}
    </style>

    <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
            <h2 class="capitalize text-gray-1100 font-bold text-[28px] leading-[35px] dark:text-gray-dark-1100 mb-[13px]">
                All Softwares Product
            </h2>

            <div class="flex justify-between flex-col gap-y-2 sm:flex-row mb-[43px]">
                <span class="text-gray-500 text-xs dark:text-gray-dark-500">Check out latest updates</span>
                <div class="flex items-center gap-x-2">
                    <img src="{{ asset('assets/images/icons/icon-calendar-1.svg') }}" alt="calendar icon">
                    <time class="text-xs text-gray-500 dark:text-gray-dark-500">Feb 15, 2022 - Feb 21, 2022</time>
                </div>
            </div>

            {{-- Custom message box --}}
            <div id="message-box" class="hidden"></div>

            <section>
                <div class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-2xl pt-6 flex-1 pb-[28px]">

                    <div class="flex items-center justify-between border-b border-neutral dark:border-dark-neutral-border mb-[33px] pb-[19px] px-[25px]">
                        <div class="text-base leading-5 text-gray-1100 font-semibold dark:text-gray-dark-1100">Recent Softwares</div>
                    </div>

                    <meta name="csrf-token" content="{{ csrf_token() }}">

             <div class="px-[25px]">
    {{-- Success / Error Alerts --}}
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-md shadow-sm" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    @if (session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded-md shadow-sm" role="alert">
            <p>{{ session('error') }}</p>
        </div>
    @endif

    {{-- Software Cards Grid --}}
    <div class="grid grid-cols-1 gap-6 mb-[23px] md:grid-cols-2">
        @foreach($softwares as $software)
            <div class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-lg shadow-sm p-5">
                
                {{-- Header --}}
                <div class="flex items-center gap-x-3 mb-3">
                    <div class="w-[40px] h-[40px] overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover" src="{{ $software->software_image_url }}" alt="software logo">
                    </div>
                    <h2 class="font-semibold text-gray-900 text-[15px] dark:text-gray-dark-1100">
                        {{ $software->software_name }}
                    </h2>
                </div>

                {{-- Preview Image --}}
                <div class="overflow-hidden rounded-lg w-full mb-3">
                    <img class="w-full h-[180px] object-cover" src="{{ $software->software_image_url }}" alt="software image">
                </div>

                {{-- Description + Price --}}
                <div class="flex justify-between border-b pb-3 mb-3 border-neutral dark:border-dark-neutral-border">
                    <p class="text-gray-500 text-[13px] leading-[18px] dark:text-gray-dark-500 max-w-[220px]">
                        {{ Str::limit($software->description ?? 'No description available.', 90) }}
                    </p>
                    <div class="text-right">
                        <span class="block text-gray-400 dark:text-gray-dark-400 text-[12px]">Ali Education</span>
                        <p class="font-bold text-gray-900 text-[18px] dark:text-gray-dark-900">
                            ₹{{ $software->price ?? '0.00' }}
                        </p>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="flex flex-wrap gap-3">
                    @if($user)
              <button class="px-4 py-2 rounded-lg generate-link-btn text-black font-medium text-sm hover:bg-yellow-400"
        data-software-id="{{ $software->software_id }}"
        data-link="{{ url('software/'.$software->software_id) . '?ref=' . ($user->referral_code ?? '') }}" style="background-color: rgb(255, 189, 58)">
    Generate Link
</button>

                    @else
                        <button class="px-4 py-2 rounded-lg bg-gray-600 text-white text-sm" 
                                onclick="location.href='{{ route('login') }}'">
                            Login to Share
                        </button>
                    @endif

                      {{-- Ads Creatives Button (unlock if purchased) --}}
    @if($user && in_array($software->software_id, $purchasedProductIds))
     <a href="{{ $software->google_drive_link }}" target="_blank">
    <button class="btn-product bg-green-500 text-black font-medium text-sm hover:bg-green-600">
        Ads creatives
    </button>
</a>
    @else
        <button class="btn-product bg-gray-300 text-gray-700 cursor-not-allowed" disabled title="Purchase to unlock">
            Locked
        </button>
    @endif


                   <a href="{{ route('softwares.show', ['software' => $software->software_id]) }}" target="_blank"
   class="px-4 py-2 rounded-lg bg-orange-500 text-black font-medium text-sm hover:bg-orange-600" style="background-color: rgb(255, 189, 58)">
    Buy Access
</a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Custom Pagination --}}
    <div class="mt-8 flex flex-col sm:flex-row justify-between items-center text-gray-700 dark:text-gray-200 px-4">
        <div class="mb-4 sm:mb-0 text-sm">
            Showing
            <span class="font-medium">{{ $softwares->firstItem() }}</span>
            to <span class="font-medium">{{ $softwares->lastItem() }}</span>
            of <span class="font-medium">{{ $softwares->total() }}</span> results
        </div>

        <div class="flex items-center space-x-2">
            {{-- Previous --}}
            @if ($softwares->onFirstPage())
                <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Previous</span>
            @else
                <a href="{{ $softwares->previousPageUrl() }}" 
                   class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Previous</a>
            @endif

            {{-- Page Numbers --}}
            @foreach ($softwares->links()->elements as $element)
                @if (is_string($element))
                    <span class="px-4 py-2 text-gray-300">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $softwares->currentPage())
                            <span class="px-4 py-2 rounded-lg bg-orange-400 text-black dark:bg-orange-500 dark:text-white font-semibold shadow-sm">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="px-4 py-2 rounded-lg text-white bg-gray-700 hover:bg-gray-800">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next --}}
            @if ($softwares->hasMorePages())
                <a href="{{ $softwares->nextPageUrl() }}" 
                   class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Next</a>
            @else
                <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Next</span>
            @endif
        </div>
    </div>
</div>

                </div>
            </section>
        </div>
    </main>

    {{-- Include Clipboard.js script --}}
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
<script>
const userReferralCode = @json($user->referral_code ?? null);

document.addEventListener('click', function(e) {
  if (!e.target.classList.contains('generate-link-btn')) return;
  const btn = e.target;
  let link = btn.dataset.link;
  // fallback construct if data-link missing
  if (!link) {
    const id = btn.dataset.softwareId;
    link = `${location.origin}/software/${id}?ref=${userReferralCode}`;
  }

  // Copy to clipboard (modern API with fallback)
  if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard.writeText(link).then(() => showToast('Referral link copied!'))
      .catch(() => fallbackCopyTextToClipboard(link));
  } else {
    fallbackCopyTextToClipboard(link);
  }
});

function fallbackCopyTextToClipboard(text) {
  const ta = document.createElement('textarea');
  ta.value = text;
  ta.style.position = 'fixed';
  ta.style.left = '-9999px';
  document.body.appendChild(ta);
  ta.select();
  try {
    document.execCommand('copy');
    showToast('Referral link copied!');
  } catch (err) {
    alert('Copy failed. Here is the link:\n' + text);
  }
  document.body.removeChild(ta);
}

function showToast(msg) {
  let t = document.getElementById('referral-toast');
  if (!t) {
    t = document.createElement('div');
    t.id = 'referral-toast';
    t.style.position = 'fixed';
    t.style.bottom = '20px';
    t.style.right = '20px';
    t.style.padding = '10px 14px';
    t.style.borderRadius = '8px';
    t.style.boxShadow = '0 6px 18px rgba(0,0,0,0.08)';
    t.style.background = '#fff';
    t.style.zIndex = 9999;
    document.body.appendChild(t);
  }
  t.textContent = msg;
  t.style.opacity = 1;
  setTimeout(()=> t.style.opacity = 0, 2200);
}
</script>

@endsection