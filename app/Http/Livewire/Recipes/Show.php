<?php

namespace App\Http\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class Show extends Component
{
    public Recipe $recipe;

    public function render()
    {
        return view('livewire.recipes.show')
            ->layout(auth()->check() ? 'layouts.app' : 'layouts.guest', ['title' => $this->recipe->name]);
    }

    public function delete()
    {
        $this->recipe->delete();

        return redirect()->route('recipes');
    }
}
