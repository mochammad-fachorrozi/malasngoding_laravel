<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class RoziController extends Controller
{
    public function index()
    {
        $anggota = Anggota::get();
        return view('rozi.index', ['anggota' => $anggota]);
    }

    public function enkripsi()
    {
        $encrypted = Crypt::encryptString('Belajar Laravel uey');
        $decrypted = Crypt::decryptString($encrypted);

        echo "Hasil Enkripsi : " . $encrypted;
        echo "<br><br>";
        echo "Hasil Deskripsi " . $decrypted;
    }

    public function data()
    {
        $parameter = [
            'nama' => 'Mochammad Fachorrozi',
            'pekerjaan' => 'Programmer'
        ];
        $enkripsi = Crypt::encrypt($parameter);
        echo "<a href='/data/" . $enkripsi . "'>Klik</a>";
    }

    public function data_rahasia($data)
    {
        $data = Crypt::decrypt($data);

        echo "Nama : " . $data['nama'];
        echo "<br>";
        echo "Pekerjaan" . $data['pekerjaan'] . '<br>';

        // hash
        $password = Hash::make('halo123');
        echo "hash password halo123 = " . $password;
    }
}
