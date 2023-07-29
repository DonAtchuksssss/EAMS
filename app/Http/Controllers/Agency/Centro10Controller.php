<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\evacueess;
class Centro10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evac = evacueess::join('evacuation as e', 'e.id', '=', 'evacuees.loc_id')
        ->where('loc_id','=','18')
        ->get(['evacuees.*','e.brand','e.capacity']);
        return view ('agency.centro10.index',['evac'=> $evac]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agency.centro10.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert('insert into evacuees ( loc_id,fname,lname, address, member,evacuation, room,  date_entered, date_leave) values (?,?, ?,?,?,?,?,?,?)', [$request->loc_id, $request->fname, $request->lname, $request->address, $request->member, $request->evacuation,$request->room, $request->date_entered, $request->date_leave]);
        return redirect('Evacuation/centro10')->with('flash_message', 'Student Addedd!');
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
        return view('agency.centro10.show')->with('evac', $evac);
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
        ->select('evacuees.*', 'evacuation.brand', 'evacuation.capacity')
        ->where('evacuees.id','=',$id)
        ->get();
        return view ('agency.centro10.edit',['evac'=> $evac]);
        
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
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $address = $request->input('address');
        $member = $request->input('member');
        $Evacuation = $request->input('Evacuation');
        $room = $request->input('room');
        $date_entered = $request->input('date_entered');
        $date_leave = $request->input('date_leave');
        $brand = $request->input('brand');
        $capacity = $request->input('capacity');
        DB::table('evacuation')
            ->join('evacuees', 'evacuation.id', '=', 'evacuees.loc_id')
            ->select('evacuees.*', 'evacuation.brand', 'evacuation.capacity')
            ->where('evacuees.id', $id)
            ->update(['fname' => $fname, 'lname' => $lname, 'address' => $address,'member' => $member, 'Evacuation' => $Evacuation,'room' => $room, 'date_entered' => $date_entered, 'date_leave' => $date_leave, 'brand' => $brand, 'capacity' => $capacity]);
        return redirect('Evacuation/centro10')->with('flash_message', 'student Updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function archiveview()
    {
        $evac = evacueess::onlyTrashed()
        ->select('*')
        ->where('loc_id','=','18')
        ->get();
        return view ('agency.centro10.archive',['evac'=> $evac]);
    }
    public function archive( $id)
    {
        $evac= evacueess::findOrFail($id);
        $evac->delete();
        return redirect('Evacuation/centro10')->with('flash_message', 'Student deleted!');
    
    }
    public function restore($id)
    {
        $evac= evacueess::onlyTrashed()->findOrFail($id);
        $evac->restore();
        return redirect('Evacuation/centro10/archive')->with('flash_message', 'Student deleted!');
    
    }
    public function forceDelete($id)
    { 
        $evac= evacueess::onlyTrashed()->findOrFail($id);
        $evac->forceDelete();
        return redirect('Evacuation/centro10/archive')->with('flash_message', 'Student deleted!');
    
    }
}

