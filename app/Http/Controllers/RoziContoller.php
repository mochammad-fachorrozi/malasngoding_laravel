<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class RoziContoller extends Controller
{
    public function index()
    {
        $anggota = Anggota::get();
        return view('rozi.index', ['anggota' => $anggota]);
    }
}
