<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UserController extends Controller
{

    public function store(Request $request)
    {
        
        $request->validate([
            'fName' => 'required',
            'lName' => 'required',
            'sex' => 'required',
            'birthDate' => 'required | before:today',
            'civilStatus' => 'required',
            'street' => 'required',
            'region' => 'required',
            'province' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'username' => 'required',
            'password' => [
                'required',
                'string',
                'min:6',             // must be at least 6 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                // 'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'email' => 'required|email|unique:users',
            'mobileNum' => 'required|unique:users|regex:/^[0-9]{11}$/',
        ]);

        $user_data = new User;
        $user_data->FName = $request->input('fName');
        $user_data->MName = $request->input('mName');
        $user_data->LName = $request->input('lName');
        $user_data->Sex = $request->input('sex');
        $user_data->BirthDate = $request->input('birthDate');
        $user_data->CivilStatus = $request->input('civilStatus');
        $user_data->Street = $request->input('street');
        $user_data->Region = $request->input('region');
        $user_data->Province = $request->input('province');
        $user_data->Municipality = $request->input('municipality');
        $user_data->Barangay = $request->input('barangay');
        $user_data->username = $request->input('username');
        $user_data->password = Hash::make($request->input('password'));
        $user_data->Email = $request->input('email');
        $user_data->MobileNum = $request->input('mobileNum');
        $user_data->save();

        return redirect('/main');
    }

    public function update(Request $request)
    {
        $request->validate([
            'fName' => 'required',
            'lName' => 'required',
            'sex' => 'required',
            'birthDate' => 'required | before:today',
            'civilStatus' => 'required',
            'street' => 'required',
            'region' => 'required',
            'province' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'username' => 'required',
            'password' => [
                'required',
                'string',
                'min:6',             // must be at least 6 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                // 'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'email' => 'required|email|unique:users',
            'mobileNum' => 'required|unique:users|regex:/^[0-9]{11}$/',
        ]);

        $user_data = Auth::user()->id;
        $user_data->FName = $request->input('fName');
        $user_data->MName = $request->input('mName');
        $user_data->LName = $request->input('lName');
        $user_data->Sex = $request->input('sex');
        $user_data->BirthDate = $request->input('birthDate');
        $user_data->CivilStatus = $request->input('civilStatus');
        $user_data->Street = $request->input('street');
        $user_data->Region = $request->input('region');
        $user_data->Province = $request->input('province');
        $user_data->Municipality = $request->input('municipality');
        $user_data->Barangay = $request->input('barangay');
        $user_data->username = $request->input('username');
        $user_data->password = Hash::make($request->input('password'));
        $user_data->Email = $request->input('email');
        $user_data->MobileNum = $request->input('mobileNum');
        $save = $user_data->save();
        $last_id = $user_data->id;
         
        $token =  $last_id.hash('sha256', Str::random(64));
        $verifyURL = route('verify',['token' =>$token, 'service'=>'Email_Verification']);

    VerifyUser::create([
        'user_id' => $last_id,
        'token' => $token,
      ]);

     $message = 'Dear <b>'.$request->input('fName'). '<b>';
     $message = 'Thanks for signing up with us, We just need you to verify your email address to complete setting up your account.';
 
     $mail_data =[
     'recipient' => $request->input('email'),
     'fromEmail' => $request->input('email'),
     'fromName' => $request->input('username'),
     'subject' => 'Email_Verification',
     'body' =>$message, 
      'actionLink'=> $verifyURL,
     ];

     Mail::send('email-template', $mail_data, function($message) use ($mail_data){
           $message ->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'], $mail_data['fromName'])
                    ->subject($mail_data['subject']);
     });
     if($save){
        return redirect()->back()->with('success','You need to verify your account.We have sent you an Activation Link,
        please check your gmail');
     }else{
        return redirect()->back()->with('fail','failed to register');
     }
       
    }
    

    // function updatePicture(Request $request)
    // {
    //     $path = 'storage/images/profile/';
    //     $file = $request->file('profile_pic');
    //     $new_name = 'UIMG_' . date('Ymd') . uniqid() . '.jpg';

    //     //Upload new image
    //     $upload = $file->move(public_path($path), $new_name);

    //     if (!$upload) {
    //         return response()->json(['status' => 0, 'msg' => 'Something went wrong, upload new picture failed.']);
    //     } else {
    //         //Get Old picture
    //         $oldPicture = User::find(Auth::user()->id)->getAttributes()['profile'];

    //         if ($oldPicture != '') {
    //             if (\File::exists(public_path($path . $oldPicture))) {
    //                 \File::delete(public_path($path . $oldPicture));
    //             }
    //         }

    //         //Update DB
    //         $update = User::find(Auth::user()->id)->update(['profile' => $new_name]);

    //         if (!$upload) {
    //             return response()->json(['status' => 0, 'msg' => 'Something went wrong, updating picture in db failed.']);
    //         } else {
    //             return response()->json(['status' => 1, 'msg' => 'Your profile picture has been updated successfully']);
    //         }
    //     }
    // }
   
    public function verify(Request $request){
       $token = $request->token;
       $verifyUser = VerifyUser::where('token', $token)->first();
       
       if(!is_null($verifyUser )){
         $user_data = $verifyUser->user;
         
         if($verifyUser->user->email_verified == 0){
           User::where('userID', $verifyUser->user->userID)
           ->update(['email_verified' => 1]);
           
            return redirect('main')->with('info', 'Your email has been verified. You can now login')->with('verifiedEmail',
            $user_data->username);
         } else{
            return redirect('main')->with('info', 'Your email is already been verified. You can now login')->with('verifiedEmail',
            $user_data->username);
         }
    
       }
        }
        public function submitForgotPasswordForm (Request $request){
            $request->validate([
                'email'=>'required|email|exists:users,email'
            ]);
    
            $token = Str::random(64);
    
            DB::table('password_resets')->insert([
                'email'=>$request->input('email'),
                'token'=>$token,
                'created_at'=>Carbon::now()
            ]);
    
            Mail::send('forgetPassword',['token'=>$token],function($message) use($request) {
                $message->to($request->input('email'));
                $message->subject('Reset Password');
            });
            return back()->with('message', 'We have sent you a reset password link please check your email');
        }
    
        public function showResetPasswordForm ($token) {
            return view ('forgetpasswordLink', ['token'=>$token]);
    
        }
    
        public function submitResetPasswordForm (Request $request){
            $request->validate([
                'email'=>'required|email|exists:users,email',
                'password' => [
                    'required',
                    'string',
                    'min:6',
                    'confirmed',
                    'regex:/[a-z]/',
                    'regex:/[A-Z]/',
                    'regex:/[0-9]/',
                ],
                'password_confirmation' =>'required'
            ]);
    
            $password_reset_request = DB::table('password_resets')
            ->where('email',$request->input('email'))
            ->where('token',$request->token)
            ->first();
    
            if (!$password_reset_request) {
                return back () ->with('error', 'Invalid Token!');
            }
    
            User::where('email',$request->input('email'))
            ->update(['password'=>Hash::make($request->input('password'))] );
    
            DB::table('password_resets')
            ->where('email',$request->input('email'))
            ->delete();
    
            return redirect('/main')->with('message','Your password has been successfully updated! ');
    
        }
    
    function home()
    {
        return view('home-screen');
    }

    function report()
    {
        return view('report-screen');
    }

    function search()
    {
        return view('searchloc-screen');
    }

    function news()
    {
        return view('news-screen');
    }

    function settings()
    {
        return view('settings-screen');
    }
    function guidelines()
    {
        return view('disaster.guidelines');
    } 
     function dashboard()
    {
        return view('dashboard');
    }
    function manmade()
    {
        return view('disaster.manmade');
    }
    function equake()
    {
        return view('disaster.equake');
    }
    function equakedts()
    {
        return view('disaster.equakedts');
    }
    function typh()
    {
        return view('disaster.typh');
    }
    function typhdts()
    {
        return view('disaster.typhdts');
    }
    function flood()
    {
        return view('disaster.flood');
    }
    function flooddts()
    {
        return view('disaster.flooddts');
    }
    function lslide()
    {
        return view('disaster.lslide');
    }
    function lslidedts()
    {
        return view('disaster.lslidedts');
    }
    function fire()
    {
        return view('disaster.fire');
    }
    function firedts()
    {
        return view('disaster.firedts');
    }
    function drown()
    {
        return view('disaster.drown');
    }
    function drowndts()
    {
        return view('disaster.drowndts');
    }
    function vehic()
    {
        return view('disaster.vehic');
    }
    function vehicdts()
    {
        return view('disaster.vehicdts');
    }
    function stab()
    {
        return view('disaster.stab');
    }
    function stabdts()
    {
        return view('disaster.stabdts');
    }
    function gun()
    {
        return view('disaster.gun');
    }
    function gundts()
    {
        return view('disaster.gundts');
    }
    function allevac()
    {
        return view('evacuation.allevac');
    }
    function annafunanelem()
    {
        return view('evacuation.annafunanelem');

    }
    function annafunanhall()
    {
        return view('evacuation.annafunanhall');

    }
    function atulayann_multi()
    {
        return view('evacuation.atulayann_multi');

    }
    function atulayan_elem()
    {
        return view('evacuation.atulayan_elem');

    }
    function atulayans_multi()
    {
        return view('evacuation.atulayans_multi');

    }
    function bagay_elem()
    {
        return view('evacuation.bagay_elem');

    }
    function balzaine_multi()
    {
        return view('evacuation.balzaine_multi');

    }
    function balzain_elem()
    {
        return view('evacuation.balzain_elem');

    }
    function balzainw_multi()
    {
        return view('evacuation.balzainw_multi');

    } 
     function buntun_multi()
    {
        return view('evacuation.buntun_multi');

    }
    function capatan_multi()
    {
        return view('evacuation.capatan_multi');

    }
    function cataggaman_elem()
    {
        return view('evacuation.cataggaman_elem');

    }
    function cataggamann_elem()
    {
        return view('evacuation.cataggamann_elem');

    }
    function cataggamanp_multi()
    {
        return view('evacuation.cataggamanp_multi');

    }
    function cataggamanv_multi()
    {
        return view('evacuation.cataggamanv_multi');

    }
    function centro01_multi()
    {
        return view('evacuation.centro01_multi');

    }
    function centro09_multi()
    {
        return view('evacuation.centro09_multi');

    }
    function centro10_multi()
    {
        return view('cevacuation.entro10_multi');

    }
    function gosi()
    {
        return view('evacuation.gosi');

    }
    function gosin_multi()
    {
        return view('evacuation.gosin_multi');

    }
    function gosis_multi()
    {
        return view('evacuation.gosis_multi');

    }
    function larionb_multi()
    {
        return view('evacuation.larionb_multi');

    }
    function larion_elem()
    {
        return view('evacuation.larion_elem');

    }
    function libagn_multi()
    {
        return view('evacuation.libagn_multi');

    }
    function libags_multi()
    {
        return view('evacuation.libags_multi');

    }
    function namabbalan_multi()
    {
        return view('evacuation.namabbalan_multi');

    }
    function namabbalans_multi()
    {
        return view('evacuation.namabbalans_multi');

    }
    function tncs()
    {
        return view('evacuation.tncs');

    }
    function tnes()
    {
        return view('evacuation.tnes');

    }
    function tcpg()
    {
        return view('evacuation.tcpg');

    }
    function sangab()
    {
        return view('evacuation.sangab');

    }
    function tagga_multi()
    {
        return view('evacuation.tagga_multi');

    }
    function taggad_elem()
    {
        return view('evacuation.taggad_elem');

    }
    function tecs()
    {
        return view('evacuation.tecs');

    }
    function tshs()
    {
        return view('evacuation.tshs');

    }
    function twcs()
    {
        return view('evacuation.twcs');

    }
    function ugacn_multi()
    {
        return view('evacuation.ugacn_multi');

    }
    function ugacs_multi()
    {
        return view('evacuation.ugacs_multi');

    }
    function profile()
    {
        return view('profile');

    }
    function profiles()
    {
        return view('ears_systemadmin.profile');

    }
    function evacuation()
    {
        return view('evacuation.search');

    }
    function agency()
    {
        return view('frontend.collections.products.agency_index');

    }
    function agencyannafunanelem()
    {
        return view('annafunanelem');

    }
    
}
