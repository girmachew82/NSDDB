<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\Menu\TopMenuController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/about/የጽ_ቤት_መልዕክት',function(){
    return view('about.የጽ_ቤት_መልዕክት');
});
Route::get('/history/የሃገረ_ስብከት_ታሪክ',function(){
    return view('history.የሃገረ_ስብከት_ታሪክ');
});
Route::get('/preaching/message',function(){
    return view('preaching.message');
});
Route::controller(NewsController::class)->group(function () {
    Route::get('/whatisnew/news', 'news');
});

// Route::get('whatisnew/news',function(){
//     return view('whatisnew.news');
// });
Route::get('/admin/login',function(){
    return view('admin/login');
});
Route::post('/admin/login',[LoginController::class,'login']);
Route::get('/admin/news',[AdminNewsController::class,'index']);
Route::get('/admin/addNews',[AdminNewsController::class,'create']);
Route::post('/admin/addNews',[AdminNewsController::class,'store']);
Route::get('/admin/newsShow/{id}',[AdminNewsController::class,'show']);
Route::get('/academics/iot',function(){
    return view('academics.iot.index');
});
Route::get('/academics/canr',function(){
    return view('academics.canr.index');
});
Route::get('/about/ራዕይ_እና_ተልዕኮ',function(){
    return view('about.ራዕይ_እና_ተልዕኮ');
});
Route::get('/about/ራዕይ_እና_ተልዕኮ',function(){
    return view('about.ራዕይ_እና_ተልዕኮ');
});
Route::get('/charity/ምግባረ_ሰናይ',function(){
    return view('charity.ምግባረ_ሰናይ');
});

Route::get('/service/ስብከተ_ወንጌል',function(){
    return view('service.ስብከተ_ወንጌል');
});


Route::get('/service/ሰበካ_ጉባኤ',function(){
    return view('service.ሰበካ_ጉባኤ');
});

//localization route
Route::get("locale/{lange}",[LocalizationController::class,'setLang']);


Route::get('admin/menu/topMenu',[TopMenuController::class,'topMenu'])->name('admin.menu.topMenu');
Route::get('admin/menu/addTopMenu',[TopMenuController::class,'addTopMenu'])->name('admin.menu.addTopMenu');
Route::post('admin/menu/addTopMenu',[TopMenuController::class,'store'])->name('admin.menu.store');
Route::get('/am',function(){
    return view('am.index');
});
Route::get('/en',function(){
    return view('en.index');
});
