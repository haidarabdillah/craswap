<nav class="bg-gray-background fixed z-50 w-full">
    <div class="max-w-[1920px] mx-auto px-4 sm:px-6 lg:px-[78px] py-[20px]">
        <div class="flex justify-start lg:h-[40px] items-center">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <div class="bg-gray-form text-gray-font border border-gray-border p-[10px] mr-2 rounded-lg block md:hidden lg:hidden w-fit cursor-pointer"
                        onclick="openToggle('navlinks')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                            fill="none">
                            <path
                                d="M2.5 15V13.3333H17.5V15H2.5ZM2.5 10.8333V9.16667H17.5V10.8333H2.5ZM2.5 6.66667V5H17.5V6.66667H2.5Z"
                                fill="#7E7E81" />
                        </svg>
                    </div>
                    <a href="{{ url('/') }}">
                        <img class="h-8 w-auto" src="{{ asset('images/logo-long.png') }}" alt="Logo">
                    </a>
                </div>
            </div>
            <!-- Navigation Website -->
            
            <div class="sm:-my-px sm:ml-10 text-white hidden md:hidden lg:flex lg:justify-between lg:items-center">
                <a href="{{ url('/') }}"
                   class="hover:text-gray-700 px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="{{ url('/') }}"
                   class="hover:text-gray-700 px-3 py-2 rounded-md text-base font-medium">Trade</a>
                <a href="{{ url('/') }}"
                   class="hover:text-gray-700 px-3 py-2 rounded-md text-base font-medium">Earn</a>
                <a href="{{ url('/') }}"
                   class="hover:text-gray-700 px-3 py-2 rounded-md text-base font-medium">Bridge</a>
                <a href="{{ url('/') }}"
                   class="hover:text-gray-700 px-3 py-2 rounded-md text-base font-medium">Launchpad</a>
                <a href="{{ url('/') }}"
                   class="hover:text-gray-700 px-3 py-2 rounded-md text-base font-medium flex items-center gap-2">
                    More
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <g clip-path="url(#clip0_286_1365)">
                          <path d="M12.0001 6C12.5681 6 12.8647 6.65733 12.5221 7.082L12.4714 7.138L8.47138 11.138C8.35659 11.2528 8.20386 11.3217 8.04184 11.3319C7.87982 11.3421 7.71965 11.2928 7.59138 11.1933L7.52872 11.138L3.52872 7.138L3.47338 7.07533L3.43738 7.024L3.40138 6.96L3.39005 6.936L3.37205 6.89133L3.35072 6.81933L3.34405 6.784L3.33738 6.744L3.33472 6.706V6.62733L3.33805 6.58867L3.34405 6.54867L3.35072 6.514L3.37205 6.442L3.39005 6.39733L3.43672 6.30933L3.48005 6.24933L3.52872 6.19533L3.59138 6.14L3.64272 6.104L3.70672 6.068L3.73072 6.05667L3.77538 6.03867L3.84738 6.01733L3.88272 6.01067L3.92272 6.004L3.96072 6.00133L12.0001 6Z" fill="white"/>
                        </g>
                        <defs>
                          <clipPath id="clip0_286_1365">
                            <rect width="16" height="16" fill="white"/>
                          </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
            
            <div class="flex flex-row space-x-[8px] items-center ms-auto">
                <div class="hidden md:flex flex-row space-x-[10px] items-center justify-center">
                    <img src="{{asset('/images/usdt.png')}}" alt="" class="w-5 h-5">
                    <p class="text-gray-font text-md font-normal">$1.2549</p>
                </div>
                <div class="hidden md:flex flex-row items-center justify-center">
                    <img src="{{asset('/images/eth.png')}}" alt="" class="w-5 h-5 me-[10px]">
                    <p class="text-gray-font text-md font-normal">ETH</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M6.66675 8.33325L10.0001 11.6666L13.3334 8.33325" stroke="#7E7E81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </div>
                
                <div class="hidden md:block">
                    <div class="p-[10px] rounded-[6px] bg-[#141414] border-[1px] border-[#25282C]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.5833 10.55C16.4497 10.3979 16.376 10.2024 16.376 9.99999C16.376 9.79757 16.4497 9.60207 16.5833 9.44999L17.65 8.24999C17.7675 8.11888 17.8405 7.95391 17.8585 7.77875C17.8765 7.60359 17.8385 7.42723 17.75 7.27499L16.0833 4.39166C15.9957 4.23959 15.8624 4.11906 15.7023 4.04723C15.5422 3.97541 15.3635 3.95596 15.1917 3.99166L13.625 4.30833C13.4256 4.34952 13.2181 4.31632 13.0416 4.21499C12.865 4.11367 12.7317 3.95123 12.6667 3.75833L12.1583 2.23333C12.1024 2.06781 11.9959 1.92405 11.8539 1.82236C11.7118 1.72068 11.5414 1.66621 11.3667 1.66666H8.03333C7.85161 1.65718 7.67177 1.70743 7.5213 1.80976C7.37082 1.91208 7.25798 2.06084 7.2 2.23333L6.73333 3.75833C6.66833 3.95123 6.53497 4.11367 6.35842 4.21499C6.18187 4.31632 5.97434 4.34952 5.77499 4.30833L4.16666 3.99166C4.00379 3.96864 3.83774 3.99435 3.68945 4.06553C3.54116 4.13671 3.41725 4.25018 3.33333 4.39166L1.66666 7.27499C1.57596 7.42554 1.53518 7.6009 1.55015 7.77601C1.56511 7.95113 1.63506 8.11703 1.74999 8.24999L2.80833 9.44999C2.94193 9.60207 3.01561 9.79757 3.01561 9.99999C3.01561 10.2024 2.94193 10.3979 2.80833 10.55L1.74999 11.75C1.63506 11.883 1.56511 12.0489 1.55015 12.224C1.53518 12.3991 1.57596 12.5745 1.66666 12.725L3.33333 15.6083C3.42091 15.7604 3.55426 15.8809 3.71437 15.9528C3.87448 16.0246 4.05318 16.044 4.225 16.0083L5.79166 15.6917C5.99101 15.6505 6.19854 15.6837 6.37509 15.785C6.55164 15.8863 6.685 16.0488 6.74999 16.2417L7.25833 17.7667C7.31631 17.9391 7.42916 18.0879 7.57963 18.1902C7.73011 18.2926 7.90994 18.3428 8.09166 18.3333H11.425C11.5997 18.3338 11.7701 18.2793 11.9122 18.1776C12.0542 18.0759 12.1608 17.9322 12.2167 17.7667L12.725 16.2417C12.79 16.0488 12.9234 15.8863 13.0999 15.785C13.2764 15.6837 13.484 15.6505 13.6833 15.6917L15.25 16.0083C15.4218 16.044 15.6005 16.0246 15.7606 15.9528C15.9207 15.8809 16.0541 15.7604 16.1417 15.6083L17.8083 12.725C17.8968 12.5728 17.9348 12.3964 17.9168 12.2212C17.8989 12.0461 17.8259 11.8811 17.7083 11.75L16.5833 10.55ZM15.3417 11.6667L16.0083 12.4167L14.9417 14.2667L13.9583 14.0667C13.3581 13.944 12.7338 14.0459 12.2038 14.3532C11.6738 14.6604 11.2751 15.1515 11.0833 15.7333L10.7667 16.6667H8.63333L8.33333 15.7167C8.14154 15.1349 7.74281 14.6437 7.21283 14.3365C6.68285 14.0293 6.05851 13.9273 5.45833 14.05L4.47499 14.25L3.39166 12.4083L4.05833 11.6583C4.46829 11.2 4.69494 10.6066 4.69494 9.99166C4.69494 9.37672 4.46829 8.78335 4.05833 8.32499L3.39166 7.57499L4.45833 5.74166L5.44166 5.94166C6.04185 6.06435 6.66618 5.96239 7.19617 5.65516C7.72615 5.34792 8.12487 4.85679 8.31666 4.27499L8.63333 3.33333H10.7667L11.0833 4.28333C11.2751 4.86513 11.6738 5.35626 12.2038 5.66349C12.7338 5.97073 13.3581 6.07268 13.9583 5.94999L14.9417 5.74999L16.0083 7.59999L15.3417 8.34999C14.9363 8.80729 14.7125 9.39723 14.7125 10.0083C14.7125 10.6194 14.9363 11.2094 15.3417 11.6667ZM9.7 6.66666C9.04072 6.66666 8.39626 6.86216 7.84809 7.22843C7.29993 7.5947 6.87269 8.1153 6.6204 8.72438C6.3681 9.33347 6.30209 10.0037 6.43071 10.6503C6.55933 11.2969 6.8768 11.8908 7.34297 12.357C7.80915 12.8232 8.40309 13.1407 9.04969 13.2693C9.6963 13.3979 10.3665 13.3319 10.9756 13.0796C11.5847 12.8273 12.1053 12.4001 12.4716 11.8519C12.8378 11.3037 13.0333 10.6593 13.0333 9.99999C13.0333 9.11594 12.6821 8.26809 12.057 7.64297C11.4319 7.01785 10.5841 6.66666 9.7 6.66666ZM9.7 11.6667C9.37036 11.6667 9.04813 11.5689 8.77404 11.3858C8.49996 11.2026 8.28634 10.9423 8.1602 10.6378C8.03405 10.3333 8.00104 9.99815 8.06535 9.67484C8.12966 9.35154 8.2884 9.05457 8.52148 8.82148C8.75457 8.5884 9.05154 8.42966 9.37484 8.36535C9.69815 8.30104 10.0333 8.33405 10.3378 8.4602C10.6423 8.58634 10.9026 8.79996 11.0858 9.07404C11.2689 9.34813 11.3667 9.67036 11.3667 9.99999C11.3667 10.442 11.1911 10.8659 10.8785 11.1785C10.5659 11.4911 10.142 11.6667 9.7 11.6667Z" fill="#7E7E81"/>
                          </svg>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="p-[10px] rounded-[6px] bg-[#141414] border-[1px] border-[#25282C]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5M17.5 10C17.5 5.85786 14.1421 2.5 10 2.5M17.5 10C17.5 11.3807 14.1421 12.5 10 12.5C5.85786 12.5 2.5 11.3807 2.5 10M17.5 10C17.5 8.61929 14.1421 7.5 10 7.5C5.85786 7.5 2.5 8.61929 2.5 10M10 17.5C5.85786 17.5 2.5 14.1421 2.5 10M10 17.5V2.5M2.5 10C2.5 5.85786 5.85786 2.5 10 2.5" stroke="#7E7E81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                    </div>
                    
                </div>
                <button class="shadow-button bg-primary text-white p-[10px] text-[10px] md:text-sm rounded-full font-medium w-fit lg:w-[139px]">Connect wallet</button>
                <div class="bg-gray-form text-gray-font border border-gray-border p-[10px] rounded-lg hidden md:block lg:hidden w-fit cursor-pointer"
                    onclick="openToggle('navlinks')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M2.5 15V13.3333H17.5V15H2.5ZM2.5 10.8333V9.16667H17.5V10.8333H2.5ZM2.5 6.66667V5H17.5V6.66667H2.5Z"
                            fill="#7E7E81" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id="navlinks" class="hidden fixed inset-0 top-[80px] bg-gray-background flex flex-col z-50 overflow-y-auto">
    <div class="flex flex-col sm:items-start md:items-center p-8 gap-8 w-full">
        <a href="{{ url('/') }}"
            class="text-white hover:text-gray-font px-3 py-2 text-base font-medium">Home</a>
        <a href="{{ url('/') }}"
            class="text-white hover:text-gray-font px-3 py-2 text-base font-medium">Trade</a>
        <a href="{{ url('/') }}"
            class="text-white hover:text-gray-font px-3 py-2 text-base font-medium">Earn</a>
        <a href="{{ url('/') }}"
            class="text-white hover:text-gray-font px-3 py-2 text-base font-medium">Bridge</a>
        <a href="{{ url('/') }}"
            class="text-white hover:text-gray-font px-3 py-2 text-base font-medium">Launchpad</a>
            <a href="{{ url('/') }}"
            class="text-white hover:text-gray-700 px-3 py-2 rounded-md text-base font-medium flex items-center gap-2">
             More
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                 <g clip-path="url(#clip0_286_1365)">
                   <path d="M12.0001 6C12.5681 6 12.8647 6.65733 12.5221 7.082L12.4714 7.138L8.47138 11.138C8.35659 11.2528 8.20386 11.3217 8.04184 11.3319C7.87982 11.3421 7.71965 11.2928 7.59138 11.1933L7.52872 11.138L3.52872 7.138L3.47338 7.07533L3.43738 7.024L3.40138 6.96L3.39005 6.936L3.37205 6.89133L3.35072 6.81933L3.34405 6.784L3.33738 6.744L3.33472 6.706V6.62733L3.33805 6.58867L3.34405 6.54867L3.35072 6.514L3.37205 6.442L3.39005 6.39733L3.43672 6.30933L3.48005 6.24933L3.52872 6.19533L3.59138 6.14L3.64272 6.104L3.70672 6.068L3.73072 6.05667L3.77538 6.03867L3.84738 6.01733L3.88272 6.01067L3.92272 6.004L3.96072 6.00133L12.0001 6Z" fill="white"/>
                 </g>
                 <defs>
                   <clipPath id="clip0_286_1365">
                     <rect width="16" height="16" fill="white"/>
                   </clipPath>
                 </defs>
             </svg>
         </a>
        <div class="flex flex-row gap-2 items-center justify-center w-full border-t-[1px] border-t-gray-border pt-8">
            <div class="flex md:hidden flex-row space-x-[10px] items-center justify-center">
                <img src="{{asset('/images/usdt.png')}}" alt="" class="w-5 h-5">
                <p class="text-gray-font text-md font-normal">$1.2549</p>
            </div>
            <div class="flex md:hidden flex-row items-center justify-center">
                <img src="{{asset('/images/eth.png')}}" alt="" class="w-5 h-5 me-[10px]">
                <p class="text-gray-font text-md font-normal">ETH</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M6.66675 8.33325L10.0001 11.6666L13.3334 8.33325" stroke="#7E7E81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
            </div>
            
            <div class="flex md:hidden">
                <div class="p-[10px] rounded-[6px] bg-[#141414] border-[1px] border-[#25282C]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M16.5833 10.55C16.4497 10.3979 16.376 10.2024 16.376 9.99999C16.376 9.79757 16.4497 9.60207 16.5833 9.44999L17.65 8.24999C17.7675 8.11888 17.8405 7.95391 17.8585 7.77875C17.8765 7.60359 17.8385 7.42723 17.75 7.27499L16.0833 4.39166C15.9957 4.23959 15.8624 4.11906 15.7023 4.04723C15.5422 3.97541 15.3635 3.95596 15.1917 3.99166L13.625 4.30833C13.4256 4.34952 13.2181 4.31632 13.0416 4.21499C12.865 4.11367 12.7317 3.95123 12.6667 3.75833L12.1583 2.23333C12.1024 2.06781 11.9959 1.92405 11.8539 1.82236C11.7118 1.72068 11.5414 1.66621 11.3667 1.66666H8.03333C7.85161 1.65718 7.67177 1.70743 7.5213 1.80976C7.37082 1.91208 7.25798 2.06084 7.2 2.23333L6.73333 3.75833C6.66833 3.95123 6.53497 4.11367 6.35842 4.21499C6.18187 4.31632 5.97434 4.34952 5.77499 4.30833L4.16666 3.99166C4.00379 3.96864 3.83774 3.99435 3.68945 4.06553C3.54116 4.13671 3.41725 4.25018 3.33333 4.39166L1.66666 7.27499C1.57596 7.42554 1.53518 7.6009 1.55015 7.77601C1.56511 7.95113 1.63506 8.11703 1.74999 8.24999L2.80833 9.44999C2.94193 9.60207 3.01561 9.79757 3.01561 9.99999C3.01561 10.2024 2.94193 10.3979 2.80833 10.55L1.74999 11.75C1.63506 11.883 1.56511 12.0489 1.55015 12.224C1.53518 12.3991 1.57596 12.5745 1.66666 12.725L3.33333 15.6083C3.42091 15.7604 3.55426 15.8809 3.71437 15.9528C3.87448 16.0246 4.05318 16.044 4.225 16.0083L5.79166 15.6917C5.99101 15.6505 6.19854 15.6837 6.37509 15.785C6.55164 15.8863 6.685 16.0488 6.74999 16.2417L7.25833 17.7667C7.31631 17.9391 7.42916 18.0879 7.57963 18.1902C7.73011 18.2926 7.90994 18.3428 8.09166 18.3333H11.425C11.5997 18.3338 11.7701 18.2793 11.9122 18.1776C12.0542 18.0759 12.1608 17.9322 12.2167 17.7667L12.725 16.2417C12.79 16.0488 12.9234 15.8863 13.0999 15.785C13.2764 15.6837 13.484 15.6505 13.6833 15.6917L15.25 16.0083C15.4218 16.044 15.6005 16.0246 15.7606 15.9528C15.9207 15.8809 16.0541 15.7604 16.1417 15.6083L17.8083 12.725C17.8968 12.5728 17.9348 12.3964 17.9168 12.2212C17.8989 12.0461 17.8259 11.8811 17.7083 11.75L16.5833 10.55ZM15.3417 11.6667L16.0083 12.4167L14.9417 14.2667L13.9583 14.0667C13.3581 13.944 12.7338 14.0459 12.2038 14.3532C11.6738 14.6604 11.2751 15.1515 11.0833 15.7333L10.7667 16.6667H8.63333L8.33333 15.7167C8.14154 15.1349 7.74281 14.6437 7.21283 14.3365C6.68285 14.0293 6.05851 13.9273 5.45833 14.05L4.47499 14.25L3.39166 12.4083L4.05833 11.6583C4.46829 11.2 4.69494 10.6066 4.69494 9.99166C4.69494 9.37672 4.46829 8.78335 4.05833 8.32499L3.39166 7.57499L4.45833 5.74166L5.44166 5.94166C6.04185 6.06435 6.66618 5.96239 7.19617 5.65516C7.72615 5.34792 8.12487 4.85679 8.31666 4.27499L8.63333 3.33333H10.7667L11.0833 4.28333C11.2751 4.86513 11.6738 5.35626 12.2038 5.66349C12.7338 5.97073 13.3581 6.07268 13.9583 5.94999L14.9417 5.74999L16.0083 7.59999L15.3417 8.34999C14.9363 8.80729 14.7125 9.39723 14.7125 10.0083C14.7125 10.6194 14.9363 11.2094 15.3417 11.6667ZM9.7 6.66666C9.04072 6.66666 8.39626 6.86216 7.84809 7.22843C7.29993 7.5947 6.87269 8.1153 6.6204 8.72438C6.3681 9.33347 6.30209 10.0037 6.43071 10.6503C6.55933 11.2969 6.8768 11.8908 7.34297 12.357C7.80915 12.8232 8.40309 13.1407 9.04969 13.2693C9.6963 13.3979 10.3665 13.3319 10.9756 13.0796C11.5847 12.8273 12.1053 12.4001 12.4716 11.8519C12.8378 11.3037 13.0333 10.6593 13.0333 9.99999C13.0333 9.11594 12.6821 8.26809 12.057 7.64297C11.4319 7.01785 10.5841 6.66666 9.7 6.66666ZM9.7 11.6667C9.37036 11.6667 9.04813 11.5689 8.77404 11.3858C8.49996 11.2026 8.28634 10.9423 8.1602 10.6378C8.03405 10.3333 8.00104 9.99815 8.06535 9.67484C8.12966 9.35154 8.2884 9.05457 8.52148 8.82148C8.75457 8.5884 9.05154 8.42966 9.37484 8.36535C9.69815 8.30104 10.0333 8.33405 10.3378 8.4602C10.6423 8.58634 10.9026 8.79996 11.0858 9.07404C11.2689 9.34813 11.3667 9.67036 11.3667 9.99999C11.3667 10.442 11.1911 10.8659 10.8785 11.1785C10.5659 11.4911 10.142 11.6667 9.7 11.6667Z" fill="#7E7E81"/>
                      </svg>
                </div>
            </div>
            <div class="flex md:hidden">
                <div class="p-[10px] rounded-[6px] bg-[#141414] border-[1px] border-[#25282C]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5M17.5 10C17.5 5.85786 14.1421 2.5 10 2.5M17.5 10C17.5 11.3807 14.1421 12.5 10 12.5C5.85786 12.5 2.5 11.3807 2.5 10M17.5 10C17.5 8.61929 14.1421 7.5 10 7.5C5.85786 7.5 2.5 8.61929 2.5 10M10 17.5C5.85786 17.5 2.5 14.1421 2.5 10M10 17.5V2.5M2.5 10C2.5 5.85786 5.85786 2.5 10 2.5" stroke="#7E7E81" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                </div>
                
            </div>
            <button class="bg-primary text-white p-[10px] text-[10px] md:text-sm rounded-full font-medium w-fit lg:w-[139px]">Connect wallet</button>
        </div>
    </div>
</div>


@section('script')
<script>
    function openToggle(id) {
        const element = document.getElementById(id);
        element.classList.toggle('hidden');    
    }
</script>

@endsection
