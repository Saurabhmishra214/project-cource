@extends('affiliate_dashboard.master_layout')
@section('content')

<!-- Font Awesome 6 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<style>
    /* Custom Styles for Podium */
    .podium-container {
        display: flex;
        gap: 30px;
        align-items: flex-end;
    }

    .podium {
        width: 120px;
        border-radius: 8px;
        text-align: center;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        perspective: 800px;
    }

    /* Podium heights */
    .first { height: 200px; background: gold; z-index: 3; }
    .second { height: 150px; background: silver; z-index: 2; }
    .third { height: 120px; background: #cd7f32; z-index: 1; }

    .podium-step {
        width: 100%;
        height: 100%;
        border-radius: 8px;
        box-shadow: 0 8px 15px rgba(0,0,0,0.3);
        transform: rotateX(10deg) rotateY(-5deg);
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .profile {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        border: 3px solid #fff;
        overflow: hidden;
        position: absolute;
        top: -35px;
        left: 50%;
        transform: translateX(-50%);
        background: #ccc;
    }

    .profile img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .name {
        margin-top: 10px;
        font-weight: bold;
        color: #333;
    }

    .tooltip {
        position: absolute;
        bottom: 110%; /* place above the podium */
        left: 50%; 
        transform: translateX(-50%);
        background: rgba(0,0,0,0.8);
        color: #fff;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 14px;
        white-space: nowrap;
        opacity: 0; /* hidden by default */
        pointer-events: none; /* avoid blocking mouse */
        transition: opacity 0.3s ease, bottom 0.3s ease; /* smooth fade/slide */
        z-index: 10;
    }

    .podium:hover .tooltip {
        opacity: 1;    /* show tooltip */
        bottom: 120%;  /* slightly move it upward */
    }

    .link-box {
        background-color: #212529;
        border: 1px solid #495057;
        padding: 15px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .link-box .icon {
        color: #fff;
        font-size: 24px;
        margin-right: 15px;
    }

    .link-box .link-details {
        flex-grow: 1;
    }

    .link-box .link-details p {
        margin: 0;
        font-size: 12px;
        color: #adb5bd;
    }

    .link-box .link-details a {
        color: #fff;
        font-size: 16px;
        word-break: break-all;
    }

    .copy-btn {
        background: none;
        border: none;
        color: #fff;
        cursor: pointer;
        font-size: 20px;
        margin-left: 15px;
        transition: color 0.3s ease;
    }

    .copy-btn:hover {
        color: #ffc107;
    }

    /* Corrected Social Link Styles */
    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        text-decoration: none;
        font-size: 22px;
        color: white !important;
        transition: transform 0.2s ease-in-out;
    }
    .social-links a:hover {
        transform: scale(1.15);
    }

    .social-links a.facebook { background: #1877f2; }
    .social-links a.twitter { background: #1da1f2; }
    .social-links a.linkedin { background: #0077b5; }
    .social-links a.whatsapp { background: #25d366; }
    .social-links a.telegram { background: #0088cc; }

    /* Custom message styles */
    .copy-message {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #333;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        z-index: 1000;
    }
    .copy-message.show {
        opacity: 1;
    }
</style>

<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Rewards & Ranks</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item active">Rewards</li>
                            </ol>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            
            <div class="card text-white position-relative" 
            style="background: url('{{ asset('assets/images/my-img.jpg') }}') no-repeat center center; 
            background-size: cover; 
            height: 950px;">
                <!-- Overlay -->
                <div class="position-absolute top-0 start-0 w-100 h-100" 
                    style="background: rgba(0,0,0,0.6); border-radius: 0.375rem;">
                </div>

                <!-- Content -->
                <div class="card-body position-relative text-start px-5">
                  
                    <h1 class="text-white fw-bold display-4">Referral Program</h1>
                    
                    <div class="mt-3 text-warning fw-bold fs-2 border-bottom border-warning border-3 d-inline-block pb-1">
                        I WILL PAY YOU MONEY TODAY
                    </div>
                    
                    <div class="mt-4 text-white" style="max-width: 800px;">
                        <p class="fs-5 fw-semibold">
                            The Crypto Campuses generate its students over $5M in profit a month. Serious, system-based investing and lessons on how to AVOID losing money in the crypto world.
                        </p>
                        <p class="text-white-50 fs-5 fw-semibold">We are UP TO DATE.</p>
                        <p class="fs-5 fw-semibold">18+ Wealth Creation Methods. Cutting edge application.</p>
                        <p class="fs-5 fw-semibold">
                            And YOU can make money TODAY by helping people sign up to it. Do you know a crypto degen who needs to stop losing all his money every month?
                        </p>
                        <p class="fs-5 fw-semibold">Have a friend who keeps saying he wants to become rich but does nothing about it?</p>
                        <p class="fs-5 fw-semibold">HELP THEM & GET PAID TODAY. Payouts directly to any ERC20 wallet</p>
                    </div>

                    <div class="mt-5">
                        <h4 class="text-white fw-bold fs-3">
                            YOUR Custom Checkout Link Which Accepts Crypto Currency Is Here:
                        </h4>
                        
                        <!-- Link Boxes with Copy Buttons -->
                        <div class="link-box">
                            <i class="fa-solid fa-globe icon"></i>
                            <div class="link-details">
                                <p>LANDING PAGE REFERRAL LINK</p>
                                <a href="{{ route('referral.register', ['referral_code' => Auth::user()->referral_code]) }}" id="landingLink">
                                    {{ route('referral.register', ['referral_code' => Auth::user()->referral_code]) }}
                                </a>
                            </div>
                            <button class="copy-btn" onclick="copyToClipboard('landingLink')">
                                <i class="fa-regular fa-copy"></i>
                            </button>
                        </div>

                        <div class="link-box">
                            <i class="fa-solid fa-cart-shopping icon"></i>
                            <div class="link-details">
                                <p>DIRECT CHECKOUT REFERRAL LINK</p>
                                <a href="{{ route('referral.register', ['referral_code' => Auth::user()->referral_code]) }}" id="checkoutLink">
                                    {{ route('referral.register', ['referral_code' => Auth::user()->referral_code]) }}
                                </a>
                            </div>
                            <button class="copy-btn" onclick="copyToClipboard('checkoutLink')">
                                <i class="fa-regular fa-copy"></i>
                            </button>
                        </div>

                        <!-- Social Share Section -->
                        <div class="mt-5">
                            <h4 class="text-white fw-bold fs-3 mb-3">
                                Share on Social Media
                            </h4>

                            <div class="d-flex gap-3 flex-wrap social-links">
                                <a href="{{ $shareLinks['facebook'] }}" target="_blank" class="facebook" title="Share on Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="{{ $shareLinks['twitter'] }}" target="_blank" class="twitter" title="Share on Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{ $shareLinks['linkedin'] }}" target="_blank" class="linkedin" title="Share on LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="{{ $shareLinks['whatsapp'] }}" target="_blank" class="whatsapp" title="Share on WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="{{ $shareLinks['telegram'] }}" target="_blank" class="telegram" title="Share on Telegram">
                                    <i class="fab fa-telegram-plane"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <p class="text-white-50 fs-5" style="max-width: 60%;">
                        Send it to your friends, help people make money and get paid yourself. HELP PEOPLE. GET PAID. YOU CAN EARN MONEY RIGHT NOW. GO!!
                    </p>
                    <a href="{{ route('rewards_dashboard') }}" 
                       class="btn btn-warning btn-lg fw-bold rounded-pill text-dark d-inline-flex align-items-center"
                       style="background-color: #ffc107; border: none; z-index: 10; position: relative;">
                        <i class="fa-solid fa-chart-line me-2"></i> REFERRAL DASHBOARD
                    </a>
                </div>

            </div>
        </div><!-- container -->
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

<!-- A custom message box to replace the alert() function -->
<div id="copy-message" class="copy-message">Link copied to clipboard!</div>

<script>
    function copyToClipboard(elementId) {
        const linkElement = document.getElementById(elementId);
        const textToCopy = linkElement.innerText;
        
        const tempTextarea = document.createElement('textarea');
        tempTextarea.value = textToCopy;
        document.body.appendChild(tempTextarea);
        tempTextarea.select();
        document.execCommand('copy');
        document.body.removeChild(tempTextarea);
        
        // Show the custom message
        const messageBox = document.getElementById('copy-message');
        messageBox.classList.add('show');
        setTimeout(() => {
            messageBox.classList.remove('show');
        }, 2000);
    }
</script>

@endsection
