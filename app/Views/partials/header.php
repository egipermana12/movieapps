<header class="header shadow-sm">
    <div class="header-wrapper">
        <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
            <!-- hamburder menu -->
            <button class="z-50 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
                <span class="relative block h-5 w-5 cursor-pointer">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </button>
            <!-- hamburder menu -->
            <a class="block flex-shrink-0 lg:hidden" href="#">
                <img src="<?= base_url("assets/logo/logo-icon.svg"); ?>" alt="Logo" />
            </a>
        </div>
        <!-- jika perlu fungsi search -->
        <div class="hidden sm:block"></div>
        <!-- jika perlu fungsi search -->
        <!-- header kanan -->
        <div class="flex items-center gap-3 2xsm:gap-7">
            <ul class="flex items-center gap-2 2xsm:gap-4">
                <li>
                    <!-- <p class="text-red-500 dark:text-indigo-500" x-text="darkMode"></p> -->
                    <!-- dark mode toggle -->
                    <label for="darkmodeToggle" class="relative m-0 block h-7 w-14 rounded-full" :class="darkMode ? 'bg-indigo-600' : 'bg-gray-300'">
                        <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode" class="absolute top-0 z-40 m-0 h-full w-full cursor-pointer opacity-0" />
                        <span :class="darkMode && '!right-[3px] !translate-x-full'" class="absolute top-1/2 left-[3px] flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear">
                            <span class="dark:hidden text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </span>
                            <span class="hidden dark:inline-block text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="gray" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </span>
                        </span>
                    </label>
                    <!-- dark mode toggle -->
                </li>
                <li class="relative" x-data="{ dropdownOpen: false, notify: true }" @click.outside="dropdownOpen= false">
                    <!-- notif menu area -->
                    <a href="#" @click.prevent="dropdownOpen =! dropdownOpen; notify= false" class="relative flex h-9 w-9 items-center justify-center rounded-full  bg-blue-50 dark:bg-slate-600 hover:text-blue-500 text-gray-600 text-md">
                        <span :class="!notify && 'hidden'" class="absolute -top-0.5 right-0 z-1 h-2 w-2 rounded-full bg-indigo-300">
                            <span class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-indigo-500 opacity-75"></span>
                        </span>
                        <span class="duration-300 ease-in-out text-gray-500 dark:text-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </span>
                    </a>
                    <!-- dropdown start -->
                    <div x-show="dropdownOpen" class="absolute -right-[6.8rem] mt-2.5 flex h-80 w-72 flex-col rounded-sm shadow-md border border-stroke bg-white dark:bg-slate-700 shadow-md sm:right-0 sm:w-80">
                        <div class="px-4 py-3">
                            <h5 class="text-sm font-medium text-gray-500 dark:text-gray-100">Notification</h5>
                        </div>
                        <ul class="flex flex-col h-auto overflow-y-auto">
                            <li>
                                <a class="flex flex-col gap-2 border-t border-stroke dark:border-slate-800 px-4 py-3 hover:bg-gray-100 dark:hover:bg-slate-500" href="#">
                                    <p class="text-sm text-gray-400">
                                        <span class="text-black dark:text-gray-300 font-medium">Edit your information in a swipe</span>
                                        Sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim.
                                    </p>
                                    <p class="text-xs text-gray-400">12 May, 2025</p>
                                </a>
                            </li>
                            <li>
                                <a class="flex flex-col gap-2 border-t border-stroke px-4 py-3 hover:bg-gray-100" href="#">
                                    <p class="text-sm text-gray-400">
                                        <span class="text-black font-medium">Edit your information in a swipe</span>
                                        Sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim.
                                    </p>
                                    <p class="text-xs text-gray-400">12 May, 2025</p>
                                </a>
                            </li>
                            <li>
                                <a class="flex flex-col gap-2 border-t border-stroke px-4 py-3 hover:bg-gray-100" href="#">
                                    <p class="text-sm text-gray-400">
                                        <span class="text-black font-medium">Edit your information in a swipe</span>
                                        Sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim.
                                    </p>
                                    <p class="text-xs text-gray-400">12 May, 2025</p>
                                </a>
                            </li>
                            <li>
                                <a class="flex flex-col gap-2 border-t border-stroke px-4 py-3 hover:bg-gray-100" href="#">
                                    <p class="text-sm text-gray-400">
                                        <span class="text-black font-medium">Edit your information in a swipe</span>
                                        Sint occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim.
                                    </p>
                                    <p class="text-xs text-gray-400">12 May, 2025</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- dropdown start -->
                    <!-- notif menu area -->
                </li>
                <li class="relative" x-data="{ dropdownOpen: false, notify: true }" @click.outside="dropdownOpen = false">
                    <!-- messages menu area -->
                    <a href="#" @click.prevent="dropdownOpen =! dropdownOpen; notify= false" class="relative flex h-9 w-9 items-center justify-center rounded-full dark:bg-slate-600 bg-blue-50 hover:text-bleu-500">
                        <span :class="!notify && 'hidden'" class="absolute -top-0.5 right-0 z-1 h-2 w-2 rounded-full bg-red-300">
                            <span class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-red-500 opacity-75"></span>
                        </span>
                        <i class="fa-regular fa-message duration-300 ease-in-out text-gray-500 dark:text-gray-100 text-md"></i>
                    </a>
                    <!-- messages menu area -->
                    <!-- drowpdown start -->
                    <div x-show="dropdownOpen" class="absolute -right-12 mt-2.5 flex h-80 w-72 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80">
                        <div class="px-4 py-3">
                            <h5 class="text-sm font-medium text-gray-500">Messages</h5>
                        </div>
                        <ul class="flex flex-col h-auto overflow-y-auto">
                            <li>
                                <a class="flex gap-4 border-t border-stroke px-4 py-3 hover:bg-gray-100" href="#">
                                    <div class="h-12 w-12 rounded-full">
                                        <img src="<?= base_url("assets/user/user-02.png") ?>" alt="User" />
                                    </div>
                                    <div>
                                        <h6 class="text-sm font-medium text-black">
                                            Mariya Desoja
                                        </h6>
                                        <p class="text-sm">I like your confidence 💪</p>
                                        <p class="text-xs">2min ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="flex gap-4 border-t border-stroke px-4 py-3 hover:bg-gray-100" href="#">
                                    <div class="h-12 w-12 rounded-full">
                                        <img src="<?= base_url("assets/user/user-03.png") ?>" alt="User" />
                                    </div>
                                    <div>
                                        <h6 class="text-sm font-medium text-black">
                                            Mariya Desoja
                                        </h6>
                                        <p class="text-sm">I like your confidence 💪</p>
                                        <p class="text-xs">2min ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="flex gap-4 border-t border-stroke px-4 py-3 hover:bg-gray-100" href="#">
                                    <div class="h-12 w-12 rounded-full">
                                        <img src="<?= base_url("assets/user/user-04.png") ?>" alt="User" />
                                    </div>
                                    <div>
                                        <h6 class="text-sm font-medium text-black">
                                            Mariya Desoja
                                        </h6>
                                        <p class="text-sm">I like your confidence 💪</p>
                                        <p class="text-xs">2min ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="flex gap-4 border-t border-stroke px-4 py-3 hover:bg-gray-100" href="#">
                                    <div class="h-12 w-12 rounded-full">
                                        <img src="<?= base_url("assets/user/user-05.png") ?>" alt="User" />
                                    </div>
                                    <div>
                                        <h6 class="text-sm font-medium text-black">
                                            Mariya Desoja
                                        </h6>
                                        <p class="text-sm">I like your confidence 💪</p>
                                        <p class="text-xs">2min ago</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- drowpdown start -->
                    </div>
                </li>
            </ul>
            <!-- user area -->
            <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
                <a href="#" class="flex items-center gap-4" @click.prevent="dropdownOpen = ! dropdownOpen">
                    <span class="hidden text-right lg:block">
                        <span class="block text-sm font-light text-black dark:text-white">Thomas Anree</span>
                        <span class="block text-xs text-gray-500 dark:text-gray-100 font-extralight">UX Designer</span>
                    </span>
                    <span class="h-12 w-12 rounded-full">
                        <img src="<?= base_url("assets/user/user-01.png"); ?>" alt="user">
                    </span>
                    <span class="text-gray-400 hidden sm:block" :class="dropdownOpen && 'rotate-180' ">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span>
                </a>
                <!-- dropdown start -->
                <div x-show="dropdownOpen" class="absolute right-0 mt-4 flex w-60 flex-col rounded-sm border border-stroke bg-white shadow-sm">
                    <ul class="flex flex-col gap-5 border-b border-stroke text-gray-400 px-6 py-7">
                        <li>
                            <a href="#" class="flex items-center gap-3 text-sm font-medium duration-300 ease-in-out hover:text-indigo-500 lg:text-base">
                                <i class="fa-regular fa-user"></i>
                                My Profile
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 text-sm font-medium duration-300 ease-in-out hover:text-indigo-500 lg:text-base">
                                <i class="fa-regular fa-address-book"></i>
                                My Contacts
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-3 text-sm font-medium duration-300 ease-in-out hover:text-indigo-500 lg:text-base">
                                <i class="fa-solid fa-gear"></i>
                                Account Settings
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- dropdown start -->
            </div>
            <!-- user area -->
        </div>
        <!-- header kanan -->
    </div>
</header>