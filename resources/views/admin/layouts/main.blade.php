<!DOCTYPE html>
<html lang="en">
  @include('admin.includes.head')
  <body>
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" :class="{ 'dark': isDark}">
      <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div
          x-ref="loading"
          class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker"
        >
          Loading.....
        </div>

        <!-- Sidebar -->
        @include('admin.includes.sidebar')

        <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">
          <!-- Navbar -->
        @include('admin.includes.header')

          <!-- Main content -->
        @yield('content')

          <!-- Main footer -->
          <footer class="flex items-center justify-between p-4 bg-white border-t dark:bg-darker dark:border-primary-darker">
            <div>K-WD &copy; 2021</div>
            <div>
              Made by
              <a href="https://github.com/Kamona-WD" target="_blank" class="text-blue-500 hover:underline"
                >Ahmed Kamel</a
              >
            </div>
          </footer>
        </div>

        <!-- Panels -->

        <!-- Settings Panel -->
        <!-- Backdrop -->
        <div
          x-transition:enter="transition duration-300 ease-in-out"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition duration-300 ease-in-out"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          x-show="isSettingsPanelOpen"
          @click="isSettingsPanelOpen = false"
          class="fixed inset-0 z-10 bg-primary-darker"
          style="opacity: 0.5"
          aria-hidden="true"
        ></div>
        <!-- Panel -->
        <section
          x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
          x-transition:enter-start="translate-x-full"
          x-transition:enter-end="translate-x-0"
          x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
          x-transition:leave-start="translate-x-0"
          x-transition:leave-end="translate-x-full"
          x-ref="settingsPanel"
          tabindex="-1"
          x-show="isSettingsPanelOpen"
          @keydown.escape="isSettingsPanelOpen = false"
          class="fixed inset-y-0 right-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none"
          aria-labelledby="settinsPanelLabel">
          <div class="absolute left-0 p-2 transform -translate-x-full">
            <!-- Close button -->
            <button
              @click="isSettingsPanelOpen = false"
              class="p-2 text-white rounded-md focus:outline-none focus:ring"
            >
              <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <!-- Panel content -->
          <div class="flex flex-col h-screen">
            <!-- Panel header -->
            <div
              class="flex flex-col items-center justify-center flex-shrink-0 px-4 py-8 space-y-4 border-b dark:border-primary-dark"
            >
              <span aria-hidden="true" class="text-gray-500 dark:text-primary">
                <svg
                  class="w-8 h-8"
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
              <h2 id="settinsPanelLabel" class="text-xl font-medium text-gray-500 dark:text-light">Settings</h2>
            </div>
            <!-- Content -->
            <div class="flex-1 overflow-hidden hover:overflow-y-auto">
              <!-- Theme -->
              <div class="p-4 space-y-4 md:p-8">
                <h6 class="text-lg font-medium text-gray-400 dark:text-light">Mode</h6>
                <div class="flex items-center space-x-8">
                  <!-- Light button -->
                  <button
                    @click="setLightTheme"
                    class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-primary dark:hover:text-primary-100 dark:hover:border-primary-light focus:outline-none focus:ring focus:ring-primary-lighter focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-primary-dark"
                    :class="{ 'border-gray-900 text-gray-900 dark:border-primary-light dark:text-primary-100': !isDark, 'text-gray-500 dark:text-primary-light': isDark }"
                  >
                    <span>
                      <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                        />
                      </svg>
                    </span>
                    <span>Light</span>
                  </button>

                  <!-- Dark button -->
                  <button
                    @click="setDarkTheme"
                    class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-primary dark:hover:text-primary-100 dark:hover:border-primary-light focus:outline-none focus:ring focus:ring-primary-lighter focus:ring-offset-2 dark:focus:ring-offset-dark dark:focus:ring-primary-dark"
                    :class="{ 'border-gray-900 text-gray-900 dark:border-primary-light dark:text-primary-100': isDark, 'text-gray-500 dark:text-primary-light': !isDark }"
                  >
                    <span>
                      <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                        />
                      </svg>
                    </span>
                    <span>Dark</span>
                  </button>
                </div>
              </div>

              <!-- Colors -->
              <div class="p-4 space-y-4 md:p-8">
                <h6 class="text-lg font-medium text-gray-400 dark:text-light">Colors</h6>
                <div>
                  <button
                    @click="setColors('cyan')"
                    class="w-10 h-10 rounded-full"
                    style="background-color: var(--color-cyan)"
                  ></button>
                  <button
                    @click="setColors('teal')"
                    class="w-10 h-10 rounded-full"
                    style="background-color: var(--color-teal)"
                  ></button>
                  <button
                    @click="setColors('green')"
                    class="w-10 h-10 rounded-full"
                    style="background-color: var(--color-green)"
                  ></button>
                  <button
                    @click="setColors('fuchsia')"
                    class="w-10 h-10 rounded-full"
                    style="background-color: var(--color-fuchsia)"
                  ></button>
                  <button
                    @click="setColors('blue')"
                    class="w-10 h-10 rounded-full"
                    style="background-color: var(--color-blue)"
                  ></button>
                  <button
                    @click="setColors('violet')"
                    class="w-10 h-10 rounded-full"
                    style="background-color: var(--color-violet)"
                  ></button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Notification panel -->
        <!-- Backdrop -->
        <div
          x-transition:enter="transition duration-300 ease-in-out"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition duration-300 ease-in-out"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          x-show="isNotificationsPanelOpen"
          @click="isNotificationsPanelOpen = false"
          class="fixed inset-0 z-10 bg-primary-darker"
          style="opacity: 0.5"
          aria-hidden="true"
        ></div>
        <!-- Panel -->
        <section
          x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
          x-transition:enter-start="-translate-x-full"
          x-transition:enter-end="translate-x-0"
          x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
          x-transition:leave-start="translate-x-0"
          x-transition:leave-end="-translate-x-full"
          x-ref="notificationsPanel"
          x-show="isNotificationsPanelOpen"
          @keydown.escape="isNotificationsPanelOpen = false"
          tabindex="-1"
          aria-labelledby="notificationPanelLabel"
          class="fixed inset-y-0 z-20 w-full max-w-xs bg-white dark:bg-darker dark:text-light sm:max-w-md focus:outline-none">
          <div class="absolute right-0 p-2 transform translate-x-full">
            <!-- Close button -->
            <button
              @click="isNotificationsPanelOpen = false"
              class="p-2 text-white rounded-md focus:outline-none focus:ring"
            >
              <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="flex flex-col h-screen" x-data="{ activeTabe: 'action' }">
            <!-- Panel header -->
            <div class="flex-shrink-0">
              <div class="flex items-center justify-between px-4 pt-4 border-b dark:border-primary-darker">
                <h2 id="notificationPanelLabel" class="pb-4 font-semibold">Notifications</h2>
                <div class="space-x-2">
                  <button
                    @click.prevent="activeTabe = 'action'"
                    class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none"
                    :class="{'border-primary-dark dark:border-primary': activeTabe == 'action', 'border-transparent': activeTabe != 'action'}"
                  >
                    Action
                  </button>
                  <button
                    @click.prevent="activeTabe = 'user'"
                    class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none"
                    :class="{'border-primary-dark dark:border-primary': activeTabe == 'user', 'border-transparent': activeTabe != 'user'}"
                  >
                    User
                  </button>
                </div>
              </div>
            </div>

            <!-- Panel content (tabs) -->
            <div class="flex-1 pt-4 overflow-y-hidden hover:overflow-y-auto">
              <!-- Action tab -->
              <div class="space-y-4" x-show.transition.in="activeTabe == 'action'">
                <a href="#" class="block">
                  <div class="flex px-4 space-x-4">
                    <div class="relative flex-shrink-0">
                      <span
                        class="z-10 inline-block p-2 overflow-visible rounded-full bg-primary-50 text-primary-light dark:bg-primary-darker"
                      >
                        <svg
                          class="w-7 h-7"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                          />
                        </svg>
                      </span>
                      <div class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                      <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                        New project "KWD Dashboard" created
                      </h5>
                      <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                        Looks like there might be a new theme soon
                      </p>
                      <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 9h ago </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="block">
                  <div class="flex px-4 space-x-4">
                    <div class="relative flex-shrink-0">
                      <span
                        class="inline-block p-2 overflow-visible rounded-full bg-primary-50 text-primary-light dark:bg-primary-darker"
                      >
                        <svg
                          class="w-7 h-7"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                          />
                        </svg>
                      </span>
                      <div class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                      <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                        KWD Dashboard v0.0.2 was released
                      </h5>
                      <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                        Successful new version was released
                      </p>
                      <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 2d ago </span>
                    </div>
                  </div>
                </a>
                <template x-for="i in 20" x-key="i">
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span
                          class="inline-block p-2 overflow-visible rounded-full bg-primary-50 text-primary-light dark:bg-primary-darker"
                        >
                          <svg
                            class="w-7 h-7"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                            />
                          </svg>
                        </span>
                        <div
                          class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"
                        ></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">
                          New project "KWD Dashboard" created
                        </h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                          Looks like there might be a new theme soon
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 9h ago </span>
                      </div>
                    </div>
                  </a>
                </template>
              </div>

              <!-- User tab -->
              <div class="space-y-4" x-show.transition.in="activeTabe == 'user'">
                <a href="#" class="block">
                  <div class="flex px-4 space-x-4">
                    <div class="relative flex-shrink-0">
                      <span class="relative z-10 inline-block overflow-visible rounded-ful">
                        <img
                          class="object-cover rounded-full w-9 h-9"
                          src="build/images/avatar.jpg"
                          alt="Ahmed kamel"
                        />
                      </span>
                      <div class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                      <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                      <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                        Shared new project "K-WD Dashboard"
                      </p>
                      <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 1d ago </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="block">
                  <div class="flex px-4 space-x-4">
                    <div class="relative flex-shrink-0">
                      <span class="relative z-10 inline-block overflow-visible rounded-ful">
                        <img
                          class="object-cover rounded-full w-9 h-9"
                          src="build/images/avatar-1.jpg"
                          alt="Ahmed kamel"
                        />
                      </span>
                      <div class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                      <h5 class="text-sm font-semibold text-gray-600 dark:text-light">John</h5>
                      <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                        Commit new changes to K-WD Dashboard project.
                      </p>
                      <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 10h ago </span>
                    </div>
                  </div>
                </a>
                <a href="#" class="block">
                  <div class="flex px-4 space-x-4">
                    <div class="relative flex-shrink-0">
                      <span class="relative z-10 inline-block overflow-visible rounded-ful">
                        <img
                          class="object-cover rounded-full w-9 h-9"
                          src="build/images/avatar.jpg"
                          alt="Ahmed kamel"
                        />
                      </span>
                      <div class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"></div>
                    </div>
                    <div class="flex-1 overflow-hidden">
                      <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                      <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                        Release new version "K-WD Dashboard"
                      </p>
                      <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 20d ago </span>
                    </div>
                  </div>
                </a>
                <template x-for="i in 10" x-key="i">
                  <a href="#" class="block">
                    <div class="flex px-4 space-x-4">
                      <div class="relative flex-shrink-0">
                        <span class="relative z-10 inline-block overflow-visible rounded-ful">
                          <img
                            class="object-cover rounded-full w-9 h-9"
                            src="build/images/avatar.jpg"
                            alt="Ahmed kamel"
                          />
                        </span>
                        <div
                          class="absolute h-24 p-px -mt-3 -ml-px bg-primary-50 left-1/2 dark:bg-primary-darker"
                        ></div>
                      </div>
                      <div class="flex-1 overflow-hidden">
                        <h5 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h5>
                        <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                          Release new version "K-WD Dashboard"
                        </p>
                        <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> 20d ago </span>
                      </div>
                    </div>
                  </a>
                </template>
              </div>
            </div>
          </div>
        </section>

        <!-- Search panel -->
        <!-- Backdrop -->
        <div
          x-transition:enter="transition duration-300 ease-in-out"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition duration-300 ease-in-out"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          x-show="isSearchPanelOpen"
          @click="isSearchPanelOpen = false"
          class="fixed inset-0 z-10 bg-primary-darker"
          style="opacity: 0.5"
          aria-hidden="ture"
        ></div>
        <!-- Panel -->
        <section
          x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
          x-transition:enter-start="-translate-x-full"
          x-transition:enter-end="translate-x-0"
          x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
          x-transition:leave-start="translate-x-0"
          x-transition:leave-end="-translate-x-full"
          x-show="isSearchPanelOpen"
          @keydown.escape="isSearchPanelOpen = false"
          class="fixed inset-y-0 z-20 w-full max-w-xs bg-white shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none"
        >
          <div class="absolute right-0 p-2 transform translate-x-full">
            <!-- Close button -->
            <button @click="isSearchPanelOpen = false" class="p-2 text-white rounded-md focus:outline-none focus:ring">
              <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <h2 class="sr-only">Search panel</h2>
          <!-- Panel content -->
          <div class="flex flex-col h-screen">
            <!-- Panel header (Search input) -->
            <div
              class="relative flex-shrink-0 px-4 py-8 text-gray-400 border-b dark:border-primary-darker dark:focus-within:text-light focus-within:text-gray-700"
            >
              <span class="absolute inset-y-0 inline-flex items-center px-4">
                <svg
                  class="w-5 h-5"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                  />
                </svg>
              </span>
              <input
                x-ref="searchInput"
                type="text"
                class="w-full py-2 pl-10 pr-4 border rounded-full dark:bg-dark dark:border-transparent dark:text-light focus:outline-none focus:ring"
                placeholder="Search..."
              />
            </div>

            <!-- Panel content (Search result) -->
            <div class="flex-1 px-4 pb-4 space-y-4 overflow-y-hidden h hover:overflow-y-auto">
              <h3 class="py-2 text-sm font-semibold text-gray-600 dark:text-light">History</h3>
              <a href="#" class="flex space-x-4">
                <div class="flex-shrink-0">
                  <img class="w-10 h-10 rounded-lg" src="build/images/cover.jpg" alt="Post cover" />
                </div>
                <div class="flex-1 max-w-xs overflow-hidden">
                  <h4 class="text-sm font-semibold text-gray-600 dark:text-light">Header</h4>
                  <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                    Lorem ipsum dolor, sit amet consectetur.
                  </p>
                  <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> Post </span>
                </div>
              </a>
              <a href="#" class="flex space-x-4">
                <div class="flex-shrink-0">
                  <img class="w-10 h-10 rounded-lg" src="build/images/avatar.jpg" alt="Ahmed Kamel" />
                </div>
                <div class="flex-1 max-w-xs overflow-hidden">
                  <h4 class="text-sm font-semibold text-gray-600 dark:text-light">Ahmed Kamel</h4>
                  <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                    Last activity 3h ago.
                  </p>
                  <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> Offline </span>
                </div>
              </a>
              <a href="#" class="flex space-x-4">
                <div class="flex-shrink-0">
                  <img class="w-10 h-10 rounded-lg" src="build/images/cover-2.jpg" alt="K-WD Dashboard" />
                </div>
                <div class="flex-1 max-w-xs overflow-hidden">
                  <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                  <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  </p>
                  <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> Updated 3h ago. </span>
                </div>
              </a>
              <template x-for="i in 10" x-key="i">
                <a href="#" class="flex space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-10 h-10 rounded-lg" src="build/images/cover-3.jpg" alt="K-WD Dashboard" />
                  </div>
                  <div class="flex-1 max-w-xs overflow-hidden">
                    <h4 class="text-sm font-semibold text-gray-600 dark:text-light">K-WD Dashboard</h4>
                    <p class="text-sm font-normal text-gray-400 truncate dark:text-primary-lighter">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <span class="text-sm font-normal text-gray-400 dark:text-primary-light"> Updated 3h ago. </span>
                  </div>
                </a>
              </template>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- All javascript code in this project for now is just for demo DON'T RELY ON IT  -->
   @include('admin.includes.footer')