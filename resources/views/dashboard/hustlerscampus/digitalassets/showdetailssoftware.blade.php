@extends('dashboard.master_layout')
@section('content')


<style>
/* Base card styles */
.payment-section {
    display: flex;
    flex-direction: row;
    gap: 20px;
    margin-bottom: 30px;
}

/* Left side */
.payment-left {
    flex: 2;
    border: 1px solid #333; /* dark border */
    border-radius: 20px;
    background-color: black; /* dark background */
    padding-top: 24px;
    padding-bottom: 24px;
    color: #eee; /* text color */
}

/* Right side */
.payment-right {
    flex: 1;
    border: 1px solid #333;
    border-radius: 20px;
    background-color: black;
    padding-top: 16px;
    padding-bottom: 16px;
    color: #eee;
}

/* Software image */
.software-card img {
    width: 150px;
    height: 150px;
    border-radius: 8px;
    flex-shrink: 0;
}

/* Buttons */
/* Buttons */
.buy-now-btn, .login-btn, .claim-offer-btn {
    width: 100%;
    font-weight: 600;
    font-size: 18px;
    padding: 12px 0;
    border-radius: 10px; /* Previously it was more, now subtle */
    text-align: center;
    transition: 0.3s;
    color: #000; /* dark mode: black text on bright buttons */
}


/* Button colors for dark mode */
.buy-now-btn { background-color: #ffbd3a; }
.login-btn { background-color: #ffbd3a; }
.claim-offer-btn { background-color: #ffbd3a; }

/* Text styles */
.software-name { font-weight: 600; font-size: 18px; margin-bottom: 10px; color: #eee; }
.software-description { font-size: 14px; margin-bottom: 15px; color: #ccc; }
.software-price { font-weight: 600; font-size: 24px; color: #ffbd3a; }

/* Media Queries for Mobile */
@media screen and (max-width: 768px) {
    .payment-section {
        flex-direction: column;
    }

    .payment-left, .payment-right {
        width: 100%;
        padding: 15px;
        margin-bottom: 20px;
    }

    .software-card img {
        width: 100%;
        height: auto;
        margin-bottom: 15px;
    }

    .software-name {
        font-size: 16px;
        text-align: left;
    }

    .software-description {
        font-size: 13px;
    }

    .software-price {
        font-size: 20px;
    }

    .buy-now-btn, .login-btn, .claim-offer-btn {
        font-size: 16px;
        padding: 10px 0;
    }
}
</style>


<main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
    <div>
        <h2 class="capitalize text-gray-1100 font-bold text-[28px] leading-[35px] dark:text-gray-dark-1100 mb-[13px]">
            Software Payment Page
        </h2>

     <section class="payment-section">
    <!-- Left Side: Software Details -->
    <div class="payment-left">
        <div class="flex justify-between border-b pb-4 mb-6 px-6">
            <div class="text-base font-semibold">Payment Detail</div>
        </div>

        <div class="software-card flex flex-col px-6">
            <div class="flex items-start gap-4 mb-4 flex-wrap">
                <img src="{{ $software->software_image_url }}" alt="{{ $software->software_name }}">

                <div class="flex-1">
                    <h4 class="software-name">{{ $software->software_name }}</h4>
                    <p class="software-description">{{ $software->description ?? 'No description available.' }}</p>
                    <div class="software-price">₹{{ number_format($software->price, 2) }}</div>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                @auth
                    <button id="pay-button" class="buy-now-btn">Buy Now - ₹{{ number_format($software->price, 2) }}</button>
                @endauth

                @guest
                    <a href="{{ route('login_form', ['redirect_to' => request()->fullUrl()]) }}" class="login-btn">
                        Login to Buy - ₹{{ number_format($software->price, 2) }}
                    </a>
                @endguest
            </div>
        </div>
    </div>

    <!-- Right Side: Offer Section -->
    <div class="payment-right">
        <div class="flex justify-between border-b pb-4 mb-4 px-6">
            <div class="text-base font-semibold">Special Offer</div>
        </div>

        <div class="px-6 text-center">
            <p class="mb-4">Enjoy a limited-time discount on our premium softwares.</p>
            <a href="#" class="claim-offer-btn " style="    padding: 6px;">Claim Offer</a>
        </div>
    </div>
</section>
    </div>
</main>

{{-- Hidden Form --}}
<form id="payment-form" action="{{route('payment.save')}}" method="POST" style="display: none;">
    @csrf
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="payment_status" id="payment_status" value="0">
    <input type="hidden" name="software_id" value="{{ $software->software_id }}">
</form>

{{-- Razorpay --}}
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var payButton = document.getElementById('pay-button');
    if (payButton) {
        payButton.onclick = function(e) {
            e.preventDefault();

            var options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": "{{ $software->price * 100 }}",
                "currency": "INR",
                "name": "Hustlers Campus",
                "description": "Purchase of {{ $software->software_name }}",
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
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
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
