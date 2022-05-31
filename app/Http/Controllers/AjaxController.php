<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AjaxController extends Controller
{
    public function postCatalog(Request $request){
        $products = Product::where('category_id', $request->id)->get();
        return view('ajax.products', compact('products'));
    }
}
