<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\evacueess;
use Illuminate\Database\Eloquent\SoftDeletes;
class AccessEvacuationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function facility(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = evacueess::where('loc_id',2 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=2');
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
    $count = evacueess::where('loc_id',1 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=1');
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
    $count = evacueess::where('loc_id',4 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=4');
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
    $count = evacueess::where('loc_id',5 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=5');
    return view('evacuation.atulayans_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility5(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = evacueess::where('loc_id',3 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=3');
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
    $count = evacueess::where('loc_id',6 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=6');
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
    $count = evacueess::where('loc_id',7 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=7');
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
    $count = evacueess::where('loc_id',8 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=8');
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
    $count = evacueess::where('loc_id',9 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=9');
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
    $count = evacueess::where('loc_id',10 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=10');
    return view('evacuation.buntun_multi', compact('count'), ['facility'=>$facility]);
    }
    public function facility11(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = evacueess::where('loc_id',11 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=11');
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
    $count = evacueess::where('loc_id',12 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=12');
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
    $count = evacueess::where('loc_id',13 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=13');
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
    $count = evacueess::where('loc_id',14 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=14');
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
    $count = evacueess::where('loc_id',15 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=15');
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
    $count = evacueess::where('loc_id',16 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=16');
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
    $count = evacueess::where('loc_id',17 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=17');
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
    $count = evacueess::where('loc_id',18 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=18');
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
    $count = evacueess::where('loc_id',19 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=19');
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
    $count = evacueess::where('loc_id',20 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=20');
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
    $count = evacueess::where('loc_id',21 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=21');
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
    $count = evacueess::where('loc_id',22 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=22');
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
    $count = evacueess::where('loc_id',23 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=23');
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
    $count = evacueess::where('loc_id',24 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=24');
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
    $count = evacueess::where('loc_id',25 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=25');
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
    $count = evacueess::where('loc_id',26 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=26');
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
    $count = evacueess::where('loc_id',27 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=27');
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
    $count = evacueess::where('loc_id',34 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=34');
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
    $count = evacueess::where('loc_id',35 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=35');
    return view('evacuation.tnes', compact('count'), ['facility'=>$facility]);
    }
    public function facility30(Request $request)
    {
        /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    $count = evacueess::where('loc_id',31 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=31');
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
    $count = evacueess::where('loc_id',28 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=28');
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
    $count = evacueess::where('loc_id',30 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=30');
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
    $count = evacueess::where('loc_id',29 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=29');
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
    $count = evacueess::where('loc_id',33 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=33');
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
    $count = evacueess::where('loc_id',32 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=32');
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
    $count = evacueess::where('loc_id',36 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=36');
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
    $count = evacueess::where('loc_id',37 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=37');
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
    $count = evacueess::where('loc_id',38 )->whereNull('deleted_at')->count();
    $facility = DB::select('Select * from evacuation where id=38');
    return view('evacuation.ugacs_multi', compact('count'), ['facility'=>$facility]);
    }

        public function access(Request $request)
    {
        $access = DB::select('Select * from facility where id = 1');
        $count = DB::table('evacuees')->where('loc_id','=',1 )->count();

        $access2 = DB::select('Select * from facility where id = 2');
        $count2 = DB::table('evacuees')->where('loc_id','=',2 )->count();
    
        $access3 = DB::select('Select * from facility where id = 3');
        $count3 = DB::table('evacuees')->where('loc_id','=',3 )->count();

        $access4 = DB::select('Select * from facility where id = 4');
        $count4 = DB::table('evacuees')->where('loc_id','=',4 )->count();

        $access5 = DB::select('Select * from facility where id = 5');
        $count5 = DB::table('evacuees')->where('loc_id','=',5 )->count();

        $access6 = DB::select('Select * from facility where id = 6');
        $count6 = DB::table('evacuees')->where('loc_id','=',6 )->count();

        $access7= DB::select('Select * from facility where id = 7');
        $count7 = DB::table('evacuees')->where('loc_id','=',7 )->count();

        $access8 = DB::select('Select * from facility where id = 8');
        $count8 = DB::table('evacuees')->where('loc_id','=',8 )->count();

        $access9 = DB::select('Select * from facility where id = 9');
        $count9 = DB::table('evacuees')->where('loc_id','=',9 )->count();

        $access10 = DB::select('Select * from facility where id = 10');
        $count10= DB::table('evacuees')->where('loc_id','=',10 )->count();

        $access11 = DB::select('Select * from facility where id = 11');
        $count11 = DB::table('evacuees')->where('loc_id','=',11 )->count();

        $access12 = DB::select('Select * from facility where id = 12');
        $count12 = DB::table('evacuees')->where('loc_id','=',12 )->count();

        $access13 = DB::select('Select * from facility where id = 13');
        $count13 = DB::table('evacuees')->where('loc_id','=',13 )->count();

        $access14= DB::select('Select * from facility where id = 14');
        $count14 = DB::table('evacuees')->where('loc_id','=',14 )->count();

        $access15 = DB::select('Select * from facility where id = 15');
        $count15 = DB::table('evacuees')->where('loc_id','=',15 )->count();

        return view('evacuation.allevac', compact('count', 'count2', 'count3', 'count3', 'count3', 'count4', 'count5', 'count6', 'count7', 'count8', 'count9', 'count10', 'count11', 'count12', 'count13', 'count14', 'count15'),
        ['access'=>$access,'access2'=>$access2,'access3'=>$access3,'access4'=>$access4,'access5'=>$access5,'access6'=>$access6,'access7'=>$access7,'access8'=>$access8,'access9'=>$access9,'access10'=>$access10,'access11'=>$access11,'access12'=>$access12,'access13'=>$access13,'access14'=>$access14,'access15'=>$access15]);
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
   
       // Search in the title and body columns from the posts table
       $users = DB::table('evacuees')
           ->where('fname', 'LIKE',"%{$search}%")
           ->orWhere('lname', 'LIKE',"%{$search}%" )
           ->orWhere('address' )
           ->orWhere('Evacuation')
           ->get();
           if(count($users) > 0)
           return view('evacuation.search')->withDetails($users)->withQuery ( $search );
       else return view ('evacuation.search')->withMessage('No Details found. Try to search again !');

}
}
