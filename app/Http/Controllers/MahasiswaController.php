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
        // mengambil data dari tabel mahasiswa, get= semua, paginate= data yg ditampil dibatasi
        // $mahasiswa = DB::table('mahasiswa')->get();
        $mahasiswa = DB::table('mahasiswa')->paginate(10);

        // mengirim data mahasiswa ke view index
        return view('/mahasiswa.index', compact('mahasiswa'));
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // ambil data pada tabel mahasiswa sesuai pencarian data
        $mahasiswa = DB::table('mahasiswa')->where('nama', 'like', "%" . $cari . "%")->paginate();

        // kirim data ke view
        return view('/mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        return view('/mahasiswa.tambah');
    }

    public function proses(Request $request)
    {
        // insert data ke tabel mahasiswa
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);

        // ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        // mengambil id
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();

        // passing data ke view
        return view('/mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);

        return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
        // menghapus data berdasarkan id
        DB::table('mahasiswa')->where('id', $id)->delete();

        return redirect('/mahasiswa');
    }
}
