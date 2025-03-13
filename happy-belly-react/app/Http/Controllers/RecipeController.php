<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipeController extends Controller
{
    public function all()
    {
        $recipes = Recipe::all();
        return $recipes;
    }
}
