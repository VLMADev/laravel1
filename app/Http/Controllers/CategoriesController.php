<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getIndex($slug){
        $categor = Category::where('id', $slug)->first();
        return view('categorie', compact('categor'));
    }
}
