<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawai";

    // guarded = tidak boleh diinput, fillable = boleh diinput
    // protected $guarded = ['id']; 
    protected $fillable = ['nama', 'alamat'];
}
