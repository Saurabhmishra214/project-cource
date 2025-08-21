<!DOCTYPE html>
<html class="scroll-smooth overflow-x-hidden" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In Page</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <link rel="icon" href="{{asset('assets/images/icons/icon-favicon.svg')}}" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css?v=5.0')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css?v=5.0')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chivo:wght@400;700;900&amp;family=Noto+Sans:wght@400;500;600;700;800&amp;display=swap">
  </head>
  <body class="w-screen relative overflow-x-hidden min-h-screen bg-gray-100 scrollbar-hide authentication-sign-in-page dark:bg-[#000]">
    <div class="wrapper mx-auto text-gray-900 font-normal grid scrollbar-hide grid-cols-[257px,1fr] grid-rows-[auto,1fr]" id="layout">

    <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
      <form class="rounded-2xl bg-white mx-auto p-10 text-center max-w-[440px] my-[84px] dark:bg-[#1F2128]" action="{{ route('login.submit') }}" method="POST">
    @csrf
    <div class="mb-4 text-center mx-auto"><img class="inline-block" src="assets/images/icons/icon-landing-success-1.svg" alt="landing success"></div>
    <h3 class="font-bold text-2xl text-gray-1100 capitalize mb-[5px] dark:text-gray-dark-1100">Welcome back!</h3>
    <p class="text-sm text-gray-500 mb-[30px] dark:text-gray-dark-500">Let’s build something greate</p>
    
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative mb-4" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="block sm:inline"> Kuch galat hai.</span>
            <ul class="mt-3 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div>
        <label for="email">
            <p class="text-left text-sm mb-2 text-gray-1100 dark:text-gray-dark-1100">E-mail or phone number</p>
        </label>
        <div class="form-control mb-[20px]">
            <div class="input-group border rounded-lg border-[#E8EDF2] dark:border-[#313442]">
                {{-- name attribute 'email' hona chahiye taaki controller ise identify kar sake --}}
                <input class="input flex-1 bg-transparent text-gray-300 focus:outline-none dark:text-gray-dark-300" type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                <button class="btn-square flex items-center justify-center bg-transparent"><img src="assets/images/icons/icon-sms.svg" alt="sms icon"></button>
            </div>
        </div>
        @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <label for="password">
            <p class="text-left text-sm mb-2 text-gray-1100 dark:text-gray-dark-1100">Password</p>
        </label>
        <div class="form-control mb-[20px]">
            <div class="input-group border rounded-lg border-[#E8EDF2] dark:border-[#313442]">
                {{-- name attribute 'password' hona chahiye --}}
                <input class="input flex-1 bg-transparent text-gray-300 focus:outline-none dark:text-gray-dark-300" type="password" placeholder="Password" name="password" autocomplete="on">
                <button class="btn-square border-white flex items-center justify-center bg-transparent"><img src="assets/images/icons/icon-eye.svg" alt="eye icon"></button>
            </div>
        </div>
        @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <button class="btn normal-case h-fit min-h-fit transition-all duration-300 border-4 w-full border-neutral-bg mb-[20px] py-[14px] dark:border-dark-neutral-bg">Login</button><a class="text-right text-xs block text-[#8083A3] mb-[20px]" href="#">Forgot password?</a>
    <div class="flex items-center gap-x-2 justify-between mb-[20px]"><a class="flex items-center justify-center border rounded-lg gap-x-[10px] border-[#E8EDF2] p-[3px] py-[14px] sm:min-w-[170px]" href="#"> <img src="assets/images/icons/icon-google.svg" alt="google icon"><span class="text-gray-1100 text-xs dark:text-gray-dark-1100">Google account</span></a><a class="flex items-center justify-center border rounded-lg gap-x-[10px] border-[#E8EDF2] p-[3px] py-[14px] sm:min-w-[170px]" href="#"> <img src="assets/images/icons/icon-facebook.svg" alt="facebook icon"><span class="text-gray-1100 text-xs dark:text-gray-dark-1100">Facebook account</span></a>
    </div>
    <p class="text-sm text-gray-1100 dark:text-gray-dark-1100">Don’t have an account?<a class="text-color-brands" href="{{ route('register_form') }}">&nbsp;Sign up</a></p>
</form>

          
        </div>
        
      </main>
    </div>
  <script type="text/javascript" src="{{asset('assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/chart-utils.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/chart.min.js')}}"></script>
    <script type="text/javascript" src="https://unpkg.com/chartjs-chart-geo@3"></script>
    <script src="{{asset('assets/js/app.js?v=5.0')}}"></script>
  </body>
</html>    
