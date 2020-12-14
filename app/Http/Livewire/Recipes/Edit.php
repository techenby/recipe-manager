<?php

namespace App\Http\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class Edit extends Component
{
    public Recipe $recipe;

    public $rules = [
        'recipe.name' => 'required',
        'recipe.ingredients' => '',
        'recipe.directions' => '',
    ];

    public function render()
    {
        return view('livewire.recipes.edit')
            ->layout('layouts.app', ['title' => 'Edit: ' . $this->recipe->name]);
    }

    public function save()
    {
        $this->validate();

        $this->recipe->save();
    }
}
