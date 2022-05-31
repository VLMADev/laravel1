<?php


namespace App\Providers\ViewComposers;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class AppComposer
{
    // объект шаблона до рендеренга
    public function compose(View $view){
        $Category = Category::all();
        $view -> with('categories', $Category);
    }
}
