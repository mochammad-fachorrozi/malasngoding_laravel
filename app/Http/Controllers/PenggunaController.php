<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();

        // dd($pengguna);

        return view('pengguna.index', ['pengguna' => $pengguna]);
    }
}
