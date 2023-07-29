<?php

namespace App\Http\Controllers\ears_admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hotlines;
class NewsController extends Controller
{
    public function index()
    {
        $news = DB::select('Select * from news');
        return view('ears_systemadmin.news.index', ['news'=>$news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evac = DB::table('news')
            ->where('id', '=', $id)
            ->get();
        return view('ears_systemadmin.news.edit', ['evac' => $evac]);
    }

    public function update(Request $request, $id)
    { 
        $id = $request->input('id');
        $news = $request->input('news');
        DB::table('news')
            ->where('id', $id)
            ->update(['news' => $news]);
        return redirect('systemadmin/news')->with('flash_message', 'student Updated!');
    }

  
}
