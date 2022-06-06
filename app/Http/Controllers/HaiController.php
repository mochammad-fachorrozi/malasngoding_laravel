<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HaiController extends Controller
{
    public function index($nama)
    {
        return "Hai " . $nama;
    }

    public function panggil()
    {
        // return action(HaiController::class, 'index', ['nama' => 'rozi']);
        echo URL::full();
    }
}
