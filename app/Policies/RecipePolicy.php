<?php

namespace App\Policies;

use App\Models\Team;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecipePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Recipe $recipe)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Recipe $recipe)
    {
        return $user->belongsToTeam($recipe->team);
    }

    public function delete(User $user, Recipe $recipe)
    {
        return $user->id === $recipe->user_id;
    }
}
