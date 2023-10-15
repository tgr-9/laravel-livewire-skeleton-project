<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="Lali" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <title>
        {{ config('app.name', 'Laravel') }}
        {{ Route::currentRouteName() ? '- ' . __(ucwords(str_replace('.', ' ', Route::currentRouteName()))) : '' }}
    </title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body
    class="flex h-screen font-sans antialiased bg-zinc-100 dark:bg-zinc-900 sm:bg-center sm:bg-dotted-spacing-6 sm:dark:bg-dotted-zinc-800 sm:bg-dotted-zinc-300"
    x-data="{ open: false }">
    {{-- <x-banner /> --}}

    <livewire:layouts.admin-sidebar />
    <div class="w-full overflow-y-auto">
        <livewire:layouts.admin-navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white border-zinc-100 lg:border-b dark:bg-zinc-800 dark:border-zinc-700">
                <div class="flex items-center justify-between w-full h-16 px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="">
                        {{ $header }}
                    </div>
                    @if (isset($actions))
                        <div class="space-x-2">
                            {{ $actions }}
                        </div>
                    @endif
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="max-h-screen">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
