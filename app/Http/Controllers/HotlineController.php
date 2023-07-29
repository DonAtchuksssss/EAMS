<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotlineController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hotlinelist(Request $request)
    {
        $hotlines = DB::select('Select * from hotline order by agency');
        return view('home-screen', ['hotlines'=>$hotlines]);
    }
}
