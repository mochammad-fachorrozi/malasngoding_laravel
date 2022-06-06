<?php

use App\Http\Controllers\BidangController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HaiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MalasngodingController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RoziController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// dompdf
Route::get('/pegawai/cetak_pdf', [PegawaiController::class, 'cetak_pdf']);

// soft delete, mirip recycle bin
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
Route::get('/guru/trash', [GuruController::class, 'trash']);
Route::get('/guru/kembalikan/{id}', [GuruController::class, 'kembalikan']);
Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikan_semua']);
Route::get('/guru/hapus_permanen/{id}', [GuruController::class, 'hapus_permanen']);
Route::get('/guru/hapus_permanen_semua', [GuruController::class, 'hapus_permanen_semua']);


// relationship one to one
Route::get('/pengguna', [PenggunaController::class, 'index']);

// relationship one to many
Route::get('/bidang', [BidangController::class, 'index']);

// relationship many to many
Route::get('/rozi', [RoziController::class, 'index']);

// enkripsi dan deskripsi, hash
Route::get('/enkripsi', [RoziController::class, 'enkripsi']);
Route::get('/data', [RoziController::class, 'data']);
Route::get('/data/{data_rahasia}', [RoziController::class, 'data_rahasia']);


// upload file, hapus file
Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload/proses', [UploadController::class, 'proses_upload']);
Route::get('/upload/hapus/{id}', [UploadController::class, 'hapus']);


// session laravel
Route::get('/session/tampil', [TesController::class, 'tampilkanSession']);
Route::get('/session/buat', [TesController::class, 'buatSession']);
Route::get('/session/hapus', [TesController::class, 'hapusSession']);

// notifikasi dengan session, menggunakan flash message
Route::get('/pesan', [NotifController::class, 'index']);
Route::get('/pesan/sukses', [NotifController::class, 'sukses']);
Route::get('/pesan/peringatan', [NotifController::class, 'peringatan']);
Route::get('/pesan/gagal', [NotifController::class, 'gagal']);


// error handling
Route::get('/malasngoding', [MalasngodingController::class, 'index']);

// action url 
Route::get('/hai/{nama}', [HaiController::class, 'index']);
Route::get('/hai', [HaiController::class, 'panggil']);

// auth : otomatis membuat login,dashboard,register, dan logout
// https://www.cafeteria.id/2022/02cara-integrasi-laravel-9-dengan-laravel.html
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ganti password
Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');


// yang belum pdf,excel, email, many to many
