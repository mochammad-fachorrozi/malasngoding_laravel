<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hadiahs')->insert([
            'nama_hadiah' => 'tv'
        ]);
        DB::table('hadiahs')->insert([
            'nama_hadiah' => 'ac'
        ]);
        DB::table('hadiahs')->insert([
            'nama_hadiah' => 'sepeda'
        ]);
        DB::table('hadiahs')->insert([
            'nama_hadiah' => 'motor'
        ]);
        DB::table('hadiahs')->insert([
            'nama_hadiah' => 'mobil'
        ]);
        DB::table('hadiahs')->insert([
            'nama_hadiah' => 'pc'
        ]);
        DB::table('hadiahs')->insert([
            'nama_hadiah' => 'hp'
        ]);
        DB::table('hadiahs')->insert([
            'nama_hadiah' => 'sandal'
        ]);
    }
}
