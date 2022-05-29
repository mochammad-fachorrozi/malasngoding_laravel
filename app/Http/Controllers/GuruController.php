<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();

        return view('guru.index', ['guru' => $guru]);
    }

    // hapus sementara
    public function hapus($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return redirect('/guru');
    }

    public function trash()
    {
        // menampilkan data guru yg sudah dihapus
        $guru = Guru::onlyTrashed()->get();
        return view('guru.trash', ['guru' => $guru]);
    }

    public function kembalikan($id)
    {
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->restore();
        return redirect('/guru/trash');
    }

    public function kembalikan_semua()
    {
        $guru = Guru::onlyTrashed();
        $guru->restore();
        return redirect('/guru/trash');
    }

    public function hapus_permanen($id)
    {
        // hapus permanen
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->forceDelete();

        return redirect('/guru/trash');
    }

    public function hapus_permanen_semua()
    {
        // hapus permanen semua
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();

        return redirect('/guru/trash');
    }
}
