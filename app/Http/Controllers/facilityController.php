<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
class facilityController extends Controller
{
    public function facility(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('evacuees')->where('loc_id','=',1 )->count();
    $facility = DB::select('Select * from evacuation where id=1');
    return view('evacuation.annafunanelem', compact('count'), ['facility'=>$facility]);
    }

    public function facility2(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('evacuees')->where('loc_id','=',2 )->count();
    $facility = DB::select('Select * from evacuation where id=2');
    return view('evacuation.annafunanhall', compact('count'), ['facility'=>$facility]);
    }
    public function facility3(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('atulayann_multi')->count();
    $facility = DB::select('Select * from facility where id=3');
    return view('evacuation.atulayann_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility4(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('atulayans_multi')->count();
    $facility = DB::select('Select * from facility where id=5');
    return view('evacuation.atulayann_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility5(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('atulayan_elem')->count();
    $facility = DB::select('Select * from facility where id=4');
    return view('evacuation.atulayan_elem', compact('count'), ['facility'=>$facility]);
    }
    public function facility6(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('bagay_elem')->count();
    $facility = DB::select('Select * from facility where id=6');
    return view('evacuation.bagay_elem', compact('count'), ['facility'=>$facility]);
    }
    public function facility7(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('balzaine_multi')->count();
    $facility = DB::select('Select * from facility where id=7');
    return view('evacuation.balzaine_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility8(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('balzain_elem')->count();
    $facility = DB::select('Select * from facility where id=8');
    return view('evacuation.balzain_elem', compact('count'), ['facility'=>$facility]);
    }
    public function facility9(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('balzainw_multi')->count();
    $facility = DB::select('Select * from facility where id=9');
    return view('evacuation.balzainw_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility10(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('buntun_multi')->count();
    $facility = DB::select('Select * from facility where id=10');
    return view('evacuation.untun_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility11(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('capatan_multi')->count();
    $facility = DB::select('Select * from facility where id=11');
    return view('evacuation.capatan_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility12(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('cataggaman_elem')->count();
    $facility = DB::select('Select * from facility where id=12');
    return view('evacuation.cataggaman_elem', compact('count'), ['facility'=>$facility]);
    }
    public function facility13(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('cataggamann_elem')->count();
    $facility = DB::select('Select * from facility where id=13');
    return view('evacuation.cataggamann_elem', compact('count'), ['facility'=>$facility]);
    }
    public function facility14(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('cataggamanp_multi')->count();
    $facility = DB::select('Select * from facility where id=14');
    return view('evacuation.cataggamanp_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility15(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('cataggamanv_multi')->count();
    $facility = DB::select('Select * from facility where id=15');
    return view('evacuation.cataggamanv_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility16(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('centro01_multi')->count();
    $facility = DB::select('Select * from facility where id=16');
    return view('evacuation.centro01_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility17(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('centro09_multi')->count();
    $facility = DB::select('Select * from facility where id=17');
    return view('evacuation.centro09_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility18(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('centro10_multi')->count();
    $facility = DB::select('Select * from facility where id=18');
    return view('evacuation.centro10_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility19(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('gosi')->count();
    $facility = DB::select('Select * from facility where id=19');
    return view('evacuation.gosi', compact('count'), ['facility'=>$facility]);
    }
    public function facility20(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('gosin_multi')->count();
    $facility = DB::select('Select * from facility where id=20');
    return view('evacuation.gosin_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility21(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('gosis_multi')->count();
    $facility = DB::select('Select * from facility where id=21');
    return view('evacuation.gosis_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility22(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('larionb_multi')->count();
    $facility = DB::select('Select * from facility where id=22');
    return view('evacuation.larionb_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility23(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('larion_elem')->count();
    $facility = DB::select('Select * from facility where id=23');
    return view('evacuation.larion_elem', compact('count'), ['facility'=>$facility]);
    }
    public function facility24(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('libagn_multi')->count();
    $facility = DB::select('Select * from facility where id=24');
    return view('evacuation.libagn_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility25(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('libags_multi')->count();
    $facility = DB::select('Select * from facility where id=25');
    return view('evacuation.libags_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility26(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('namabbalan_multi')->count();
    $facility = DB::select('Select * from facility where id=26');
    return view('evacuation.namabbalan_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility27(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('namabbalans_multi')->count();
    $facility = DB::select('Select * from facility where id=27');
    return view('evacuation.namabbalans_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility28(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('tncs')->count();
    $facility = DB::select('Select * from facility where id=28');
    return view('evacuation.tncs', compact('count'), ['facility'=>$facility]);
    }
    public function facility29(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('tnes')->count();
    $facility = DB::select('Select * from facility where id=29');
    return view('evacuation.nes', compact('count'), ['facility'=>$facility]);
    }
    public function facility30(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('tcpg')->count();
    $facility = DB::select('Select * from facility where id=30');
    return view('evacuation.tcpg', compact('count'), ['facility'=>$facility]);
    }
    public function facility31(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('sangab')->count();
    $facility = DB::select('Select * from facility where id=31');
    return view('evacuation.sangab ', compact('count'), ['facility'=>$facility]);
    }
    public function facility32(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('tagga_multi')->count();
    $facility = DB::select('Select * from facility where id=32');
    return view('evacuation.tagga_multi ', compact('count'), ['facility'=>$facility]);
    }
    public function facility33(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('taggad_elem')->count();
    $facility = DB::select('Select * from facility where id=33');
    return view('evacuation.taggad_elem', compact('count'), ['facility'=>$facility]);
    }
    public function facility34(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('tecs')->count();
    $facility = DB::select('Select * from facility where id=34');
    return view('evacuation.tecs', compact('count'), ['facility'=>$facility]);
    }
    public function facility35(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('tshs')->count();
    $facility = DB::select('Select * from facility where id=35');
    return view('evacuation.tshs', compact('count'), ['facility'=>$facility]);
    }
    public function facility36(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('twcs')->count();
    $facility = DB::select('Select * from facility where id=36');
    return view('evacuation.twcs', compact('count'), ['facility'=>$facility]);
    }
    public function facility37(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('ugacn_multi')->count();
    $facility = DB::select('Select * from facility where id=37');
    return view('evacuation.ugacn_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility38(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = DB::table('ugacs_multi')->count();
    $facility = DB::select('Select * from facility where id=38');
    return view('evacuation.ugacs_multi', compact('count'), ['facility'=>$facility]);
    }

    public function search(Request $request){

         /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        // Get the search value from the request
        
        $search = $request->input('search');
    
        $access = DB::select('Select * from facility where id = 1');
        $access2 = DB::select('Select * from facility where id = 2');
        $access3 = DB::select('Select * from facility where id = 3');
      
    
        // Search in the title and body columns from the posts table
        $users = DB::table('annafunan_elementary')
            ->where('fname', 'LIKE',"%{$search}%")
            ->orWhere('lname', 'LIKE',"%{$search}%" )
            ->orWhere('Evacuation')
            ->get();
            if (count ( $users ) > 0)
            return view ( 'evacuation.allevac', ['access'=>$access,'access2'=>$access2,'access3'=>$access3])->withDetails ( $users )->withQuery ( $search );
        else
            return view ( 'evacuation.allevac', ['access'=>$access,'access2'=>$access2,'access3'=>$access3])->withMessage ( 'No Details found. Try to search again!');
    


}
}