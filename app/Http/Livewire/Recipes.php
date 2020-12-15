<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithFiltering;
use App\Http\Livewire\Traits\WithSorting;
use App\Models\Recipe;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class Recipes extends Component
{
    use WithPagination, WithFiltering, WithSorting;

    public $filters = [
        'search' => '',
        'teams' => [],
    ];
    public $perPage = 12;
    public $view = 'grid';

    public function render()
    {
        return view('livewire.recipes')
            ->layout(auth()->check() ? 'layouts.app' : 'layouts.guest', ['title' => 'Recipes'])
            ->with([
                'recipes' => $this->rows,
                'teams' => Team::all(),
            ]);
    }

    public function getRowsProperty()
    {
        return Recipe::with('user', 'team')
            ->when($this->filters['teams'] !== [], fn($query) => $query->whereIn('team_id', $this->filters['teams']))
            ->when($this->filters['search'] !== [], fn($query) => $query->where('name', 'LIKE',  '%'.$this->filters['search'].'%'))
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);
    }
}
