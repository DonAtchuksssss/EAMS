<?php

namespace App\Http\Controllers\ears_admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AgencyadminAccountsController extends Controller
{
    public function index()
    {
        $hotlines = User::select('*')
        ->where('role','=',1 )
        ->get();
        return view('ears_systemadmin.AgencyAdministrator.index', ['hotlines'=>$hotlines]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ears_systemadmin.AgencyAdministrator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert('insert into users (fName, lName,sex, birthDate,civilStatus,street,region,province,municipality, barangay, username, password, email, mobileNum, role) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$request->fName, $request->lName,$request->sex, $request->birthDate,$request->civilStatus,$request->street,$request->region,$request->province,$request->municipality,$request->barangay, $request->username, hash::make($request->password), $request->email,$request->mobileNum, $request->role]);
        return redirect('systemadmin/agencyadmin')->with('flash_message', 'Student Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evac = DB::table('users')
            ->where('id', '=', $id)
            ->get();
        return view('ears_systemadmin.AgencyAdministrator.edit', ['evac' => $evac]);
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
        $fName = $request->input('fName');
        $lName = $request->input('lName');
        $sex = $request->input('sex');
        $email = $request->input('email');
        $birthDate = $request->input('birthDate');
        $mobileNum = $request->input('mobileNum');
        $civilStatus = $request->input('civilStatus');
        $street = $request->input('street');
        $region = $request->input('region');
        $province = $request->input('province');
        $municipality = $request->input('municipality');
        $barangay = $request->input('barangay');
        $username = $request->input('username');
        $password =  hash::make($request->input('password'));
        DB::table('users')
            ->where('id', $id)
            ->update(['id' => $id,'fName' => $fName, 'lName' => $lName, 'sex' => $sex,'email' => $email, 'birthDate' => $birthDate,'mobileNum' => $mobileNum, 'civilStatus' => $civilStatus, 'street' => $street, 'region' => $region, 'province' => $province, 'municipality' => $municipality, 'barangay' => $barangay, 'username' => $username, 'password' => $password]);
        return redirect('systemadmin/agencyadmin')->with('flash_message', 'student Updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function archiveview()
    {
        $evac = user::onlyTrashed()
            ->select('*')
            ->get();
        return view('ears_systemadmin.AgencyAdministrator.archive', ['evac' => $evac]);
    }
    public function archive($id)
    {
        $evac = user::findOrFail($id);
        $evac->delete();
        return redirect('systemadmin/agencyadmin')->with('flash_message', 'Student deleted!');
    }
    public function restore($id)
    {
        $evac = user::onlyTrashed()->findOrFail($id);
        $evac->restore();
        return redirect('systemadmin/agencyadmin')->with('flash_message', 'Student deleted!');
    }
    public function forceDelete($id)
    {
        $evac = user::onlyTrashed()->findOrFail($id);
        $evac->forceDelete();
        return redirect('systemadmin/agencyadmin')->with('flash_message', 'Student deleted!');
    }
  
}
