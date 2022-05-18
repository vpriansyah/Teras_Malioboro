<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublikController;
use App\Http\Controllers\StatistikPublikController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Mail;

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
Route::get('auth/login', [LoginController::class, 'index']);
Route::post('auth/login', [LoginController::class, 'authenticate']);
Route::get('auth/register', [RegisterController::class, 'index']);
Route::post('auth/register', [RegisterController::class, 'post']);

//Pedagang
Route::get('/pedagang', function () {
    return view('/pedagang/dashboard');
})->name('pedagang');

Route::get('pedagang/daftar', function () {
    return view('/pedagang/daftar');
});

Route::get('pedagang/saran', function () {
    return view('/pedagang/saran');
});

Route::get('pedagang/tindaklanjut', function () {
    return view('/pedagang/tindaklanjut');
});

Route::get('pedagang/profil', 'App\Http\Controllers\ProfilController@index');
// Route::get('pedagang/profil', function () {
//     return view('/pedagang/profil', [
//         "nama" => "Christya Ayu Dewi",
//         "sebagai" => "Pedagang",
//         "status" => "Aktif",

//     ]);
// });

Route::get('pedagang/statistik', function () {
    return view('/pedagang/statistik');
});

Route::get('pedagang/agenda', function () {
    return view('/pedagang/agenda');
});

Route::get('pedagang/informasi', 'App\Http\Controllers\InfoPedagangController@index');
Route::get('/search', 'App\Http\Controllers\InfoPedagangController@search');
//Route::get('pedagang/informasi', function () {
//    return view('/pedagang/informasi');
//});

//Publik
Route::get('/', [PublikController::class, 'index']);
Route::get('/publik', [PublikController::class, 'index']);

Route::get('/publik/selfassessment', function () {
    return view('/publik/selfassessment');
});

//Route::get('/publik/galeri', function () {
//    return view('/publik/galeri');
//});

Route::get('/publik/galeri', 'App\Http\Controllers\GaleriController@index');
Route::get('/publik/galeri/{id}', 'App\Http\Controllers\GaleriController@group');
Route::get('/publik/cari', 'App\Http\Controllers\GaleriController@cari');

Route::get('/publik/galeri-data/{id}', 'App\Http\Controllers\GaleriController@data');
Route::get('/publik/cctv', 'App\Http\Controllers\CctvController@index');
Route::get('/publik/aduansaran', 'App\Http\Controllers\AduanController@index');
Route::post('/publik/tambah', 'App\Http\Controllers\AduanController@tambah');

//...

Route::get('send-mail', function () {

    // file from /public/data folder.
    $file = public_path('publik/aduansaran.pdf');
<<<<<<< Updated upstream

=======
  
>>>>>>> Stashed changes
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

//Route::get('/publik/cctv', function () {
//  return view('/publik/cctv');
//});

Route::get('/publik/statistik', [StatistikPublikController::class, 'index']);
// Route::get('/publik/statistik', function () {
//     return view('/publik/statistik');
// });
