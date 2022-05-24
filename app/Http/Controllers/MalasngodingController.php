<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalasngodingController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi!',
            'min' => ':attribute minimal :min karakter!',
            'max' => ':attribute maximal :max karakter!',
            'numeric' => ':attribute harus berupa angka'
        ];

        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ], $messages);



        return view('proses', ['data' => $request]);
    }
}
