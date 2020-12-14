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
            ->layout('layouts.app', ['title' => $this->recipe->name]);
    }
}
