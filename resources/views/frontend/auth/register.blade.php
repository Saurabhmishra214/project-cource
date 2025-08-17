@extends('frontend.master_layout')
@section('content')

     <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
          <form class="rounded-2xl bg-white mx-auto p-10 text-center max-w-[440px] my-[84px] dark:bg-[#1F2128]" action="" method="">
            <div class="mb-4 text-center mx-auto"><img class="inline-block" src="assets/images/icons/icon-landing-success-1.svg" alt="landing success"></div>
            <h3 class="font-bold text-2xl text-gray-1100 capitalize mb-[5px] dark:text-gray-dark-1100">Create an account</h3>
            <p class="text-sm text-gray-500 mb-[30px] dark:text-gray-dark-500">You are welcome!</p>
            <div>
              <label for="your-name">
                <p class="text-left text-sm mb-2 text-gray-1100 dark:text-gray-dark-1100">Your name</p>
              </label>
              <div class="form-control mb-[20px]">
                <div class="input-group border rounded-lg border-[#E8EDF2] dark:border-[#313442]">
                  <input class="input flex-1 bg-transparent text-gray-300 focus:outline-none dark:text-gray-dark-300" type="text" placeholder="Full name" name="your-name">
                  <button class="btn-square flex items-center justify-center bg-transparent"><img src="assets/images/icons/icon-input-user.svg" alt="sms icon"></button>
                </div>
              </div>
              <label for="email">
                <p class="text-left text-sm mb-2 text-gray-1100 dark:text-gray-dark-1100">E-mail</p>
              </label>
              <div class="form-control mb-[20px]">
                <div class="input-group border rounded-lg border-[#E8EDF2] dark:border-[#313442]">
                  <input class="input flex-1 bg-transparent text-gray-300 focus:outline-none dark:text-gray-dark-300" type="text" placeholder="Email" name="email">
                  <button class="btn-square flex items-center justify-center bg-transparent"><img src="assets/images/icons/icon-sms.svg" alt="sms icon"></button>
                </div>
              </div>
              <label for="phone">
                <p class="text-left text-sm mb-2 text-gray-1100 dark:text-gray-dark-1100">Phone Number</p>
              </label>
              <div class="form-control mb-[20px]">
                <div class="input-group border rounded-lg border-[#E8EDF2] dark:border-[#313442]">
                  <input class="input flex-1 bg-transparent text-gray-300 focus:outline-none dark:text-gray-dark-300" type="text" placeholder="(+01)" name="phone">
                  <button class="btn-square flex items-center justify-center bg-transparent"><img src="assets/images/icons/icon-input-phone.svg" alt="sms icon"></button>
                </div>
              </div>
              <label for="psw">
                <p class="text-left text-sm mb-2 text-gray-1100 dark:text-gray-dark-1100">Password</p>
              </label>
              <div class="form-control mb-[20px]">
                <div class="input-group border rounded-lg border-[#E8EDF2] dark:border-[#313442]">
                  <input class="input flex-1 bg-transparent text-gray-300 focus:outline-none dark:text-gray-dark-300" type="password" placeholder="Password" name="psw" autocomplete="on">
                  <button class="btn-square border-white flex items-center justify-center bg-transparent"><img src="assets/images/icons/icon-eye.svg" alt="eye icon"></button>
                </div>
              </div>
              <label for="psw">
                <p class="text-left text-sm mb-2 text-gray-1100 dark:text-gray-dark-1100">Confirm Password</p>
              </label>
              <div class="form-control mb-[20px]">
                <div class="input-group border rounded-lg border-[#E8EDF2] dark:border-[#313442]">
                  <input class="input flex-1 bg-transparent text-gray-300 focus:outline-none dark:text-gray-dark-300" type="password" placeholder="Password" name="psw" autocomplete="on">
                  <button class="btn-square border-white flex items-center justify-center bg-transparent"><img src="assets/images/icons/icon-eye.svg" alt="eye icon"></button>
                </div>
              </div>
            </div>
            <button class="btn normal-case h-fit min-h-fit transition-all duration-300 border-4 w-full border-neutral-bg mb-[20px] py-[14px] dark:border-dark-neutral-bg">Sign Up</button><a class="text-center text-xs block text-[#8083A3] mb-[20px]" href="#">Or Sign up via Social account</a>
            <div class="flex items-center gap-x-2 justify-between mb-[20px]"><a class="flex items-center justify-center border rounded-lg gap-x-[10px] border-[#E8EDF2] p-[3px] py-[14px] sm:min-w-[170px]" href="#"> <img src="assets/images/icons/icon-google.svg" alt="google icon"><span class="text-gray-1100 text-xs dark:text-gray-dark-1100">Google account</span></a><a class="flex items-center justify-center border rounded-lg gap-x-[10px] border-[#E8EDF2] p-[3px] py-[14px] sm:min-w-[170px]" href="#"> <img src="assets/images/icons/icon-facebook.svg" alt="facebook icon"><span class="text-gray-1100 text-xs dark:text-gray-dark-1100">Facebook account</span></a>
            </div>
            <p class="text-sm text-gray-1100 dark:text-gray-dark-1100">Already have an account?<a class="text-color-brands" href="sign-in.html">&nbsp;Sign In</a></p>
          </form>
        </div>
     </main>
@endsection