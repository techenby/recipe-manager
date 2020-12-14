<div>
    <form wire:submit.prevent="save">
        <x-bit.card>
            <x-bit.card.body class="space-y-4">
                <div class="w-1/2">
                    <x-bit.input.group for="recipe-name" label="Name">
                        <x-bit.input.text wire:model="recipe.name" id="recipe-name" />
                    </x-bit.input.group>
                </div>

                <x-bit.input.group for="recipe-ingredients" label="Ingredients">
                    <x-bit.input.rich-text wire:model="recipe.ingredients" id="recipe-ingredients" />
                </x-bit.input.group>
                <x-bit.input.group for="recipe-directions" label="Directions">
                    <x-bit.input.rich-text wire:model="recipe.directions" id="recipe-directions" />
                </x-bit.input.group>
            </x-bit.card.body>
            <x-bit.card.footer>
                <x-bit.button.primary type="submit">Save</x-bit.button.primary>
            </x-bit.card.footer>
        </x-bit.card>
    </form>
</div>
