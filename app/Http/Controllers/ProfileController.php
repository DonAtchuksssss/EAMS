<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
        return view('profile');
    }
     
    public function profileUpdate(Request $request){
        //validation rules

        $request->validate([
            'fname' =>'required|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);
        $user =Auth::user();
        $user->fname = $request['fname'];
        $user->mname = $request['mname'];
        $user->lname = $request['lname'];
        $user->sex = $request['sex'];
        $user->mobileNum = $request['mobileNum'];
        $user->birthDate = $request['birthDate'];
        $user->civilStatus = $request['civilStatus'];
        $user->street = $request['street'];
        $user->region = $request['region'];
        $user->municipality = $request['municipality'];
        $user->barangay = $request['barangay'];
        $user->province = $request['province'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message','Profile Updated');
    }
 
}
