@extends('dashboard.master_layout')
@section('content')
    
    <main class="overflow-x-scroll scrollbar-hide flex flex-col justify-between pt-[42px] px-[23px] pb-[28px]">
        <div>
          <div class="flex items-center justify-between mb-[19px]">
            <div>
              <h2 class="capitalize text-gray-1100 font-bold text-[28px] leading-[35px] dark:text-gray-dark-1100 mb-[13px]">All Jobs</h2>
              <div class="flex items-center justify-between">
                <div class="flex items-center text-xs text-gray-500 gap-x-[11px]">
                  <div class="flex items-center gap-x-1"><img src="assets/images/icons/icon-home-2.svg" alt="home icon"><span class="capitalize">home</span></div><img src="assets/images/icons/icon-arrow-right.svg" alt="arrow right icon"><span class="capitalize text-color-brands">All Jobs</span>
                </div>
              </div>
            </div>
            <div class="flex"><a class="list-grid-btn flex items-center gap-x-2 rounded-l-2xl bg-neutral px-[17px] py-[14px] dark:bg-dark-neutral-border" href="product-list.html"><img src="assets/images/icons/icon-row-vertical.svg" alt="row vertical icon"><span class="text-xs text-[#8083A3]">List</span></a><a class="list-grid-btn flex items-center gap-x-2 rounded-r-2xl bg-neutral active px-[17px] py-[14px] dark:bg-dark-neutral-border" href="product-grid.html"><img src="assets/images/icons/icon-grid.svg" alt="grid icon"><span class="text-xs text-[#8083A3]">Grid</span></a></div>
          </div>
          <div class="flex items-center gap-x-6">
  <div class="flex-1">
    <div class="grid grid-cols-1 gap-x-6 gap-y-6 border p-6 bg-neutral-bg rounded-2xl border-neutral mb-9 
                dark:bg-dark-neutral-bg dark:border-dark-neutral-border pb-[24px] xl:grid-cols-3 lg:grid-cols-2">
      
      <a class="block border border-neutral bg-neutral-bg rounded-lg p-5 
                dark:border-dark-neutral-border dark:bg-dark-neutral-bg hover:shadow-md transition" href="#">

        <!-- Header -->
        <div class="flex items-center gap-x-4 mb-4">
          <img class="border border-neutral rounded-full dark:border-dark-neutral-border w-[60px] h-[60px] object-cover" 
               src="assets/images/product-1.png" alt="profile">
          <div class="flex-1"> 
            <h3 class="text-base font-semibold text-gray-900 dark:text-gray-dark-900">UI/UX Designer</h3>
            <p class="text-xs text-gray-500 dark:text-gray-dark-500">John William Doe • United Kingdom</p>
          </div>
        </div>

        <!-- Skills -->
        <div class="flex gap-2 flex-wrap mb-4">
          <span class="px-2 py-1 text-xs bg-gray-200 dark:bg-gray-700 rounded-md">JavaScript</span>
          <span class="px-2 py-1 text-xs bg-gray-200 dark:bg-gray-700 rounded-md">React</span>
          <span class="px-2 py-1 text-xs bg-gray-200 dark:bg-gray-700 rounded-md">Node.js</span>
        </div>

        <!-- Description -->
        <p class="text-gray-500 dark:text-gray-dark-500 text-sm leading-[18px] border-b border-neutral 
                  dark:border-dark-neutral-border pb-3 mb-3">
          Looking for an experienced web developer for a short-term project.
        </p>

        <!-- Footer -->
        <div class="flex items-center justify-between">
          <div>
            <p class="text-xs text-gray-500 dark:text-gray-dark-500">Duration</p>
            <p class="text-sm font-semibold text-gray-900 dark:text-gray-dark-900">2 Weeks</p>
          </div>
          <div>
            <p class="text-xs text-gray-500 dark:text-gray-dark-500">Pay</p>
            <p class="text-sm font-semibold text-gray-900 dark:text-gray-dark-900">$50/Hour</p>
          </div>
          <button class="px-4 py-2 text-xs font-semibold text-white bg-color-brands rounded-lg hover:bg-opacity-90">
            Apply
          </button>
        </div>

      </a>
    </div>
  </div>
</div>

          <label class="btn modal-button absolute left-[-1000px]" for="details-modal">details</label>
          <input class="modal-toggle" type="checkbox" id="details-modal">
          <div class="modal">
            <div class="modal-box relative bg-neutral-bg scrollbar-hide dark:bg-dark-neutral-bg">
              <label class="absolute right-2 top-2 cursor-pointer" for="details-modal"><img src="assets/images/icons/icon-close-modal.svg" alt="close modal button"></label>
              <h6 class="text-header-6 font-semibold text-gray-500 dark:text-gray-dark-500 mb-[49px]">Transaction Details</h6>
              <div class="flex items-center gap-6 mb-10">
                <div> <img src="assets/images/nasa.png" alt="Nasa logo"></div>
                <div> 
                  <p class="text-header-7 font-bold text-gray-1100 mb-2 dark:text-gray-dark-1100">Transfer $68.25 to Nasa.,JSC</p>
                  <p class="text-sm leading-4 text-gray-500 dark:text-gray-dark-500 mb-[21px]">On 22 January 2022 At 15:39 GMT</p>
                  <div class="border border-neutral bg-transparent flex items-center gap-3 px-5 w-fit rounded-[72px] py-[12px]">
                    <div class="rounded-full w-[10px] h-[10px] bg-green"></div>
                    <p class="font-medium text-xs text-green">Active</p>
                  </div>
                </div>
              </div>
              <div class="flex items-end justify-between mb-[76px]">
                <div class="flex items-start gap-x-[10px]">
                  <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[#E8EDF2] dark:bg-[#313442]"><img class="dark:invert" src="assets/images/icons/icon-user.svg" alt="user icon"></div>
                  <div class="flex flex-col gap-y-2">
                    <p class="text-sm leading-4 text-gray-1100 font-semibold dark:text-gray-dark-1100">Send to</p>
                    <p class="text-sm leading-4 text-gray-500 dark:text-gray-dark-500">Jane Cooper</p>
                    <p class="text-sm leading-4 text-gray-500 dark:text-gray-dark-500">E-mail: tim.jennings@example.com</p>
                    <p class="text-sm leading-4 text-gray-500 dark:text-gray-dark-500">Phone: +099 856 245</p>
                  </div>
                </div>
                <div class="capitalize text-xs text-color-brands py-2 rounded-lg px-[13.5px] bg-[#E8EDF2] dark:bg-[#313442] max-w-[114px]">$ 68,125.25</div>
              </div>
              <div class="flex items-end justify-between mb-2">
                <div class="flex items-start gap-x-[10px]">
                  <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[#E8EDF2] dark:bg-[#313442]"><img class="dark:invert" src="assets/images/icons/icon-home-hashtag.svg" alt="home icon"></div>
                  <div class="flex flex-col gap-y-2">
                    <p class="text-sm leading-4 text-gray-1100 font-semibold dark:text-gray-dark-1100">Bank Details</p>
                    <p class="text-sm leading-4 text-gray-500 dark:text-gray-dark-500">967-400 026789758</p>
                    <p class="text-sm leading-4 text-gray-500 dark:text-gray-dark-500">Sparkasse credit</p>
                    <p class="text-sm leading-4 text-gray-500 dark:text-gray-dark-500">Invoice ID: #12546872</p>
                  </div>
                </div>
                <div class="capitalize text-xs text-color-brands py-2 rounded-lg px-[13.5px] bg-[#E8EDF2] dark:bg-[#313442] max-w-[114px]">$250</div>
              </div>
              <div class="w-full bg-neutral h-[1px] dark:bg-dark-neutral-border mb-[67px]"></div>
              <div class="flex items-center justify-between flex-wrap gap-3">
                <div class="flex items-center gap-[15px]">
                  <button class="border-0 capitalize font-semibold py-4 px-8 text-gray-500 bg-neutral flex items-center gap-2 text-[12px] leading-[21px] dark:text-gray-dark-500 dark:bg-dark-neutral-border hover:opacity-80 rounded-[10px]"> 
                    <p>Print</p><i> <img src="assets/images/icons/icon-printer.svg" alt="print icon"></i>
                  </button>
                  <button class="bg-transparent font-semibold flex items-center text-[12px] leading-[21px] dark:text-gray-dark-500 hover:opacity-80 rounded-[10px] gap-[10px]"> 
                    <p>Download Pdf</p><i> <img src="assets/images/icons/icon-down.svg" alt="down icon"></i>
                  </button>
                </div>
                <button class="border-0 capitalize font-semibold py-4 px-8 text-gray-500 bg-neutral flex items-center gap-2 text-[12px] leading-[21px] dark:text-gray-dark-500 dark:bg-dark-neutral-border hover:opacity-80 rounded-[10px]"> 
                  <p>Issue Refund</p><i> <img src="assets/images/icons/icon-refunds.svg" alt="print icon"></i>
                </button>
              </div>
            </div>
          </div>
          <label class="btn modal-button absolute left-[-1000px]" for="project-modal">project</label>
          <input class="modal-toggle" type="checkbox" id="project-modal">
          <div class="modal">
            <div class="modal-box relative bg-neutral-bg scrollbar-hide dark:bg-dark-neutral-bg pt-[53px]">
              <label class="absolute right-2 top-2 cursor-pointer" for="project-modal"><img src="assets/images/icons/icon-close-modal.svg" alt="close modal button"></label>
              <div class="flex items-center justify-center flex-col">
                <h6 class="text-header-6 font-semibold text-gray-500 text-center dark:text-gray-dark-500 mb-[38px]">Create a New Project</h6>
                <div class="cursor-pointer show-add-project-2"><img class="hover:opacity-80 mb-[29px] dark:hidden" src="assets/images/icons/add-project.svg" width="92" height="92" alt="add project icon"><img class="hidden hover:opacity-80 mb-[29px] dark:block" src="assets/images/icons/add-project-dark.svg" width="92" height="92" alt="add project icon"></div>
                <p class="text-sm leading-4 text-gray-1100 dark:text-gray-dark-1100 mb-[6px]">Blank project</p>
                <p class="text-desc text-gray-400 dark:text-gray-dark-400 mb-[61px]">Start from scratch</p>
                <div class="flex items-center gap-[6px]">
                  <button class="btn normal-case h-fit min-h-fit transition-all duration-300 border-4 bg-color-brands hover:bg-color-brands hover:border-[#B2A7FF] dark:hover:border-[#B2A7FF] border-neutral-bg w-fit dark:border-dark-neutral-bg py-[7px] px-[16.5px]">Templates</button>
                  <button class="btn normal-case h-fit min-h-fit transition-all duration-300 border-4 bg-gray-500 hover:bg-white hover:text-black hover:border-gray-300 dark:hover:border-gray-dark-300 border-neutral-bg w-fit dark:border-dark-neutral-bg py-[7px] px-[19px]">Cancel</button>
                </div>
              </div>
            </div>
          </div>
          <label class="btn modal-button absolute left-[-1000px]" for="add-modal">add</label>
          <input class="modal-toggle" type="checkbox" id="add-modal">
          <div class="modal">
            <div class="modal-box relative bg-neutral-bg scrollbar-hide w-full dark:bg-dark-neutral-bg pt-[53px] max-w-[794px]">
              <label class="absolute right-2 top-2 cursor-pointer" for="add-modal"><img src="assets/images/icons/icon-close-modal.svg" alt="close modal button"></label>
              <div class="flex items-center justify-center flex-col">
                <h6 class="text-header-6 font-semibold text-gray-500 text-center dark:text-gray-dark-500 mb-[50px]">Create a New Project</h6>
                <div class="w-full flex flex-col max-w-[531px] gap-[30px] mb-[60px] lg:mb-[166px]">
                  <div class="border-dashed border-2 text-center border-neutral mx-auto cursor-pointer py-[26px] dark:border-dark-neutral-border w-full max-w-[724px]"><img class="mx-auto inline-block mb-[15px]" src="assets/images/icons/icon-image.svg" alt="image icon">
                    <p class="text-sm leading-6 text-gray-500 font-normal mb-[5px]">Drop your image here, or browse</p>
                    <p class="leading-6 text-gray-400 text-[13px]">JPG,PNG and GIF files are allowed</p>
                  </div>
                  <div class="w-full"> 
                    <p class="text-gray-1100 text-base leading-4 font-medium capitalize mb-[10px] dark:text-gray-dark-1100">Project Name</p>
                    <div class="input-group border rounded-lg border-[#E8EDF2] dark:border-[#313442] sm:min-w-[252px]">
                      <input class="input bg-transparent text-sm leading-4 text-gray-400 h-fit min-h-fit py-4 focus:outline-none pl-[13px] dark:text-gray-dark-400 placeholder:text-inherit" type="text" placeholder="Type name here">
                    </div>
                  </div>
                  <div class="w-full">
                    <p class="text-gray-1100 text-base leading-4 font-medium capitalize mb-[10px] dark:text-gray-dark-1100">Description</p>
                    <div class="rounded-lg border border-neutral flex flex-col dark:border-dark-neutral-border p-[13px] h-[218px]">
                      <div class="flex items-center gap-y-4 flex-col gap-x-[22px] mb-[31px] xl:flex-row xl:gap-y-0">
                        <div class="flex items-center gap-x-[14px]"><img class="cursor-pointer" src="assets/images/icons/icon-bold.svg" alt="bold icon"><img class="cursor-pointer" src="assets/images/icons/icon-italicized.svg" alt="italicized icon"><img class="cursor-pointer" src="assets/images/icons/icon-underlined.svg" alt="underlined icon"><img class="cursor-pointer" src="assets/images/icons/icon-strikethrough.svg" alt="strikethrough icon"><img class="cursor-pointer" src="assets/images/icons/icon-textcolor.svg" alt="textcolor icon"><img class="cursor-pointer" src="assets/images/icons/icon-backgroundcolor.svg" alt="backgroundcolor icon"><img class="cursor-pointer" src="assets/images/icons/icon-smile.svg" alt="smile icon"></div>
                        <div class="flex items-center gap-x-[14px]">
                          <div class="flex items-center cursor-pointer gap-x-[1.5px]"><img src="assets/images/icons/icon-paragraphformat.svg" alt="paragraphformat icon"><img src="assets/images/icons/icon-arrow-down-triangle.svg" alt="arrow down triangle icon"></div>
                          <div class="flex items-center cursor-pointer gap-x-[1.5px]"><img src="assets/images/icons/icon-align-left.svg" alt="align left icon"><img src="assets/images/icons/icon-arrow-down-triangle.svg" alt="arrow down triangle icon"></div>
                          <div class="flex items-center cursor-pointer gap-x-[1.5px]"><img src="assets/images/icons/icon-ordered-list.svg" alt="ordered list icon"><img src="assets/images/icons/icon-arrow-down-triangle.svg" alt="arrow down triangle icon"></div>
                          <div class="flex items-center cursor-pointer gap-x-[1.5px]"><img src="assets/images/icons/icon-unordered-list.svg" alt="unordered list icon"><img src="assets/images/icons/icon-arrow-down-triangle.svg" alt="arrow down triangle icon"></div><img class="cursor-pointer" src="assets/images/icons/icon-indent.svg" alt="indent icon"><img class="cursor-pointer opacity-40" src="assets/images/icons/icon-indent.svg" alt="outdent icon">
                        </div>
                        <div class="flex items-center gap-x-[14px]"><img class="cursor-pointer" src="assets/images/icons/icon-insert-image.svg" alt="insert image icon"><img class="cursor-pointer" src="assets/images/icons/icon-insert-link.svg" alt="insert link icon"><img class="cursor-pointer" src="assets/images/icons/icon-insert-file.svg" alt="insert-file icon"><img class="cursor-pointer" src="assets/images/icons/icon-insert-video.svg" alt="insert video icon"><img class="cursor-pointer opacity-40" src="assets/images/icons/icon-undo.svg" alt="undo icon"><img class="cursor-pointer opacity-40" src="assets/images/icons/icon-redo.svg" alt="redo icon"></div>
                      </div>
                      <textarea class="textarea w-full p-0 text-gray-400 resize-none rounded-none bg-transparent flex-1 focus:outline-none dark:text-gray-dark-400 placeholder:text-inherit" placeholder="Type description here"></textarea>
                    </div>
                  </div>
                  <div class="w-full"> 
                    <p class="text-gray-1100 text-base leading-4 font-medium capitalize mb-[10px] dark:text-gray-dark-1100">Category</p>
                    <div class="input-group border rounded-lg border-[#E8EDF2] dark:border-[#313442] sm:min-w-[252px]">
                      <input class="input bg-transparent text-sm leading-4 text-gray-400 h-fit min-h-fit py-4 focus:outline-none pl-[13px] dark:text-gray-dark-400 placeholder:text-inherit" type="text" placeholder="Design system">
                    </div>
                  </div>
                  <div class="w-full"> 
                    <p class="text-gray-1100 text-base leading-4 font-medium capitalize mb-[10px] dark:text-gray-dark-1100">Priority</p>
                    <div class="input-group border rounded-lg border-[#E8EDF2] dark:border-[#313442] sm:min-w-[252px]">
                      <input class="input bg-transparent text-sm leading-4 text-gray-400 h-fit min-h-fit py-4 focus:outline-none pl-[13px] dark:text-gray-dark-400 placeholder:text-inherit" type="text" placeholder="Urgent">
                    </div>
                  </div>
                  <div class="w-full"> 
                    <p class="text-gray-1100 text-base leading-4 font-medium capitalize mb-[10px] dark:text-gray-dark-1100">Tag</p>
                    <div class="border bg-neutral-bg border-neutral dark:bg-dark-neutral-bg dark:border-dark-neutral-border rounded-lg p-[15px] mt-[10px] min-h-[107px]">
                      <div class="flex flex-wrap gap-[10px]">
                        <div class="flex items-center py-1 px-2 gap-x-[5px] mb-[10px] bg-[#E8EDF2] dark:bg-[#313442] rounded-[5px]"><span class="text-xs text-gray-400">smartwatch</span><img class="cursor-pointer" src="assets/images/icons/icon-close.svg" alt="close icon"></div>
                        <div class="flex items-center py-1 px-2 gap-x-[5px] mb-[10px] bg-[#E8EDF2] dark:bg-[#313442] rounded-[5px]"><span class="text-xs text-gray-400">Apple</span><img class="cursor-pointer" src="assets/images/icons/icon-close.svg" alt="close icon"></div>
                        <div class="flex items-center py-1 px-2 gap-x-[5px] mb-[10px] bg-[#E8EDF2] dark:bg-[#313442] rounded-[5px]"><span class="text-xs text-gray-400">Watch</span><img class="cursor-pointer" src="assets/images/icons/icon-close.svg" alt="close icon"></div>
                        <div class="flex items-center py-1 px-2 gap-x-[5px] mb-[10px] bg-[#E8EDF2] dark:bg-[#313442] rounded-[5px]"><span class="text-xs text-gray-400">smartphone</span><img class="cursor-pointer" src="assets/images/icons/icon-close.svg" alt="close icon"></div>
                        <div class="flex items-center py-1 px-2 gap-x-[5px] mb-[10px] bg-[#E8EDF2] dark:bg-[#313442] rounded-[5px]"><span class="text-xs text-gray-400">iPhone14 max</span><img class="cursor-pointer" src="assets/images/icons/icon-close.svg" alt="close icon"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <label class="btn modal-button absolute left-[-1000px]" for="share-modal">share</label>
          <input class="modal-toggle" type="checkbox" id="share-modal">
          <div class="modal">
            <div class="modal-box relative bg-neutral-bg scrollbar-hide w-full dark:bg-dark-neutral-bg pt-[53px] max-w-[738px] pr-[31px]">
              <label class="absolute right-2 top-2 cursor-pointer" for="share-modal"><img src="assets/images/icons/icon-close-modal.svg" alt="close modal button"></label>
              <div class="flex items-center justify-center flex-col">
                <h6 class="text-header-6 font-semibold text-gray-500 text-center dark:text-gray-dark-500 mb-[53px]">Share Duplicate of Creative requests</h6>
                <div class="w-full bg-neutral h-[1px] dark:bg-dark-neutral-border mb-10"></div>
                <div class="w-full mb-[65px]"> 
                  <p class="text-gray-1100 text-base leading-4 font-medium capitalize mb-[10px] dark:text-gray-dark-1100">Invite link</p>
                  <div class="flex items-center justify-between rounded-md bg-neutral py-[11px] px-[10px] dark:bg-dark-neutral-border">
                    <p class="text-sm leading-4 text-gray-400 dark:text-gray-dark-400">foxy.com/ZmRzYSBmZHMgc2RmIHNkYWZzZ</p>
                    <div class="flex items-center text-blue gap-[6px]"><img src="assets/images/icons/Icon-link.svg" alt="link icon">
                      <p class="text-desc">Copy link</p>
                    </div>
                  </div>
                </div>
                <div class="w-full mb-[24px]"> 
                  <p class="text-gray-1100 text-base leading-4 font-medium capitalize mb-[10px] dark:text-gray-dark-1100">Invite with email</p>
                  <div class="flex items-center gap-5"> 
                    <input class="bg-transparent text-sm leading-4 text-gray-400 border border-neutral flex-1 rounded-md focus:outline-none p-[10px] dark:text-gray-dark-400 placeholder:text-inherit dark:border-dark-neutral-border" type="text" placeholder="Add project members by name or email">
                    <button class="btn normal-case h-fit min-h-fit transition-all duration-300 border-4 bg-color-brands hover:bg-color-brands hover:border-[#B2A7FF] dark:hover:border-[#B2A7FF] border-neutral-bg dark:border-dark-neutral-bg py-[11px] px-[23px]">Invite</button>
                  </div>
                </div>
                <div class="w-full flex items-center justify-between mb-[30px]">
                  <div class="flex items-center gap-3"> <a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 border-none" href="seller-details.html"><img class="w-full h-full object-cover" src="assets/images/avatar-layouts-1.png" alt="user avatar"></a>
                    <p class="text-sm leading-4 text-gray-400 dark:text-gray-dark-400">Theresa Webb</p>
                  </div>
                  <p class="text-sm leading-4 text-gray-400 dark:text-gray-dark-400">Owner</p>
                </div>
                <div class="w-full bg-neutral h-[1px] dark:bg-dark-neutral-border mb-[35px]"></div>
                <div class="w-full mb-[42px]">
                  <p class="text-subtitle font-medium text-gray-1100 mb-8 dark:text-gray-dark-1100">Members</p>
                  <div class="flex flex-col items-center gap-6 w-full">
                    <div class="flex items-center justify-between w-full">
                      <div class="flex items-center gap-3"><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 border-none" href="seller-details.html"><img class="w-full h-full object-cover" src="assets/images/avatar-layouts-2.png" alt="user avatar"></a>
                        <div>
                          <p class="text-normal text-gray-1100 mb-[2px] dark:text-gray-dark-1100">Bessie Cooper</p>
                          <p class="text-desc text-gray-400 dark:text-gray-dark-400">binhan628@gmail.com</p>
                        </div>
                      </div>
                      <select class="select text-gray-500 pl-1 font-normal h-fit min-h-fit dark:text-gray-dark-500 focus:outline-0 select-caret">
                        <option>Can Edit</option>
                        <option>Can View</option>
                      </select>
                    </div>
                    <div class="flex items-center justify-between w-full">
                      <div class="flex items-center gap-3"><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 border-none" href="seller-details.html"><img class="w-full h-full object-cover" src="assets/images/avatar-layouts-3.png" alt="user avatar"></a>
                        <div>
                          <p class="text-normal text-gray-1100 mb-[2px] dark:text-gray-dark-1100">Cameron Williamson</p>
                          <p class="text-desc text-gray-400 dark:text-gray-dark-400">trungkienspktnd@gamail.com</p>
                        </div>
                      </div>
                      <select class="select text-gray-500 pl-1 font-normal h-fit min-h-fit dark:text-gray-dark-500 focus:outline-0 select-caret">
                        <option>Can Edit</option>
                        <option>Can View</option>
                      </select>
                    </div>
                    <div class="flex items-center justify-between w-full">
                      <div class="flex items-center gap-3"><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 border-none" href="seller-details.html"><img class="w-full h-full object-cover" src="assets/images/avatar-layouts-4.png" alt="user avatar"></a>
                        <div>
                          <p class="text-normal text-gray-1100 mb-[2px] dark:text-gray-dark-1100">Jacob Jones</p>
                          <p class="text-desc text-gray-400 dark:text-gray-dark-400">manhhachkt08@gmail.com</p>
                        </div>
                      </div>
                      <select class="select text-gray-500 pl-1 font-normal h-fit min-h-fit dark:text-gray-dark-500 focus:outline-0 select-caret">
                        <option>Can Edit</option>
                        <option>Can View</option>
                      </select>
                    </div>
                    <div class="flex items-center justify-between w-full">
                      <div class="flex items-center gap-3"><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 border-none" href="seller-details.html"><img class="w-full h-full object-cover" src="assets/images/avatar-layouts-5.png" alt="user avatar"></a>
                        <div>
                          <p class="text-normal text-gray-1100 mb-[2px] dark:text-gray-dark-1100">Arlene McCoy</p>
                          <p class="text-desc text-gray-400 dark:text-gray-dark-400">tienlapspktnd@gmail.com</p>
                        </div>
                      </div>
                      <select class="select text-gray-500 pl-1 font-normal h-fit min-h-fit dark:text-gray-dark-500 focus:outline-0 select-caret">
                        <option>Can Edit</option>
                        <option>Can View</option>
                      </select>
                    </div>
                    <div class="flex items-center justify-between w-full">
                      <div class="flex items-center gap-3"><a class="block rounded-full border-neutral overflow-hidden border-[1.4px] dark:border-gray-dark-100 w-9 h-9 border-none" href="seller-details.html"><img class="w-full h-full object-cover" src="assets/images/avatar-layouts-1.png" alt="user avatar"></a>
                        <div>
                          <p class="text-normal text-gray-1100 mb-[2px] dark:text-gray-dark-1100">Brooklyn Simmons</p>
                          <p class="text-desc text-gray-400 dark:text-gray-dark-400">tranthuy.nute@gmail.com</p>
                        </div>
                      </div>
                      <select class="select text-gray-500 pl-1 font-normal h-fit min-h-fit dark:text-gray-dark-500 focus:outline-0 select-caret">
                        <option>Can Edit</option>
                        <option>Can View</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <label class="btn modal-button absolute left-[-1000px]" for="mail-modal">mail</label>
          <input class="modal-toggle" type="checkbox" id="mail-modal">
          <div class="modal">
            <div class="modal-box relative bg-neutral-bg scrollbar-hide w-full dark:bg-dark-neutral-bg pt-[38px] max-w-[650px] pl-[45px]">
              <label class="absolute right-2 top-2 cursor-pointer" for="mail-modal"><img src="assets/images/icons/icon-close-modal.svg" alt="close modal button"></label>
              <div class="flex items-center justify-center flex-col">
                <h6 class="w-full text-header-6 font-semibold text-gray-500 dark:text-gray-dark-500 mb-[39px]">New Mesage</h6>
                <div class="flex items-center gap-4 flex-col w-full">
                  <div class="flex items-center rounded-lg border border-neutral justify-between w-full flex-wrap gap-3 py-[13px] px-[10px] dark:border-dark-neutral-border">
                    <div class="flex items-center">
                      <p class="text-sm leading-4 text-gray-400 dark:text-gray-dark-400 pr-5">To:</p>
                      <div class="flex items-center flex-wrap gap-[5px]">
                        <div class="flex items-center rounded gap-[5px] py-[6px] pl-[10px] pr-[5px] bg-neutral dark:bg-dark-neutral-border"><img class="rounded-full w-4 h-4" src="assets/images/seller-avatar-2.png" alt="user avatar">
                          <p class="font-medium text-gray-400 text-[10px] leading-[15px] dark:text-gray-dark-400">Steven Job</p>
                          <svg class="fill-gray-400 cursor-pointer dark:fill-gray-dark-400" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20003 8.00001L4.80003 10.4L5.60003 11.2L8.00002 8.80001L10.4 11.2L11.2 10.4L8.80002 8.00001L11.2 5.60001L10.4 4.80001L8.00002 7.20001L5.6 4.79999L4.8 5.59999L7.20003 8.00001Z"></path>
                          </svg>
                        </div>
                        <div class="flex items-center rounded gap-[5px] py-[6px] pl-[10px] pr-[5px] bg-neutral dark:bg-dark-neutral-border"><img class="rounded-full w-4 h-4" src="assets/images/seller-avatar-3.png" alt="user avatar">
                          <p class="font-medium text-gray-400 text-[10px] leading-[15px] dark:text-gray-dark-400">Hailen</p>
                          <svg class="fill-gray-400 cursor-pointer dark:fill-gray-dark-400" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20003 8.00001L4.80003 10.4L5.60003 11.2L8.00002 8.80001L10.4 11.2L11.2 10.4L8.80002 8.00001L11.2 5.60001L10.4 4.80001L8.00002 7.20001L5.6 4.79999L4.8 5.59999L7.20003 8.00001Z"></path>
                          </svg>
                        </div>
                        <div class="flex items-center rounded gap-[5px] py-[6px] pl-[10px] pr-[5px] bg-neutral dark:bg-dark-neutral-border"><img class="rounded-full w-4 h-4" src="assets/images/seller-avatar-4.png" alt="user avatar">
                          <p class="font-medium text-gray-400 text-[10px] leading-[15px] dark:text-gray-dark-400">Azumi Rose</p>
                          <svg class="fill-gray-400 cursor-pointer dark:fill-gray-dark-400" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.20003 8.00001L4.80003 10.4L5.60003 11.2L8.00002 8.80001L10.4 11.2L11.2 10.4L8.80002 8.00001L11.2 5.60001L10.4 4.80001L8.00002 7.20001L5.6 4.79999L4.8 5.59999L7.20003 8.00001Z"></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center gap-[6px]">
                      <p class="font-medium text-gray-400 cursor-pointer text-[10px] leading-[15px] dark:text-gray-dark-400 hover:text-color-brands dark:hover:text-color-brands">Cc</p>
                      <p class="font-medium text-gray-400 cursor-pointer text-[10px] leading-[15px] dark:text-gray-dark-400 hover:text-color-brands dark:hover:text-color-brands">Bcc</p>
                    </div>
                  </div>
                  <div class="rounded-lg border border-neutral justify-between w-full py-[16px] px-[13px] dark:border-dark-neutral-border">
                    <input class="input bg-transparent text-sm leading-4 text-gray-400 p-0 w-full h-4 rounded-none focus:outline-none dark:text-gray-dark-400 placeholder:text-inherit" type="text" placeholder="Subject">
                  </div>
                  <div class="rounded-lg border border-neutral flex flex-col dark:border-dark-neutral-border p-[13px] h-[262px] w-full">
                    <div class="flex items-center gap-y-4 flex-col gap-x-[22px] mb-[31px] xl:flex-row xl:gap-y-0">
                      <div class="flex items-center gap-x-[14px]"><img class="cursor-pointer" src="assets/images/icons/icon-bold.svg" alt="bold icon"><img class="cursor-pointer" src="assets/images/icons/icon-italicized.svg" alt="italicized icon"><img class="cursor-pointer" src="assets/images/icons/icon-underlined.svg" alt="underlined icon"><img class="cursor-pointer" src="assets/images/icons/icon-strikethrough.svg" alt="strikethrough icon"><img class="cursor-pointer" src="assets/images/icons/icon-textcolor.svg" alt="textcolor icon"><img class="cursor-pointer" src="assets/images/icons/icon-backgroundcolor.svg" alt="backgroundcolor icon"><img class="cursor-pointer" src="assets/images/icons/icon-smile.svg" alt="smile icon"></div>
                      <div class="flex items-center gap-x-[14px]">
                        <div class="flex items-center cursor-pointer gap-x-[1.5px]"><img src="assets/images/icons/icon-paragraphformat.svg" alt="paragraphformat icon"><img src="assets/images/icons/icon-arrow-down-triangle.svg" alt="arrow down triangle icon"></div>
                        <div class="flex items-center cursor-pointer gap-x-[1.5px]"><img src="assets/images/icons/icon-align-left.svg" alt="align left icon"><img src="assets/images/icons/icon-arrow-down-triangle.svg" alt="arrow down triangle icon"></div>
                        <div class="flex items-center cursor-pointer gap-x-[1.5px]"><img src="assets/images/icons/icon-ordered-list.svg" alt="ordered list icon"><img src="assets/images/icons/icon-arrow-down-triangle.svg" alt="arrow down triangle icon"></div>
                        <div class="flex items-center cursor-pointer gap-x-[1.5px]"><img src="assets/images/icons/icon-unordered-list.svg" alt="unordered list icon"><img src="assets/images/icons/icon-arrow-down-triangle.svg" alt="arrow down triangle icon"></div><img class="cursor-pointer" src="assets/images/icons/icon-indent.svg" alt="indent icon"><img class="cursor-pointer opacity-40" src="assets/images/icons/icon-indent.svg" alt="outdent icon">
                      </div>
                      <div class="flex items-center gap-x-[14px]"><img class="cursor-pointer" src="assets/images/icons/icon-insert-image.svg" alt="insert image icon"><img class="cursor-pointer" src="assets/images/icons/icon-insert-link.svg" alt="insert link icon"><img class="cursor-pointer" src="assets/images/icons/icon-insert-file.svg" alt="insert-file icon"><img class="cursor-pointer" src="assets/images/icons/icon-insert-video.svg" alt="insert video icon"><img class="cursor-pointer opacity-40" src="assets/images/icons/icon-undo.svg" alt="undo icon"><img class="cursor-pointer opacity-40" src="assets/images/icons/icon-redo.svg" alt="redo icon"></div>
                    </div>
                    <textarea class="textarea w-full p-0 text-gray-400 resize-none rounded-none bg-transparent flex-1 focus:outline-none dark:text-gray-dark-400 placeholder:text-inherit" placeholder="Content here"></textarea>
                  </div>
                  <div class="flex items-center w-full gap-[15px]">
                    <button class="btn normal-case h-fit min-h-fit transition-all duration-300 border-4 bg-color-brands hover:bg-color-brands hover:border-[#B2A7FF] dark:hover:border-[#B2A7FF] border-neutral-bg font-medium dark:border-dark-neutral-bg py-[7px] px-[24px] text-[12px] leading-[18px]">Send</button>
                    <button class="btn normal-case h-fit min-h-fit transition-all duration-300 border-4 border-neutral-bg bg-gray-200 font-medium text-gray-500 dark:border-dark-neutral-bg py-[7px] px-[17px] dark:bg-gray-dark-200 text-[12px] leading-[18px] dark:text-gray-dark-500 hover:bg-gray-200 dark:hover:bg-gray-dark-200 hover:border-gray-300 dark:hover:border-gray-dark-300">Save Darft</button>
                    <p class="text-desc text-gray-400 dark:text-gray-dark-400">Schedule</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="mt-[37px]">
          <div class="w-full bg-neutral h-[1px] dark:bg-dark-neutral-border mb-[25px]"></div>
          <div class="flex items-center justify-between text-desc text-gray-400 flex-wrap gap-5 dark:text-gray-dark-400">
            <div class="flex items-center gap-2 flex-wrap">
              <p> <span>© 2022 -</span><span class="text-color-brands">&nbsp;Frox</span><span>&nbsp;Dashboard</span></p>
              <div class="bg-color-brands rounded-full hidden w-[2px] h-[2px] md:block"></div>
              <p> <span>Made by</span><a class="text-color-brands" href="https://alithemes.com" target="_blank">&nbsp;AliThemes</a></p>
            </div>
            <div class="flex items-center gap-[15px]"><a class="transition-colors duration-300 hover:text-color-brands" href="#">About</a><a class="transition-colors duration-300 hover:text-color-brands" href="#">Careers</a><a class="transition-colors duration-300 hover:text-color-brands" href="#">Policy</a><a class="transition-colors duration-300 hover:text-color-brands" href="#">Contact</a></div>
          </div>
        </footer>
      </main>

@endsection