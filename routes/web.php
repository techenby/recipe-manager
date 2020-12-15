<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::redirect('/dashboard', '/recipes');
    Route::get('/recipes', App\Http\Livewire\Recipes::class)->name('recipes');
    Route::get('/recipes/create', App\Http\Livewire\Recipes\Create::class)->name('recipes.create');
    Route::get('/recipes/{recipe}/edit', App\Http\Livewire\Recipes\Edit::class)->name('recipes.edit');
    Route::get('/recipes/{recipe}', App\Http\Livewire\Recipes\Show::class)->name('recipes.show');
});
