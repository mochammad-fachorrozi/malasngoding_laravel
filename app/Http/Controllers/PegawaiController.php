<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use PDF;

class PegawaiController extends Controller
{
    public function index()
    {
        // mengambil data semua pegawai
        $pegawai = Pegawai::all();

        // mengambil data pertama, terakir latest()
        // $pegawai = Pegawai::first();

        // mengambil berdasarkan id
        // $pegawai = Pegawai::find(5);

        // mengambil data berdasarkan nama
        // $pegawai = Pegawai::where('nama', '=', 'Estiono Nashiruddin')->get();

        // mengambil data pegawai yang di namanya ada huruf a 
        // $pegawai = Pegawai::where('nama', 'like', '%sidiq%')->get();

        // $pegawai = Pegawai::paginate(5);
        // dd($pegawai);

        // kirim data ke view ke pegawai
        return view('pegawai.index', [
            'pegawai' => $pegawai
        ]);
    }

    public function tambah()
    {
        return view('pegawai.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);

        return view('/pegawai/edit', ['pegawai' => $pegawai]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect('/pegawai');
    }

    public function hapus($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai');
        // atau return redirect()->back();
    }

    public function cetak_pdf()
    {
        $pegawai = Pegawai::all();

        $pdf = PDF::loadview('pegawai_pdf', compact('pegawai'));
        return $pdf->download('laporan-pegawai-pdf');
    }
}
