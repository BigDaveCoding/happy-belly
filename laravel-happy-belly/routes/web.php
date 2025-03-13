<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/recipes', [RecipeController::class, 'all']);
