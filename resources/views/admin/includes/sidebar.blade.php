<aside class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-primary-darker dark:bg-darker md:block">
    <div class="flex flex-col h-full">
      <!-- Sidebar links -->
      <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
        <!-- Dashboards links -->
        <div x-data="{ isActive: true, open: true}">
          <a href="#" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
            <span aria-hidden="true">
              <i class="fa-solid fa-house"></i>
            </span>
            <span class="ml-2 text-sm"> Dashboards </span>
          </a>
        </div>

        <div x-data="{ isActive: true, open: true}">
          <a href="#" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
            <span aria-hidden="true">
              <i class="fa-solid fa-sliders"></i>
            </span>
            <span class="ml-2 text-sm"> Slide </span>
          </a>
        </div>

        <div x-data="{ isActive: true, open: true}">
          <a href="#" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
            <span aria-hidden="true">
              <i class="fa-solid fa-list"></i>
            </span>
            <span class="ml-2 text-sm"> Categories </span>
          </a>
        </div>

        <div x-data="{ isActive: true, open: true}">
          <a href="#" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
            <span aria-hidden="true">
              <i class="fa-solid fa-font-awesome"></i>
            </span>
            <span class="ml-2 text-sm"> Brands </span>
          </a>
        </div>


        <div x-data="{ isActive: true, open: true}">
          <a href="#" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
            <span aria-hidden="true">
              <i class="fa-brands fa-product-hunt"></i>
            </span>
            <span class="ml-2 text-sm"> Products </span>
          </a>
        </div>


        <div x-data="{ isActive: true, open: true}">
          <a href="#" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
            <span aria-hidden="true">
              <i class="fa-solid fa-user"></i>
            </span>
            <span class="ml-2 text-sm"> User </span>
          </a>
        </div>

        <div x-data="{ isActive: true, open: true}">
          <a href="#" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
            <span aria-hidden="true">
              <i class="fa-solid fa-sack-xmark"></i>
            </span>
            <span class="ml-2 text-sm"> Coupon </span>
          </a>
        </div>

        <div x-data="{ isActive: true, open: true}">
          <a href="#" class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary">
            <span aria-hidden="true">
              <i class="fa-solid fa-address-book"></i>
            </span>
            <span class="ml-2 text-sm"> Contacts </span>
          </a>
        </div>
      </nav>

      <!-- Sidebar footer -->
      <div class="flex-shrink-0 px-2 py-4 space-y-2">
        <button
          @click="openSettingsPanel"
          type="button"
          class="flex items-center justify-center w-full px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark"
        >
          <span aria-hidden="true">
            <svg
              class="w-4 h-4 mr-2"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
              />
            </svg>
          </span>
          <span>Customize</span>
        </button>
      </div>
    </div>
  </aside>