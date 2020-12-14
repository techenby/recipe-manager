<div class="px-4 py-5 bg-white border-b border-gray-200 dark:bg-gray-900 sm:px-6 dark:border-gray-600">
    @isset($title)
    <h2 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-200">
        {{ $title }}
    </h2>
    @endif

    @isset($subtitle)
    <p class="mt-1 text-sm text-gray-500">
        {{ $subtitle }}
    </p>
    @endif

    {{ $slot }}
</div>
