<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AnggotaHadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota_hadiahs')->insert([
            'anggota_id' => 1,
            'hadiah_id' => 1
        ]);
        DB::table('anggota_hadiahs')->insert([
            'anggota_id' => 2,
            'hadiah_id' => 2
        ]);
        DB::table('anggota_hadiahs')->insert([
            'anggota_id' => 3,
            'hadiah_id' => 3
        ]);
        DB::table('anggota_hadiahs')->insert([
            'anggota_id' => 1,
            'hadiah_id' => 4
        ]);
        DB::table('anggota_hadiahs')->insert([
            'anggota_id' => 2,
            'hadiah_id' => 2
        ]);
        DB::table('anggota_hadiahs')->insert([
            'anggota_id' => 3,
            'hadiah_id' => 5
        ]);
    }
}
