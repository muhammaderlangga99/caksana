<nav x-data="{ open: false }"
    class="bg-white backdrop-filter backdrop-blur-xl bg-opacity-75 fixed z-50 w-full dark:bg-gray-800 dark:border-gray-900 md:py-3">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex item-center text-black dark:text-gray-200">
                    <a href="/">
                        {{-- <x-application-logo class="hidden h-10 w-auto fill-current text-black dark:text-gray-300" /> --}}
                    </a>
                    <x-nav-link :href="route('home')"
                        class="md:text-2xl border-none my-auto font-cherry text-orange-400 tracking-wider">
                        {{ config('app.name') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ml-auto">
                <x-nav-link href="/">
                    Home
                </x-nav-link>
                <x-nav-link href="#about">
                    About
                </x-nav-link>
                <x-nav-link href="#fasilitas">
                    Fasilitas
                </x-nav-link>
                <x-nav-link href="#blog">
                    Blog
                </x-nav-link>
                <x-nav-link
                    href="https://api.whatsapp.com/send?phone=6285283006742&text=Hallo%20kak,%20aku %20mau%20tanya%20?"
                    class="bg-orange-400 dark:text-white px-3 h-auto my-3 font-cherry tracking-widest rounded-xl text-white">
                    Hubungi Kami
                </x-nav-link>

                @can('access-dashboards')
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                @endcan



                <!-- Settings Dropdown -->
                @auth
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center font-medium text-gray-500 dark:text-gray-300 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endauth

                @can('create', \App\Models\Post::class)
                    <x-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">
                        <x-button>
                            {{ __('New Post') }}
                        </x-button>
                    </x-nav-link>
                @endcan
            </div>

            <button title="Toggle Dark Mode" id="theme-toggle" type="button"
                class="h-fit my-auto ml-auto text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg p-2.5 block sm:fixed bottom-4 right-4 z-10">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @auth
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            @elseif(Route::has('register'))
                <x-responsive-nav-link href="/">
                    {{ __('home') }}
                    </x-nav-link>

                    <x-responsive-nav-link href="#about">
                        {{ __('about') }}
                        </x-nav-link>

                        <x-responsive-nav-link href="#fasilitas">
                            {{ __('fasilitas') }}
                            </x-nav-link>
                            <x-responsive-nav-link href="#blog">
                                {{ __('blogs') }}
                                </x-nav-link>
                            @endauth
        </div>

        <!-- Responsive Settings Options -->
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth

        @can('create', \App\Models\Post::class)
            <div class="py-3 border-t border-gray-200">
                <x-responsive-nav-link :href="route('posts.create')" :active="request()->routeIs('posts.create')">
                    <x-button>
                        {{ __('New Post') }}
                    </x-button>
                </x-responsive-nav-link>
            </div>
        @endcan
    </div>
</nav>
