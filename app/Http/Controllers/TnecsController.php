<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TnecsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /* $facility =  DB::select('Select * from Evacuation where id=1');
        $evac =  DB::select('Select * from evacuees where loc_id =1 ORDER by fname ASC');
        return view ('annafunanelems.index',['evac'=> $evac,'facility'=> $facility]);
         */ 
        $evac = DB::table('evacuation')
        ->join('evacuees', 'evacuation.id', '=', 'evacuees.loc_id')
        ->select('evacuees.*', 'evacuation.brand')
        ->where('loc_id','=','35')
        ->get();
        return view ('agency.tnecs.index',['evac'=> $evac]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agency.tnecs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert('insert into evacuees ( loc_id,fname,lname,member,evacuation, date_entered, date_leave) values (?,?,?,?,?,?,?)', [$request->loc_id,$request->fname,$request->lname,$request->member,$request->evacuation,$request->date_entered,$request->date_leave]);
        return redirect('Evacuation/tnecs')->with('flash_message', 'Student Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evac = DB::select('select * from  evacuees where id = ?',[$id]);
        return view('agency.tnecs.show')->with('evac', $evac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
     
        $evac = DB::table('evacuation')
        ->join('evacuees', 'evacuation.id', '=', 'evacuees.loc_id')
        ->select('evacuees.*', 'evacuation.brand')
        ->where('evacuees.id','=',$id)
        ->get();
        return view ('agency.tnecs.edit',['evac'=> $evac]);
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $ids
     * @return \Illuminate\Http\Response
     */
  
  
    public function update(Request $request, $id)
    { /*
        $id = $request->input('id');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $member = $request->input('member');
        $Evacuation = $request->input('Evacuation');
        $date_entered = $request->input('date_entered');
        $date_leave = $request->input('date_leave');
        $brand = $request->input('brand');
        DB::update('update evacuees set fname = ?, lname = ?, member = ?, Evacuation = ?, date_entered = ?, date_leave = ? where id = ?',[$fname, $lname, $member, $Evacuation, $date_entered, $date_leave, $id]);
        return redirect('annafunanelems')->with('flash_message', 'student Updated!');  
        */
        $id = $request->input('id');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $member = $request->input('member');
        $Evacuation = $request->input('Evacuation');
        $date_entered = $request->input('date_entered');
        $date_leave = $request->input('date_leave');
        $brand = $request->input('brand');
        DB::table('evacuation')
        ->join('evacuees', 'evacuation.id', '=', 'evacuees.loc_id')
        ->select('evacuees.*', 'evacuation.brand')
        ->where('evacuees.id',$id)
        ->update(['fname' => $fname , 'lname' => $lname, 'member' => $member, 'Evacuation' => $Evacuation, 'date_entered' => $date_entered, 'date_leave' => $date_leave,'brand' => $brand]);
        return redirect('Evacuation/tnecs')->with('flash_message', 'student Updated!');  
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function destroy($id)
    {
        $evac = DB::Delete('delete from evacueess where id = ?',[$id]);
        return redirect('Evacuation/tnecs')->with('flash_message', 'Student deleted!');
    }
}
