<div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
    <div class="flex-shrink-0">
        <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
    </div>
    <div class="flex flex-col justify-between flex-1 p-6 bg-white dark:bg-gray-700">
        <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
                <a href="#" class="hover:underline">
                    Article
                </a>
            </p>
            <a href="{{ route('recipes.show', $recipe) }}" class="block mt-2">
                <p class="text-xl font-semibold text-gray-900 dark:text-gray-200">
                    {{ $recipe->name }}
                </p>
            </a>
        </div>
        <div class="flex items-center mt-6">
            <div class="flex-shrink-0">
                <a href="#">
                    <span class="sr-only">{{ $recipe->user->name }}</span>
                    <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </a>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-900 dark:text-gray-200">
                    <a href="#" class="hover:underline">
                        {{ $recipe->user->name }}
                    </a>
                </p>
                <div class="flex space-x-1 text-sm text-gray-500 dark:text-gray-400">
                    <time datetime="{{ $recipe->created_at->format('Y-m-d') }}">
                        {{ $recipe->created_at->format('F j, Y') }}
                    </time>
                    <span aria-hidden="true">
                        &middot;
                    </span>
                    <span>
                        6 min read
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
