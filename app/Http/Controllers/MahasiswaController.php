<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // public function index($nama)
    // {
    //     return $nama;
    // }


    public function index()
    {
        // mengambil data dari tabel mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();

        // mengirim data mahasiswa ke view index
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : " . $nama . ", Alamat : " . $alamat;
    }
}
