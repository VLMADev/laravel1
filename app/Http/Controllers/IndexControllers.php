<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Arcticle;


class IndexControllers extends Controller
{
    //

    public function getIndex(){
       // dd(''); //подключаем шаблон
        $catalog = Category::all();
        $arcticls = Arcticle::all();
        return view('index', compact('arcticls','catalog'));
    }


}
