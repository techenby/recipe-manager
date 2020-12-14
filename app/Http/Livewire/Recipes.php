<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class Recipes extends Component
{
    public function render()
    {
        return view('livewire.recipes')
            ->layout('layouts.app', ['title' => 'Recipes'])
            ->with([
                'recipes' => $this->rows,
            ]);
    }

    public function getRowsProperty()
    {
        return Recipe::with('user', 'team')->paginate(12);
    }
}
