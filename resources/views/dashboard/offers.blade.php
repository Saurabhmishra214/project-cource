@extends('dashboard.master_layout')

@section('content')
<main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px] dark:bg-gray-900">
    <div>
        <div class="flex items-center justify-between mb-[19px]">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="capitalize font-bold text-[28px] leading-[35px] text-gray-1100 dark:text-white mb-[13px]">
                        All Jobs
                    </h2>
                    <div class="flex items-center text-xs text-gray-500 gap-x-[11px]">
                        <div class="flex items-center gap-x-1">
                            <img src="assets/images/icons/icon-home-2.svg" alt="home icon">
                            <span class="capitalize dark:text-gray-300">home</span>
                        </div>
                        <img src="assets/images/icons/icon-arrow-right.svg" alt="arrow right icon">
                        <span class="capitalize text-color-brands">All Jobs</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dark Mode Offer Card -->
        @foreach($offers as $offer)
        <div class="flex items-center justify-center p-6">
            <div class="max-w-md w-full">
                <div class="bg-gray-800 rounded-2xl shadow-lg border border-gray-700 overflow-hidden">

                    <!-- Header -->
                    <div class="flex items-center justify-between p-4 border-b border-gray-700">
                        <div class="flex items-center gap-3">
                            <img src="{{ $offer->brand_logo ? asset($offer->brand_logo) : asset('assets/images/brandLogo.png') }}" 
                                alt="Brand Logo" 
                                class="w-12 h-12 rounded-full border border-gray-600">
                            <div>
                                <h3 class="text-lg font-bold text-white">{{ $offer->offer_provider_name }}</h3>
                                <p class="text-sm text-gray-400">{{ $offer->subtitle }}</p>
                            </div>
                        </div>
                        <span class="relative inline-block bg-gradient-to-r from-red-600 to-red-500 text-white text-xs font-bold px-4 py-1 rounded-r-full shadow-md">
                            <span class="absolute left-0 top-1/2 -translate-y-1/2 w-0 h-0 border-t-8 border-t-transparent border-r-8 border-r-red-600 border-b-8 border-b-transparent"></span>
                            {{ $offer->offer_percent }}% OFF
                        </span>
                    </div>

                    <!-- Offer Content -->
                    <div class="p-5 space-y-3">
                        <h4 class="text-xl font-semibold text-white">Flat ₹{{ $offer->offer_amount }} Off</h4>
                        <p class="text-gray-400">{{ $offer->description }}</p>

                        <!-- Discount Code -->
                        <div class="flex items-center bg-gray-900 border border-gray-700 rounded-lg overflow-hidden mt-3">
                            <input type="text" class="discountCode flex-1 px-5 py-2 bg-transparent text-white font-mono text-lg outline-none" 
                                value="{{ $offer->coupon_code }}" readonly>
                            <button class="bg-gray-700 text-white px-4 py-2 hover:bg-gray-600 transition copy-btn"
                                    data-clipboard-action="copy" data-clipboard-target=".discountCode">
                                Copy
                            </button>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="p-4 bg-gray-900 border-t border-gray-700 flex justify-end">
                        <button class="bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Apply Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</main>

<!-- ClipboardJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>
<script>
    // Initialize ClipboardJS
    new ClipboardJS('.copy-btn', {
        target: function(trigger) {
            return trigger.closest('div').querySelector('.discountCode');
        }
    }).on('success', function(e) {
        // Show SweetAlert on successful copy
        Swal.fire({
            icon: 'success',
            title: 'Copied!',
            text: 'Coupon code copied to clipboard',
            timer: 1500,
            showConfirmButton: false,
            toast: true,
            position: 'top-end'
        });
        e.clearSelection();
    });
</script>


<!-- SweetAlert Messages -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
@endsection
