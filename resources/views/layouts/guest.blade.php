<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
</head>

<body class="dark:bg-gray-800">
    <div class="font-sans antialiased text-gray-900">
        @livewire('navigation-dropdown')
        <livewire:notifications />


        @isset($noPadding)
        {{ $slot }}
        @else
        <div x-data="{navHeight: 0 }" x-init="navHeight = document.getElementById('navbar').offsetHeight">
            <div :style="'height: ' + navHeight + 'px'" style="height: 80px"></div>
        </div>

        <header>
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                @isset($header)
                    {{ $header }}
                @else
                <h1 class="text-3xl font-semibold leading-tight text-gray-800 dark:text-gray-100">{{ $title }}</h1>
                @endif
            </div>
        </header>

        <main class="px-4 mx-auto mb-8 max-w-7xl sm:px-6 lg:px-8">
        {{ $slot }}
        </main>
        @endif
    </div>
</body>

</html>
