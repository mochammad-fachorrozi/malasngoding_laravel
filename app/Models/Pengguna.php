<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = "pengguna";
    protected $guarded = ["id"];

    public function telepon()
    {
        return $this->hasOne(Telepon::class, 'id');
    }
}