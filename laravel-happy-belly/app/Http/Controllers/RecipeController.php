<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function all()
    {
        $recipes = Recipe::all();
        return $recipes;
    }
}
