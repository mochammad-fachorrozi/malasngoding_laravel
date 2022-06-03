<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    protected $table = "bidang";


    public function karyawan()
    {
        return $this->hasMany(Karyawan::class, 'bidang_id');
    }
}
