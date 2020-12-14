<div>
    <div class="grid grid-cols-3 gap-12">
        @foreach($recipes as $recipe)
        <x-bit.recipe.card :key="$recipe->id" :recipe="$recipe" />
        @endforeach
    </div>
</div>
