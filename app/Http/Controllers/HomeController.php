<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Arcticle;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $arcticls = Arcticle::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('home', compact('arcticls'));
    }

    public function postIndex(Request $request)
    {
        if ($request->hasFile('picture1')){
            $pic= App::make (\App\Libs\Imap::class)->url($request->picture1);
            $request['picture'] = 'uploads/'.Auth::user()->id.'/'.$pic;

        }
        unset($request['_token']);
        $request['user_id']=Auth::user()->id;
        Arcticle::create($request->all());
        return redirect()->back();
    }

    public function postEdit(Request $request, Arcticle $arcticle)
    {
        if ($request->hasFile('picture1')){
            $pic= App::make (\App\Libs\Imap::class)->url($request->picture1);
         $arcticle->picture = 'uploads/'.Auth::user()->id.'/'.$pic;

        }
        $arcticle->name=$request->name;
        $arcticle->body=$request->body;
        $arcticle->save();
        return redirect()->back();
    }

    public function getEdit(Arcticle $arcticle)
    {

        return view('article_edit', compact('arcticle'));
    }

    public function getDelete(Arcticle $arcticle){
        if ($arcticle->picture) {
            //dd($article->picture);
            //Storage::delete($article->picture);
            unlink(storage_path('app/public/'.$arcticle->picture));

        }

        $arcticle->delete();
        return redirect()->back();
    }
    public function getDeleteImage(Arcticle $arcticle){
        if ($arcticle->picture) {
            //dd($article->picture);
            //Storage::delete($article->picture);
            unlink(storage_path('app/public/'.$arcticle->picture));

        }
        return redirect()->back();
    }
}
