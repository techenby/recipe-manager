<div>
    <x-slot name="header">
        <div class="lg:flex lg:items-center lg:justify-between">
            <h1 class="text-3xl font-semibold leading-tight text-gray-800 dark:text-gray-100">
                {{ $recipe->name }}
            </h1>
            <div>
                <x-bit.button.primary :href="route('recipes.edit', $recipe)">Edit</x-bit.button.primary>
            </div>
        </div>
    </x-slot>

    <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
        <x-bit.card>
            <x-bit.card.heading title="Ingredients" />
            <x-bit.card.body>{!! $recipe->ingredients !!}</x-bit.card.body>
        </x-bit.card>
        <x-bit.card>
            <x-bit.card.heading title="Directions" />
            <x-bit.card.body>{!! $recipe->directions !!}</x-bit.card.body>
        </x-bit.card>
    </div>
</div>
