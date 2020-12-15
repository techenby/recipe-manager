<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? '' }} | {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@1.2.3/dist/trix.css">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased dark:bg-gray-800">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-800">
            @livewire('navigation-dropdown')
            <livewire:notifications />
            <div x-data="{navHeight: 0 }" x-init="navHeight = document.getElementById('navbar').offsetHeight">
                <div :style="'height: ' + navHeight + 'px'" style="height: 80px"></div>
            </div>

            <!-- Page Heading -->
            <header>
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    @isset($header)
                        {{ $header }}
                    @else
                    <h1 class="text-3xl font-semibold leading-tight text-gray-800 dark:text-gray-100">{{ $title }}</h1>
                    @endif
                </div>
            </header>

            <!-- Page Content -->
            <main class="px-4 mx-auto mb-8 max-w-7xl sm:px-6 lg:px-8">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://unpkg.com/trix@1.2.3/dist/trix.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/maxeckel/alpine-editor@0.3.1/dist/alpine-editor.min.js"></script>
    </body>
</html>
