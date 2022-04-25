<?php

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

//Auth
Route::get('auth/login', function () {
    return view('/auth/login');
});

//Pedagang
Route::get('/pedagang', function () {
    return view('/pedagang/dashboard');
});

Route::get('pedagang/daftar', function () {
    return view('/pedagang/daftar');
});

Route::get('pedagang/saran', function () {
    return view('/pedagang/saran');
});

Route::get('pedagang/profil', function () {
    return view('/pedagang/profil', [
        "nama" => "Christya Ayu Dewi",
        "sebagai" => "Pedagang",
        "status" => "Aktif",

    ]);
});

Route::get('pedagang/statistik', function () {
    return view('/pedagang/statistik');
});

Route::get('pedagang/agenda', function () {
    return view('/pedagang/agenda');
});

Route::get('pedagang/informasi', function () {
    return view('/pedagang/informasi');
});

//Publik
Route::get('/', 'App\Http\Controllers\PublikController@index');

Route::get('/publik', 'App\Http\Controllers\PublikController@index');

// Route::get('/', function () {
//     return view('publik/index');
// });

// Route::get('/publik/', function () {
//     return view('publik/index');
// });


//Route::get('/publik/agenda', 'App\Http\Controllers\AgendaController@index');
Route::get('/publik/selfassessment', function () {
    return view('/publik/selfassessment');
});

Route::get('/publik/galeri', function () {
    return view('/publik/galeri');
});

Route::get('/publik/aduansaran', function () {
    return view('/publik/aduansaran');
});

Route::get('/publik/agenda', 'App\Http\Controllers\AgendaController@index') ;
//{
    //return view('/publik/agenda');
//};

Route::get('/publik/cctv', function () {
    return view('/publik/cctv');
});

Route::get('/publik/statistik', function () {
    return view('/publik/statistik');
});

Route::get('/publik/galeri/data', function(){
    return view('/publik/galeri-data');
});
