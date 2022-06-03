<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 1; $i <= 5; $i++) {

        //     DB::table('karyawan')->insert([
        //         'nama' => Str::random(20),
        //     ]);
        // }

        DB::table('karyawan')->insert([
            'nama' => 'aris',
            'bidang_id' => 1
        ]);
        DB::table('karyawan')->insert([
            'nama' => 'heri',
            'bidang_id' => 1
        ]);
        DB::table('karyawan')->insert([
            'nama' => 'pak gin',
            'bidang_id' => 1
        ]);

        DB::table('karyawan')->insert([
            'nama' => 'alwan',
            'bidang_id' => 2
        ]);
        DB::table('karyawan')->insert([
            'nama' => 'nabil',
            'bidang_id' => 2
        ]);
    }
}
