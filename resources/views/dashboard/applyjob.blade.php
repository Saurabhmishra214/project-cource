@extends('dashboard.master_layout')

@section('content')
    <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
            <h2 class="capitalize text-gray-1100 font-bold text-[28px] leading-[35px] dark:text-gray-dark-1100 mb-[13px]">Job
                Application</h2>
      <div class="flex justify-between flex-col gap-y-2 sm:flex-row mb-[32px]">
    <div class="flex items-center text-xs gap-x-[11px]">
      <a href="{{ url('/') }}" class="flex items-center gap-x-1">
    <img src="{{ asset('assets/images/icons/icon-home-2.svg') }}" alt="home icon">
    <span class="capitalize text-gray-500 dark:text-gray-dark-500">Home</span>
</a>

        <img src="{{ asset('assets/images/icons/icon-arrow-right.svg') }}" alt="arrow right icon">
        <span class="capitalize text-color-brands">Job Application Form</span>
    </div>
</div>

            <section>
                <div class="flex justify-between gap-6 flex-col xl:flex-row">
                    <div
                        class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-2xl px-5 py-7 flex-1 md:py-[42px] md:px-12">

                        <h1
                            class="font-bold text-gray-1100 text-[24px] leading-[30px] dark:text-gray-dark-1100 tracking-[0.1px] mb-[39px]">
                            Job Application Form</h1>

                        <form action="{{route('job.application.store')}}" method="POST" enctype="multipart/form-data" class="space-y-8">
                            @csrf
    <input type="hidden" name="job_id" value="{{ $job->id }}">

                            <div>
                                <h2 class="font-semibold text-lg mb-4 text-gray-1100 dark:text-gray-dark-1100">Basic
                                    Information</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                 <div>
    <label class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Full Name</label>
    <input type="text" name="full_name" placeholder="Enter full name"  value="{{ old('full_name') }}"
        class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
    
    @error('full_name')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror
</div>

                                    <div>
                                        <label class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Email
                                            Address</label>
                                        <input type="email" name="email" placeholder="Enter email address"  value="{{ old('email') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
                                                @error('email')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror
                                    </div>
                                    <div>
                                        <label class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Phone
                                            Number</label>
                                        <input type="tel" name="phone_number" placeholder="Enter phone number" value="{{ old('phone_number') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
                                                                                 @error('phone_number')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror
                                        </div>
                                    <div>
                                        <label class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Date
                                            of Birth</label>
                                        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
                                                                                                   @error('date_of_birth')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror
                                        </div>
                                    {{-- <div>
                                        <label
                                            class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Address</label>
                                        <input type="text" name="address" placeholder="City, State, Country, Pincode" value="{{ old('address') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
         
                                        </div> --}}
                                </div>
                            </div>

                            <div>
                                <h2 class="font-semibold text-lg mb-4 text-gray-1100 dark:text-gray-dark-1100 mt-3">
                                    Educational Details</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <div>
                                        <label
                                            class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Highest
                                            Qualification</label>
                                        <input type="text" name="highest_qualification" placeholder="e.g., Graduation, 12th" value="{{ old('highest_qualification') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
  @error('highest_qualification')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror
                                        </div>
                                    <div>
                                        <label
                                            class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">School/College</label>
                                        <input type="text" name="school_college" placeholder="Enter school or college name" value="{{ old('school_college') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
                                  
                                              @error('school_college')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror

                                        </div>
                                    <div>
                                        <label
                                            class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Passing
                                            Year</label>
                                        <input type="number" name="passing_year" placeholder="Enter passing year" value="{{ old('passing_year') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
          @error('passing_year')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror
                                        </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="font-semibold text-lg mb-4 text-gray-1100 dark:text-gray-dark-1100 mt-3">
                                    Professional Details</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <div>
                                        <label class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Total
                                            Experience</label>
                                        <input type="text" name="total_experience_years" placeholder="Years and Months" value="{{ old('total_experience_years') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
  @error('total_experience_years')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror
                                        </div>
                                    <div>
                                        <label
                                            class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Previous
                                            Company</label>
                                        <input type="text" name="previous_company" placeholder="Enter previous company" value="{{ old('previous_company') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
                                    @error('previous_company')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror
                                        </div>
                                    <div>
                                        <label
                                            class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Current
                                            CTC</label>
                                        <input type="text" name="current_ctc" placeholder="Enter current CTC" value="{{ old('current_ctc') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
  @error('current_ctc')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror
                                        </div>
                                    <div>
                                        <label class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Notice
                                            Period</label>
                                        <input type="text" name="notice_period" placeholder="e.g., 30 days, 60 days" value="{{ old('notice_period') }}"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
                                    
                                        </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="font-semibold text-lg mb-4 text-gray-1100 dark:text-gray-dark-1100 mt-3">
                                    Application Documents</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Resume
                                            / CV</label>
                                        <div
                                            class="border-dashed border-2 text-center border-neutral cursor-pointer py-6 dark:border-dark-neutral-border rounded-lg">
                                            <input type="file" name="resume_path" id="resume-upload" class="hidden" value="{{ old('resume_path') }}"
                                                accept=".pdf,.doc,.docx">
                                                  @error('resume_path')
        <p class="text-red-500 text-xs mt-1" style="color: red;">{{ $message }}</p>
    @enderror
                                            <label for="resume-upload" class="cursor-pointer">
                                         <img class="mx-auto mb-3" 
     src="{{ asset('assets/images/icons/icon-insert-file.svg') }}" 
     alt="file upload icon">

                                                <p class="text-sm text-gray-500 mb-1">Drop your file here, or browse</p>
                                                <p class="text-xs text-gray-400">PDF, DOC, and DOCX files are allowed</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Cover
                                            Letter</label>
                                        <textarea placeholder="Write your cover letter here..."
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm p-4 min-h-[150px] text-gray-400 dark:text-gray-dark-400 focus:outline-none resize-none"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="font-semibold text-lg mb-4 text-gray-1100 dark:text-gray-dark-1100 mt-3">Skills &
                                    Links</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                   
                                    <div>
                                        <label
                                            class="block mb-2 text-gray-1100 font-medium dark:text-gray-dark-1100">Portfolio
                                            / LinkedIn Link (Optional)</label>
                                        <input type="url" name="linkedin_url" placeholder="Enter your link"
                                            class="w-full border rounded-lg border-[#E8EDF2] dark:border-[#313442] bg-transparent text-sm py-3 px-4 text-gray-400 dark:text-gray-dark-400 focus:outline-none">
                                    </div>
                                </div>
                            </div>


                            <div class="flex flex-col sm:flex-row sm:justify-end mt-2 gap-4">
                                <button type="button"
                                    class="bg-gray-200 text-gray-700 py-3 px-6 rounded-lg font-bold sm:flex-1">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="bg-color-brands text-white py-3 px-6 rounded-lg font-bold sm:flex-1">
                                    Submit Application
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
