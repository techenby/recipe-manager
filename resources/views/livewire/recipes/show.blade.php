<div>
    <div class="mb-4">
        @can('update', $recipe)
        <x-bit.button.primary :href="route('recipes.edit', $recipe)">Edit</x-bit.button.primary>
        @endcan
        @can('delete', $recipe)
        <x-bit.button.primary wire:click="delete">Delete</x-bit.button.primary>
        @endcan
    </div>

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
