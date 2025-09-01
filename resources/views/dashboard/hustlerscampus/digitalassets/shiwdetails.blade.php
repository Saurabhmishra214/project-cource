@extends('dashboard.master_layout')
@section('content')
    <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
    <h2 class="capitalize text-gray-1100 font-bold text-[28px] leading-[35px] dark:text-gray-dark-1100 mb-[13px]">
    Product Payment Page
</h2>
     
            <section>
                <div class="flex flex-col justify-between gap-5 xl:flex-row">
                    <div
                        class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-2xl pt-6 flex-1 pb-[23px]">
                        <div
                            class="flex items-center justify-between border-b border-neutral dark:border-dark-neutral-border mb-[33px] pb-[19px] px-[25px]">
                        <div class="text-base leading-5 text-gray-1100 font-semibold dark:text-gray-dark-1100">
    Payment Detail 
</div>
                   
                        </div>

<div class="px-[25px]">
    <div class="grid grid-cols-1 gap-6 mb-[31px]">
        <div class="bg-neutral-bg border border-neutral dark:bg-dark-neutral-bg rounded-[10px] px-[25px] pb-[25px] pt-[30px] dark:border-dark-neutral-border">
            {{-- Dynamic Product Image and Name Section --}}
        <div class="flex items-start gap-x-[20px] mb-[23px]">
    {{-- Image on the Left --}}
<img src="https://placehold.co/150x150/E9D5FF/6B21A8?text=Product" alt="{{ $product->product_name }} image" class="w-[150px] h-[150px] rounded-md flex-shrink-0">
    {{-- Details on the Right --}}
    <div class="flex-1">
        {{-- Title --}}
        <h4 class="text-gray-500 font-semibold text-left dark:text-gray-dark-500 text-[18px] leading-[22px] mb-[10px]">
            {{ $product->product_name }}
        </h4>

        {{-- Description --}}
        <p class="text-gray-500 text-left text-[14px] leading-[20px] dark:text-gray-dark-500 mb-[15px]">
            {{ $product->description }}
        </p>

        {{-- Price --}}
        <div class="flex items-center justify-between">
            <p class="text-color-brands font-semibold leading-4 text-[24px]">
                ${{ number_format($product->price, 2) }}
            </p>
        </div>
    </div>
</div>

            {{-- Buy Now Button with Custom Styling --}}
            <div class="flex justify-center">
                @auth
                    <button id="pay-button" class="w-full text-white font-bold py-4 px-6 rounded-lg text-lg transition duration-300" style="background-color: #ff7529;">
                        Buy Now - ${{ number_format($product->price, 2) }}
                    </button>
                @endauth
                @guest
                    <a href="{{ route('login_form', ['redirect_to' => request()->fullUrl()]) }}" class="w-full text-center text-white font-bold py-4 px-6 rounded-lg text-lg transition duration-300" style="background-color: #ff7529;">
                        Login to Buy - ${{ number_format($product->price, 2) }}
                    </a>
                @endguest
            </div>
        </div>
    </div>
</div>



                    </div>
            <div class="xl:w-1/3">
    <div
        class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-2xl pb-7 mb-6 pt-[19px]">
        {{-- Header for Offer --}}
        <div
            class="flex items-center justify-between border-b border-neutral dark:border-dark-neutral-border mb-[12px] pb-[16px] px-[25px]">
            <div class="text-base leading-5 text-gray-1100 font-semibold dark:text-gray-dark-1100">
                Special Offer
            </div>
        </div>

        {{-- Static Offer Content --}}
        <div class="p-[25px] text-center">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLdH9uQk1g2a4/a6+g7sJ0LzU/xXm5L7C4D6F8pW7+p9g9b0FpP0a1D9lW4f+p/VfF0L5eA==" crossorigin="anonymous" referrerpolicy="no-referrer" />            </h3>
            <p class="text-gray-500 text-sm mb-4 dark:text-gray-dark-500">
                Enjoy a limited-time discount on our premium courses.
            </p>
            <a href="#" class="inline-block px-6 py-2 rounded-full text-white bg-color-brands hover:bg-opacity-80 transition-colors">
                Claim Offer
            </a>
        </div>
    </div>
</div>
                </div>

            </section>

    </main>


    {{-- Hidden form to submit payment details --}}
    <form id="payment-form" action="" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
        <input type="hidden" name="payment_status" id="payment_status" value="0">
        <input type="hidden" name="product_id" value="{{ $product->product_id }}">
    </form>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var payButton = document.getElementById('pay-button');
            if (payButton) {
                payButton.onclick = function(e) {
                    e.preventDefault();

                    var options = {
                        "key": "{{ env('RAZORPAY_KEY') }}",
                        "amount": "{{ $product->price * 100 }}", // amount in paise
                        "currency": "INR",
                        "name": "Hustlers Campus",
                        "description": "Purchase of {{ $product->product_name }}",
                        "image": "{{ asset('images/logo-icon.png') }}",
                        "prefill": {
                            "name": "{{ Auth::user()->name ?? '' }}",
                            "contact": "{{ Auth::user()->contact_number ?? '' }}",
                            "email": "{{ Auth::user()->email ?? '' }}"
                        },
                        "theme": {
                            "color": "#ff7529"
                        },
                        "handler": function(response) {
                            document.getElementById('razorpay_payment_id').value = response
                                .razorpay_payment_id;
                            document.getElementById('payment_status').value = 1;
                            document.getElementById('payment-form').submit();
                        },
                        "modal": {
                            "ondismiss": function() {
                                console.log('Payment modal dismissed');
                            }
                        }
                    };

                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                };
            }
        });
    </script>
@endsection
