<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        // return "Halo ini adalah method index di dalam controller DosenController";

        // passing data
        $nama = "Diki Alfarabi Hadi";
        $matkul = ["Algoritma & Pemrograman Web", "Kalkulus", "Basis Data"];
        return view('biodata', [
            'nama' => $nama,
            'matkul' => $matkul,
        ]);
    }
}
