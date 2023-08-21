<aside class="absolute left-0 top-0 z-1000 flex h-screen w-72 lg:w-[350px] flex-col overflow-y-hidden bg-white duration-300 ease-linear lg:static lg:translate-x-0 dark:bg-zinc-800" :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'" @click.outside="sidebarToggle = false">
  <!-- sidebar header -->
  <div class="flex items-center justify-between gap-2 px-6 py-5 lg:py-6">
    <a href="#" class="flex justify-between items-center gap-4">
      <img src="<?= base_url("assets/logo/logo-icon.svg"); ?>" alt="Logo" />
      <div>
        <h6 class="font-bold text-base text-gray-800 dark:text-white leading-normal">Movieapps</h6>
        <p class="text-xs font-normal text-gray-400 dark:text-gray-200">Ticket from anywhere</p>
      </div>
    </a>
    <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
      <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z" fill="gray" />
      </svg>
    </button>
  </div>
  <!-- sidebar header -->

  <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-in-out">
    <!-- sidebar menu -->
    <nav class="mt-4 py-4 px-4 lg:mt-6 lg:px-4" x-data="{selected: ''}">
      <!-- menu group -->
      <div class="">
        <h3 class="mb-1 ml-4 text-md font-normal text-gray-400 dark:text-gray-200 leading-normal">Menus</h3>
        <ul class="mb-6 flex flex-col">
          <!-- menu item dashboard -->
          <li class="mb-1">
            <a href="#" class="group relative flex items-center gap-4 rounded-sm py-3 px-4 font-normal leading-normal duration-300 ease-in-out hover:bg-gray-200 hover:text-blue-600 dark:text-gray-200 dark:hover:bg-slate-500" :class="(selected === 'Dashboard') ? 'bg-gray-200 dark:bg-slate-500 font-semibold text-blue-600' :'text-gray-500' " @click.prevent="selected = (selected === 'Dashboard' ? '':'Dashboard')">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
              Dashboard
            </a>
          </li>
          <!-- menu item dashboard -->

          <!-- menu item movie -->
          <li class="mb-1">
            <a href="#" class="group relative flex items-center gap-4 rounded-sm py-3 px-4 font-normal leading-normal duration-300 ease-in-out hover:bg-gray-200 hover:text-blue-600 dark:text-gray-200 dark:hover:bg-slate-500" :class="(selected === 'Movie') ? 'bg-blue-50 font-semibold dark:bg-slate-500 text-blue-600' :'text-gray-500' " @click.prevent="selected = (selected === 'Movie' ? '':'Movie')">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video">
                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
              </svg>
              Movie
              <div class="absolute right-4 top-1/2 -translate-y-1/2">
                <i class="fa-solid fa-chevron-down" :class="{ 'rotate-180': (selected === 'Movie') }"></i>
              </div>
            </a>
            <!-- dropdown start -->
            <div class="overflow-hidden" :class="(selected === 'Movie') ? 'block bg-blue-50 dark:bg-slate-500 hover:text-blue-500' :'hidden'">
              <ul class="mt-2 mb-3 flex flex-col gap-2.5 pl-6">
                <li>
                  <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-normal text-gray-500 leading-normal duration-300 ease-in-out hover:text-blue-600 dark:text-gray-200" href="<?= base_url("movies"); ?>">
                    <i class="fa-solid fa-film"></i>
                    Movie
                  </a>
                </li>
                <li>
                  <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-normal text-gray-500 leading-normal duration-300 ease-in-out hover:text-blue-600 dark:text-gray-200" href="#">
                    <i class="fa-solid fa-ticket-simple"></i>
                    Ticket
                  </a>
                </li>
              </ul>
            </div>
            <!-- dropdown start -->
          </li>
          <!-- menu item movie -->
        </ul>
      </div>
      <!-- menu group -->
    </nav>
    <!-- sidebar menu -->
  </div>
</aside>