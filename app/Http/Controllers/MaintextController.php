<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintext;

class MaintextController extends Controller
{
    public function getIndex(Maintext $maintext) // любая переменная которая сюда поступает будет объектом класса Maintext-модель $maintext-объект
    { // вывести данные
        return view('maintext',compact('maintext'));
        //   return response()->json($maintext);// для API
    }

    public function postIndex()
    { //добавить данные
        $maintext = new Maintext; // создали объект класса маинтекст
        $maintext->name = 'контакты';
        $maintext->body = 'текст для контактов';
        $maintext->URL = 'contacts'; // уникальное слово для каждой статьи только на англ
        $maintext->lang = 'ru';
        $maintext->save();
       // dd($maintext);

      return response()->json($maintext);// для API
    }

    public function getURL($url) {
        $maintext = Maintext::where('url',$url)->first();
        //   return response()->json($maintext);// для API
        return view('maintext',compact('maintext'));
    }
}
