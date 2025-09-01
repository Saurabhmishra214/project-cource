@extends('dashboard.master_layout')
@section('content')

<style>
   .btn-product {
    background-color: rgb(255, 189, 58);
    color: black;
    border: none;
    /* Increased padding for more height and width */
    padding: 8px 16px; 
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px; /* Added font size for better readability */
    font-weight: 500; /* Added font weight */
    transition: background-color 0.3s ease; /* Added a smooth hover effect */
}

.btn-product:hover {
    background-color: rgb(240, 175, 50); /* Darker color on hover */
}
</style>

{{-- head section में (CSS optional है) --}}
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

{{-- body बंद होने से पहले (JS required) --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
            <h2 class="capitalize text-gray-1100 font-bold text-[28px] leading-[35px] dark:text-gray-dark-1100 mb-[13px]">All
                courses</h2>
            <div class="flex justify-between flex-col gap-y-2 sm:flex-row mb-[43px]"><span
                    class="text-gray-500 text-xs dark:text-gray-dark-500">Check out latest updates</span>
                <div class="flex items-center gap-x-2"> 
    <img src="{{ asset('assets/images/icons/icon-calendar-1.svg') }}" alt="calendar icon">
    <time class="text-xs text-gray-500 dark:text-gray-dark-500">Feb 15, 2022 - Feb 21, 2022</time>
</div>
            </div>
            <section>
                <div
                    class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-2xl pt-6 flex-1 pb-[28px]">
                <div class="flex items-center justify-between border-b border-neutral dark:border-dark-neutral-border mb-[33px] pb-[19px] px-[25px]">
    <div class="text-base leading-5 text-gray-1100 font-semibold dark:text-gray-dark-1100">Recent
        Courses</div>
    <div class="dropdown dropdown-end ml-auto translate-x-4 z-10">
        <label class="cursor-pointer dropdown-label flex items-center justify-between py-2 px-4"
            tabindex="0">
            <img class="cursor-pointer" src="{{ asset('assets/images/icons/icon-toggle.svg') }}"
                alt="toggle icon">
        </label>
        <ul class="dropdown-content" tabindex="0">
            <div
                class="relative menu rounded-box dropdown-shadow min-w-[126px] bg-neutral-bg mt-[10px] pt-[14px] pb-[7px] px-4 border border-neutral-border dark:text-gray-dark-500 dark:border-dark-neutral-bg">
                <div
                    class="border-solid border-b-8 border-x-transparent border-x-8 border-t-0 absolute w-[14px] top-[-7px] border-b-transparent right-[18px]">
                </div>
                <li class="text-normal mb-[7px]">
                    <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                        <span class="text-gray-500 text-[11px] leading-4 hover:text-gray-700">Sales
                            report</span>
                    </a>
                </li>
                <li class="text-normal mb-[7px]">
                    <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                        <span class="text-gray-500 text-[11px] leading-4 hover:text-gray-700">Export
                            report</span>
                    </a>
                </li>
                <li class="text-normal mb-[7px]">
                    <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                        <span class="text-gray-500 text-[11px] leading-4 hover:text-gray-700">Profit
                            manage</span>
                    </a>
                </li>
                <li class="text-normal mb-[7px]">
                    <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                        <span class="text-gray-500 text-[11px] leading-4 hover:text-gray-700">Revenue
                            report</span>
                    </a>
                </li>
                <div class="w-full bg-neutral h-[1px] my-[7px] dark:bg-dark-neutral-border"></div>
                <li class="text-normal mb-[7px]">
                    <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#remove">
                        <span class="text-red text-[11px] leading-4">Remove widget</span>
                    </a>
                </li>
            </div>
        </ul>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="px-[25px]">
    <div class="grid grid-cols-1 gap-6 mb-[23px] md:grid-cols-2">
        @foreach($products as $product)
        <div class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border pb-7 rounded-[9px] px-[18px] pt-[26px]">
            <div class="flex items-center gap-x-[17px] mb-[17px]">
                <div class="overflow-hidden flex-shrink-0 w-[38px] h-[34px]">
                    <img class="w-full h-full object-cover" src="{{ $product->product_image_url }}" alt="product logo">
                </div>
                <h2 class="font-semibold text-gray-1100 text-[14px] leading-[18px] dark:text-gray-dark-1100">
                    {{ $product->product_name }}
                </h2>
            </div>
            
            <div class="overflow-hidden rounded-lg w-full mb-[17px]">
                <img class="w-full h-[180px] object-cover rounded-md" src="{{ $product->product_image_url }}" alt="product image">
            </div>
            
            <div class="flex justify-between border-b border-neutral flex-col gap-3 pb-[18px] dark:border-dark-neutral-border mb-[18px] sm:flex-row">
                <p class="text-gray-500 text-[11px] leading-[15px] dark:text-gray-dark-500 max-w-[206px]">
                    {{ $product->description ?? 'No description available.' }}
                </p>
                <div class="flex flex-col gap-y-[5px]">
                    <p class="font-semibold leading-4 text-gray-900 text-[18px] mr-[10px] dark:text-gray-dark-900">
                        ${{ $product->price ?? '0.00' }}
                    </p>
                </div>
            </div>

            <div class="flex justify-between flex-col gap-3 sm:flex-row">
                <div class="flex items-center gap-x-4">
      {{-- Button (only if user logged in) --}}
@if($user)
    <button 
        style="background-color: rgb(255 189 58);"
        class="btn-product px-4 py-2 fw-700 rounded-lg text-dark text-sm hover:bg-blue-700 generate-link-btn"
        data-product-id="{{ $product->product_id }}">
        Generate Link
    </button>
@else
    <p class="text-gray-500">
        Please <a href="{{ route('login') }}" class="underline">log in</a> to generate your referral link.
    </p>
@endif


                
                    <a href="{{ $product->google_drive_link }}" target="_blank">
                        <button class="btn-product">
                            Ads creatives
                        </button>
                    </a>
                
                    <a href="{{ route('products.show', ['product' => $product->product_id]) }}" target="_blank">
                        <button class="btn-product">
                            Buy Access
                        </button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>


<div class="mt-8 flex flex-col sm:flex-row justify-between items-center text-gray-700 dark:text-gray-200 px-4">
    <div class="mb-4 sm:mb-0 text-sm">
        Showing
        <span class="font-medium">{{ $products->firstItem() }}</span>
        to <span class="font-medium">{{ $products->lastItem() }}</span>
        of <span class="font-medium">{{ $products->total() }}</span> results
    </div>

    <div class="flex items-center space-x-2">
        {{-- Previous --}}
        @if ($products->onFirstPage())
            <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Previous</span>
        @else
            <a href="{{ $products->previousPageUrl() }}" 
               class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Previous</a>
        @endif

        {{-- Page Numbers --}}
        @foreach ($products->links()->elements as $element)
            @if (is_string($element))
                <span class="px-4 py-2 text-gray-300">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $products->currentPage())
                        <span class="px-4 py-2 rounded-lg bg-orange-400 text-black dark:bg-orange-500 dark:text-white font-semibold shadow-sm">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 rounded-lg text-white bg-gray-700 hover:bg-gray-800">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}" 
               class="px-4 py-2 rounded-lg bg-[#7364db] text-white hover:opacity-90">Next</a>
        @else
            <span class="px-4 py-2 rounded-lg cursor-not-allowed bg-gray-400 text-white">Next</span>
        @endif
    </div>
</div>



</div>

{{-- Toast/Alert --}}
<div id="copy-toast" class="hidden fixed bottom-5 right-5 bg-green-600 text-white px-4 py-2 rounded shadow-lg">
    Link copied to clipboard!
</div>

                </div>

                
                @if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    });
</script>
@endif

@if(session('error'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('error') }}",
        });
    });
</script>
@endif

            </section>

            
        </div>
        
    </main>


<script>
document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('click', function (e) {
        if (!e.target.classList.contains('generate-link-btn')) return;

        const btn = e.target;
        const productId = btn.dataset.productId;

        fetch("{{ route('products.generate-link') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ product_id: productId })
        })
        .then(res => res.json())
        .then(data => {
            if (data.error) {
                alert(data.error);
                return;
            }

            const link = data.link;

            // Copy to clipboard
            if (navigator.clipboard?.writeText) {
                navigator.clipboard.writeText(link)
                    .then(() => showToast('Referral link copied!'))
                    .catch(() => fallbackCopyTextToClipboard(link));
            } else {
                fallbackCopyTextToClipboard(link);
            }
        })
        .catch(err => console.error(err));
    });

    // Fallback for clipboard
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

    // Toast
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
            t.style.boxShadow = '0 6px 18px rgba(0,0,0,0.15)';
            t.style.background = '#7364db';
            t.style.color = '#fff';
            t.style.fontSize = '14px';
            t.style.transition = 'opacity 0.3s ease';
            t.style.zIndex = 9999;
            document.body.appendChild(t);
        }
        t.textContent = msg;
        t.style.opacity = 1;
        setTimeout(() => (t.style.opacity = 0), 2200);
    }
});
</script>




@endsection
