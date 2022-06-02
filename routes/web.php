<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketingController;
use App\Http\Controllers\Galeri2Controller;
use App\Http\Controllers\PublikController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\StatistikPublikController;

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
Route::get('auth/login', [LoginController::class, 'index'])->name('login');
Route::post('auth/login', [LoginController::class, 'authenticate']);
Route::post('auth/logout', [LoginController::class, 'logout']);
Route::get('auth/register', [RegisterController::class, 'index']);
Route::post('auth/register', [RegisterController::class, 'post']);

//Pedagang
Route::get('/pedagang', function () {
    return view('/pedagang/dashboard');
})->name('pedagang')->middleware('auth');

Route::get('pedagang/daftar', function () {
    return view('/pedagang/daftar');
})->middleware('auth');

Route::get('pedagang/saran', [TicketingController::class, 'index'])->middleware('auth');

Route::get('pedagang/tindaklanjut', function () {
    return view('/pedagang/tindaklanjut');
})->middleware('auth');

Route::get('pedagang/full-calender', [FullCalenderController::class, 'index'])->middleware('auth');
Route::post('/pedagang/full-calender/action', [FullCalenderController::class, 'action']);

Route::get('pedagang/profil', 'App\Http\Controllers\ProfilController@index')->middleware('auth');

Route::get('pedagang/statistik', function () {
    return view('/pedagang/statistik');
})->middleware('auth');

Route::get('pedagang/agenda', function () {
    return view('/pedagang/agenda');
})->middleware('auth');

Route::get('pedagang/informasi', 'App\Http\Controllers\InfoPedagangController@index')->middleware('auth');
Route::get('/search', 'App\Http\Controllers\InfoPedagangController@search');
//Route::get('pedagang/informasi', function () {
//    return view('/pedagang/informasi');
//});

Route::get('/tindaklanjut/search', [TindakLanjutController::class, 'search']);

//Publik
Route::get('/', [PublikController::class, 'index']);
Route::get('/publik', [PublikController::class, 'index']);

Route::get('/publik/selfassessment', function () {
    return view('/publik/selfassessment');
});

Route::get('/publik/scanner', function () {
    return view('/publik/scanner');
});

//Route::get('/publik/galeri', function () {
//    return view('/publik/galeri');
//});

Route::get('/publik/galeri', 'App\Http\Controllers\GaleriController@index');
Route::get('/publik/galeri2', 'App\Http\Controllers\Galeri2Controller@index');
Route::post('/publik/getgedung', [Galeri2Controller::class, 'getgedung'])->name('getgedung');
Route::post('/publik/getlantai', [Galeri2Controller::class, 'getlantai'])->name('getlantai');
Route::get('/publik/galeri/{id}', 'App\Http\Controllers\GaleriController@group');
Route::get('/publik/galeri/{id}/{id2}', 'App\Http\Controllers\GaleriController@group2');
Route::get('/publik/cari', 'App\Http\Controllers\GaleriController@cari');
Route::get('/publik/cari2', 'App\Http\Controllers\Galeri2Controller@cari');

Route::get('/publik/galeri-data/{id}', 'App\Http\Controllers\GaleriController@data');
Route::get('/publik/cctv', 'App\Http\Controllers\CctvController@index');
Route::get('/publik/aduansaran', 'App\Http\Controllers\AduanController@index');
Route::post('/publik/tambah', 'App\Http\Controllers\AduanController@tambah');

//...

Route::get('send-mail', function () {

    // file from /public/data folder.
    $file = public_path('data/aduansaran.pdf');

    $details = [
        'title' => 'Teras Malioboro',
        'body' => 'Berikut rekapan aduan dan saran anda yang sudah berhasildiinput.',
        'file' => $file // file attached here
    ];

    Mail::to('sent_to_email@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent, please check your inbox.");
});

//...


Route::get('/publik/agenda', 'App\Http\Controllers\AgendaController@index');
Route::get('/publik/agenda2', 'App\Http\Controllers\Agenda2Controller@index');

//Route::get('/publik/cctv', function () {
//  return view('/publik/cctv');
//});

Route::get('/publik/statistik', [StatistikPublikController::class, 'index']);
// Route::get('/publik/statistik', function () {
//     return view('/publik/statistik');
// });
