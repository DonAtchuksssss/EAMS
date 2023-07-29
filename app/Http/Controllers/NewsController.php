<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
     /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function news(Request $request)
    {
        $news = DB::select('Select * from news');
        return view('home-screen', ['news'=>$news]);
    }
  
}
