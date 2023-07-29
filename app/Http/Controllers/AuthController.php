<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\hotlines;

class AuthController extends Controller
{
    //function to authenticate user login

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'

        ]);

        $user_data = array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        );

        $remember = $request->input('remember');

         if (Auth::attempt($user_data, $remember)) {

            if (auth()->user()->role == 'agencyadmin') {
                return redirect('agency/{category_slug}');
            } else if (auth()->user()->role == 'superadmin') {
                return redirect('systemadmin/systemadmin');
            } else {
                return redirect('main/home');
            }
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
        
    }

    //function when login is successful

    function home()
    {
        $hotlines = hotlines::select('*')
        ->orderBy('agency')
        ->get();
        $news = DB::select('Select * from news');
        $waterlevel = DB::select('Select * from waterlevel');
        $facility = DB::select('Select * from facility');
        return view('home-screen', ['hotlines'=>$hotlines,'news'=>$news,'waterlevel'=>$waterlevel, 'facility'=>$facility ]);
    }
    
  
 
  
    

    //function to logout user

    function logout()
    {
        Auth::logout();
        return redirect('/main');
    }

    function index()
    {
        $user_data = User::all();
        return response()->json($user_data);
    }

}
