<?php

use App\Http\Controllers\downloadpdfController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PDFController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('main/checklogin', 'App\Http\Controllers\AuthController@checklogin')->name('checklogin');

Route::get('main/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::post('/registration', 'App\Http\Controllers\UserController@store')->name('registration');
Route::get('/main', function () {
    return view('main');
});

Auth::routes();


Route::get('/registration', function () {
    return view('registration');
});

Route::get('/forgotpass', function () {
    return view('forgot-password');
});
Route::get('/eams', function () {
    return view('home-screen');
});
Route::get('/verify', 'App\Http\Controllers\UserController@verify')->name('verify');

Route::post('/forgotpass', 'App\Http\Controllers\UserController@submitForgotPasswordForm')->name('forgot.password.post');
Route::get('/reset-password/{token}', 'App\Http\Controllers\UserController@showResetPasswordForm')->name('reset.password.get');
Route::post('/reset-password', 'App\Http\Controllers\UserController@submitResetPasswordForm')->name('reset.password.post');
Route::get('main/checklogin', 'App\Http\Controllers\AuthController@checklogin')->name('checklogin');

Route::get('main/list', [downloadpdfController::class, 'preview'])->name('agency.report');
Route::get('main/list/pdf', [downloadpdfController::class, 'createPDF']);

    
    Route::get('/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);

    Route::get('eams', 'App\Http\Controllers\AuthController@home')->name('home');
    Route::get('main/report', 'App\Http\Controllers\UserController@report')->name('report');
    Route::post('main/report', 'App\Http\Controllers\EmergencyController@store')->name('reportEmergency');
    Route::get('main/search', 'App\Http\Controllers\UserController@search')->name('search');
    Route::get('main/news', 'App\Http\Controllers\UserController@news')->name('news');
    Route::get('main/settings', 'App\Http\Controllers\UserController@settings')->name('setting');
    Route::post('main/settings', 'App\Http\Controllers\UserController@update')->name('update');
    Route::post('main/profileUpdate', 'App\Http\Controllers\UserController@updateProfile')->name('profilePictureUpdate');

    Route::get('main/guidelines', 'App\Http\Controllers\UserController@guidelines')->name('guidelines');
    Route::get('main/dashboard', 'App\Http\Controllers\UserController@dashboard')->name('dashboard');
    Route::get('main/manmade', 'App\Http\Controllers\UserController@manmade')->name('manmade');
    Route::get('main/equake', 'App\Http\Controllers\UserController@equake')->name('equake');
    Route::get('main/equakedts', 'App\Http\Controllers\UserController@equakedts')->name('equakedts');
    Route::get('main/typh', 'App\Http\Controllers\UserController@typh')->name('typh');
    Route::get('main/typhdts', 'App\Http\Controllers\UserController@typhdts')->name('typhdts');
    Route::get('main/flood', 'App\Http\Controllers\UserController@flood')->name('flood');
    Route::get('main/flooddts', 'App\Http\Controllers\UserController@flooddts')->name('flooddts');
    Route::get('main/lslide', 'App\Http\Controllers\UserController@lslide')->name('lslide');
    Route::get('main/lslidedts', 'App\Http\Controllers\UserController@lslidedts')->name('lslidedts');
    Route::get('main/fire', 'App\Http\Controllers\UserController@fire')->name('fire');
    Route::get('main/firedts', 'App\Http\Controllers\UserController@firedts')->name('firedts');
    Route::get('main/drown', 'App\Http\Controllers\UserController@drown')->name('drown');
    Route::get('main/drowndts', 'App\Http\Controllers\UserController@drowndts')->name('drowndts');
    Route::get('main/vehic', 'App\Http\Controllers\UserController@vehic')->name('vehic');
    Route::get('main/vehicdts', 'App\Http\Controllers\UserController@vehicdts')->name('vehicdts');
    Route::get('main/stab', 'App\Http\Controllers\UserController@stab')->name('stab');
    Route::get('main/stabdts', 'App\Http\Controllers\UserController@stabdts')->name('stabdts');
    Route::get('main/gun', 'App\Http\Controllers\UserController@gun')->name('gun');
    Route::get('main/gundts', 'App\Http\Controllers\UserController@gundts')->name('gundts');
    Route::get('main/allevac', 'App\Http\Controllers\UserController@allevac')->name('evacuation.allevac');

    Route::get('/{category_slug}/AnnafunanElementarySchool', 'App\Http\Controllers\UserController@annafunanelem')->name('evacuation.annafunanelem');
    Route::get('/{category_slug}/AnnafunanElementarySchool', 'App\Http\Controllers\AccessEvacuationController@facility')->name('evacuation.annafunanelem');

    Route::get('/{category_slug}/AnnafunanEasrBarangayHall', 'App\Http\Controllers\UserController@annafunanhall')->name('evacuation.annafunanelem');
    Route::get('/{category_slug}/AnnafunanEastBarangayHall', 'App\Http\Controllers\AccessEvacuationController@facility2')->name('evacuation.annafunanelem');
    Route::get('/{category_slug}/AtulayanNorteMulti-PurposeHall', 'App\Http\Controllers\UserController@atulayann_multi')->name('evacuation.atulayann_multi');
    Route::get('/{category_slug}/AtulayanNorteMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility3')->name('evacuation.atulayann_multi');
    Route::get('/{category_slug}/AtulayanElementarySchool', 'App\Http\Controllers\UserController@atulayan_elem')->name('evacuation.atulayan_elem');
    Route::get('/{category_slug}/AtulayanElementarySchool', 'App\Http\Controllers\AccessEvacuationController@facility5')->name('evacuation.atulayan_elem');
    Route::get('/{category_slug}/AtulayanSurMulti-PurposeHall', 'App\Http\Controllers\UserController@atulayans_multi')->name('evacuation.atulayans_multi');
    Route::get('/{category_slug}/AtulayanSurMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility4')->name('evacuation.atulayans_multi');
    Route::get('/{category_slug}/BagayElementarySchool', 'App\Http\Controllers\UserController@bagay_elem')->name('bagay_elem');
    Route::get('/{category_slug}/BagayElementarySchool', 'App\Http\Controllers\AccessEvacuationController@facility6')->name('bagay_elem');
    Route::get('/{category_slug}/BalzainEastMulti-PurposeHall', 'App\Http\Controllers\UserController@balzaine_multi')->name('balzaine_multi');
    Route::get('/{category_slug}/BalzainEastMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility7')->name('balzaine_multi');
    Route::get('/{category_slug}/BalzainElementarySchool', 'App\Http\Controllers\UserController@balzain_elem')->name('balzain_elem');
    Route::get('/{category_slug}/BalzainElementarySchool', 'App\Http\Controllers\AccessEvacuationController@facility8')->name('balzain_elem');
    Route::get('/{category_slug}/BalzainWestMulti-PurposeHall', 'App\Http\Controllers\UserController@balzainw_multi')->name('balzainw_multi');
    Route::get('/{category_slug}/BalzainWestMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility9')->name('balzainw_multi');
    Route::get('/{category_slug}/BuntunMulti-PurposeHall', 'App\Http\Controllers\UserController@buntun_multi')->name('buntun_multi');
    Route::get('/{category_slug}/BuntunMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility10')->name('buntun_multi');
    Route::get('/{category_slug}/CapatanMulti-PurposeHall', 'App\Http\Controllers\UserController@capatan_multi')->name('capatan_multi');
    Route::get('/{category_slug}/CapatanMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility11')->name('capatan_multi');
    Route::get('/{category_slug}/CataggamanElementarySchoolMain.', 'App\Http\Controllers\UserController@cataggaman_elem')->name('cataggaman_elem');
    Route::get('/{category_slug}/CataggamanElementarySchoolMain', 'App\Http\Controllers\AccessEvacuationController@facility12')->name('cataggaman_elem');
    Route::get('/{category_slug}/CataggamanNuevoElementarySchool', 'App\Http\Controllers\UserController@cataggamann_elem')->name('cataggamann_elem');
    Route::get('/{category_slug}/CataggamanNuevoElementarySchool', 'App\Http\Controllers\AccessEvacuationController@facility13')->name('cataggamann_elem');
    Route::get('/{category_slug}/CataggamanPardoMulti-PurposeHall', 'App\Http\Controllers\UserController@cataggamanp_multi')->name('cataggamanp_multi');
    Route::get('/{category_slug}/CataggamanPardoMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility14')->name('cataggamanp_multi');
    Route::get('/{category_slug}/CataggamanViejoMulti-PurposeHall', 'App\Http\Controllers\UserController@cataggamanv_multi')->name('cataggamanv_multi');
    Route::get('/{category_slug}/CataggamanViejoMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility15')->name('cataggamanv_multi');
    Route::get('/{category_slug}/Centro01Multi-PurposeHall', 'App\Http\Controllers\UserController@centro01')->name('centro01_multi');
    Route::get('/{category_slug}/Centro01Multi-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility16')->name('centro01_multi');
    Route::get('/{category_slug}/Centro09Multi-PurposeHall', 'App\Http\Controllers\UserController@centro09')->name('centro09_multi');
    Route::get('/{category_slug}/Centro09Multi-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility17')->name('centro10_multi');
    Route::get('/{category_slug}/Centro10Multi-PurposeHall', 'App\Http\Controllers\UserController@centro10')->name('centro09_multi');
    Route::get('/{category_slug}/Centro10Multi-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility18')->name('centro10_multi');
    Route::get('/{category_slug}/GosiNationalHighSchool', 'App\Http\Controllers\UserController@gosi')->name('gosi');
    Route::get('/{category_slug}/GosiNationalHighSchool', 'App\Http\Controllers\AccessEvacuationController@facility19')->name('gosi');
    Route::get('/{category_slug}/GosiNorteMulti-PurposeHall', 'App\Http\Controllers\UserController@gosin_multi')->name('gosin_multi');
    Route::get('/{category_slug}/GosiNorteMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility20')->name('gosin_multi');
    Route::get('/{category_slug}/GosiSurMulti-PurposeHall', 'App\Http\Controllers\UserController@gosis_multi')->name('gosis_multi');
    Route::get('/{category_slug}/GosiSurMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility21')->name('gosis_multi');
    Route::get('/{category_slug}/LarionBajoMulti-PurposeHall', 'App\Http\Controllers\UserController@larionb_multi')->name('larionb_multi');
    Route::get('/{category_slug}/LarionBajoMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility22')->name('larionb_multi');
    Route::get('/{category_slug}/LarionElementarySchool', 'App\Http\Controllers\UserController@larion_elem')->name('larion_elem');
    Route::get('/{category_slug}/LarionElementarySchool', 'App\Http\Controllers\AccessEvacuationController@facility23')->name('larion_elem');
    Route::get('/{category_slug}/LibagNorteMulti-PurposeHall', 'App\Http\Controllers\UserController@libagn_multi')->name('libagn_multi');
    Route::get('/{category_slug}/LibagNorteMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility24')->name('libagn_multi');
    Route::get('/{category_slug}/LibagSurMulti-PurposeHall', 'App\Http\Controllers\UserController@libags_multi')->name('libags_multi');
    Route::get('/{category_slug}/LibagSurMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility25')->name('libags_multi');
    Route::get('/{category_slug}/NamabbalanNorteMulti-PurposeHall', 'App\Http\Controllers\UserController@namabbalan_multi')->name('namabbalan_multi');
    Route::get('/{category_slug}/NamabbalanNorteMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility26')->name('namabbalan_multi');
    Route::get('/{category_slug}/NamabbalanSurMulti-PurposeHall', 'App\Http\Controllers\UserController@namabbalans_multi')->name('namabbalans_multi');
    Route::get('/{category_slug}/NamabbalanSurMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility27')->name('namabbalans_multi');
    Route::get('/{category_slug}/TuguegaraoNorthCentralSchool', 'App\Http\Controllers\UserController@tncs')->name('tncs');
    Route::get('/{category_slug}/TuguegaraoNorthCentralSchool', 'App\Http\Controllers\AccessEvacuationController@facility28')->name('tncs');
    Route::get('/{category_slug}/TuguegaraoNorth-EastCentral', 'App\Http\Controllers\UserController@tnes')->name('tnes');
    Route::get('/{category_slug}/TuguegaraoNorth-EastCentral', 'App\Http\Controllers\AccessEvacuationController@facility29')->name('tnes');
    Route::get('/{category_slug}/TuguegaraoCityPeoplesGymnasium', 'App\Http\Controllers\UserController@tcpg')->name('tcpg');
    Route::get('/{category_slug}/TuguegaraoCityPeoplesGymnasium', 'App\Http\Controllers\AccessEvacuationController@facility30')->name('tcpg');
    Route::get('/{category_slug}/SanGabrielMulti-PurposeHall', 'App\Http\Controllers\UserController@sangab')->name('sangab');
    Route::get('/{category_slug}/SanGabrielMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility31')->name('sangab');
    Route::get('/{category_slug}/TaggaMulti-PurposeHall', 'App\Http\Controllers\UserController@tagga_multi')->name('tagga_multi');
    Route::get('/{category_slug}/TaggaMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility32')->name('tagga_multi');
    Route::get('/{category_slug}/Tagga-DaddaElementarySchool', 'App\Http\Controllers\UserController@taggad_elem')->name('taggad_elem');
    Route::get('/{category_slug}/Tagga-DaddaElementarySchool', 'App\Http\Controllers\AccessEvacuationController@facility33')->name('taggad_elem');
    Route::get('/{category_slug}/TuguegaraoEastCentralSchool', 'App\Http\Controllers\UserController@tecs')->name('tecs');
    Route::get('/{category_slug}/TuguegaraoEastCentralSchool', 'App\Http\Controllers\AccessEvacuationController@facility34')->name('tecs');
    Route::get('/{category_slug}/TuguegaraoScienceHighSchool', 'App\Http\Controllers\UserController@tshs')->name('tshs');
    Route::get('/{category_slug}/TuguegaraoScienceHighSchool', 'App\Http\Controllers\AccessEvacuationController@facility35')->name('tshs');
    Route::get('/{category_slug}/TuguegaraoWestCentralSchool', 'App\Http\Controllers\UserController@twcs')->name('twcs');
    Route::get('/{category_slug}/TuguegaraoWestCentralSchool', 'App\Http\Controllers\AccessEvacuationController@facility36')->name('twcs');
    Route::get('/{category_slug}/UgacNorteMulti-PurposeHall', 'App\Http\Controllers\UserController@ugacn_multi')->name('ugacn_multi');
    Route::get('/{category_slug}/UgacNorteMulti-PurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility37')->name('ugacn_multi');
    Route::get('/{category_slug}/UgacSurMultiPurposeHall', 'App\Http\Controllers\UserController@ugacs_multi')->name('ugacs_multi');
    Route::get('/{category_slug}/UgacSurMultiPurposeHall', 'App\Http\Controllers\AccessEvacuationController@facility38')->name('ugacs_multi');

    Route::get('main/search', 'App\Http\Controllers\UserController@evacuation')->name('evacuation.evacuation');

    Route::get('main/allevac', 'App\Http\Controllers\AccessEvacuationController@access')->name('evacuation.allevac');
    Route::post('main/search', 'App\Http\Controllers\AccessEvacuationController@search')->name('evacuation.evacuation');


  
Route::middleware(['auth', 'user-role:agencyadmin'])->group(function () {
   

    Route::get('agency/{category_slug}', 'App\Http\Controllers\Frontend\FrontendController@product')->name('agencyview');

    Route::get("/Evacuation/annafunanelem/print",'App\Http\Controllers\Agency\AnnafelemController@printview')->name('annafunanelem.print');

    Route::get("/Evacuation/annafunanelem",'App\Http\Controllers\Agency\AnnafelemController@index')->name('annafunanelem.index');
    Route::get("/Evacuation/annafunanelem/create",'App\Http\Controllers\Agency\AnnafelemController@create')->name('annafunanelem.create');
    Route::post("/Evacuation/annafunanelem",'App\Http\Controllers\Agency\AnnafelemController@store')->name('annafunanelem.store');
    Route::get("/Evacuation/annafunanelem/{item}/edit",'App\Http\Controllers\Agency\AnnafelemController@edit')->name('annafunanelem.edit');
    Route::patch("/Evacuation/annafunanelem/{item}",'App\Http\Controllers\Agency\AnnafelemController@update')->name('annafunanelem.update');
    Route::delete("/Evacuation/annafunanelem/{item}",'App\Http\Controllers\Agency\AnnafelemController@archive')->name('annafunanelem.archive');
    Route::get("/Evacuation/annafunanelem/archive",'App\Http\Controllers\Agency\AnnafelemController@archiveview')->name('annafunanelem.archive');
    Route::post("/Evacuation/annafunanelem/restore/{item}",'App\Http\Controllers\Agency\AnnafelemController@restore')->name('annafunanelem.restore');
    Route::delete("/Evacuation/annafunanelem/forceDelete/{item}",'App\Http\Controllers\Agency\AnnafelemController@forceDelete')->name('annafunanelem.forceDelete');

    
    Route::get("/Evacuation/annafunanhall/print",'App\Http\Controllers\Agency\AnnafhallController@printview')->name('annafunanelem.print');

    Route::get("/Evacuation/annafunanhall",'App\Http\Controllers\Agency\AnnafhallController@index')->name('annafunanhall.index');
    Route::get("/Evacuation/annafunanhall/create",'App\Http\Controllers\Agency\AnnafhallController@create')->name('annafunanhall.create');
    Route::post("/Evacuation/annafunanhall",'App\Http\Controllers\Agency\AnnafhallController@store')->name('annafunanhall.store');
    Route::get("/Evacuation/annafunanhall/{item}/edit",'App\Http\Controllers\Agency\AnnafhallController@edit')->name('annafunanhall.edit');
    Route::patch("/Evacuation/annafunanhall/{item}",'App\Http\Controllers\Agency\AnnafhallController@update')->name('annafunanhall.update');
    Route::delete("/Evacuation/annafunanhall/{item}",'App\Http\Controllers\Agency\AnnafhallController@archive')->name('annafunanhall.archive');
    Route::get("/Evacuation/annafunanhall/archive",'App\Http\Controllers\Agency\AnnafhallController@archiveview')->name('annafunanhall.archive');
    Route::post("/Evacuation/annafunanhall/restore/{item}",'App\Http\Controllers\Agency\AnnafhallController@restore')->name('annafunanhall.restore');
    Route::delete("/Evacuation/annafunanhall/forceDelete/{item}",'App\Http\Controllers\Agency\AnnafhallController@forceDelete')->name('annafunanhall.forceDelete');
    
    Route::get("/Evacuation/atulayanelem",'App\Http\Controllers\Agency\AtulayanelemController@index')->name('atulayanelem.index');
    Route::get("/Evacuation/atulayanelem/create",'App\Http\Controllers\Agency\AtulayanelemController@create')->name('atulayanelem.create');
    Route::post("/Evacuation/atulayanelem",'App\Http\Controllers\Agency\AtulayanelemController@store')->name('atulayanelem.store');
    Route::get("/Evacuation/atulayanelem/{item}/edit",'App\Http\Controllers\Agency\AtulayanelemController@edit')->name('atulayanelem.edit');
    Route::patch("/Evacuation/atulayanelem/{item}",'App\Http\Controllers\Agency\AtulayanelemController@update')->name('atulayanelem.update');
    Route::delete("/Evacuation/atulayanelem/{item}",'App\Http\Controllers\Agency\AtulayanelemController@archive')->name('atulayanelem.archive');
    Route::get("/Evacuation/atulayanelem/archive",'App\Http\Controllers\Agency\AtulayanelemController@archiveview')->name('atulayanelem.archive');
    Route::post("/Evacuation/atulayanelem/restore/{item}",'App\Http\Controllers\Agency\AtulayanelemController@restore')->name('atulayanelem.restore');
    Route::delete("/Evacuation/atulayanelem/forceDelete/{item}",'App\Http\Controllers\Agency\AtulayanelemController@forceDelete')->name('atulayanelem.forceDelete');

    Route::get("/Evacuation/atulayannhall",'App\Http\Controllers\Agency\AtulayannhallController@index')->name('atulayannhall.index');
    Route::get("/Evacuation/atulayannhall/create",'App\Http\Controllers\Agency\AtulayannhallController@create')->name('atulayannhall.create');
    Route::post("/Evacuation/atulayannhall",'App\Http\Controllers\Agency\AtulayannhallController@store')->name('atulayannhall.store');
    Route::get("/Evacuation/atulayannhall/{item}/edit",'App\Http\Controllers\Agency\AtulayannhallController@edit')->name('atulayannhall.edit');
    Route::patch("/Evacuation/atulayannhall/{item}",'App\Http\Controllers\Agency\AtulayannhallController@update')->name('atulayannhall.update');
    Route::delete("/Evacuation/atulayannhall/{item}",'App\Http\Controllers\Agency\AtulayannhallController@archive')->name('atulayannhall.archive');
    Route::get("/Evacuation/atulayannhall/archive",'App\Http\Controllers\Agency\AtulayannhallController@archiveview')->name('atulayannhall.archive');
    Route::post("/Evacuation/atulayannhall/restore/{item}",'App\Http\Controllers\Agency\AtulayannhallController@restore')->name('atulayannhall.restore');
    Route::delete("/Evacuation/atulayannhall/forceDelete/{item}",'App\Http\Controllers\Agency\AtulayannhallController@forceDelete')->name('atulayannhall.forceDelete');

    Route::get("/Evacuation/atulayanshall",'App\Http\Controllers\Agency\AtulayanshallController@index')->name('atulayanshall.index');
    Route::get("/Evacuation/atulayanshall/create",'App\Http\Controllers\Agency\AtulayanshallController@create')->name('atulayanshall.create');
    Route::post("/Evacuation/atulayanshall",'App\Http\Controllers\Agency\AtulayanshallController@store')->name('atulayanshall.store');
    Route::get("/Evacuation/atulayanshall/{item}/edit",'App\Http\Controllers\Agency\AtulayanshallController@edit')->name('atulayanshall.edit');
    Route::patch("/Evacuation/atulayanshall/{item}",'App\Http\Controllers\Agency\AtulayanshallController@update')->name('atulayanshall.update');
    Route::delete("/Evacuation/atulayanshall/{item}",'App\Http\Controllers\Agency\AtulayanshallController@archive')->name('atulayanshall.archive');
    Route::get("/Evacuation/atulayanshall/archive",'App\Http\Controllers\Agency\AtulayanshallController@archiveview')->name('atulayanshall.archive');
    Route::post("/Evacuation/atulayanshall/restore/{item}",'App\Http\Controllers\Agency\AtulayanshallController@restore')->name('atulayanshall.restore');
    Route::delete("/Evacuation/atulayanshall/forceDelete/{item}",'App\Http\Controllers\Agency\AtulayanshallController@forceDelete')->name('atulayanshall.forceDelete');

    Route::get("/Evacuation/bagay",'App\Http\Controllers\Agency\BagayController@index')->name('bagay.index');
    Route::get("/Evacuation/bagay/create",'App\Http\Controllers\Agency\BagayController@create')->name('bagay.create');
    Route::post("/Evacuation/bagay",'App\Http\Controllers\Agency\BagayController@store')->name('bagay.store');
    Route::get("/Evacuation/bagay/{item}/edit",'App\Http\Controllers\Agency\BagayController@edit')->name('bagay.edit');
    Route::patch("/Evacuation/bagay/{item}",'App\Http\Controllers\Agency\BagayController@update')->name('bagay.update');
    Route::delete("/Evacuation/bagay/{item}",'App\Http\Controllers\Agency\BagayController@archive')->name('bagay.archive');
    Route::get("/Evacuation/bagay/archive",'App\Http\Controllers\Agency\BagayController@archiveview')->name('bagay.archive');
    Route::post("/Evacuation/bagay/restore/{item}",'App\Http\Controllers\Agency\BagayController@restore')->name('bagay.restore');
    Route::delete("/Evacuation/bagay/forceDelete/{item}",'App\Http\Controllers\Agency\BagayController@forceDelete')->name('bagay.forceDelete');

    Route::get("/Evacuation/balzainehall",'App\Http\Controllers\Agency\BalzainehallController@index')->name('balzainehall.index');
    Route::get("/Evacuation/balzainehall/create",'App\Http\Controllers\Agency\BalzainehallController@create')->name('balzainehall.create');
    Route::post("/Evacuation/balzainehall",'App\Http\Controllers\Agency\BalzainehallController@store')->name('balzainehall.store');
    Route::get("/Evacuation/balzainehall/{item}/edit",'App\Http\Controllers\Agency\BalzainehallController@edit')->name('balzainehall.edit');
    Route::patch("/Evacuation/balzainehall/{item}",'App\Http\Controllers\Agency\BalzainehallController@update')->name('balzainehall.update');
    Route::delete("/Evacuation/balzainehall/{item}",'App\Http\Controllers\Agency\BalzainehallController@archive')->name('balzainehall.archive');
    Route::get("/Evacuation/balzainehall/archive",'App\Http\Controllers\Agency\BalzainehallController@archiveview')->name('balzainehall.archive');
    Route::post("/Evacuation/balzainehall/restore/{item}",'App\Http\Controllers\Agency\BalzainehallController@restore')->name('balzainehall.restore');
    Route::delete("/Evacuation/balzainehall/forceDelete/{item}",'App\Http\Controllers\Agency\BalzainehallController@forceDelete')->name('balzainehall.forceDelete');

    Route::get("/Evacuation/balzainelem",'App\Http\Controllers\Agency\BalzainelemController@index')->name('balzainelem.index');
    Route::get("/Evacuation/balzainelem/create",'App\Http\Controllers\Agency\BalzainelemController@create')->name('balzainelem.create');
    Route::post("/Evacuation/balzainelem",'App\Http\Controllers\Agency\BalzainelemController@store')->name('balzainelem.store');
    Route::get("/Evacuation/balzainelem/{item}/edit",'App\Http\Controllers\Agency\BalzainelemController@edit')->name('balzainelem.edit');
    Route::patch("/Evacuation/balzainelem/{item}",'App\Http\Controllers\Agency\BalzainelemController@update')->name('balzainelem.update');
    Route::delete("/Evacuation/balzainelem/{item}",'App\Http\Controllers\Agency\BalzainelemController@archive')->name('balzainelem.archive');
    Route::get("/Evacuation/balzainelem/archive",'App\Http\Controllers\Agency\BalzainelemController@archiveview')->name('balzainelem.archive');
    Route::post("/Evacuation/balzainelem/restore/{item}",'App\Http\Controllers\Agency\BalzainelemController@restore')->name('balzainelem.restore');
    Route::delete("/Evacuation/balzainelem/forceDelete/{item}",'App\Http\Controllers\Agency\BalzainelemController@forceDelete')->name('balzainelem.forceDelete');

    Route::get("/Evacuation/balzainwhall",'App\Http\Controllers\Agency\BalzainwhallController@index')->name('balzainwhall.index');
    Route::get("/Evacuation/balzainwhall/create",'App\Http\Controllers\Agency\BalzainwhallController@create')->name('balzainwhall.create');
    Route::post("/Evacuation/balzainwhall",'App\Http\Controllers\Agency\BalzainwhallController@store')->name('balzainwhall.store');
    Route::get("/Evacuation/balzainwhall/{item}/edit",'App\Http\Controllers\Agency\BalzainwhallController@edit')->name('balzainwhall.edit');
    Route::patch("/Evacuation/balzainwhall/{item}",'App\Http\Controllers\Agency\BalzainwhallController@update')->name('balzainwhall.update');
    Route::delete("/Evacuation/balzainwhall/{item}",'App\Http\Controllers\Agency\BalzainwhallController@archive')->name('balzainwhall.archive');
    Route::get("/Evacuation/balzainwhall/archive",'App\Http\Controllers\Agency\BalzainwhallController@archiveview')->name('balzainwhall.archive');
    Route::post("/Evacuation/balzainwhall/restore/{item}",'App\Http\Controllers\Agency\BalzainwhallController@restore')->name('balzainwhall.restore');
    Route::delete("/Evacuation/balzainwhall/forceDelete/{item}",'App\Http\Controllers\Agency\BalzainwhallController@forceDelete')->name('balzainwhall.forceDelete');

    Route::get("/Evacuation/buntunmulti",'App\Http\Controllers\Agency\BuntunmultiController@index')->name('buntunmulti.index');
    Route::get("/Evacuation/buntunmulti/create",'App\Http\Controllers\Agency\BuntunmultiController@create')->name('buntunmulti.create');
    Route::post("/Evacuation/buntunmulti",'App\Http\Controllers\Agency\BuntunmultiController@store')->name('buntunmulti.store');
    Route::get("/Evacuation/buntunmulti/{item}/edit",'App\Http\Controllers\Agency\BuntunmultiController@edit')->name('buntunmulti.edit');
    Route::patch("/Evacuation/buntunmulti/{item}",'App\Http\Controllers\Agency\BuntunmultiController@update')->name('buntunmulti.update');
    Route::delete("/Evacuation/buntunmulti/{item}",'App\Http\Controllers\Agency\BuntunmultiController@archive')->name('buntunmulti.archive');
    Route::get("/Evacuation/buntunmulti/archive",'App\Http\Controllers\Agency\BuntunmultiController@archiveview')->name('buntunmulti.archive');
    Route::post("/Evacuation/buntunmulti/restore/{item}",'App\Http\Controllers\Agency\BuntunmultiController@restore')->name('buntunmulti.restore');
    Route::delete("/Evacuation/buntunmulti/forceDelete/{item}",'App\Http\Controllers\Agency\BuntunmultiController@forceDelete')->name('buntunmulti.forceDelete');

    Route::get("/Evacuation/capatanmulti",'App\Http\Controllers\Agency\CapatanmultiController@index')->name('capatanmulti.index');
    Route::get("/Evacuation/capatanmulti/create",'App\Http\Controllers\Agency\CapatanmultiController@create')->name('capatanmulti.create');
    Route::post("/Evacuation/capatanmulti",'App\Http\Controllers\Agency\CapatanmultiController@store')->name('capatanmulti.store');
    Route::get("/Evacuation/capatanmulti/{item}/edit",'App\Http\Controllers\Agency\CapatanmultiController@edit')->name('capatanmulti.edit');
    Route::patch("/Evacuation/capatanmulti/{item}",'App\Http\Controllers\Agency\CapatanmultiController@update')->name('capatanmulti.update');
    Route::delete("/Evacuation/capatanmulti/{item}",'App\Http\Controllers\Agency\CapatanmultiController@archive')->name('capatanmulti.archive');
    Route::get("/Evacuation/capatanmulti/archive",'App\Http\Controllers\Agency\CapatanmultiController@archiveview')->name('capatanmulti.archive');
    Route::post("/Evacuation/capatanmulti/restore/{item}",'App\Http\Controllers\Agency\CapatanmultiController@restore')->name('capatanmulti.restore');
    Route::delete("/Evacuation/capatanmulti/forceDelete/{item}",'App\Http\Controllers\Agency\CapatanmultiController@forceDelete')->name('capatanmulti.forceDelete');

    Route::get("/Evacuation/cataggamanelem",'App\Http\Controllers\Agency\CataggamanelemController@index')->name('cataggamanelem.index');
    Route::get("/Evacuation/cataggamanelem/create",'App\Http\Controllers\Agency\CataggamanelemController@create')->name('cataggamanelem.create');
    Route::post("/Evacuation/cataggamanelem",'App\Http\Controllers\Agency\CataggamanelemController@store')->name('cataggamanelem.store');
    Route::get("/Evacuation/cataggamanelem/{item}/edit",'App\Http\Controllers\Agency\CataggamanelemController@edit')->name('cataggamanelem.edit');
    Route::patch("/Evacuation/cataggamanelem/{item}",'App\Http\Controllers\Agency\CataggamanelemController@update')->name('cataggamanelem.update');
    Route::delete("/Evacuation/cataggamanelem/{item}",'App\Http\Controllers\Agency\CataggamanelemController@archive')->name('cataggamanelem.archive');
    Route::get("/Evacuation/cataggamanelem/archive",'App\Http\Controllers\Agency\CataggamanelemController@archiveview')->name('cataggamanelem.archive');
    Route::post("/Evacuation/cataggamanelem/restore/{item}",'App\Http\Controllers\Agency\CataggamanelemController@restore')->name('cataggamanelem.restore');
    Route::delete("/Evacuation/cataggamanelem/forceDelete/{item}",'App\Http\Controllers\Agency\CataggamanelemController@forceDelete')->name('cataggamanelem.forceDelete');

    Route::get("/Evacuation/cataggamannuevo",'App\Http\Controllers\Agency\CataggamannuevoController@index')->name('cataggamannuevo.index');
    Route::get("/Evacuation/cataggamannuevo/create",'App\Http\Controllers\Agency\CataggamannuevoController@create')->name('cataggamannuevo.create');
    Route::post("/Evacuation/cataggamannuevo",'App\Http\Controllers\Agency\CataggamannuevoController@store')->name('cataggamannuevo.store');
    Route::get("/Evacuation/cataggamannuevo/{item}/edit",'App\Http\Controllers\Agency\CataggamannuevoController@edit')->name('cataggamannuevo.edit');
    Route::patch("/Evacuation/cataggamannuevo/{item}",'App\Http\Controllers\Agency\CataggamannuevoController@update')->name('cataggamannuevo.update');
    Route::delete("/Evacuation/cataggamannuevo/{item}",'App\Http\Controllers\Agency\CataggamannuevoController@archive')->name('cataggamannuevo.archive');
    Route::get("/Evacuation/cataggamannuevo/archive",'App\Http\Controllers\Agency\CataggamannuevoController@archiveview')->name('cataggamannuevo.archive');
    Route::post("/Evacuation/cataggamannuevo/restore/{item}",'App\Http\Controllers\Agency\CataggamannuevoController@restore')->name('cataggamannuevo.restore');
    Route::delete("/Evacuation/cataggamannuevo/forceDelete/{item}",'App\Http\Controllers\Agency\CataggamannuevoController@forceDelete')->name('cataggamannuevo.forceDelete');

    Route::get("/Evacuation/cataggamanpardo",'App\Http\Controllers\Agency\CataggamanpardoController@index')->name('cataggamanpardo.index');
    Route::get("/Evacuation/cataggamanpardo/create",'App\Http\Controllers\Agency\CataggamanpardoController@create')->name('cataggamanpardo.create');
    Route::post("/Evacuation/cataggamanpardo",'App\Http\Controllers\Agency\CataggamanpardoController@store')->name('cataggamanpardo.store');
    Route::get("/Evacuation/cataggamanpardo/{item}/edit",'App\Http\Controllers\Agency\CataggamanpardoController@edit')->name('cataggamanpardo.edit');
    Route::patch("/Evacuation/cataggamanpardo/{item}",'App\Http\Controllers\Agency\CataggamanpardoController@update')->name('cataggamanpardo.update');
    Route::delete("/Evacuation/cataggamanpardo/{item}",'App\Http\Controllers\Agency\CataggamanpardoController@archive')->name('cataggamanpardo.archive');
    Route::get("/Evacuation/cataggamanpardo/archive",'App\Http\Controllers\Agency\CataggamanpardoController@archiveview')->name('cataggamanpardo.archive');
    Route::post("/Evacuation/cataggamanpardo/restore/{item}",'App\Http\Controllers\Agency\CataggamanpardoController@restore')->name('cataggamanpardo.restore');
    Route::delete("/Evacuation/cataggamanpardo/forceDelete/{item}",'App\Http\Controllers\Agency\CataggamanpardoController@forceDelete')->name('cataggamanpardo.forceDelete');

    Route::get("/Evacuation/cataggamanviejo",'App\Http\Controllers\Agency\CataggamanviejoController@index')->name('cataggamanviejo.index');
    Route::get("/Evacuation/cataggamanviejo/create",'App\Http\Controllers\Agency\CataggamanviejoController@create')->name('cataggamanviejo.create');
    Route::post("/Evacuation/cataggamanviejo",'App\Http\Controllers\Agency\CataggamanviejoController@store')->name('cataggamanviejo.store');
    Route::get("/Evacuation/cataggamanviejo/{item}/edit",'App\Http\Controllers\Agency\CataggamanviejoController@edit')->name('cataggamanviejo.edit');
    Route::patch("/Evacuation/cataggamanviejo/{item}",'App\Http\Controllers\Agency\CataggamanviejoController@update')->name('cataggamanviejo.update');
    Route::delete("/Evacuation/cataggamanviejo/{item}",'App\Http\Controllers\Agency\CataggamanviejoController@archive')->name('cataggamanviejo.archive');
    Route::get("/Evacuation/cataggamanviejo/archive",'App\Http\Controllers\Agency\CataggamanviejoController@archiveview')->name('cataggamanviejo.archive');
    Route::post("/Evacuation/cataggamanviejo/restore/{item}",'App\Http\Controllers\Agency\CataggamanviejoController@restore')->name('cataggamanviejo.restore');
    Route::delete("/Evacuation/cataggamanviejo/forceDelete/{item}",'App\Http\Controllers\Agency\CataggamanviejoController@forceDelete')->name('cataggamanviejo.forceDelete');

    Route::get("/Evacuation/centro01",'App\Http\Controllers\Agency\Centro01Controller@index')->name('centro01.index');
    Route::get("/Evacuation/centro01/create",'App\Http\Controllers\Agency\Centro01Controller@create')->name('centro01.create');
    Route::post("/Evacuation/centro01",'App\Http\Controllers\Agency\Centro01Controller@store')->name('centro01.store');
    Route::get("/Evacuation/centro01/{item}/edit",'App\Http\Controllers\Agency\Centro01Controller@edit')->name('centro01.edit');
    Route::patch("/Evacuation/centro01/{item}",'App\Http\Controllers\Agency\Centro01Controller@update')->name('centro01.update');
    Route::delete("/Evacuation/centro01/{item}",'App\Http\Controllers\Agency\Centro01Controller@archive')->name('centro01.archive');
    Route::get("/Evacuation/centro01/archive",'App\Http\Controllers\Agency\Centro01Controller@archiveview')->name('centro01.archive');
    Route::post("/Evacuation/centro01/restore/{item}",'App\Http\Controllers\Agency\Centro01Controller@restore')->name('centro01.restore');
    Route::delete("/Evacuation/centro01/forceDelete/{item}",'App\Http\Controllers\Agency\Centro01Controller@forceDelete')->name('centro01.forceDelete');

    Route::get("/Evacuation/centro09",'App\Http\Controllers\Agency\Centro09Controller@index')->name('centro09.index');
    Route::get("/Evacuation/centro09/create",'App\Http\Controllers\Agency\Centro09Controller@create')->name('centro09.create');
    Route::post("/Evacuation/centro09",'App\Http\Controllers\Agency\Centro09Controller@store')->name('centro09.store');
    Route::get("/Evacuation/centro09/{item}/edit",'App\Http\Controllers\Agency\Centro09Controller@edit')->name('centro09.edit');
    Route::patch("/Evacuation/centro09/{item}",'App\Http\Controllers\Agency\Centro09Controller@update')->name('centro09.update');
    Route::delete("/Evacuation/centro09/{item}",'App\Http\Controllers\Agency\Centro09Controller@archive')->name('centro09.archive');
    Route::get("/Evacuation/centro09/archive",'App\Http\Controllers\Agency\Centro09Controller@archiveview')->name('centro09.archive');
    Route::post("/Evacuation/centro09/restore/{item}",'App\Http\Controllers\Agency\Centro09Controller@restore')->name('centro09.restore');
    Route::delete("/Evacuation/centro09/forceDelete/{item}",'App\Http\Controllers\Agency\Centro09Controller@forceDelete')->name('centro09.forceDelete');
   
    Route::get("/Evacuation/centro10",'App\Http\Controllers\Agency\Centro10Controller@index')->name('centro10.index');
    Route::get("/Evacuation/centro10/create",'App\Http\Controllers\Agency\Centro10Controller@create')->name('centro10.create');
    Route::post("/Evacuation/centro10",'App\Http\Controllers\Agency\Centro10Controller@store')->name('centro10.store');
    Route::get("/Evacuation/centro10/{item}/edit",'App\Http\Controllers\Agency\Centro10Controller@edit')->name('centro10.edit');
    Route::patch("/Evacuation/centro10/{item}",'App\Http\Controllers\Agency\Centro10Controller@update')->name('centro10.update');
    Route::delete("/Evacuation/centro10/{item}",'App\Http\Controllers\Agency\Centro10Controller@archive')->name('centro10.archive');
    Route::get("/Evacuation/centro10/archive",'App\Http\Controllers\Agency\Centro10Controller@archiveview')->name('centro10.archive');
    Route::post("/Evacuation/centro10/restore/{item}",'App\Http\Controllers\Agency\Centro10Controller@restore')->name('centro10.restore');
    Route::delete("/Evacuation/centro10/forceDelete/{item}",'App\Http\Controllers\Agency\Centro10Controller@forceDelete')->name('centro10.forceDelete');

    Route::get("/Evacuation/gosischool",'App\Http\Controllers\Agency\GosischoolController@index')->name('gosischool.index');
    Route::get("/Evacuation/gosischool/create",'App\Http\Controllers\Agency\GosischoolController@create')->name('gosischool.create');
    Route::post("/Evacuation/gosischool",'App\Http\Controllers\Agency\GosischoolController@store')->name('gosischool.store');
    Route::get("/Evacuation/gosischool/{item}/edit",'App\Http\Controllers\Agency\GosischoolController@edit')->name('gosischool.edit');
    Route::patch("/Evacuation/gosischool/{item}",'App\Http\Controllers\Agency\GosischoolController@update')->name('gosischool.update');
    Route::delete("/Evacuation/gosischool/{item}",'App\Http\Controllers\Agency\GosischoolController@archive')->name('gosischool.archive');
    Route::get("/Evacuation/gosischool/archive",'App\Http\Controllers\Agency\GosischoolController@archiveview')->name('gosischool.archive');
    Route::post("/Evacuation/gosischool/restore/{item}",'App\Http\Controllers\Agency\GosischoolController@restore')->name('gosischool.restore');
    Route::delete("/Evacuation/gosischool/forceDelete/{item}",'App\Http\Controllers\Agency\GosischoolController@forceDelete')->name('gosischool.forceDelete');

    Route::get("/Evacuation/gosinhall",'App\Http\Controllers\Agency\GosinhallController@index')->name('gosinhall.index');
    Route::get("/Evacuation/gosinhall/create",'App\Http\Controllers\Agency\GosinhallController@create')->name('gosinhall.create');
    Route::post("/Evacuation/gosinhall",'App\Http\Controllers\Agency\GosinhallController@store')->name('gosinhall.store');
    Route::get("/Evacuation/gosinhall/{item}/edit",'App\Http\Controllers\Agency\GosinhallController@edit')->name('gosinhall.edit');
    Route::patch("/Evacuation/gosinhall/{item}",'App\Http\Controllers\Agency\GosinhallController@update')->name('gosinhall.update');
    Route::delete("/Evacuation/gosinhall/{item}",'App\Http\Controllers\Agency\GosinhallController@archive')->name('gosinhall.archive');
    Route::get("/Evacuation/gosinhall/archive",'App\Http\Controllers\Agency\GosinhallController@archiveview')->name('gosinhall.archive');
    Route::post("/Evacuation/gosinhall/restore/{item}",'App\Http\Controllers\Agency\GosinhallController@restore')->name('gosinhall.restore');
    Route::delete("/Evacuation/gosinhall/forceDelete/{item}",'App\Http\Controllers\Agency\GosinhallController@forceDelete')->name('gosinhall.forceDelete');

    Route::get("/Evacuation/gosishall",'App\Http\Controllers\Agency\GosishallController@index')->name('gosishall.index');
    Route::get("/Evacuation/gosishall/create",'App\Http\Controllers\Agency\GosishallController@create')->name('gosishall.create');
    Route::post("/Evacuation/gosishall",'App\Http\Controllers\Agency\GosishallController@store')->name('gosishall.store');
    Route::get("/Evacuation/gosishall/{item}/edit",'App\Http\Controllers\Agency\GosishallController@edit')->name('gosishall.edit');
    Route::patch("/Evacuation/gosishall/{item}",'App\Http\Controllers\Agency\GosishallController@update')->name('gosishall.update');
    Route::delete("/Evacuation/gosishall/{item}",'App\Http\Controllers\Agency\GosishallController@archive')->name('gosishall.archive');
    Route::get("/Evacuation/gosishall/archive",'App\Http\Controllers\Agency\GosishallController@archiveview')->name('gosishall.archive');
    Route::post("/Evacuation/gosishall/restore/{item}",'App\Http\Controllers\Agency\GosishallController@restore')->name('gosishall.restore');
    Route::delete("/Evacuation/gosishall/forceDelete/{item}",'App\Http\Controllers\Agency\GosishallController@forceDelete')->name('gosishall.forceDelete');

    Route::get("/Evacuation/larionhall",'App\Http\Controllers\Agency\LarionhallController@index')->name('larionhall.index');
    Route::get("/Evacuation/larionhall/create",'App\Http\Controllers\Agency\LarionhallController@create')->name('larionhall.create');
    Route::post("/Evacuation/larionhall",'App\Http\Controllers\Agency\LarionhallController@store')->name('larionhall.store');
    Route::get("/Evacuation/larionhall/{item}/edit",'App\Http\Controllers\Agency\LarionhallController@edit')->name('larionhall.edit');
    Route::patch("/Evacuation/larionhall/{item}",'App\Http\Controllers\Agency\LarionhallController@update')->name('larionhall.update');
    Route::delete("/Evacuation/larionhall/{item}",'App\Http\Controllers\Agency\LarionhallController@archive')->name('larionhall.archive');
    Route::get("/Evacuation/larionhall/archive",'App\Http\Controllers\Agency\LarionhallController@archiveview')->name('larionhall.archive');
    Route::post("/Evacuation/larionhall/restore/{item}",'App\Http\Controllers\Agency\LarionhallController@restore')->name('gosishall.restore');
    Route::delete("/Evacuation/larionhall/forceDelete/{item}",'App\Http\Controllers\Agency\LarionhallController@forceDelete')->name('larionhall.forceDelete');

    Route::get("/Evacuation/larionelem",'App\Http\Controllers\Agency\LarionelemController@index')->name('larionelem.index');
    Route::get("/Evacuation/larionelem/create",'App\Http\Controllers\Agency\LarionelemController@create')->name('larionelem.create');
    Route::post("/Evacuation/larionelem",'App\Http\Controllers\Agency\LarionelemController@store')->name('larionelem.store');
    Route::get("/Evacuation/larionelem/{item}/edit",'App\Http\Controllers\Agency\LarionelemController@edit')->name('larionelem.edit');
    Route::patch("/Evacuation/larionelem/{item}",'App\Http\Controllers\Agency\LarionelemController@update')->name('larionelem.update');
    Route::delete("/Evacuation/larionelem/{item}",'App\Http\Controllers\Agency\LarionelemController@archive')->name('larionelem.archive');
    Route::get("/Evacuation/larionelem/archive",'App\Http\Controllers\Agency\LarionelemController@archiveview')->name('larionelem.archive');
    Route::post("/Evacuation/larionelem/restore/{item}",'App\Http\Controllers\Agency\LarionelemController@restore')->name('larionelem.restore');
    Route::delete("/Evacuation/larionelem/forceDelete/{item}",'App\Http\Controllers\Agency\LarionelemController@forceDelete')->name('larionelem.forceDelete');

    Route::get("/Evacuation/libagnorte",'App\Http\Controllers\Agency\LibagnorteController@index')->name('libagnorte.index');
    Route::get("/Evacuation/libagnorte/create",'App\Http\Controllers\Agency\LibagnorteController@create')->name('libagnorte.create');
    Route::post("/Evacuation/libagnorte",'App\Http\Controllers\Agency\LibagnorteController@store')->name('libagnorte.store');
    Route::get("/Evacuation/libagnorte/{item}/edit",'App\Http\Controllers\Agency\LibagnorteController@edit')->name('libagnorte.edit');
    Route::patch("/Evacuation/libagnorte/{item}",'App\Http\Controllers\Agency\LibagnorteController@update')->name('libagnorte.update');
    Route::delete("/Evacuation/libagnorte/{item}",'App\Http\Controllers\Agency\LibagnorteController@archive')->name('libagnorte.archive');
    Route::get("/Evacuation/libagnorte/archive",'App\Http\Controllers\Agency\LibagnorteController@archiveview')->name('libagnorte.archive');
    Route::post("/Evacuation/libagnorte/restore/{item}",'App\Http\Controllers\Agency\LibagnorteController@restore')->name('libagnorte.restore');
    Route::delete("/Evacuation/libagnorte/forceDelete/{item}",'App\Http\Controllers\Agency\LibagnorteController@forceDelete')->name('libagnorte.forceDelete');

    Route::get("/Evacuation/libagsur",'App\Http\Controllers\Agency\LibagsurController@index')->name('libagsur.index');
    Route::get("/Evacuation/libagsur/create",'App\Http\Controllers\Agency\LibagsurController@create')->name('libagsur.create');
    Route::post("/Evacuation/libagsur",'App\Http\Controllers\Agency\LibagsurController@store')->name('libagsur.store');
    Route::get("/Evacuation/libagsur/{item}/edit",'App\Http\Controllers\Agency\LibagsurController@edit')->name('libagsur.edit');
    Route::patch("/Evacuation/libagsur/{item}",'App\Http\Controllers\Agency\LibagsurController@update')->name('libagsur.update');
    Route::delete("/Evacuation/libagsur/{item}",'App\Http\Controllers\Agency\LibagsurController@archive')->name('libagsur.archive');
    Route::get("/Evacuation/libagsur/archive",'App\Http\Controllers\Agency\LibagsurController@archiveview')->name('libagsur.archive');
    Route::post("/Evacuation/libagsur/restore/{item}",'App\Http\Controllers\Agency\LibagsurController@restore')->name('libagsur.restore');
    Route::delete("/Evacuation/libagsur/forceDelete/{item}",'App\Http\Controllers\Agency\LibagsurController@forceDelete')->name('libagsur.forceDelete');

    Route::get("/Evacuation/namabbalannorte",'App\Http\Controllers\Agency\NamabbalannorteController@index')->name('namabbalannorte.index');
    Route::get("/Evacuation/namabbalannorte/create",'App\Http\Controllers\Agency\NamabbalannorteController@create')->name('namabbalannorte.create');
    Route::post("/Evacuation/namabbalannorte",'App\Http\Controllers\Agency\NamabbalannorteController@store')->name('namabbalannorte.store');
    Route::get("/Evacuation/namabbalannorte/{item}/edit",'App\Http\Controllers\Agency\NamabbalannorteController@edit')->name('namabbalannorte.edit');
    Route::patch("/Evacuation/namabbalannorte/{item}",'App\Http\Controllers\Agency\NamabbalannorteController@update')->name('namabbalannorte.update');
    Route::delete("/Evacuation/namabbalannorte/{item}",'App\Http\Controllers\Agency\NamabbalannorteController@archive')->name('namabbalannorte.archive');
    Route::get("/Evacuation/namabbalannorte/archive",'App\Http\Controllers\Agency\NamabbalannorteController@archiveview')->name('namabbalannorte.archive');
    Route::post("/Evacuation/namabbalannorte/restore/{item}",'App\Http\Controllers\Agency\NamabbalannorteController@restore')->name('namabbalannorte.restore');
    Route::delete("/Evacuation/namabbalannorte/forceDelete/{item}",'App\Http\Controllers\Agency\NamabbalannorteController@forceDelete')->name('namabbalannorte.forceDelete');

    Route::get("/Evacuation/namabbalansur",'App\Http\Controllers\Agency\NamabbalansurController@index')->name('namabbalansur.index');
    Route::get("/Evacuation/namabbalansur/create",'App\Http\Controllers\Agency\NamabbalansurController@create')->name('namabbalansur.create');
    Route::post("/Evacuation/namabbalansur",'App\Http\Controllers\Agency\NamabbalansurController@store')->name('namabbalansur.store');
    Route::get("/Evacuation/namabbalansur/{item}/edit",'App\Http\Controllers\Agency\NamabbalansurController@edit')->name('namabbalansur.edit');
    Route::patch("/Evacuation/namabbalansur/{item}",'App\Http\Controllers\Agency\NamabbalansurController@update')->name('namabbalansur.update');
    Route::delete("/Evacuation/namabbalansur/{item}",'App\Http\Controllers\Agency\NamabbalansurController@archive')->name('namabbalansur.archive');
    Route::get("/Evacuation/namabbalansur/archive",'App\Http\Controllers\Agency\NamabbalansurController@archiveview')->name('namabbalansur.archive');
    Route::post("/Evacuation/namabbalansur/restore/{item}",'App\Http\Controllers\Agency\NamabbalansurController@restore')->name('namabbalansur.restore');
    Route::delete("/Evacuation/namabbalansur/forceDelete/{item}",'App\Http\Controllers\Agency\NamabbalansurController@forceDelete')->name('namabbalansur.forceDelete');

    Route::get("/Evacuation/sangab",'App\Http\Controllers\Agency\SangabController@index')->name('sangab.index');
    Route::get("/Evacuation/sangab/create",'App\Http\Controllers\Agency\SangabController@create')->name('sangab.create');
    Route::post("/Evacuation/sangab",'App\Http\Controllers\Agency\SangabController@store')->name('sangab.store');
    Route::get("/Evacuation/sangab/{item}/edit",'App\Http\Controllers\Agency\SangabController@edit')->name('sangab.edit');
    Route::patch("/Evacuation/sangab/{item}",'App\Http\Controllers\Agency\SangabController@update')->name('sangab.update');
    Route::delete("/Evacuation/sangab/{item}",'App\Http\Controllers\Agency\SangabController@archive')->name('sangab.archive');
    Route::get("/Evacuation/sangab/archive",'App\Http\Controllers\Agency\SangabController@archiveview')->name('sangab.archive');
    Route::post("/Evacuation/sangab/restore/{item}",'App\Http\Controllers\Agency\SangabController@restore')->name('sangab.restore');
    Route::delete("/Evacuation/sangab/forceDelete/{item}",'App\Http\Controllers\Agency\SangabController@forceDelete')->name('sangab.forceDelete');

    Route::get("/Evacuation/taggadaddaelem",'App\Http\Controllers\Agency\TaggadaddaelemController@index')->name('taggadaddaelem.index');
    Route::get("/Evacuation/taggadaddaelem/create",'App\Http\Controllers\Agency\TaggadaddaelemController@create')->name('taggadaddaelem.create');
    Route::post("/Evacuation/taggadaddaelem",'App\Http\Controllers\Agency\TaggadaddaelemController@store')->name('taggadaddaelem.store');
    Route::get("/Evacuation/taggadaddaelem/{item}/edit",'App\Http\Controllers\Agency\TaggadaddaelemController@edit')->name('taggadaddaelem.edit');
    Route::patch("/Evacuation/taggadaddaelem/{item}",'App\Http\Controllers\Agency\TaggadaddaelemController@update')->name('taggadaddaelem.update');
    Route::delete("/Evacuation/taggadaddaelem/{item}",'App\Http\Controllers\Agency\TaggadaddaelemController@archive')->name('taggadaddaelem.archive');
    Route::get("/Evacuation/taggadaddaelem/archive",'App\Http\Controllers\Agency\TaggadaddaelemController@archiveview')->name('taggadaddaelem.archive');
    Route::post("/Evacuation/taggadaddaelem/restore/{item}",'App\Http\Controllers\Agency\TaggadaddaelemController@restore')->name('taggadaddaelem.restore');
    Route::delete("/Evacuation/taggadaddaelem/forceDelete/{item}",'App\Http\Controllers\Agency\TaggadaddaelemController@forceDelete')->name('taggadaddaelem.forceDelete');

    Route::get("/Evacuation/taggahall",'App\Http\Controllers\Agency\TaggahallController@index')->name('taggahall.index');
    Route::get("/Evacuation/taggahall/create",'App\Http\Controllers\Agency\TaggahallController@create')->name('taggahall.create');
    Route::post("/Evacuation/taggahall",'App\Http\Controllers\Agency\TaggahallController@store')->name('taggahall.store');
    Route::get("/Evacuation/taggahall/{item}/edit",'App\Http\Controllers\Agency\TaggahallController@edit')->name('taggahall.edit');
    Route::patch("/Evacuation/taggahall/{item}",'App\Http\Controllers\Agency\TaggahallController@update')->name('taggahall.update');
    Route::delete("/Evacuation/taggahall/{item}",'App\Http\Controllers\Agency\TaggahallController@archive')->name('taggahall.archive');
    Route::get("/Evacuation/taggahall/archive",'App\Http\Controllers\Agency\TaggahallController@archiveview')->name('taggahall.archive');
    Route::post("/Evacuation/taggahall/restore/{item}",'App\Http\Controllers\Agency\TaggahallController@restore')->name('taggahall.restore');
    Route::delete("/Evacuation/taggahall/forceDelete/{item}",'App\Http\Controllers\Agency\TaggahallController@forceDelete')->name('taggahall.forceDelete');

    Route::get("/Evacuation/tcshs",'App\Http\Controllers\Agency\TcshsController@index')->name('tcshs.index');
    Route::get("/Evacuation/tcshs/create",'App\Http\Controllers\Agency\TcshsController@create')->name('tcshs.create');
    Route::post("/Evacuation/tcshs",'App\Http\Controllers\Agency\TcshsController@store')->name('tcshs.store');
    Route::get("/Evacuation/tcshs/{item}/edit",'App\Http\Controllers\Agency\TcshsController@edit')->name('tcshs.edit');
    Route::patch("/Evacuation/tcshs/{item}",'App\Http\Controllers\Agency\TcshsController@update')->name('tcshs.update');
    Route::delete("/Evacuation/tcshs/{item}",'App\Http\Controllers\Agency\TcshsController@archive')->name('tcshs.archive');
    Route::get("/Evacuation/tcshs/archive",'App\Http\Controllers\Agency\TcshsController@archiveview')->name('tcshs.archive');
    Route::post("/Evacuation/tcshs/restore/{item}",'App\Http\Controllers\Agency\TcshsController@restore')->name('tcshs.restore');
    Route::delete("/Evacuation/tcshs/forceDelete/{item}",'App\Http\Controllers\Agency\TcshsController@forceDelete')->name('tcshs.forceDelete');

    Route::get("/Evacuation/tcpg",'App\Http\Controllers\Agency\TcpgController@index')->name('tcpg.index');
    Route::get("/Evacuation/tcpg/create",'App\Http\Controllers\Agency\TcpgController@create')->name('tcpg.create');
    Route::post("/Evacuation/tcpg",'App\Http\Controllers\Agency\TcpgController@store')->name('tcpg.store');
    Route::get("/Evacuation/tcpg/{item}/edit",'App\Http\Controllers\Agency\TcpgController@edit')->name('tcpg.edit');
    Route::patch("/Evacuation/tcpg/{item}",'App\Http\Controllers\Agency\TcpgController@update')->name('tcpg.update');
    Route::delete("/Evacuation/tcpg/{item}",'App\Http\Controllers\Agency\TcpgController@archive')->name('tcpg.archive');
    Route::get("/Evacuation/tcpg/archive",'App\Http\Controllers\Agency\TcpgController@archiveview')->name('tcpg.archive');
    Route::post("/Evacuation/tcpg/restore/{item}",'App\Http\Controllers\Agency\TcpgController@restore')->name('tcpg.restore');
    Route::delete("/Evacuation/tcpg/forceDelete/{item}",'App\Http\Controllers\Agency\TcpgController@forceDelete')->name('tcpg.forceDelete');

    Route::get("/Evacuation/tecs",'App\Http\Controllers\Agency\TecsController@index')->name('tecs.index');
    Route::get("/Evacuation/tecs/create",'App\Http\Controllers\Agency\TecsController@create')->name('tecs.create');
    Route::post("/Evacuation/tecs",'App\Http\Controllers\Agency\TecsController@store')->name('tecs.store');
    Route::get("/Evacuation/tecs/{item}/edit",'App\Http\Controllers\Agency\TecsController@edit')->name('tecs.edit');
    Route::patch("/Evacuation/tecs/{item}",'App\Http\Controllers\Agency\TecsController@update')->name('tecs.update');
    Route::delete("/Evacuation/tecs/{item}",'App\Http\Controllers\Agency\TecsController@archive')->name('tecs.archive');
    Route::get("/Evacuation/tecs/archive",'App\Http\Controllers\Agency\TecsController@archiveview')->name('tecs.archive');
    Route::post("/Evacuation/tecs/restore/{item}",'App\Http\Controllers\Agency\TecsController@restore')->name('tecs.restore');
    Route::delete("/Evacuation/tecs/forceDelete/{item}",'App\Http\Controllers\Agency\TecsController@forceDelete')->name('tecs.forceDelete');

    Route::get("/Evacuation/tncs",'App\Http\Controllers\Agency\TncsController@index')->name('tncs.index');
    Route::get("/Evacuation/tncs/create",'App\Http\Controllers\Agency\TncsController@create')->name('tncs.create');
    Route::post("/Evacuation/tncs",'App\Http\Controllers\Agency\TncsController@store')->name('tncs.store');
    Route::get("/Evacuation/tncs/{item}/edit",'App\Http\Controllers\Agency\TncsController@edit')->name('tncs.edit');
    Route::patch("/Evacuation/tncs/{item}",'App\Http\Controllers\Agency\TncsController@update')->name('tncs.update');
    Route::delete("/Evacuation/tncs/{item}",'App\Http\Controllers\Agency\TncsController@archive')->name('tncs.archive');
    Route::get("/Evacuation/tncs/archive",'App\Http\Controllers\Agency\TncsController@archiveview')->name('tncs.archive');
    Route::post("/Evacuation/tncs/restore/{item}",'App\Http\Controllers\Agency\TncsController@restore')->name('tncs.restore');
    Route::delete("/Evacuation/tncs/forceDelete/{item}",'App\Http\Controllers\Agency\TncsController@forceDelete')->name('tncs.forceDelete');

    Route::get("/Evacuation/tnecs",'App\Http\Controllers\Agency\TnecsController@index')->name('tnecs.index');
    Route::get("/Evacuation/tnecs/create",'App\Http\Controllers\Agency\TnecsController@create')->name('tnecs.create');
    Route::post("/Evacuation/tnecs",'App\Http\Controllers\Agency\TnecsController@store')->name('tnecs.store');
    Route::get("/Evacuation/tnecs/{item}/edit",'App\Http\Controllers\Agency\TnecsController@edit')->name('tnecs.edit');
    Route::patch("/Evacuation/tnecs/{item}",'App\Http\Controllers\Agency\TnecsController@update')->name('tnecs.update');
    Route::delete("/Evacuation/tnecs/{item}",'App\Http\Controllers\Agency\TnecsController@archive')->name('tnecs.archive');
    Route::get("/Evacuation/tnecs/archive",'App\Http\Controllers\Agency\TnecsController@archiveview')->name('tnecs.archive');
    Route::post("/Evacuation/tnecs/restore/{item}",'App\Http\Controllers\Agency\TnecsController@restore')->name('tnecs.restore');
    Route::delete("/Evacuation/tnecs/forceDelete/{item}",'App\Http\Controllers\Agency\TnecsController@forceDelete')->name('tnecs.forceDelete');

    Route::get("/Evacuation/twcs",'App\Http\Controllers\Agency\TwcsController@index')->name('twcs.index');
    Route::get("/Evacuation/twcs/create",'App\Http\Controllers\Agency\TwcsController@create')->name('twcs.create');
    Route::post("/Evacuation/twcs",'App\Http\Controllers\Agency\TwcsController@store')->name('twcs.store');
    Route::get("/Evacuation/twcs/{item}/edit",'App\Http\Controllers\Agency\TwcsController@edit')->name('twcs.edit');
    Route::patch("/Evacuation/twcs/{item}",'App\Http\Controllers\Agency\TwcsController@update')->name('twcs.update');
    Route::delete("/Evacuation/twcs/{item}",'App\Http\Controllers\Agency\TwcsController@archive')->name('twcs.archive');
    Route::get("/Evacuation/twcs/archive",'App\Http\Controllers\Agency\TwcsController@archiveview')->name('twcs.archive');
    Route::post("/Evacuation/twcs/restore/{item}",'App\Http\Controllers\Agency\TwcsController@restore')->name('twcs.restore');
    Route::delete("/Evacuation/twcs/forceDelete/{item}",'App\Http\Controllers\Agency\TwcsController@forceDelete')->name('twcs.forceDelete');

    Route::get("/Evacuation/ugacnorte",'App\Http\Controllers\Agency\UgacnorteController@index')->name('ugacnorte.index');
    Route::get("/Evacuation/ugacnorte/create",'App\Http\Controllers\Agency\UgacnorteController@create')->name('ugacnorte.create');
    Route::post("/Evacuation/ugacnorte",'App\Http\Controllers\Agency\UgacnorteController@store')->name('ugacnorte.store');
    Route::get("/Evacuation/ugacnorte/{item}/edit",'App\Http\Controllers\Agency\UgacnorteController@edit')->name('ugacnorte.edit');
    Route::patch("/Evacuation/ugacnorte/{item}",'App\Http\Controllers\Agency\UgacnorteController@update')->name('ugacnorte.update');
    Route::delete("/Evacuation/ugacnorte/{item}",'App\Http\Controllers\Agency\UgacnorteController@archive')->name('ugacnorte.archive');
    Route::get("/Evacuation/ugacnorte/archive",'App\Http\Controllers\Agency\UgacnorteController@archiveview')->name('ugacnorte.archive');
    Route::post("/Evacuation/ugacnorte/restore/{item}",'App\Http\Controllers\Agency\UgacnorteController@restore')->name('ugacnorte.restore');
    Route::delete("/Evacuation/ugacnorte/forceDelete/{item}",'App\Http\Controllers\Agency\UgacnorteController@forceDelete')->name('ugacnorte.forceDelete');

    Route::get("/Evacuation/ugacsur",'App\Http\Controllers\Agency\UgacsurController@index')->name('ugacsur.index');
    Route::get("/Evacuation/ugacsur/create",'App\Http\Controllers\Agency\UgacsurController@create')->name('ugacsur.create');
    Route::post("/Evacuation/ugacsur",'App\Http\Controllers\Agency\UgacsurController@store')->name('ugacsur.store');
    Route::get("/Evacuation/ugacsur/{item}/edit",'App\Http\Controllers\Agency\UgacsurController@edit')->name('ugacsur.edit');
    Route::patch("/Evacuation/ugacsur/{item}",'App\Http\Controllers\Agency\UgacsurController@update')->name('ugacsur.update');
    Route::delete("/Evacuation/ugacsur/{item}",'App\Http\Controllers\Agency\UgacsurController@archive')->name('ugacsur.archive');
    Route::get("/Evacuation/ugacsur/archive",'App\Http\Controllers\Agency\UgacsurController@archiveview')->name('ugacsur.archive');
    Route::post("/Evacuation/ugacsur/restore/{item}",'App\Http\Controllers\Agency\UgacsurController@restore')->name('ugacsur.restore');
    Route::delete("/Evacuation/ugacsur/forceDelete/{item}",'App\Http\Controllers\Agency\UgacsurController@forceDelete')->name('ugacsur.forceDelete');
    Route::get('systemadmin/hotline', function () {
        return view('ears_systemadmin.hotline');
    });
    Route::get('evacuation/report', [PDFController::class, 'preview'])->name('agency.report');
    Route::get('evacuation/report/pdf', [PDFController::class, 'createPDF']);

    Route::post('main/changepass', [App\Http\Controllers\changepassController::class, 'updatePassword'])->name('update-password');
    Route::get('evacuation/profile', 'App\Http\Controllers\UserController@profile')->name('profile');
    Route::post('evacuation/profile', 'App\Http\Controllers\ProfileController@profileUpdate')->name('profileupdate');

});
Route::middleware(['auth', 'user-role:superadmin'])->group(function () {

Route::get("systemadmin/systemadmin",'App\Http\Controllers\ears_admin\SystemadminAccountsController@index')->name('systemadmin.index');
Route::get("systemadmin/systemadmin/create",'App\Http\Controllers\ears_admin\SystemadminAccountsController@create')->name('systemadmin.create');
Route::post("systemadmin/systemadmin",'App\Http\Controllers\ears_admin\SystemadminAccountsController@store')->name('systemadmin.store');
Route::get("systemadmin/systemadmin/{item}/edit",'App\Http\Controllers\ears_admin\SystemadminAccountsController@edit')->name('systemadmin.edit');
Route::patch("systemadmin/systemadmin/{item}",'App\Http\Controllers\ears_admin\SystemadminAccountsController@update')->name('systemadmin.update');
Route::delete("systemadmin/systemadmin/{item}",'App\Http\Controllers\ears_admin\SystemadminAccountsController@archive')->name('systemadmin.archive');
Route::get("systemadmin/systemadmin/archive",'App\Http\Controllers\ears_admin\SystemadminAccountsController@archiveview')->name('systemadmin.archive');
Route::post("systemadmin/systemadmin/restore/{item}",'App\Http\Controllers\ears_admin\SystemadminAccountsController@restore')->name('systemadmin.restore');
Route::delete("systemadmin/systemadmin/forceDelete/{item}",'App\Http\Controllers\ears_admin\SystemadminAccountsController@forceDelete')->name('systemadmin.forceDelete');

Route::get("systemadmin/agencyadmin",'App\Http\Controllers\ears_admin\AgencyadminAccountsController@index')->name('systemadmin.index');
Route::get("systemadmin/agencyadmin/create",'App\Http\Controllers\ears_admin\AgencyadminAccountsController@create')->name('systemadmin.create');
Route::post("systemadmin/agencyadmin",'App\Http\Controllers\ears_admin\AgencyadminAccountsController@store')->name('systemadmin.store');
Route::get("systemadmin/agencyadmin/{item}/edit",'App\Http\Controllers\ears_admin\AgencyadminAccountsController@edit')->name('systemadmin.edit');
Route::patch("systemadmin/agencyadmin/{item}",'App\Http\Controllers\ears_admin\AgencyadminAccountsController@update')->name('systemadmin.update');
Route::delete("systemadmin/agencyadmin/{item}",'App\Http\Controllers\ears_admin\AgencyadminAccountsController@archive')->name('systemadmin.archive');
Route::get("systemadmin/agencyadmin/archive",'App\Http\Controllers\ears_admin\AgencyadminAccountsController@archiveview')->name('systemadmin.archive');
Route::post("systemadmin/agencyadmin/restore/{item}",'App\Http\Controllers\ears_admin\AgencyadminAccountsController@restore')->name('systemadmin.restore');
Route::delete("systemadmin/agencyadmin/forceDelete/{item}",'App\Http\Controllers\ears_admin\AgencyadminAccountsController@forceDelete')->name('systemadmin.forceDelete');
 

Route::get("systemadmin/hotline",'App\Http\Controllers\ears_admin\HotlineController@index')->name('systemadmin.index');
Route::get("systemadmin/hotline/create",'App\Http\Controllers\ears_admin\HotlineController@create')->name('systemadmin.create');
Route::post("systemadmin/hotline",'App\Http\Controllers\ears_admin\HotlineController@store')->name('systemadmin.store');
Route::get("systemadmin/hotline/{item}/edit",'App\Http\Controllers\ears_admin\HotlineController@edit')->name('systemadmin.edit');
Route::patch("systemadmin/hotline/{item}",'App\Http\Controllers\ears_admin\HotlineController@update')->name('systemadmin.update');
Route::delete("systemadmin/hotline/{item}",'App\Http\Controllers\ears_admin\HotlineController@archive')->name('systemadmin.archive');
Route::get("systemadmin/hotline/archive",'App\Http\Controllers\ears_admin\HotlineController@archiveview')->name('systemadmin.archive');
Route::post("systemadmin/hotline/restore/{item}",'App\Http\Controllers\ears_admin\HotlineController@restore')->name('systemadmin.restore');
Route::delete("systemadmin/hotline/forceDelete/{item}",'App\Http\Controllers\ears_admin\HotlineController@forceDelete')->name('systemadmin.forceDelete');

Route::get("systemadmin/news",'App\Http\Controllers\ears_admin\NewsController@index')->name('systemadmin.index');
Route::get("systemadmin/news/{item}/edit",'App\Http\Controllers\ears_admin\NewsController@edit')->name('systemadmin.edit');
Route::patch("systemadmin/news/{item}",'App\Http\Controllers\ears_admin\NewsController@update')->name('systemadmin.update');

Route::get("systemadmin/waterlevel",'App\Http\Controllers\ears_admin\WaterlevelController@index')->name('systemadmin.index');
Route::get("systemadmin/waterlevel/{item}/edit",'App\Http\Controllers\ears_admin\WaterlevelController@edit')->name('systemadmin.edit');
Route::patch("systemadmin/waterlevel/{item}",'App\Http\Controllers\ears_admin\WaterlevelController@update')->name('systemadmin.update');

});