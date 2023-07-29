<?php

namespace App\Http\Controllers\ears_admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hotlines;
class HotlineController extends Controller
{
    public function index()
    {
        $hotlines = hotlines::select('*')
        ->orderBy('agency')
        ->get();
        return view('ears_systemadmin.hotline.index', ['hotlines'=>$hotlines]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ears_systemadmin.hotline.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert('insert into hotline  (agency, hotline) values (?,?)', [$request->agency, $request->hotline]);
        return redirect('systemadmin/hotline')->with('flash_message', 'Student Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evac = DB::select('select * from  hotline where id = ?', [$id]);
        return view('ears_systemadmin.hotline.show')->with('evac', $evac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evac = DB::table('hotline')
            ->where('id', '=', $id)
            ->get();
        return view('ears_systemadmin.hotline.edit', ['evac' => $evac]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $ids
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    { 
        $id = $request->input('id');
        $agency = $request->input('agency');
        $hotline = $request->input('hotline');
        DB::table('hotline')
            ->where('id', $id)
            ->update(['agency' => $agency, 'hotline' => $hotline]);
        return redirect('systemadmin/hotline')->with('flash_message', 'student Updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function archiveview()
    {
        $evac = hotlines::onlyTrashed()
            ->select('*')
            ->get();
        return view('ears_systemadmin.hotline.archive', ['evac' => $evac]);
    }
    public function archive($id)
    {
        $evac = hotlines::findOrFail($id);
        $evac->delete();
        return redirect('systemadmin/hotline')->with('flash_message', 'Student deleted!');
    }
    public function restore($id)
    {
        $evac = hotlines::onlyTrashed()->findOrFail($id);
        $evac->restore();
        return redirect('systemadmin/hotline')->with('flash_message', 'Student deleted!');
    }
    public function forceDelete($id)
    {
        $evac = hotlines::onlyTrashed()->findOrFail($id);
        $evac->forceDelete();
        return redirect('systemadmin/hotline')->with('flash_message', 'Student deleted!');
    }
  
}
