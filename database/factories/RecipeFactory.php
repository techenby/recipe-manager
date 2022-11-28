<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => 'Mashed Potatoes',
            'ingredients' => 'Potatoes',
            'directions' => 'Boil, mash, eat',
        ];
    }
}
