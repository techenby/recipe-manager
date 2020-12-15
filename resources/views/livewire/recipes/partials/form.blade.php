<div>
    <form wire:submit.prevent="save">
        <x-bit.card>
            <x-bit.card.body class="space-y-4 max-w-none">
                <div class="w-1/2">
                    <x-bit.input.group for="recipe-name" label="Name" :error="$errors->first('recipe.name')">
                        <x-bit.input.text wire:model="recipe.name" id="recipe-name" />
                    </x-bit.input.group>
                </div>

                <x-bit.input.group for="recipe-ingredients" label="Quick Copy">
                    <x-bit.input.toolbar />
                    <x-bit.input.help>Click on a value above and paste it where it needs to go</x-bit.input.help>
                </x-bit.input.group>

                <x-bit.input.group for="recipe-ingredients" label="Ingredients" :error="$errors->first('recipe.ingredients')">
                    <x-bit.input.rich-text wire:model="recipe.ingredients" id="recipe-ingredients" />
                </x-bit.input.group>
                <x-bit.input.group for="recipe-directions" label="Directions" :error="$errors->first('recipe.directions')">
                    <x-bit.input.rich-text wire:model="recipe.directions" id="recipe-directions" />
                </x-bit.input.group>
            </x-bit.card.body>
            <x-bit.card.footer>
                @if($formChanged)
                <x-bit.button.primary wire:click="$set('redirect', false)" type="submit">Save & Continue Editing</x-bit.button.primary>
                <x-bit.button.primary wire:click="$set('redirect', true)" type="submit">Save & Go Back</x-bit.button.primary>
                <x-bit.badge class="ml-2">Unsaved Changes</x-bit.badge>
                @else
                <x-bit.button.primary type="submit" disabled>Save</x-bit.button.primary>
                @endif
            </x-bit.card.footer>
        </x-bit.card>
    </form>
</div>
