<div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
    <div class="flex flex-col justify-between flex-1 p-6 bg-white dark:bg-gray-700">
        <div class="flex-1">
            <a href="{{ route('recipes.show', $recipe) }}" class="block">
                <p class="text-xl font-semibold text-gray-900 dark:text-gray-200">
                    {{ $recipe->name }}
                </p>
            </a>
        </div>
        <div class="flex items-center mt-6">
            <div class="flex-shrink-0">
                <div>
                    <span class="sr-only">{{ $recipe->user->name }}</span>
                    <img class="object-cover w-10 h-10 rounded-full" src="{{ $recipe->user->profile_photo_url }}" alt="{{ $recipe->user->name }}" />
                </div>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-900 dark:text-gray-200">
                    {{ $recipe->user->name }}
                </p>
                <div class="text-xs text-gray-500 dark:text-gray-400">
                    <time datetime="{{ $recipe->created_at->format('Y-m-d') }}">
                        {{ $recipe->created_at->format('M j, Y') }}
                    </time>
                    <p>
                        {{ $recipe->team->name }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
