<?php

namespace App\Http\Livewire\Recipes;

use App\Models\Recipe;
use Livewire\Component;

class Create extends Component
{
    public Recipe $recipe;

    public $rules = [
        'recipe.name' => 'required',
        'recipe.ingredients' => '',
        'recipe.directions' => '',
    ];

    public $formChanged = false;

    public $redirect = false;

    public function mount()
    {
        $this->recipe = Recipe::make(['user_id' => auth()->id(), 'team_id' => auth()->user()->current_team_id]);
    }

    public function updating($field)
    {
        $profileFields = ['recipe.name', 'recipe.ingredients', 'recipe.directions'];
        if (in_array($field, $profileFields)) {
            $this->formChanged = true;
        }
    }

    public function render()
    {
        return view('livewire.recipes.create')
            ->layout('layouts.app', ['title' => 'Create New Recipe']);
    }

    public function save()
    {
        $this->validate();

        $this->recipe->user_id = auth()->id();
        $this->recipe->team_id = auth()->user()->current_team_id;
        $this->recipe->save();

        if ($this->redirect) {
            return redirect()->route('recipes');
        }

        return redirect()->route('recipes.edit', $this->recipe);
    }
}
