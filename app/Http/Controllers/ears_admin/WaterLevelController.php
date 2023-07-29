<?php

namespace App\Http\Controllers\ears_admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hotlines;
class WaterlevelController extends Controller
{
    public function index()
    {
        $news = DB::select('Select * from waterlevel');
        return view('ears_systemadmin.waterlevel.index', ['news'=>$news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evac = DB::table('waterlevel')
            ->where('id', '=', $id)
            ->get();
        return view('ears_systemadmin.waterlevel.edit', ['evac' => $evac]);
    }

    public function update(Request $request, $id)
    { 
        $id = $request->input('id');
        $level = $request->input('level');
        DB::table('waterlevel')
            ->where('id', $id)
            ->update(['level' => $level]);
        return redirect('systemadmin/waterlevel')->with('flash_message', 'student Updated!');
    }

  
}
