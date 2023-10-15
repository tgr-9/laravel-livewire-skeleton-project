<nav class="fixed w-full bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700" x-data="{ open: false }"
    @click.away="open = false" @close.stop="open = false">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" @click="open = ! open"
                    class="relative inline-flex items-center justify-center px-3 py-2 ml-2 text-gray-500 bg-gray-100 rounded-md dark:text-gray-400 dark:bg-gray-900 hover:text-gray-800 dark:hover:text-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round"
                            stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-start flex-1 ml-4 sm:ml-0 sm:items-stretch">
                <div class="flex items-center flex-shrink-0">
                    <x-logo />
                </div>
                <div class="hidden sm:-my-px sm:block">
                    <div class="flex space-x-4">
                        <x-nav-link wire:navigate href="{{ route('user.dashboard') }}" :active="request()->routeIs('user.dashboard')">
                            {{ __('Your Dashboard') }}
                        </x-nav-link>

                        <x-nav-link wire:navigate href="{{ route('user.example') }}" :active="request()->routeIs('user.example')">
                            {{ __('Example') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{-- Notification --}}
                {{-- <button type="button"
                    class="relative p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button> --}}

                <!-- Profile dropdown -->
                <div class="relative ml-3" x-data="{ open: false }">
                    <div class="mr-2 sm:mr-0">
                        @include('layouts.partials.main-user-dropdown')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden border-t border-gray-100 sm:hidden dark:border-gray-700" id="mobile-menu"
        :class="{ 'block': open, 'hidden': !open }" x-show='open' x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95">
        <div class="px-4 py-2 space-y-1 sm:px-6">
            <x-responsive-nav-link wire:navigate href="{{ route('user.dashboard') }}" :active="request()->routeIs('user.dashboard')">
                {{ __('Your Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link wire:navigate href="{{ route('user.example') }}" :active="request()->routeIs('user.example')">
                {{ __('Example') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
