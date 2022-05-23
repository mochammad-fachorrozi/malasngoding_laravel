<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
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
    return view('welcome');
});

Route::get('/halo', function () {
    return "Halo saya rozi saya sekarang belajar laravel di malasngoding.com";
});

// Route::get('/blog', function () {
//     return view('blog');
// });


// route blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/dosen', [DosenController::class, 'index']);

// request data pake url dan form input
// Route::get('/mahasiswa/{nama}', [MahasiswaController::class, 'index']);
Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/pendaftaran', [MahasiswaController::class, 'pendaftaran']);
Route::post('/mahasiswa/pendaftaran/proses', [MahasiswaController::class, 'proses']);