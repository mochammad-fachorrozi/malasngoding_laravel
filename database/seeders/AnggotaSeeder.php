<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->insert([
            'nama' => 'nabil'
        ]);
        DB::table('anggotas')->insert([
            'nama' => 'alwan'
        ]);
        DB::table('anggotas')->insert([
            'nama' => 'dang'
        ]);
    }
}
