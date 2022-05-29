<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MalasngodingController;
use App\Http\Controllers\PegawaiController;
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


// route blog, tempalting blade
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/dosen', [DosenController::class, 'index']);

// request data pake url dan form input, full crud query builder
// Route::get('/mahasiswa/{nama}', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
Route::post('/mahasiswa/tambah/proses', [MahasiswaController::class, 'proses']);
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'hapus']);
Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cari']);

// validasi + bootstrap
Route::get('/input', [MalasngodingController::class, 'input']);
Route::post('/proses', [MalasngodingController::class, 'proses']);

// eloquent . crud
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

// soft delete, mirip recycle bin
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
Route::get('/guru/trash', [GuruController::class, 'trash']);
Route::get('/guru/kembalikan/{id}', [GuruController::class, 'kembalikan']);
Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikan_semua']);
Route::get('/guru/hapus_permanen/{id}', [GuruController::class, 'hapus_permanen']);
Route::get('/guru/hapus_permanen_semua', [GuruController::class, 'hapus_permanen_semua']);
