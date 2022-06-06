<?php


namespace App\Providers\ViewComposers;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use App\Models\Maintext;

class AppComposer
{
    //в header и в footer передаем только через провайдеры
    // объект шаблона до рендеренга
    public function compose(View $view){
        $Category = Category::all();
        $Maintexts = Maintext::all();
        //$Maintexts = Maintext::orderBy('id','DESC')->get();

        $view -> with('categories', $Category)->with('company', $Maintexts); // передача переменной в шаблоннн

    }

}
