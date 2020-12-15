<div>
    <div class="mb-8 md:flex md:justify-between">
        <div class="flex flex-col space-y-4 md:items-end md:space-x-4 md:flex-row md:w-1/2">
            <x-bit.input.text wire:model="filters.search" placeholder="Search Recipes..." />
        </div>
        <div class="flex items-end mt-4 space-x-4 md:mt-0">
            <x-bit.data-table.per-page />

            <span class="relative z-0 inline-flex">
                <x-bit.button.secondary wire:click="$set('view', 'grid')" class="flex items-center space-x-2 rounded-r-none" :active="$view === 'grid'">
                    <x-heroicon-o-view-grid class="w-5 h-5 text-gray-400 dark:text-gray-300" />
                </x-bit.button.secondary>
                <x-bit.button.secondary wire:click="$set('view', 'list')" class="flex items-center -ml-px space-x-2 rounded-l-none" :active="$view === 'list'">
                    <x-heroicon-o-view-list class="w-5 h-5 text-gray-400 dark:text-gray-300" />
                </x-bit.button.secondary>
            </span>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-4">
        <div>
            <x-bit.card>
                <x-bit.card.heading title="Family" />

                <x-bit.card.body class="space-y-2">
                    @foreach($teams as $team)
                    <label for="team-{{ $team->id }}" class="flex items-center" :key="$team->id">
                        <input wire:model="filters.teams" id="team-{{ $team->id }}" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{ $team->id }}">
                        <span class="block ml-2 text-gray-900 dark:text-gray-200">{{ $team->name }}</span>
                    </label>
                    @endforeach
                </x-bit.card.body>
            </x-bit.card>
        </div>

        <div class="col-span-3 space-y-4">
            @if($view === 'grid')
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-3">
                @foreach($recipes as $recipe)
                <x-bit.recipe.card :key="$recipe->id" :recipe="$recipe" />
                @endforeach
            </div>
            @else
            <div>
                <x-bit.table>
                    <x-slot name="head">
                        <x-bit.table.heading sortable wire:click="sortBy('name')" :direction="$sortField === 'name' ? $sortDirection : null">Name</x-bit.table.heading>
                        <x-bit.table.heading sortable wire:click="sortBy('team_id')" :direction="$sortField === 'team_id' ? $sortDirection : null">Family</x-bit.table.heading>
                        <x-bit.table.heading sortable wire:click="sortBy('user_id')" :direction="$sortField === 'user_id' ? $sortDirection : null">Author</x-bit.table.heading>
                        <x-bit.table.heading sortable wire:click="sortBy('created_at')" :direction="$sortField === 'created_at' ? $sortDirection : null">Created At</x-bit.table.heading>
                        <x-bit.table.heading>
                            <x-bit.tooltip.icon icon="heroicon-o-eye" title="View Recipe" button />
                        </x-bit.table.heading>
                    </x-slot>

                    <x-slot name="body">
                        @forelse($recipes as $recipe)
                        <x-bit.table.row wire:key="row-{{ $recipe->id }}">
                            <x-bit.table.cell>{{ $recipe->name }}</x-bit.table.cell>
                            <x-bit.table.cell>{{ $recipe->team->name }}</x-bit.table.cell>
                            <x-bit.table.cell>{{ $recipe->user->name }}</x-bit.table.cell>
                            <x-bit.table.cell>{{ $recipe->created_at->format('M, d Y') }}</x-bit.table.cell>

                            <x-bit.table.cell>
                                <x-bit.button.link size="py-1 px-2" href="{{ route('recipes.show', $recipe) }}">
                                    <x-heroicon-o-eye class="w-4 h-4 text-blue-500 dark:text-blue-400" />
                                </x-bit.button.link>
                            </x-bit.table.cell>

                        </x-bit.table.row>
                        @empty
                        <x-bit.table.row>
                            <x-bit.table.cell colspan="7">
                                <div class="flex items-center justify-center space-x-2">
                                    <x-heroicon-o-users class="w-8 h-8 text-gray-400" />
                                    <span class="py-8 text-xl font-medium text-gray-500 dark:text-gray-400 glacial">No recipes found...</span>
                                </div>
                            </x-bit.table.cell>
                        </x-bit.table.row>
                        @endforelse
                    </x-slot>
                </x-bit.table>
            </div>
            @endif

            <div>
                {{ $recipes->links() }}
            </div>
        </div>
    </div>
</div>
