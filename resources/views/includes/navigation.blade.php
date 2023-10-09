<nav class="bg-gray-800 sticky top-0 z-40">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 bg-gray-800">
        <div class="flex h-16 items-center justify-between  bg-gray-800">
            <div class="relative inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" id="mobile-menu-button"
                    class="relative inline-flex items-center justify-center rounded-md p-2  text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-end sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto bg-gray-400 rounded-full " src="/images/logo.png" />
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/"
                            class=" text-white rounded-md px-3 py-2 text-sm font-medium {{ request()->is('/') ? 'bg-gray-900' : '' }} "
                            aria-current="page">Home</a>

                        <a href="/projects"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{ request()->is('projects') ? 'bg-gray-900' : '' }}">Projects</a>
                        <a href="/experiences"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium {{ request()->is('experiences') ? 'bg-gray-900' : '' }}">Experience</a>
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-5 text-right ">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="font-semibold text-gray-600 px-4 py-2 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-gray-800 px-4 py-2 bg-gray-800  hover:text-gray-900 rounded-md hover:bg-white text-sm">Log
                                        in</a>
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-2 px-2 pb-3 pt-2 hidden" id="mobile-menu-slide">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/"
                class=" text-white block rounded-md px-3 py-2 text-base font-medium {{ request()->is('/') ? 'bg-gray-900' : '' }}"
                aria-current="page">Home</a>
            <a href="/projects"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium {{ request()->is('projects') ? 'bg-gray-900' : '' }}">Projects</a>
            <a href="/experiences"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium {{ request()->is('experiences') ? 'bg-gray-900' : '' }}">Experience</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 px-3 py-2 mt-2 block dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="text-gray-900 bg-white hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium text-center">Log
                        in</a>
                @endauth
            @endif
        </div>
    </div>
</nav>
