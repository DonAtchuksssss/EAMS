<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaterlevelController extends Controller
{
    public function Waterlevel(Request $request)
    {
        $waterlevel = DB::select('Select * from waterlevel');
        return view('dashboard', ['waterlevel'=>$waterlevel]);
    }
}
