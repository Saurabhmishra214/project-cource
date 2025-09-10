@extends('dashboard.master_layout')

@section('content')
<main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
    <div class="flex items-center justify-center min-h-screen p-6">
        <div class="bg-white dark:bg-dark-neutral-bg rounded-2xl shadow-xl p-8 max-w-[440px] w-full text-center my-10" style=" padding: 26px;">

            {{-- Success Icon and Main Message --}}
            <div class="mb-6 flex flex-col items-center justify-center">
                <div class="mb-4 inline-block">
                    <img src="{{ asset('assets/images/icons/icon-done.svg') }}" alt="success icon">
                </div>
                <h3 class="font-bold text-2xl text-gray-1100 capitalize mb-[5px] dark:text-gray-dark-1100">
                    Payment Successful!
                </h3>
                <p class="text-sm text-gray-500 mb-6 dark:text-gray-dark-500">
                    Your transaction is complete.
                </p>
            </div>
            
            {{-- Transaction Details Card --}}
            <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg mb-8 text-left">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 text-center">Transaction Details</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex justify-between items-center">
                        <span class="text-gray-600 dark:text-gray-300">Transaction ID:</span>
                        <span class="font-medium text-gray-800 dark:text-gray-100">{{ $payment->payment_id ?? 'N/A' }}</span>
                    </li>
                    <li class="flex justify-between items-center">
                        <span class="text-gray-600 dark:text-gray-300">Amount Paid:</span>
                        <span class="font-medium text-gray-800 dark:text-gray-100">{{ number_format($payment->amount ?? 0, 2) }} {{ $payment->currency ?? 'INR' }}</span>
                    </li>
                    <li class="flex justify-between items-center">
                        <span class="text-gray-600 dark:text-gray-300">Payment Date:</span>
                        <span class="font-medium text-gray-800 dark:text-gray-100">{{ $payment->created_at ? $payment->created_at->format('M d, Y') : 'N/A' }}</span>
                    </li>
                    <li class="flex justify-between items-center">
                        <span class="text-gray-600 dark:text-gray-300">Payment Method:</span>
                        <span class="font-medium text-gray-800 dark:text-gray-100">{{ $payment->payment_method ?? 'N/A' }}</span>
                    </li>
                </ul>
            </div>

            {{-- Call-to-action button --}}
            <a href="{{ route('user.dashboard') }}" class="btn normal-case h-fit min-h-fit transition-all duration-300 border-4 w-full border-neutral-bg py-[14px] dark:border-dark-neutral-bg" style="background-color: #ff7529; color: white;">
                Go to Dashboard
            </a>
        </div>
    </div>
</main>
@endsection