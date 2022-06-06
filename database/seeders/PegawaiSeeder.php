<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');

        // membuat dummy data sebanyak 10
        for ($x = 1; $x <= 10; $x++) {
            // insert data dummy ke dg faker
            DB::table('pegawai')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address
            ]);
        }
    }
}
